<?php
	
	
	session_start();
	include 'config.php';
$conn=mysqli_connect($host,$username,$password,$db_name);
	if(!$conn){
	 die('Could not Connect My Sql:' .mysql_error());
    }

	
	$myusername = $_POST['myusername']; 
	$mypassword = $_POST['mypassword']; 
	$myphone = $_POST['myphone']; 
	$myaddress = $_POST['myaddress']; 
	$myemail = $_POST['myemail']; 
	

	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myemail = stripslashes($myemail);	
	$myusername = mysql_real_escape_string($myusername);	
	$mypassword = mysql_real_escape_string($mypassword);
	$myemail = mysql_real_escape_string($myemail);

	$mypassword = sha1($mypassword.$salt);
	$sql="SELECT * FROM $tbl_name WHERE email='$myemail'";		
	$result=mysqli_query($conn,$sql);

	$count=mysqli_num_rows($result);
	if($count != 0){
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Email ID already exists</div>";
	}
	else {
	
		
		$sql = "INSERT INTO $tbl_name (`id`, `fullname`, `password`,`email`,`phone`,`address`) VALUES (NULL,'$myusername', '$mypassword', '$myemail','$myphone','$myaddress')";
		mysqli_query($conn,$sql);
		
		$sql="SELECT * FROM $tbl_name WHERE email='$myemail' and password='$mypassword'";
	$result=mysqli_query($conn,$sql);

	
	$count=mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
	
	if($count == 1){

		$_SESSION['username'] = $row['fullname'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['userid'] = $row['id'];
		echo "true";
		
	}
   
}

?>
