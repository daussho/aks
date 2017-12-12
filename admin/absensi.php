<?php
	require_once("admin-auth.php");
	include "../db-connect.php";


	$conn = connect('natc');
	$idmurid = $_POST['idmurid'];
	$button = $_POST['button'];
	$query = "SELECT absensi.tanggal AS tgl, kelas.kelas_mapel AS mapel, absensi.materi, absensi.durasi FROM absensi JOIN kelas ON absensi.kelas_id = kelas.kelas_id JOIN absensi_murid_id ON absensi.kelas_id = absensi_murid_id.kelas_id AND absensi.tanggal = absensi_murid_id.tanggal WHERE absensi_murid_id.murid_id = '".$idmurid."';";
	$result = $conn->query($query);

	if($button == "search"){
		$tabel = "";
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				$tabel = $tabel.
			   	"<tr>
			       	<td>".$row['tgl']."</td>
			       	<td>".$row['mapel']."</td>
			       	<td>".$row['materi']."</td>
			       	<td>".$row['durasi']."</td>
			   	</tr>";
			}
		}
		$_SESSION['result'] = $tabel;
		
	} else if($button == "download"){
		// output headers so that the file is downloaded rather than displayed
		$filename = 'absen_'.$idmurid.'.csv';
		$file = fopen('php://output', 'w');

		$header = array("Tanggal", "Mata Pelajaran", "Materi", "Durasi");

		header('Content-Type: text/csv; charset=utf-8');
		header('Content-Disposition: attachment; filename='.$filename);
		fputcsv($file, $header);
		$num_column = count($header);

		while($row = $result->fetch_assoc()) {
			fputcsv($file, $row);
		}

		fclose($file);
		exit;
	}
	
	$conn->close();	
	header("Location: ../search.php");
?>