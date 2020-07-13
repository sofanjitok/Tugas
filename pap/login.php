<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];   
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $koneksi->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center' href='formregister.php'>Username Belum Terdaftar! <a href='formregister.php'>Back</a></div>";
   } else {
     if($password <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='formlogin.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:pembeli/index.php');
     }
   }
?>