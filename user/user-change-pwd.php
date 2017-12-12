<?php
	require_once("user-auth.php");
	include "../db-connect.php";

	$oldpwd = $_POST['old-pwd'];
	$newpwd = $_POST['new-pwd'];
	$newpwd1 = $_POST['new-pwd-conf'];

	$conn = connect('natc');
	if($newpwd == $newpwd1){
		$query = "SELECT COUNT(user_id) AS count FROM user WHERE user_id = " . $_SESSION['login_user'] . " AND user_pass = '" . $oldpwd . "';";
      	$result = $conn->query($query) or die($conn->error);

	    if ($result->fetch_assoc()["count"] == 1) {
			$query = "UPDATE user set user_pass = '" . $newpwd . "' WHERE user_id = ".$_SESSION['login_user'].";";
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
	header("Location: ../user-pwd.php");
?>