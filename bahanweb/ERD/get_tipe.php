<?php
	require_once ('koneksi.php');

	$judul = $_GET['id'];

    $qry = mysqli_query($conn, "select * from peminjaman where judul = 'judul'");
	
	if(mysqli_num_rows($qry) > 0)
    {	
        echo "Pilih Buku : ";
        echo "<select>";
            while($row = mysqli_fetch_row($qry)) {
                echo "<option value=$row[0]>$row[1]";
            }
        echo "</select>";
	}
?>
