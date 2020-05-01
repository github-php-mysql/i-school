<html>
<head>
<title> testing</title>

<form action = ""method = "post">
<b>Nama :<b>
<input type = "text" name = "txtnama" placeholder="Insert Nama" value="" size="40"><br><br>
<b>NIM :<b>
<input type = "text" name = "txtnim" placeholder="Insert NIM" value="" size="40"><br><br>
<b>String :<b>
<input type = "text" name = "txt" placeholder="Insert String" value="" size="40"><br><br>
<input type = "submit" name = "Submit" value = "Submit"><br>
</form>

<?php
	if(isset($_POST['Submit'])){
		$nama = $_POST['txtnama'];
		$nim = $_POST ['txtnim'];
		$string = $_POST ['txt'];
	  $x = substr ($nim, 0,6);
		switch($x){
			case '670616': $angkatan = "2016";
			break;
			case '670615': $angkatan = "2015";
			break;
			case '670614': $angkatan = "2014";
			break;
			case '670613': $angkatan = "2013";
			break;
			case '670612': $angkatan = "2012";
			break;
			default :
			$angkatan = "jangan lupa berdoa dan berusaha";
		}
		echo "<table border = 3>";
		echo "<tr><td> Nama : </td> <td> $nama </td> </tr>";
		echo "<tr><td> NIM : </td> <td> $nim</td> </td>";
		echo "<tr><td> Angkatan: </td> <td> $angkatan </th> </td>";
		echo "<tr><td> Tanggal: </td> <td>".date ("d M Y"). "</td> </tr>";
		echo "<tr><td> String Asli: </td> <td> $string </td> </tr>";
		echo "<tr><td> Panjang String: </td> <td>".strlen($string). "</td> </tr>";
		echo "<tr><td> String dibalik: </td> <td>".strrev($string). "</td> </tr>";
		echo "<tr><td> Uppercase: </td> <td>".strtoupper($string). "</td> </tr>";
		echo "<tr><td> Bold,Underline,Italic : </td> <td><b><u><i>".$string."</b></u></i></td> </tr>";
	}
		
?>
</body>
</html>