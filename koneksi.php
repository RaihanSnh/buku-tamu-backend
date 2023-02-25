<?php

$server = "localhost"; 
$user = "root";
$password ="";
$database ="android_bukutamu";

$con = mysqli_connect($server, $user, $password, $database);
if (mysqli_connect_errno()){
    echo "Gagal terhubung MySql". mysqli_connect_error();
}
?>