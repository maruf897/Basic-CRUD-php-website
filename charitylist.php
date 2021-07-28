<?php 
session_start();
$loggedin = false;
if(isset($_SESSION['username'])){
    $loggedin = true;
}
include 'config.php';
$conn=mysqli_connect($host,$username,$password,$db_name);
	if(!$conn){
	 die('Could not Connect My Sql:' .mysql_error());
    }
    $tbl_name='charities';
    $sql="SELECT * FROM $tbl_name ;";
    $result=mysqli_query($conn,$sql);
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    
    <title>Charity List</title>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Charity Share</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="charitylist.php">Charity List</a>
      <a class="nav-link" href="contact.php">Contact</a>
      <?php if($loggedin){
          echo '<a class="nav-link" href="adminpanel.php">Admin Panel</a>';
          echo '<a class="nav-link disabled">Signed in as: '.$_SESSION['username'].' </a>';
          echo '<a class="nav-link" href="logout.php">Sign out</a>';
      }else{
        echo '<a class="nav-link" href="signup.php">Sign In</a>';
      }?>
      
    </div>
  </div>
  </nav>
  <div class="container">
 
  <h2 class="m-2">Charity List</h2>
  <?php while($row = mysqli_fetch_assoc($result)) {
     
      ?>
 
  <div class="card text-center m-2 " >
  <div class="card-body">
  <a href="showcharity.php?id=<?php echo $row['charity_id']; ?>">
    <h5 class="card-title">Title: <?php echo $row['charity_name']; ?></h5>
    </a>
    <h6 class="card-subtitle mb-2 text-muted">Type: <?php echo $row['charity_type']; ?></h6>
    <h6 class="card-subtitle mb-2 text-muted m-1">Country: <?php echo $row['charity_address']; ?></h6>
    <p class="card-text"><?php echo $row['charity_description']; ?></p>
    
  </div>
</div>

  <?php } ?>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>