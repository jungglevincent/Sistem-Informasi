<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "belajar_multilevel";

$koneksi = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if(!$koneksi){
    die("koneksi gagal");
} 