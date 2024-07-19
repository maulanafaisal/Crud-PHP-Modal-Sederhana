<?php
	include('conn.php');
	
	$nama_depan=$_POST['nama_depan'];
	$nama_belakang=$_POST['nama_belakang'];
	$alamat=$_POST['alamat'];
	
	mysqli_query($conn,"insert into user (nama_depan, nama_belakang, alamat) values ('$nama_depan', '$nama_belakang', '$alamat')");
	header('location:index.php');

?>