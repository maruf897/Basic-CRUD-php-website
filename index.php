<?php 
session_start();
$loggedin = false;
if(isset($_SESSION['username'])){
    $loggedin = true;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    
    <title>Home</title>
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

  <header  class="w-100">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h1 class="text-white font-weight-bold m-2 p-2">Charity Share</h1>
        <span class=" h5 subheading text-grey">Share your charity and let the world know</span>
        <div class="header-links pt-5 mt-5">
        <?php if($loggedin){
          echo '<a class="btn btn-primary m-2" href="adminpanel.php">Admin Panel</a>';
          
      }else{
        echo '<a class="btn btn-primary m-2" href="signup.php">SIGN IN</a>';
      }?>
            <a class="btn btn-primary m-2" href="charitylist.php">Charity List</a>
        </div>
    </div>
  </header>
  <content>
  <div class="container d-flex flex-column justify-content-center align-items-center">
      <h2 class="pt-4 text-center">Who Are We?</h2>
      <p class=" h4 text-center  p-4 m-2">We are designed to let anyone share and maintain their Charity event easily 
       so that others can find charities and contact the organizer. </p>
       <div class="row w-100">
         <div class="col-md-4">
           <img src="images/home1.jpg" alt="" class="img-fluid">
         </div>
         <div class="col-md-4 ">
           <img src="images/home2.jpg" alt="" class="img-fluid">
         </div>
         <div class="col-md-4">
           <img src="images/home3.jpg" alt="" class="img-fluid">
         </div>
       </div>
       <h2 class="pt-4 text-center">How To Use Charity Share?</h2>
       <p class=" h4 text-center p-4 m-2">Any one can view the listed charities and their details, but to upload or edit uploaded charity you have to Signup.</p>
    </div>
  </content>
  <?php
  include 'footer.php';
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>