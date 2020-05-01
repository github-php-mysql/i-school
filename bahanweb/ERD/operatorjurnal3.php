<?php
$uname = $_GET['uname'];
$pw = $_GET['pw'];

$idvalid= "6706160032";
$pwvalid= "6706160032";

//if (isset($_GET['btnsubmit'])){
	if ($uname==null&& $pw==null){
	echo "Inputan Masih Kosong<br>";
}
	else if ($uname == $idvalid && $pw == $pwvalid){
		echo "Selamat Anda Berhasil!! <br>";
	}
	else if ($uname != $idvalid && $pw == $pwvalid ){
		echo "Username Anda Salah <br>";
	}
	else if ($pw != $pwvalid && $uname == $idvalid){
		echo "Password Anda Salah<br>";
	}
?>