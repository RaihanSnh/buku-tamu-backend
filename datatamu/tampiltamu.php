<?php

	//Mendapatkan Nilai Dari Variable ID Tamu yang ingin ditampilkan
	$id = $_GET['id'];

	//Importing database
	require_once('../koneksi.php');

	//Membuat SQL Query dengan Tamu yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM tamu WHERE id=$id";

	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);

	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"id"=>$row['id'],
			"nama"=>$row['nama'],
			"alamat"=>$row['alamat'],
			"hp"=>$row['hp'],
			"keperluan"=>$row['keperluan'],
			"lainnya"=>$row['lainnya']
		));

	//Menampilkan dalam format JSON
	echo json_encode(array('result'=>$result));

	mysqli_close($con);
?>
