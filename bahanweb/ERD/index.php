<?php
        require_once('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
    <script src="get_tipe.js"></script>
</head>
<body>
   
<form>
<!--
    <select onchange="tampilkanTipeHP(this.value)">
        <option value="">---Pilih Merk---</option>
        <option value="1">Nokia</option>
        <option value="2">Samsung</option>
    </select>
-->
   Pilih Buku
    <select onchange="tampilkanTipeHP(this.value)">
        <option value="">--Pilih--</option>
        <?php
            $qry = mysqli_query($conn, "select * from judul");
            while ($row = mysqli_fetch_row($qry))
            {
                echo "<option value=$row[0]>$row[1]";
            }
        ?>    
    </select>
    <br><br>
    <div id="demo_pilih"></div>
    
</form>
</body>
</html>
