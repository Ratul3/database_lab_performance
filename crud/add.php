<?php	
	session_start();
	 if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
	include("connection.php");	



?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<h2>Create User</h2>
	<form action="" method="GET">
		id<br/><input type="text" name="id" value=""/><br/>
				Username:</br>
				<input type="text" name="username" value="">
			</br>
			
				Password:</br>
				<input type="password" name="password" value=""></br>
			
			
				email:</br>
				<input type="text" name="email" value=""></br>
		
		
				type:</br>
				<input type="text" name="type" value=""></br>
			
			
				
			<input type="submit" name="submit" value="Submit">
			<a href="home.php">Back</a>
		
	</form>
	<?php
	if(isset($_REQUEST['submit'])){
{
	$id = $_GET['id'];
	   $username = $_GET['username'];
		$password = $_GET['password'];
		$email = $_GET['email'];
		$type = $_GET['type'];

	
	
	
	if($id!="" && $username!="" && $password!="" && $email!="" && $type!="")
	{
		$sql = "INSERT INTO users VALUES('$id','$username','$password','$email','$type')";
$data = mysqli_query($con, $sql);
if($data)
{
	
	echo "<font color='green'>successful";

}	

		
	}
	
	else
	{
		echo "<font color='red'>All fields are required";
	}
	
}
}
		

?>
</body>
</html>