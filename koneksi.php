<?php
$host 				= "localhost";
$username_database 	= "id21721382_root";
$password_database 	= "Websekolah123!";
$nama_database		= "id21721382_school";

$koneksi = mysqli_connect($host, $username_database, $password_database, $nama_database);

// mengecek koneksi
if (!$koneksi) 
{
	die("Koneksi gagal: " . mysqli_connect_error());
}
?>