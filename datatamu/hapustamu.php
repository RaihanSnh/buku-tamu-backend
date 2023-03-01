<?php

 //Mendapatkan Nilai nama
 $nis = $_GET['nama'];

 //Import File Koneksi Database
 require_once('../koneksi.php');

 //Membuat SQL Query
 $sql = "DELETE FROM tamu WHERE nama=$nama;";


 //Menghapus Nilai pada Database
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Menghapus Data';
 }else{
 echo 'Gagal Menghapus Data';
 }

 mysqli_close($con);
 ?>
