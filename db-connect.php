<?php
   function connect($dbname){
      $servername = 'localhost';
      $username = 'root';
      $password = '';

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
         return 0;
      } else {
         return $conn;
      }
   }
?>
