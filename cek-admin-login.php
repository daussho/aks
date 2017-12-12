<?php
   include "db-connect.php";
   session_start();
   if (isset($_POST['id']) and isset($_POST['pwd'])){
      //mengambil id dan password
      $admin_id = $_POST["id"];
      $admin_pass = $_POST["pwd"];

      //connect databse
      $conn = connect("natc");

      $query = "SELECT COUNT(admin_id) AS count FROM admin WHERE admin_id = " . $admin_id . " AND admin_pass = '" . $admin_pass . "';";
      $result = $conn->query($query) or die($conn->error);

      if ($result->fetch_assoc()["count"] == 1) {
         $_SESSION['login_admin'] = True;
         header("Location: admin.php");
         $conn->close();
      } else {
         $conn->close();
         header("Location: admin-login.php");
         $_SESSION['msg'] = "User atau password salah!";
      }
   } else {
      header("Location: admin-login.php");
      $_SESSION['msg'] = "User atau password salah!";
   }
?>
