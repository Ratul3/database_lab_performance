<?php
session_start();

include("connection.php");

$id = $_GET['id'];



$sql = "DELETE FROM users WHERE id='$id'";

 $data = mysqli_query($con,$sql);
 if($data)
 {
	 echo "<script>alert('Record Deleted')</script>"; 
 ?>
 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://127.0.0.1/reg_login/view_users.php">
 <?php
 }
 else
 {
	 echo "<font color='red'>Sorry, Delete Process Failed";
 }


?>