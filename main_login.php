<?php
  session_start();
  if(isset($_SESSION['username'])){
    header("location:index.php");
  }
?><!DOCTYPE html>
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

      <form class="form-signin" name="form1"  >
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="myemail" id="e" type="email" class="form-control e" placeholder="Email ID" autofocus>
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <div id="message"></div>
        <a href="adduser.php" id="create" class="btn btn-lg btn-primary mt-3 w-100">Create Account</a>
        <a href="index.php" id="create" class="btn btn-lg btn-danger mt-3 w-100">Back</a>
      </form>
		        

    </div> 
    
   
   
    <script src="//code.jquery.com/jquery.js"></script>

    <script src="js/login.js"></script>
    
    
  </body>
</html>
