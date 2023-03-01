<?php
    require_once('../koneksi.php');
    $result = array();
    $sql = "SELECT * FROM tamu ";

    if(isset($_GET['nama'])){
        $sql .= "WHERE nama LIKE '%".$_GET['nama']."%' ";
        if(mysqli_num_rows(mysqli_query($con, $sql)) == 0){
            $sql .= " OR id = ".$_GET['nama']." ";
        }
    }

    $sql .= "ORDER BY id DESC, nama"; 
    $query = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($query)){
        $result[] = $row;
    }

    echo json_encode(array('result'=>$result));
?>