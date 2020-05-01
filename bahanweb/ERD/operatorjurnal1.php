<?php
if (isset($_GET['vx']) AND isset($_GET['vy']))
{
$vx=$_GET['vx'];
 $vy=$_GET['vy'];
 
$jml = ($vx+$vy);
$krg =($vx-$vy);
$kali= ($vx*$vy);
$bagi= ($vx/$vy);
 
 echo "Hasil Penjumlahan : $jml <br>";
 echo "Hasil Pengurangan : $krg<br>";
 echo "Hasil Perkalian : $kali<br>";
 echo "Hasil Pembagian : $bagi<br>";
 }
 ?>