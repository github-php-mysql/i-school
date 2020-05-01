<?php
include("../../koneksi.php");

function get_nilai_ipa($id_siswa){
    global $conn;
    $query = "SELECT * FROM nilai_ipa WHERE id='$id_siswa'";
    $result = mysqli_query($conn, $query);
    var_dump($result);
}

function get_nilai_ips($id_siswa){
    $query = "SELECT * FROM nilai_ips WHERE id='$id_siswa'";
    mysqli_query($conn, $query);
}

if(isset($_GET['tipe'])) {
    if(isset($_GET['id'])==false) die();
    $id = $_GET['id'];
    switch($_GET['tipe']){
        case 'harian_ipa':
            get_nilai_ipa($id);
            break;
    }
}

