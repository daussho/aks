<?php
	require_once("user-auth.php");
	include "../db-connect.php";


	$conn = connect('natc');
	$mapel = $_POST['mapel'];
	$jadwal = $_POST['jam'];
	$jam = substr($jadwal, 0, 5-strlen($jadwal));
	$hari = substr($jadwal, 6);
	
	//mencari id kelas
	$query = "SELECT kelas_id FROM kelas WHERE kelas_mapel = '".$mapel."' AND kelas_hari = '".$hari."' AND kelas_jam = '".$jam."';";
	$result = $conn->query($query);
	$row = $result->fetch_assoc();
	$idkelas = $row['kelas_id'];

	//ambil jadwal
	$query = "UPDATE kelas SET tutor_id = '".$_SESSION['login_user']."' WHERE kelas.kelas_id = ".$idkelas.";";
	$result = $conn->query($query);

	$conn->close();

	header("Location: get-tabel-tutor.php");
?>