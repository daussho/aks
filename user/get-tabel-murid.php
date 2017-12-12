<?php
   require_once("user-auth.php");
   include "../db-connect.php";


   $conn = connect('natc');
   
   $query = "SELECT kelas_mapel, kelas_hari, kelas_jam FROM kelas JOIN memiliki ON kelas.kelas_id = memiliki.kelas_id WHERE memiliki.user_id = ".$_SESSION['login_user'].";";

   // or die($conn->error);
   $result = $conn->query($query);

   $head = 
      "<tr>
            <th>Mata Pelajaran</th>
            <th>Hari</th>
            <th>Jam</th>
      </tr>";

   $body = "";
   if ($result->num_rows > 0){
      while($row = $result->fetch_assoc()) {
         $body = $body.
            "<tr>
               <td>".$row['kelas_mapel']."</td>
               <td>".$row['kelas_hari']."</td>
               <td>".$row['kelas_jam']."</td>
            </tr>";
      }
   }

   $_SESSION['head'] = $head;
   $_SESSION['body'] = $body;
   

   $conn->close();

   header("Location: ../user.php");
?>