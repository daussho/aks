<?php
	require_once("admin-auth.php");
	include "../db-connect.php";

	$idmurid = $_POST['idmurid'];
	$idkelas = $_POST['idkelas'];

	$conn = connect('natc');
	$query = "INSERT INTO memiliki (user_id, kelas_id) VALUES ('".$idmurid."', '".$idkelas."');";
	$result = $conn->query($query);
	// or die($conn->error);
	$_SESSION['msg'] = "Enroll Berhasil!";
	if (!$result){
		$_SESSION['msg'] = "Enroll Gagal!: ".$conn->error;
	}
	
	$conn->close();
	header("Location: ../enroll.php");
?>