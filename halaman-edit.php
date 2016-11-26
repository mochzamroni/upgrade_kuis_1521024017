<?php
	// Start the session
	session_start();
	if (empty($_SESSION['username'])){
		header('location:login.php');
	}
	//memanggil koneksi
	include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>AKN Bojonegoro</title>
</head>
<body>
	<h2>HALAMAN ADMIN-TAMBAH-DATA BERSESSION</h2>
	<hr>
	<form action="pemroses-edit.php" method="POST">
		<table border="2">
			<input type="hidden" name="nm_lama" value=<?php echo $_GET['id']; ?> />
			<tr>
				<th>Nama baru : </th>
				<td><input type="text" name="nm_baru" value=<?php echo $_GET['id']; ?> /></td>
			</tr>
			<?php
				$id=$_GET['id'];
				$kueri=mysql_query("SELECT * FROM user WHERE nama='$id'");
				$data=mysql_fetch_array($kueri);
			?>
			<tr>
				<th>Kunci : </th>
				<td><input type="text" name="knc_baru" value=<?php echo $data['kunci']?>></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit"></input></td>
			</tr>
		</table>
	</form>
	<a href="logout.php">logout</a>
</body>
</html>