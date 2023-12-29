<?php
include('koneksi.php');

$user = $_POST['username'];
$password = md5($_POST['password']);

$sql = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$user'") or die(mysqli_error($koneksi));


if (mysqli_num_rows($sql) > 0) {
  echo (" <SCRIPT LANGUAGE='JavaScript'>
				window.alert('Registrasi Gagal Username sudah Terdaftar')
				window.location.href='index.php';
			</SCRIPT>");

} else {

	$input_akun="INSERT INTO `akun` (username, password, level) VALUES ('$_POST[username]', '$password', 3)";

	$input_murid="INSERT INTO `murid` (nisn, nama_murid, kota, jenkel, agama, jurusan, kelas, username) VALUES ('$_POST[nisn]', '$_POST[nama_murid]', '$_POST[kota]', '$_POST[jenis_kelamin]', '$_POST[agama]', '$_POST[jurusan]', '$_POST[kelas]', '$_POST[username]')";



	if (mysqli_query($koneksi, $input_akun) && mysqli_query($koneksi, $input_murid)) {
		echo (" <SCRIPT LANGUAGE='JavaScript'>
				window.alert('Berhasil Registrasi')
				window.location.href='index.php';
			</SCRIPT>");
	} else {
		echo "Register Gagal! " . mysqli_error($koneksi);
	}
    
  }

?>
