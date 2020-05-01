	
	<b>Nama</b> : NUR AISAH DONGORAN <br>
	<b>NIM </b>: 6706164006<br>
	<b>Kelas </b>: D3IF-40-03<br><br>
	
	<form action =""method="post">

	<textarea name ="txthewan" cols="40"rows="4"></textarea><br><br>
	<input type = "submit" name = "Submit" value = "submit">
	</form>
	
	
	<?php
	
	if(isset($_POST['Submit'])){
	$hewan = $_POST['txthewan'] ;
	$input= explode("."$hewan);
		foreach($input as $data){
		echo "$data<br>";
		}
	}
			
?>
		
		



	
	
	