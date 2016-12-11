<?php
session_start();
if(isset($_POST['bttCreate'])){
	require 'connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];
	
	if($password==$confirmPassword){
		$result = mysqli_query($con, 'INSERT INTO accounts (username, password) VALUES ("'.$username.'", "'.$password.'")');
		if($result){
			$_SESSION['username'] = $username;
			header('Location: home.php');
			}
		else
			echo "Database error. Try Again";
	}
	else
		echo "Passwords don't match";
	
}
	

?>

<form method="post">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="confirmPassword"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="bttCreate" value="Create Account"></td>
		</tr>
	</table>
</form>	
		