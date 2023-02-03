<?php
$koneksi=mysqli_connect("localhost","root","","db_siswa2");
//cek koneksi
if (mysqli_connect_error()){
	echo "koneksi database gagal :", mysqli_connect_error();
}else{
	echo "berhasil";
}
?>