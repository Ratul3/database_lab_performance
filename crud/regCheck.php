<?php
session_start();
include("connection.php");
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$type = $_POST['type'];

	
/*
		$sql2 = "select username from users where username='{$username}'";
		$result = mysqli_query($con, $sql2);
		$row = mysqli_fetch_assoc($result);
		if($row[]){
		}*/

		$sql = "insert into users (id,username,password,email,type) values ('','$username','$password','$email','$type')";
		if(mysqli_query($con, $sql)){
			$_SESSION['username'] = $username;
			$_SESSION['type'] = $type;
			$_SESSION['email'] = $email;
		
		}
		header("location: home.php");
		
		
	}
	

?>
