<?php
mysql_connect("localhost","root","");
mysql_select_db("db_akademik");

$mapel = $_GET["mapel"];

$sql = mysql_query("select * from mapel where kode_mapel='$mapel'");

while ($r = mysql_fetch_array($sql)) 
{
	echo "$r[kode_mapel]";
}
?>