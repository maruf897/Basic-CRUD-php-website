<?php 
session_start();
$loggedin = false;
if(isset($_SESSION['username'])){
    $loggedin = true;
}
else{
  header("location:main_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Charity</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <link href="css/main.css" rel="stylesheet" media="screen">
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

      <form class=" w-75 m-auto addcharityform" name="form1" id="" >
        <h2 class="form-signin-heading">Create Charity</h2>
        <label>Charity Title:</label>
        <input name="charityname" id="charityname" type="name" class="form-control" placeholder="Chairty Title" autofocus>
        <label>Charity Type:</label>
        <input name="charitytype" id="charitytype" type="text" class="form-control" placeholder="Charity Type" autofocus>
        <label>Charity Description:</label>
        <textarea rows="5" name="charitydescription" id="charitydescription" class="form-control"  placeholder="Description" autofocus ></textarea>
        
        <label>Date of Formation:</label>
        <input name="charitydate" id="charitydate" type="text" class="form-control" placeholder="DD/MM/YYYY" autofocus>
        <label>Goals:</label>
        <textarea rows="5" name="charitygoals" id="charitygoals" class="form-control" placeholder="charity goals" autofocus ></textarea>
        
        <label>Fund:</label>
        <input name="charityfund" id="charityfund" type="text" class="form-control" placeholder="EX. $40.00 ">
        <label>Country:</label>
         <input name="charityaddress" id="charityaddress" type="text" class="form-control" placeholder="only country name">
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block m-3" type="submit">Register</button>
        

        <div id="message"></div>
      </form>
      <a href="adminpanel.php" class="btn btn-danger btn-block w-25 m-auto ">Back</a>
  </div> 
  <?php
  include 'footer.php';
  ?>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
   
    <script src="js/createcharity.js"></script>
    
    
  </body>
</html>
