<html>
<body>
Nilai 

<?php
if (isset($_GET['nilai']))
{
$nilai=$_GET['nilai'];
}
if ($nilai >= 50) {
	 echo "$nilai : Sukses<br>";
}
	else {
		echo "$nilai : Gagal<br>";
	}
?>
<br>
<p>Klik <a href ='jurnal2.html'>ini</a> untuk mengulang</p>
</body>
</html>