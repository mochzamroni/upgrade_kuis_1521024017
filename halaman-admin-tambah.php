<?php
	// Start the session
	session_start();
	if (empty($_SESSION['username'])){
		header('location:login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>AKN Bojonegoro</title>
</head>
<body>
	<h2>HALAMAN ADMIN-TAMBAH-DATA BERSESSION</h2>
	<hr>
	<form action="pemroses-tambah.php" method="POST">
		<table border="2">
			<tr>
				<th>Nama : </th>
				<td><input type="text" name="nm"/></td>
			</tr>
			<tr>
				<th>Kunci : </th>
				<td><input type="text" name="knc"/></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit"></input></td>
			</tr>
		</table>
	</form>
	<a href="logout.php">logout</a>
</body>
</html>