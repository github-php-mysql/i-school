<?php
$Nama   = "Nama  = Meta Mahyarani";
		$NIM    = "NIM   = 6706160003";
		$Kelas  = "Kelas = D3IF-40-03";
		
		echo $Nama; echo "<br>";
		echo $NIM ; echo "<br>";
		echo $Kelas; echo "<br>";
?>
<form action = "" method = "post">
<input type = "text" name = "txtbinatang" cols="40" rows="4"> <br>
<input type = "submit" name = "Submit" value = "submit">
</form>

<?php
	if(isset($_POST['Submit'])){
	$binatang = $_POST['txtbinatang'];
		for($i=4;$i<=$binatang;$i++){
		}
		echo $binatang."<br><br>";
		
		
	}
?>
	
	
	

