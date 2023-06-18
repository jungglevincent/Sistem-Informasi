<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<head>
 <title>LOGIN MULTIUSER PHP</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


 <?php
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password Salah !</div>";
  }
 }
 ?>

 <div class="panel_login">
  <p class="tulisan_atas">Silahkan Masuk</p>

  <form action="cek_login.php" method="post">
   <label>Username</label>
   <input type="text" name="username" class="form_login" placeholder="Username" required="required">

   <label>Password</label>
   <input type="password" name="password" class="form_login" placeholder="Password" required="required">

   <input type="submit" class="tombol_login" value="LOGIN">

   <br/>
   <br/>
   
  </form>
  
 </div>


</body>
</html>