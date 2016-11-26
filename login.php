<?php
	// Start the session
	session_start();
	if (isset($_SESSION['username'])){
		header('location:halaman-admin.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>AKN Bojonegoro</title>
</head>
<body>
	<h2>HALAMAN LOGIN</h2>
	<form action="php-pemroses.php" method="POST">
		<label>username</label><input type="text" name="username"></input>
		<label>password</label><input type="text" name="password"></input>
		<input type="submit"/>
	</form>
</body>
</html>