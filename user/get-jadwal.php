<?php
function getJadwal($mapel){
   require_once("user/user-auth.php");
   include "db-connect.php";


   $conn = connect('natc');
   
   $query = "SELECT kelas_hari, kelas_jam FROM kelas WHERE tutor_id is NULL AND kelas_mapel = '".$mapel."';";

   // or die($conn->error);
   $result = $conn->query($query);

   $jadwal = array(
         array(0,0,0,0,0),
         array(0,0,0,0,0),
         array(0,0,0,0,0),
         array(0,0,0,0,0),
         array(0,0,0,0,0),
         array(0,0,0,0,0),
         array(0,0,0,0,0),
         array(0,0,0,0,0),
         array(0,0,0,0,0),
         array(0,0,0,0,0),
         array(0,0,0,0,0),
         array(0,0,0,0,0),
         array(0,0,0,0,0),
         array(0,0,0,0,0),
      );

   if ($result->num_rows > 0){
      while($row = $result->fetch_assoc()) {
         if ($row['kelas_jam'] == "07.00"){
            switch ($row['kelas_hari']) {
               case "senin":
                  $jadwal[0][0]++;
                  break;
               case "selasa":
                  $jadwal[0][1]++;
                  break;
               case "rabu":
                  $jadwal[0][2]++;
                  break;
               case "kamis":
                  $jadwal[0][3]++;
                  break;
               case "jumat":
                  $jadwal[0][4]++;
                  break;
            }
         } else if ($row['kelas_jam'] == "08.00"){
            switch ($row['kelas_hari']) {
               case "senin":
                  $jadwal[1][0]++;
                  break;
               case "selasa":
                  $jadwal[1][1]++;
                  break;
               case "rabu":
                  $jadwal[1][2]++;
                  break;
               case "kamis":
                  $jadwal[1][3]++;
                  break;
               case "jumat":
                  $jadwal[1][4]++;
                  break;
            }
         } else if ($row['kelas_jam'] == "09.00"){
            switch ($row['kelas_hari']) {
               case "senin":
                  $jadwal[2][0]++;
                  break;
               case "selasa":
                  $jadwal[2][1]++;
                  break;
               case "rabu":
                  $jadwal[2][2]++;
                  break;
               case "kamis":
                  $jadwal[2][3]++;
                  break;
               case "jumat":
                  $jadwal[2][4]++;
                  break;
            }
         } else if ($row['kelas_jam'] == "10.00"){
            switch ($row['kelas_hari']) {
               case "senin":
                  $jadwal[3][0]++;
                  break;
               case "selasa":
                  $jadwal[3][1]++;
                  break;
               case "rabu":
                  $jadwal[3][2]++;
                  break;
               case "kamis":
                  $jadwal[3][3]++;
                  break;
               case "jumat":
                  $jadwal[3][4]++;
                  break;
            }
         } else if ($row['kelas_jam'] == "11.00"){
            switch ($row['kelas_hari']) {
               case "senin":
                  $jadwal[4][0]++;
                  break;
               case "selasa":
                  $jadwal[4][1]++;
                  break;
               case "rabu":
                  $jadwal[4][2]++;
                  break;
               case "kamis":
                  $jadwal[4][3]++;
                  break;
               case "jumat":
                  $jadwal[4][4]++;
                  break;
            }
         } else if ($row['kelas_jam'] == "12.00"){
            switch ($row['kelas_hari']) {
               case "senin":
                  $jadwal[5][0]++;
                  break;
               case "selasa":
                  $jadwal[5][1]++;
                  break;
               case "rabu":
                  $jadwal[5][2]++;
                  break;
               case "kamis":
                  $jadwal[5][3]++;
                  break;
               case "jumat":
                  $jadwal[5][4]++;
                  break;
            }
         } else if ($row['kelas_jam'] == "13.00"){
            switch ($row['kelas_hari']) {
               case "senin":
                  $jadwal[6][0]++;
                  break;
               case "selasa":
                  $jadwal[6][1]++;
                  break;
               case "rabu":
                  $jadwal[6][2]++;
                  break;
               case "kamis":
                  $jadwal[6][3]++;
                  break;
               case "jumat":
                  $jadwal[6][4]++;
                  break;
            }
         } else if ($row['kelas_jam'] == "14.00"){
            switch ($row['kelas_hari']) {
               case "senin":
                  $jadwal[7][0]++;
                  break;
               case "selasa":
                  $jadwal[7][1]++;
                  break;
               case "rabu":
                  $jadwal[7][2]++;
                  break;
               case "kamis":
                  $jadwal[7][3]++;
                  break;
               case "jumat":
                  $jadwal[7][4]++;
                  break;
            }
         } else if ($row['kelas_jam'] == "15.00"){
            switch ($row['kelas_hari']) {
               case "senin":
                  $jadwal[8][0]++;
                  break;
               case "selasa":
                  $jadwal[8][1]++;
                  break;
               case "rabu":
                  $jadwal[8][2]++;
                  break;
               case "kamis":
                  $jadwal[8][3]++;
                  break;
               case "jumat":
                  $jadwal[8][4]++;
                  break;
            }
         } else if ($row['kelas_jam'] == "16.00"){
            switch ($row['kelas_hari']) {
               case "senin":
                  $jadwal[9][0]++;
                  break;
               case "selasa":
                  $jadwal[9][1]++;
                  break;
               case "rabu":
                  $jadwal[9][2]++;
                  break;
               case "kamis":
                  $jadwal[9][3]++;
                  break;
               case "jumat":
                  $jadwal[9][4]++;
                  break;
            }
         } else if ($row['kelas_jam'] == "17.00"){
            switch ($row['kelas_hari']) {
               case "senin":
                  $jadwal[10][0]++;
                  break;
               case "selasa":
                  $jadwal[10][1]++;
                  break;
               case "rabu":
                  $jadwal[10][2]++;
                  break;
               case "kamis":
                  $jadwal[10][3]++;
                  break;
               case "jumat":
                  $jadwal[10][4]++;
                  break;
            }
         } else if ($row['kelas_jam'] == "18.00"){
            switch ($row['kelas_hari']) {
               case "senin":
                  $jadwal[11][0]++;
                  break;
               case "selasa":
                  $jadwal[11][1]++;
                  break;
               case "rabu":
                  $jadwal[11][2]++;
                  break;
               case "kamis":
                  $jadwal[11][3]++;
                  break;
               case "jumat":
                  $jadwal[11][4]++;
                  break;
            }
         } else if ($row['kelas_jam'] == "19.00"){
            switch ($row['kelas_hari']) {
               case "senin":
                  $jadwal[12][0]++;
                  break;
               case "selasa":
                  $jadwal[12][1]++;
                  break;
               case "rabu":
                  $jadwal[12][2]++;
                  break;
               case "kamis":
                  $jadwal[12][3]++;
                  break;
               case "jumat":
                  $jadwal[12][4]++;
                  break;
            }
         } else if ($row['kelas_jam'] == "20.00"){
            switch ($row['kelas_hari']) {
               case "senin":
                  $jadwal[13][0]++;
                  break;
               case "selasa":
                  $jadwal[13][1]++;
                  break;
               case "rabu":
                  $jadwal[13][2]++;
                  break;
               case "kamis":
                  $jadwal[13][3]++;
                  break;
               case "jumat":
                  $jadwal[13][4]++;
                  break;
            }
         }
      }
   }

   $conn->close();
   return $jadwal;
}
?>