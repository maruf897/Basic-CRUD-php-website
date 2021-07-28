<?php
	session_start();
	include_once 'config.php';

	mysql_connect("$host", "$username", "$password")or die("cannot connect");
	mysql_select_db("$db_name")or die("cannot select DB");

	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$phone = $_POST['phone']; 
	$message = $_POST['message']; 
	
	$name = stripslashes($name);
	$email = stripslashes($email);
	$phone = stripslashes($phone);
	$message = stripslashes($message);
	$name = mysql_real_escape_string($name);
	$email = mysql_real_escape_string($email);
	$phone = mysql_real_escape_string($phone);
    $message = mysql_real_escape_string($message);
    $tbl_name= "contact_form";

	$sql= "INSERT INTO $tbl_name (`form_id`, `name`, `email`,`phone`,`message`) VALUES (NULL,'$name', '$email', '$phone','$message')";
    mysql_query($sql) or die(mysql_error());
    
    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Message Sent Successfully!! </div>';

	
?>
