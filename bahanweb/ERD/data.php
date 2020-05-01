<html> 
<body> 
<?php 
 if(isset($_GET['Submit'])){ 
  $nama=$_GET['txtnama']; 
  $nim=$_GET['txtnim']; 
  $kelas=$_GET['kelas']; 
  $gender=$_GET['gender']; 
  $isi=$_GET['isi']; 
 } 
 else 
  { 
  echo("Maaf,anda harus mengakses halaman ini dari form.php"); 
  } 
  if(empty($kelas)) 
   { 
   echo("Maaf, anda harus mengiputkan kelas anda dari form.php"); 
   } 
  else 
  { 
   if(is_numeric($nama)) 
    { 
     echo("Maaf, nama harus berupa huruf"); 
    } 
   else 
    { 
     echo "<b>Hai...</b> $nama Semangat Modul 4 dan semangat mengerjakan TP<br>"; 
     echo "<b>Nim :</b> $nim <br>"; 
     echo "<b>Kelas : </b> $kelas <br><br>"; 
     echo "<b>Gender :</b> $gender<br><br>"; 
     echo "<b>Comment :</b> $isi<br><br>"; 
    } 
  } 
?> 
</body> 
</html>