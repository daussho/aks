<?php
	require_once("admin-auth.php");
	include "../db-connect.php";


	$conn = connect('natc');
	$query = $_POST['query'];
	$result = $conn->query($query);
	// or die($conn->error);
	$_SESSION['msg'] = "Success!";
	if (!$result){
		$_SESSION['msg'] = "Failed: ".$conn->error;
	}
	
	$conn->close();
	header("Location: ../query.php");
?>