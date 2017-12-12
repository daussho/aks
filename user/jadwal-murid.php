<?php
	require_once("user-auth.php");
	include "../db-connect.php";


	$conn = connect('natc');
	$mapel = $_POST['mapel'];
	$jadwal = $_POST['jam'];
	$jam = substr($jadwal, 0, 5-strlen($jadwal));
	$hari = substr($jadwal, 6);
	
	//mencari id kelas
	$query = "SELECT kelas.kelas_id FROM kelas JOIN memiliki ON kelas.kelas_id = memiliki.kelas_id JOIN user ON memiliki.user_id = user.user_id WHERE user.user_id = ".$_SESSION['login_user']." AND kelas_mapel = '".$mapel."';";
	$result = $conn->query($query);
	$row = $result->fetch_assoc();
	$idkelas = $row['kelas_id'];

	//ganti jadwal
	$query = "UPDATE kelas SET kelas_hari = '".$hari."', kelas_jam = '".$jam."' WHERE kelas.kelas_id = ".$idkelas.";";
	$result = $conn->query($query);

	$query = "UPDATE kelas SET tutor_id = NULL WHERE kelas.kelas_id = ".$idkelas.";";
	$result = $conn->query($query);
	
	$conn->close();

	header("Location: get-tabel-murid.php");
?>