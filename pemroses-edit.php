<?php
	// Start the session
	session_start();
	//memanggil koneksi
	include("koneksi.php");
	//nangkap kiriman data
	$nama_lama=$_POST['nm_lama'];
	$nama_baru=$_POST['nm_baru'];
	$kunci_baru=$_POST['knc_baru'];

	//salah
	if (empty($nama_baru) OR empty($kunci_baru)){
		header('location:halaman-admin.php');
	} 
	//jika $jeneng dan $gembok ada isinya
	else{
		//memasukkan data
		$query=mysql_query("UPDATE user SET nama='$nama_baru', kunci='$kunci_baru' WHERE nama='$nama_lama'");
		header('location:ui-halaman-admin.php');
	}
?>