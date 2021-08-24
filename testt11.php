<center><h2>TOPIK: <?php echo $getTopik['topik'];?></h2>
</center>
<main>
<table width="70%" border="0" align="center">
<tr><td><h3>Arahan kepada pelajar:</h3></td></tr>
<tr><td>Jawapan semua soalan. Pilih jawapan yang terbaik.</td></tr>
<tr><td>
<ul>
<li>Jumlah soalan: <strong><?php echo $total; ?>
</strong></li>
<li>Jenis Soalan: <strong><?php
if($getSoalan['jenis']==1){
echo "Berbilang Jawapan dan Benar/Palsu";
}else{
echo "Isikan Tempat Kosong";
}
?></strong></li>
<li>Peruntukan Masa: <strong><?php echo $total*0.5; ?> minit</strong></li>
</ul><br>
<a href="soalan_papar.php?n=1&idtopik=<?php echo $topik_pilihan;?>&total=<?php echo $total;?>"> <button>MULAKAN</button></a>
<a href="pilihan_topik.php"><button>BATALKAN</button></a>
</td>
</tr>
</table>
