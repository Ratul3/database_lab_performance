<?php
session_start();
	


$_GET['username'];
$_GET['password'];
$_GET['email'];
$_GET['type'];
include("connection.php");

?>

<html>
<head>
</head>
<body>
<form action="" method="GET">
id <br/><input type="text" name="id" value="<?php echo $_GET['id']; ?>"/><br/>
username <br/><input type="text" name="username" value="<?php echo $_GET['username']; ?>"/><br/>
password <br/><input type="text" name="password" value="<?php echo $_GET['password']; ?>"/><br/>
email <br/><input type="text" name="email" value="<?php echo $_GET['email']; ?>"/><br/>
type <br/><input type="text" name="type" value="<?php echo $_GET['type']; ?>"/><br/><br/>
<input type="submit" name="submit" value="Update"/>	<a href="view_users.php">Back</a>

</form>
<?php
if( isset($_REQUEST['submit'])){
$id = $_GET['id'];
	$username = $_GET['username'];
    $password = $_GET['password'];
    $email = $_GET['email'];
	$type = $_GET['type'];
	
	
	
	
	$sql =  "UPDATE users SET username='$username', password='$password', email='$email', type='$type' WHERE id='$id' ";
   $data = mysqli_query($con,$sql);
if($data)
{
	echo "<font color='green'>Updated Successfully. <a href ='view_users.php'>Check Updated List Here</a>";
}
else
{
	echo "<font color='red'>Not Updated. <a href ='view_users.php'>Check Updated List Here</a>";
}


}
else
{
	echo "<font color='blue'>Click on Update Button to Save Changes";
}

?>

</body>
</html>
