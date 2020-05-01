<html> 
<body> 
<?php 
 if(isset($_GET['Submit'])){ 
  $nama=$_GET['nama']; 
  $nim=$_GET['nim']; 
  $kelas=$_GET['kelas']; 
  $gender=$_GET['jk']; 
  $isi=$_GET['isi']; 
 } 
 else 
  { 
   die("Maaf,anda harus mengakses halaman ini dari form.php"); 
  } 
  if(empty($kelas)) 
   { 
    die("Maaf, anda harus mengiputkan kelas anda dari form.php"); 
   } 
  else 
  { 
   if(is_numeric($nama)) 
    { 
     die("Maaf, nama harus berupa huruf"); 
    } 
   else 
    { 
     echo "<b>Hai...</b> $nama<br><br>"; 
     echo "<b>Nim :</b> $nim <br><br>"; 
     echo "<b>Kelas : </b> $kelas <br><br>"; 
     echo "<b>Gender :</b> $gender<br><br>"; 
     echo "<b>Comment :</b> $isi<br><br>"; 
    } 
  } 
?> 
</body> 
</html>