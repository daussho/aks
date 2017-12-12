<?php
   require_once("user-auth.php");
   include "../db-connect.php";

   $conn = connect('natc');
   
   $idtutor = $_SESSION['login_user'];
   $idmurid  = $_POST['idmurid'];
   $mapel = $_POST['mapel'];
   $date = $_POST['date'];
   $tempat = $_POST['tempat'];
   $materi = $_POST['materi'];
   $tipe = $_POST['tipe'];
   $durasi = $_POST['durasi'];
   
   //mencari id kelas
   $query = "SELECT kelas.kelas_id FROM kelas JOIN memiliki ON kelas.kelas_id = memiliki.kelas_id JOIN user ON memiliki.user_id = user.user_id WHERE user.user_id = ".$idmurid." AND kelas_mapel = '".$mapel."';";
   $result = $conn->query($query);
   $row = $result->fetch_assoc();
   $idkelas = $row['kelas_id'];

   //cek tabel
   $query = "SELECT COUNT(kelas_id) AS count FROM absensi where kelas_id = ".$idkelas." AND tanggal = '".$date."';";
   $result = $conn->query($query) or die($conn->error);

   if ($result->fetch_assoc()["count"] == 0) {
      $query = "INSERT INTO absensi (kelas_id, tanggal, lokasi, materi, tutor_id, durasi) VALUES ('".$idkelas."', '".$date."', '".$tempat."', '".$materi."', '".$idtutor."', '".$durasi."');";
      $result = $conn->query($query);
   }
   
   $_SESSION['msg'] = "Absensi Berhasil!";
   if (!$result){
      $_SESSION['msg'] = "Absensi Gagal!: ".$conn->error;
   } else {
      $query = "INSERT INTO absensi_murid_id (kelas_id, murid_id, tanggal) VALUES ('".$idkelas."', '".$idmurid."', '".$date."');";
      $result = $conn->query($query);
      if (!$result){
         $_SESSION['msg'] = "Absensi Gagal!: ".$conn->error;
      }
   }
   
   $conn->close();

   header("Location: ../kehadiran.php");
?>