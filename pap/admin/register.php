
<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];
   $sql = "SELECT * FROM admin WHERE username = '$username'";
   $query = $koneksi->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Already Registered! <a href='formregister.php'>Back</a></div>";
   } else {
     if(!$username || !$password) {
       echo "<div align='center'>There is still empty data!<a href='formregister.php'>Back</a>";
     } else {
       $data = "INSERT INTO user VALUES ('$username', '$password')";
       $simpan = $koneksi->query($data);
       if($simpan) {
         echo "<div align='center'>Registration Success, Please Login <a href='index.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Failed Process! <a href='formregister.php'>Please Re-Register</div>";
       }
     }
   }
?>
