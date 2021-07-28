<?php 
session_start();
if(!isset($_SESSION['username'])){
    header('location:main_login.php');
}
else{
    $id=$_GET['id'];
    include 'config.php';
    $conn=mysqli_connect($host,$username,$password,$db_name);
	if(!$conn){
	 die('Could not Connect My Sql:' .mysql_error());
    }
    $tbl_name='charities';
    
    $sql="DELETE FROM $tbl_name WHERE charity_id='$id';";
    $result=mysqli_query($conn,$sql);
    header('location:adminpanel.php');
}

?>