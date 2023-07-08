<?php
//koneksi database
include 'koneksi.php';
//menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$menu = $_POST['menu'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

//menginput data ke database
mysqli_query($koneksi,"insert into pesanan values('','$nama','$menu','$telp','$alamat')");

// menangkap data yang di kirim dari form
$nama = $_POST['nama']? $_POST['nama'] : die('Nama belum di isi!');
$menu = $_POST['menu'];
$telp = $_POST['telp']? $_POST['telp'] : die('Telp belum di isi!');
$alamat = $_POST['alamat']? $_POST['alamat'] : die('Alamat belum di isi!');

//mengalihkan halaman kembali ke pelanggan.php
header("location:pelanggan.php");
?>