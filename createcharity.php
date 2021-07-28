<?php
	session_start();
	include_once 'config.php';

	$conn=mysqli_connect($host,$username,$password,$db_name);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}

	
	$charityname = $_POST['charityname']; 
	$charitytype = $_POST['charitytype']; 
	$charitydescription = $_POST['charitydescription']; 
	$charitydate = $_POST['charitydate']; 
    $charitygoals = $_POST['charitygoals']; 
    $charityfund = $_POST['charityfund']; 
    $charityaddress = $_POST['charityaddress']; 

	$charityname = stripslashes($charityname);
	$charitytype = stripslashes($charitytype);
	$charitydescription = stripslashes($charitydescription);	
	$charitydate = stripslashes($charitydate);
	$charitygoals = stripslashes($charitygoals);
	$charityfund = stripslashes($charityfund);	
	$charityaddress = stripslashes($charityaddress);	
	$charityname = mysql_real_escape_string($charityname);
	$charitytype = mysql_real_escape_string($charitytype);
	$charitydescription = mysql_real_escape_string($charitydescription);	
	$charitydate = mysql_real_escape_string($charitydate);
	$charitygoals = mysql_real_escape_string($charitygoals);
	$charityfund = mysql_real_escape_string($charityfund);	
	$charityaddress = mysql_real_escape_string($charityaddress);	
	
	$tbl_name = 'charities';
		$userid = $_SESSION['userid'];
	$sql = "INSERT INTO $tbl_name (`charity_id`, `user_id`, `charity_name`,`charity_type`,`charity_description`,`date`,`charity_goal`,`charity_fund`,`charity_address`,`date_created`) VALUES (NULL,'$userid', '$charityname','$charitytype','$charitydescription','$charitydate','$charitygoals','$charityfund','$charityaddress',NULL)";
	mysqli_query($conn,$sql) or die(mysql_error());
	echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Charity Created Successfully!! </div>';
   


?>
