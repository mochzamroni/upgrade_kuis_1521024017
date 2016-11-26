<?php
	// Start the session
	session_start();
	if (empty($_SESSION['username'])){
		header('location:ui-login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>AKN Bojonegoro</title>
</head>
<body>
	<h2>HALAMAN ADMIN-BERSESSION</h2>
	<hr>
	<a href="halaman-admin-tambah.php"> TAMBAH DATA USER</a>
	<hr>
	<table border="2">
		<tr>
			<th width="20">No</th>
			<th width="100">Nama</th>
			<th width="100">Kunci</th>
			<th width="100">Aksi</th>
		</tr>
		<?php
			//PROSES MENAMPILKAN DATA dari TABEL USER
			//mengkoneksikan dengan database
			include("koneksi.php");
			//mengambil data di tabel user
			$query=mysql_query("SELECT * from user");
			$no=1;
			//menampilkan record data dalam tabel user
			//proses penampilan record 1 by 1 
			while($dt=mysql_fetch_assoc($query)){
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$dt['nama']."</td>";
				echo "<td>".$dt['kunci']."</td>";
				?>
				<td>
					<a href="halaman-edit.php?id=<?php echo $dt['nama'];?>">Edit</a>
					||
					<a href="halaman-delete.php?id=<?php echo $dt['nama'];?>">Delete</a>
				</td>;
				<?php
				echo "</tr>";
				$no++;
			}
		?>
	</table>
	<a href="logout.php">logout</a>
</body>
</html>