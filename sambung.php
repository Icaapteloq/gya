<?php
$host="localhost";
$user="root";
$password="";
$database="baby";

$hubung=mysqli_connect($host,$user,$password,$database);
if (mysqli_connect_errno()) {
	echo "Proses sambung ke pangkalan data gagal";
	exit();
}
//////////////////////
//PENETAPAN SISTEM ANDA
$lencana="lencana.png";
$subjek="MATEMATIK: SPM";
$nama_sekolah="SMK METHODIST BOY'S SCHOOL <BR>
               JALAN HANG JEBAT , 50150 KUALA LUMPUR, <BR>
			         WILAYAH PERSEKUTUAN KUALA LUMPUR.";
$nama_sistem="SISTEM PENILAIAN KENDIRI";
$motto_sistem="SOALAN: MCQ & TRUE/FALSE & FILL IN THE BLANK";
$footer="Self Monitoring Learning Sistem";
$logo="logo.jpg";
?>
