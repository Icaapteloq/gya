<?php require 'sambung.php'; ?>
<div class = "table-font">
<table style="background-color: #DCD9CD; border: 25px solid #DCD9CD; border-radius: 25px; width: fixed; align: center;background-color: #DCD9CD;">
<p><tr style='font-size:18px; font-family: poppins;'>
<td width="5%"><b>No.</b></td>
<td width="70%"><b>Topik</b></td>
<td width="25%"><b>Jenis Soalan</b></td>
</tr>
<?php
$no=1;
$data1=mysqli_query($hubung,"SELECT * FROM soalan AS q
INNER JOIN topik AS t ON t.idtopik = q.idtopik
GROUP BY jenis ORDER BY t.idtopik desc limit 0,10");
while ($info1=mysqli_fetch_array($data1))
{
?>
<tr style='font-size:16px; font-family: poppins; '>
<td style='text-align: center;'><?php echo $no; ?>
<td><?php echo $info1['topik']; ?></td>
<td><?php
if ($info1['jenis']==1){
    echo 'MCQ/TF';
}else{
    echo "FIB";
}?>
</td>
</tr>
<?php $no++; } ?>
</table><br>
<center><font style='font-size:15px; font-family: poppins;'>
* Rekod yang dipaparkan adalah 10 orang  yang terkini sahaja
*<br />Jumlah Rekod:<?php echo $no-1; ?>
</font></center>
