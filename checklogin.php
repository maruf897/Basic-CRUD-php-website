<?php
	
	
	session_start();
	include_once 'config.php';


	$conn=mysqli_connect($host,$username,$password,$db_name);
	if(!$conn){
	 die('Could not Connect My Sql:' .mysql_error());
	}
	

	
	
	$myemail = $_POST['myemail']; 
	$mypassword = $_POST['mypassword']; 

	$myusername = stripslashes($myemail);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);
	$mypassword = sha1($mypassword.$salt);

	$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
	$result=mysqli_query($conn,$sql);

	
	$count=mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
	
	if($count == 1){

		echo "true";
		$_SESSION['username'] = $row['fullname'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['userid'] = $row['id'];
		
	}
	else {
		
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Wrong Username or Password</div>";
	}

	
?>
