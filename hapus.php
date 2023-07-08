<?php
//koneksi database
include 'koneksi.php';

//manangkap data id yang di kirim dari url
$id = $_GET['id'];

//menghapus data dari database
mysqli_query($koneksi,"delete from pesanan where id='$id'");

//mengalihkan halaman kembali ke pelanggan.php
header("location:pelanggan.php");
?>