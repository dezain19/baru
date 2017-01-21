<?php
   require_once("config.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $mail = $_POST['email'];
   $cekuser = mysql_query("SELECT * FROM admin WHERE username = '$username'");
   if(mysql_num_rows($cekuser) > 0) {
     echo "<script>alert(`Username sudah terdaftar`);location.href=`daftar.php`</script>";
   } else {
     if(!$username || !$pass || !$mail) {
       echo "<script>alert(`Masih ada data yang kosong`);location.href=`daftar.php`</script>";
     } else {       
       $simpan = mysql_query("INSERT INTO admin(username, password, email) VALUES('$username','$pass', '$mail')");
       if($simpan) {
         echo "<script>alert(`Pendaftaran Sukses, Silahkan Login`);location.href=`login.php`</script>";
       } else {
         echo "<script>alert(`Pendaftaran gagal`);location.href=`index.php`</script>";
       }
     }
   }
?>