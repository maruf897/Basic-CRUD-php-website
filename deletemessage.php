<?php 
session_start();
if(!isset($_SESSION['userid']) ){
  
    header("location:index.php");
}
else if(isset($_SESSION['userid']) && $_SESSION['userid']!=1){
    header("location:index.php");
}
else{
    $id=$_GET['id'];
    include 'config.php';
    $conn=mysqli_connect($host,$username,$password,$db_name);
	if(!$conn){
	 die('Could not Connect My Sql:' .mysql_error());
    }
    $tbl_name='contact_form';
    
    $sql="DELETE FROM $tbl_name WHERE form_id='$id';";
    $result=mysqli_query($conn,$sql);
    header('location:messages.php');
}

?>