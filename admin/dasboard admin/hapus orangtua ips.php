<?php
    require_once('../../koneksi.php');
    if (isset($_GET['username'])) {

        $username = $_GET['username'];
        $sql = "delete from orang_tua_ips where username='$username'";

        if(mysqli_query($conn,$sql)) {
            header("location:data orangtua ips.php");
        }
        else {
            echo "<br><br>";
            echo "<div align='center'><font color='red'>Gagal menghapus data orang_tua.</font></div>";
        }

        mysqli_close($conn);
    }
?>