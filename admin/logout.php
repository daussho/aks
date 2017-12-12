<?php
	require_once("admin-auth.php");
	session_unset();
	header("Location: ../admin-login.php");
?>