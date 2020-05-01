<?php
    require_once('../../koneksi.php');
    if (isset($_GET['nis'])) {

        $nis = $_GET['nis'];
        $sql = "delete from data_siswa_ipa where nis='$nis'";

        if(mysqli_query($conn,$sql)) {
            header("location:siswa ipa.php");
        }
        else {
            echo "<br><br>";
            echo "<div align='center'><font color='red'>Gagal menghapus data.</font></div>";
        }

        mysqli_close($conn);
    }
?>