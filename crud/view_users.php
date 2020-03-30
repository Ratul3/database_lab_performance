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
	<title>USERS</title>
</head>
<body>

		<h1>Users</h1>
			
		<table border='1'>
		<tr>
		<th>id</th>
		<th>username</th>
		<th>password</th>
		<th>email</th>
		<th>type</th>
		<th colspan="2">operations</th>
		</tr>
		
	
		</fieldset>
		
	<?php	
	
	$sql = "Select id, username, password, email, type from users";
		$result = $con-> query($sql);
		
			while($row = $result-> fetch_assoc()){
		

			
			echo "<tr><td>". $row["id"] ."</td><td>". $row["username"] ."</td><td>". $row["password"] ."</td><td>". $row["email"]."</td><td>". $row["type"]."</td><td>". "<a href='edit.php?&id=$row[id]&username=$row[username]&password=$row[password]&email=$row[email]&type=$row[type]'>Edit</a>" ."</td><td>". "<a href='delete.php?id=$row[id]' onclick='return checkdelete()'>Delete</a>" ."</td></tr>";	
				
			}
			echo"</table>";
			
			
		
		
		$con-> close();
		
		?>
		
		
		
		
		</table>
		
		<br/>	
			
<script>
function checkdelete()
{
	return confirm('Are you sure you want to delete this data?');



	
}





</script> 
	<a href="home.php">Back</a>
		</body>
		</html>



