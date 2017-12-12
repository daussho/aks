<?php
	require_once("admin-auth.php");
	include "../db-connect.php";

	$id = $_POST['idkelas'];
	$mapel = $_POST['mapel'];
	$jumlah = $_POST['jml'];
	$hari = $_POST['hari'];
	$jam = $_POST['jam'];
	$tipe = $_POST['tipe'];

	$conn = connect('natc');
	$query = "INSERT INTO kelas (kelas_id, kelas_mapel, kelas_type, jumlah_murid, kelas_hari, kelas_jam) VALUES ('".$id."', '".$mapel."', '".$tipe."', '".$jumlah."', '".$hari."', '".$jam."');";
	$result = $conn->query($query);
	$_SESSION['msg'] = "Buat Kelas Berhasil!";
	if (!$result){
		$_SESSION['msg'] = "Buat Kelas Gagal!: ".$conn->error;
	}
	
	$conn->close();
	header("Location: ../create-class.php");
?>