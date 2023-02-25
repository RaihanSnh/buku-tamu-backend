<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];
    $keperluan = $_POST['keperluan'];

    $sql = "INSERT INTO tamu (nama, hp, alamat, keperluan) VALUES ('$nama','$hp','$alamat','$keperluan')";

    require_once('../koneksi.php');

    if(mysqli_query($con, $sql)){
        echo 'Berhasil menambahkan tamu';
    }else{
        echo 'Gagal Menambahkan tamu';
    }
    mysqli_close($con);
}
?>