<?php
   include "db-connect.php";
   session_start();
   if (isset($_POST['id']) and isset($_POST['pwd'])){
      //mengambil id dan password
      $user_id = $_POST["id"];
      $user_pass = $_POST["pwd"];

      //connect databse
      $conn = connect("natc");

      $query = "SELECT COUNT(user_id) AS count FROM user WHERE user_id = " . $user_id . " AND user_pass = '" . $user_pass . "';";
      $result = $conn->query($query) or die($conn->error);

      if ($result->fetch_assoc()["count"] == 1) {
         $_SESSION['login_user'] = $user_id;
         $query = "SELECT user_type, user_name FROM user WHERE user_id = ".$user_id.";";
         $result = $conn->query($query) or die($conn->error);

         $row = $result->fetch_assoc();
         $_SESSION['tipe'] = $row['user_type'];
         $_SESSION['name'] = $row['user_name'];
         $conn->close();

         if ($_SESSION['tipe'] == "murid") {
            header("Location: user/get-tabel-murid.php");
         } else {
            header("Location: user/get-tabel-tutor.php");
         }
         
      } else {
         $conn->close();
         header("Location: index.php");
         $_SESSION['msg'] = "User atau password salah!";
      }
   } else {
      header("Location: index.php");
      $_SESSION['msg'] = "User atau password salah!";
   }
?>
