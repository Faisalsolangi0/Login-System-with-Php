<?php 

session_start();
if(isset($_SESSION['username'])){

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
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
		h2{

			color: green;

		}
	
	</style>
</head>
<body>

<h1>Dashboard </h1>
<h2>Wellcome...........<?php echo $_SESSION['fullname']; ?> </h2>

<table>
	<tr>
		<td>Full name</td>
		<td><?php echo $_SESSION['fullname']; ?></td>
	</tr>
	<tr>
		<td>Username</td>
		<td><?php echo $_SESSION['username']; ?></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><?php echo $_SESSION['password']; ?></td>
	</tr>


</table>



</body>
</html>
<?php }else{

	header("location: index.php?msg=Please Login First...!");
}?>



