<?php

require_once('../koneksi.php');
if(isset($_GET['nama'])) {
    $nis = $_GET['nama'];
}
$result = array();
$query = mysqli_query($con, "SELECT * FROM tamu ORDER BY nama DESC");
while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}
echo json_encode(array('result'=>$result));
?>