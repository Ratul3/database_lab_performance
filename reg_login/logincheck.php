<?php
	
	session_start();

include("connection.php");
	//include_once('db.php');
	//require('db.php');
	//require_once('db.php');

	if( isset($_REQUEST['submit'])){
	
		$username = $_REQUEST['username'];
		$password =  $_REQUEST['password'];
		
		$con = mysqli_connect($GLOBALS['host'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['database']);
		
	$sql = "select * from users where username='$username' and password='$password'";
$result = mysqli_query($con,$sql);
$count = mysqli_num_rows($result);
		if($count ==1){
			$_SESSION['username'] = $username;
		
			//echo "test";
					header("location: home.php");
		}else{
			echo "invalid username/password";
		}				
	}	
?>