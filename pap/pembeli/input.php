<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$brand = $_POST['brand'];
$size = $_POST['size'];
$buy = $_POST['buy'];


 
// menginput data ke database
mysqli_query($koneksi,"insert into beli values('','$brand','$size','$buy')");
 
// mengalihkan halaman kembali ke index.php
header("location:order.php");
 
?>