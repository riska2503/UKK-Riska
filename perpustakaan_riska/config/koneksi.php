<?php

//mysql -u root -p
$shot = "localhost";
$user = "root";
$pass = "";
$db   = "perpustakaan_riska";

$db   = mysqli_connect($shot,$user,$pass,$db);

if(!$db){ 
    die("database tidak terhubung");
}