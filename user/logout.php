<?php
	require_once("user-auth.php");
	session_unset();
	header("Location: ../index.php");
?>