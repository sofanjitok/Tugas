<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$brand = $_POST['brand'];
$size = $_POST['size'];
$price = $_POST['price'];

 
// update data ke database
mysqli_query($koneksi,"update produk set brand='$brand', size='$size', price='$price' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:shoes.php");
 
?>