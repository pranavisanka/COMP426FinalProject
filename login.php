<?php
session_start();
if(isset($_POST['bttLogin'])){
	require 'connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result = mysqli_query($con, 'select * from accounts where username="'.$username.'" and password="'.$password.'"');
	if(mysqli_num_rows($result)==1){
		$_SESSION['username'] = $username;
		header('Location: home.html');
	}
	else
		echo "Account's invalid";
	
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
			<td>&nbsp;</td>
			<td><input type="submit" name="bttLogin" value="Login"></td>
		</tr>
	</table>
</form>	
		