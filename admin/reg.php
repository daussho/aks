<?php
	require_once("admin-auth.php");
	include "../db-connect.php";

	$id = $_POST['id'];
	$pass = "password";
	$name = $_POST['name'];
	$addr = $_POST['addr'];
	$telp = $_POST['telp'];
	$tipe = $_POST['tipe'];

	$conn = connect('natc');
	$query = "INSERT INTO user (user_id, user_pass, user_name, user_adr, user_telp, user_type) VALUES ('".$id."', '".$pass."', '".$name."', '".$addr."', '".$telp."', '".$tipe."');";
	$result = $conn->query($query);
	// or die($conn->error);
	$_SESSION['msg'] = "Registrasi Berhasil!";
	if (!$result){
		$_SESSION['msg'] = "Registrasi Gagal!: ".$conn->error;
	}
	
	$conn->close();
	header("Location: ../register.php");
?>