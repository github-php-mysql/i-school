<?php

session_start();

$host ="localhost";
$user ="root";
$pass ="";
$dbname="db_akademik";

$conn = mysql_connect($host, $user, $pass);
if($conn){
	$sele=mysql_select_db($dbname);
	if (!$sele) {
		echo mysql_error();
	}
}

if(isset($_POST['login'])) {
	 $username = $_POST['username'];
	 $password = $_POST['password'];
     $level = $_POST['level'];
	 $sql = mysql_query("SELECT * FROM user WHERE username='$username' && password='$password'");
	 $num= mysql_num_rows($sql);
	 if($num==1){
		 if($level=='Admin'){
			 $_SESSION['username']= $username;
			 $_SESSION['password']= $password;
			 ?><script language="javascript">alert('Selamat Login Sukses');
			 document.location='dashadmin.html'</script><?php
		 }else if($level=='Guru'){
			 $_SESSION['username']= $username;
			 $_SESSION['password']= $password;
			 ?><script language="javascript">alert('Selamat Login Sukses');
			 document.location='dashguru.html'</script><?php
	     }else if($level=='Siswa'){
			 $_SESSION['username']= $username;
			 $_SESSION['password']= $password;
			 ?><script language="javascript">alert('Selamat Login Sukses');
			 document.location='dashsiswa.html'</script><?php
		 }
	 }else{
		 ?><script language="javascript">alert ('Maaf Login Gagal');
		 document.location='index.php' </script><?php
		 
		 include("login.php");
		 
	 }
		 
}



?>