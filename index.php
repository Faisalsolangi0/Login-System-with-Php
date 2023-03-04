<?php
session_start();

if(isset($_SESSION['username'])){
	header("location: dashboard.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login System</title>
	<style type="text/css">
		body{

			background-color: skyblue;
			color: navy;
		}
		h1{

			background-color: yellow;
			color: navy;
			text-align: center;
			padding: 10px;
			margin:10px;
			border-radius: 5px;
		}

		fieldset{
			width: 200px;
			border:2px dotted red;
		}
		p{
			color: red;
		}
	</style>
</head>
<body>
<h1> Login System</h1>

<form method="POST" action="login_process.php">
<center>
<fieldset>
	<legend>Login Here..!</legend>
<table>
	<p><?php echo $_REQUEST['msg']??''; ?></p>
	<tr>
		<td>Username</td>
		<td><input type="text" name="username" placeholder="Enter Your Username"></td>
	</tr>
		<tr>
		<td>Password</td>
		<td><input type="password" name="password" placeholder="Enter Your Password"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="login" value="Login"></td>
	</tr>
</table>
</fieldset>
</center>
</form>

</body>
</html>