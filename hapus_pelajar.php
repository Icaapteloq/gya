<?php
require 'sambung.php';
require 'keselamatan.php';

$pelajar_hapus = $_GET['idpengguna'];
$hapuskan1 = mysqli_query($hubung, "DELETE FROM pengguna WHERE idpengguna ='$pelajar_hapus'");
$hapuskan2 = mysqli_query($hubung, "DELETE FROM perekodan WHERE idpengguna ='$pelajar_hapus'");
echo "<script>alert('Hapus Pelajar berjaya'); window.location='senarai_pelajar.php'</script>";
?>
