<?php
    require_once('../../koneksi.php');
    if (isset($_GET['nip'])) {

        $nip = $_GET['nip'];
        $sql = "delete from walikelas_ipa where nip='$nip'";

        if(mysqli_query($conn,$sql)) {
            header("location:data walikelas ipa.php");
        }
        else {
            echo "<br><br>";
            echo "<div align='center'><font color='red'>Gagal menghapus data walikelas.</font></div>";
        }

        mysqli_close($conn);
    }
?>