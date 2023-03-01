<?php

    $username   = $_POST['username'];
    $password   = $_POST['password'];

    require_once('../koneksi.php');

    $sql  = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);


    if(mysqli_num_rows($result) > 0){
        echo "Proceed";
    }
    else{
        echo 'Username/Password mismatch';
    }

    mysqli_close($con);
?>