<?php
	require_once("admin-auth.php");
	include "../db-connect.php";

	$oldpwd = $_POST['old-pwd'];
	$newpwd = $_POST['new-pwd'];
	$newpwd1 = $_POST['new-pwd-conf'];

	$conn = connect('natc');
	if($newpwd == $newpwd1){
		$query = "SELECT COUNT(admin_id) AS count FROM admin WHERE admin_id = " . $_SESSION['login_user'] . " AND admin_pass = '" . $oldpwd . "';";
      	$result = $conn->query($query) or die($conn->error);

	    if ($result->fetch_assoc()["count"] == 1) {
			$query = "UPDATE admin set admin_pass = '" . $newpwd . "' WHERE admin_id = 18215000";
			$result = $conn->query($query) or die($conn->error);
			$_SESSION['changepwd'] = True;
			$_SESSION['msg'] = "Ganti Password Berhasil";
	    } else {
	    	$_SESSION['changepwd'] = False;
	    	$_SESSION['msg'] = "Password lama salah";
	    }
	} else {
		$_SESSION['changepwd'] = False;
		$_SESSION['msg'] = "Password baru berbeda";
	}
	$conn->close();
	header("Location: ../admin-pwd.php");
?>