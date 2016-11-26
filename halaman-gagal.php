<?php
	// Start the session
	session_start();
	if (isset($_SESSION['username']){
		header('location:halaman-admin.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>AKN Bojonegoro</title>
</head>
<body>
	<h2>HALAMAN GAGAL</h2>
</body>
</html>