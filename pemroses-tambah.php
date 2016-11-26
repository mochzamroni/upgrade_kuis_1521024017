<?php
	// Start the session
	session_start();
	//memanggil koneksi
	include("koneksi.php");
	//nangkap kiriman data
	$jeneng=$_POST['nm'];
	$gembok=$_POST['knc'];

	//salah
	if (empty($jeneng) OR empty($gembok)){
		header('location:halaman-admin-tambah.php');
	} 
	//jika $jeneng dan $gembok ada isinya
	else{
		//memasukkan data
		$query=mysql_query("INSERT INTO user 
							VALUES('$jeneng','$gembok')");
		header('location:halaman-admin.php');
	}
?>