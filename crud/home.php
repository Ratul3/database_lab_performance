<?php
	session_start();
	
if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
include("connection.php");
$userprofile = $_SESSION['username'];
$sql = "select * from users where username='$userprofile'";
$result = mysqli_query($con,$sql);
$count = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Profiles</title>
</head>
<body>
		<h1>Welcome Home!</h1>

		<a href="add.php"> Create User</a> | 
		<a href="view_users.php"> View Users</a> | 
		<a href="logout.php"> logout</a> 
		<br>

		Name: <?php echo $count['username']; ?> <br>
			Type: <?php echo $count['type']; ?> <br>
			Email: <?php echo $count['email']; ?> <br>
	
</body>
</html>