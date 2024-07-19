<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","crud_php_modal_bootstrap");
if (!$conn) {
	die("koneksi bermasalah.. cek kembali kode anda: " . mysqli_connect_error());
}
 
?>