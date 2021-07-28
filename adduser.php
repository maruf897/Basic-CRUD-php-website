<?php
  session_start();
if(isset($_SESSION['username'])){
    header("location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
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
    </div>
  </div>
  </nav>
    <div class="container">

      <form class="form-signin" name="form1" method="post" action="createuser.php">
        <h2 class="form-signin-heading">Create Account</h2>
        <label>Full Name:</label>
        <input name="myusername" id="myusername" type="name" class="form-control" placeholder="Name" autofocus>
        <label>Phone Number:</label>
        <input name="myphone" id="myphone" type="phone" class="form-control" placeholder="Phone" autofocus>
        <label>Address:</label>
        <input name="myaddress" id="myaddress" type="text" class="form-control" placeholder="Address" autofocus>
        <label>Email Address:</label>
        <input name="myemail" id="myemail" type="email" class="form-control" placeholder="Email ID" autofocus>
        <label>Password:</label>
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Confirm Password">
        <label>Re-type Password:</label>
         <input name="retypepwd" id="retypepwd" type="password" class="form-control" placeholder="Re-Type Password">
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        

        <div id="message"></div>
      </form>
      <a href="main_login.php" class="btn btn-danger btn-block w-25 m-auto ">Back</a>
  </div> 
  <?php
  include 'footer.php';
  ?>
  

    <script src="//code.jquery.com/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="js/create.js"></script>
    <script>document.getElementById("submit").disabled = true;</script>
    
  </body>
</html>
