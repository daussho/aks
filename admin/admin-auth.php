<?php
   session_start();
   if(empty($_SESSION['login_admin']) || $_SESSION['login_admin'] == False) {
      header('Location: admin-login.php');
   }
?>
