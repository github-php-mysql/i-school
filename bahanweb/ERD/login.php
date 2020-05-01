<?php
	session_start();
	if (isset ($_POST['login'])){
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		if($nama=="Nur Aisah Dongoran" && $nim = "6706164006"){
			$_SESSION['login'] = $nama;
			echo "Masuk <a href='session2.php'>Halaman </a>
			ini untuk menuju halaman pemeriksaan session";
		}
	}else{
	?>
	<html>
	<head>
	<title>login</title>
	</head>
	<body>
		<form action ="" method="post">
		<h2><b>Login untuk memulai session</b></h2>
		Nama : <input type="text" name="nama"/><br><br>
		NIM : <input type="text" name="nim"/><br><br>
		<input type="submit" name="login" value="Log in"/> 
		</form>
	</body>
	</html>
	<?php } ?>