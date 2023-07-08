<?php
$koneksi = mysqli_connect("localhost","root","","restoran");
if  (mysqli_connect_errno()){
	echo "koneksi Database Gagal!!!:".mysqli_connect_error();
}
?>