<?php
mysql_connect("localhost","root","");
mysql_select_db("db_akademik");

$siswa = $_GET["siswa"];

$sql = mysql_query("select * from siswa where nis='$siswa'");

while ($r = mysql_fetch_array($sql)) 
{
	echo "$r[kode_sikap]";
}
?>