<?php
	$nama = "NUR AISAH DONGORAN";
	$nim =   6706164006;
	$kelas =  "D3IF-40-03";
	
	echo "<b />";
	echo "Nama	: $nama <br> "; 
	echo "NIM	: $nim <br>";
	echo "Kelas	: $kelas <br><br>";
	
	for ($a=1; $a<=12; $a++){
		for($i= 2000000; $i <= 24000000; $i=$i+2000000){	
			echo "Bulan Ke-$a  Pendapatan = Rp. $i";
			echo "<br/>";
		$a++;
		}	
	}		
	
?>
	
	