<style>
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  border-radius: 25px;
  font-family: poppins;
  font-size: 30px;
  background-color: none;
  float: left;
  padding: 3px 14px;
  text-decoration: none;
  transition: background-color .5s;
}

.pagination a:hover:not(.active) {
  background-color: #DCD9CD;
}

</style>

<?php
if ($_SESSION['level']=="ADMIN")
{
?>

<!-- MENU ADMIN -->
<center>
  <div style="width: 80%; ">
    <div class="pagination">
<a href="index2.php">Home</a>
<a href="papar_topik.php">Kuiz</a>
<a href="prestasi_topik.php">Prestasi Pelajar</a>
<a href="senarai_pelajar.php">Senarai Pelajar</a>
<a href="import_pelajar.php">Import Pelajar</a>
</div>
</div>
</br><br><br><br>
<?php $pengguna="DASHBOARD GURU"; ?>
</center>
<?php }else{ ?>

  </style>


<center>
  <div>
<div class="pagination">
<a href="index2.php">Home</a>
<a href="pilihan_topik.php">Mula Kuiz</a>
<a href="skor_individu.php">Prestasi</a>
</div>
</div>
</br><br><br><br>
<?php $pengguna="DASHBOARD PELAJAR"; ?>
</center>
<?php } ?>
