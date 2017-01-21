<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("config.php");
?>


<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
    <meta charset="utf-8">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>

</head>
<body>
<form action="proseslogin.php" method="post">

   <div class="main">
    <div class="login-form">
      <h1>Login Admin</h1>
          <div class="head">
            <img src="images/user.png" alt=""/>
          </div>
        <form>
            <input type="text" class="text" name="username" placeholder="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
            <input type="password" placeholder="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
            <div class="submit">
              <input type="submit" onclick="myFunction()" value="LOGIN" >
          </div>  
          <p><a href="daftar.php">Belum Punya Akun?</a></p>
          <p><a href="..">Home</a></p>
        </form>
      </div>

            <div class="copy-right">
            <p>Design by <a href="kikizainal19@gmail.com">Zainal Mutaqin</a></p> 
          </div>
        
    </div>
 
       </form>
        
</body>
</html>