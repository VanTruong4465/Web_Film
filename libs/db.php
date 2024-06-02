<?php

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "test";
$base_url = 'http://localhost/xemphim/'; // Thay url web bạn

     $DBcon = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $link = mysqli_connect($DB_host,$DB_user,$DB_pass,$DB_name);
    mysqli_set_charset($link,"utf8");
    $conn=mysqli_connect($DB_host,$DB_user,$DB_pass,$DB_name);
    $conn->set_charset("utf8");
 
 
 ?>