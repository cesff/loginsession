<?php   
session_start();
if(!$_SESSION['login']){
    echo "<script type='text/javascript'>
         alert('Maaf Anda Harus Login Terlebih Dahulu!');
            window.location = 'login.php'
            </script>";
}else{
include('koneksi.php');
$user = new Database();
$user = mysqli_query($user->koneksi,"select * from admin where password='$_SESSION[login]'");
$user = mysqli_fetch_array($user);?>

<!DOCTYPE hmtl>
<html>

<head>
    <title>Membuat Login Dengan PHP dan MySQLi</title>
</head>

<body>
    <h2>Halaman Admin</h2>
    <br />

    <h4>Selamat Datang</h4>
    <br />
    <br />

    <a href="logout.php">LOGOUT</a>

    </body>

    </html>
    <?php
}?>