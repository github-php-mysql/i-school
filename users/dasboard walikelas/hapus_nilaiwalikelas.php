<?php
    require_once('../../koneksi.php');
    if (isset($_GET['nis'])) {

        $nis = $_GET['nis'];
        $sql = "delete from nilai_ipa where nis='$nis'";

        if(mysqli_query($conn,$sql)) {
            header("location:data nilai.php");
        }
        else {
            echo "<br><br>";
            echo "<div align='center'><font color='red'>Gagal menghapus data Nilai.</font></div>";
        }

        mysqli_close($conn);
    }
?>