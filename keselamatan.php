<?php
session_start();
//Mulakan sesi login
if(!isset($_SESSION['idpengguna'])) {
	//jika belum login, lencongkan ke fail ini_get
	header('Location: index.php');
	exit(); }
?>
