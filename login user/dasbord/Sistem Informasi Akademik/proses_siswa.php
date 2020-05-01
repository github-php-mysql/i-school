<?php
mysql_connect("localhost","root","");
mysql_select_db("db_akademik");

$kelas = $_GET['kelas'];

$sql = mysql_query("select * from siswa where kode_kelas='$kelas'");

echo "<option>-- Pilih Siswa --</option>";

while ($r = mysql_fetch_array($sql)) 
{
	echo "<option value=$r[nis]>$r[nama]</option> \n";
}
?>