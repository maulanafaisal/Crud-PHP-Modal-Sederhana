<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$nama_depan=$_POST['nama_depan'];
	$nama_belakang=$_POST['nama_belakang'];
	$alamat=$_POST['alamat'];
	
	mysqli_query($conn,"update user set nama_depan='$nama_depan', nama_belakang='$nama_belakang', alamat='$alamat' where userid='$id'");
	header('location:index.php');

?>