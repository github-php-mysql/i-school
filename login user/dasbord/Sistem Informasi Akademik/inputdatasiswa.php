<?php require_once('Connections/koneksi.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {
  $insertSQL = sprintf("INSERT INTO siswa (nis, nama, tempat_lahir, tanggal_lahir, alamat, sekolah_asal, jenis_kelamin, agama, hp, kode_keluarga, kode_kelas, kode_sikap, kode_ekstra) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nis'], "text"),
                       GetSQLValueString($_POST['nama'], "text"),
                       GetSQLValueString($_POST['tempat_lahir'], "text"),
                       GetSQLValueString($_POST['tanggal_lahir'], "date"),
                       GetSQLValueString($_POST['alamat'], "text"),
                       GetSQLValueString($_POST['sekolah_asal'], "text"),
                       GetSQLValueString($_POST['jenis_kelamin'], "text"),
                       GetSQLValueString($_POST['agama'], "text"),
                       GetSQLValueString($_POST['hp'], "text"),
                       GetSQLValueString($_POST['kode_keluarga'], "text"),
                       GetSQLValueString($_POST['kode_kelas'], "text"),
                       GetSQLValueString($_POST['kode_sikap'], "text"),
                       GetSQLValueString($_POST['kode_ekstra'], "text"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($insertSQL, $koneksi) or die(mysql_error());

  $insertGoTo = "inputdatasiswa.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

$maxRows_Recordset1 = 10;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

$colname_Recordset1 = "-1";
if (isset($_GET['nis'])) {
  $colname_Recordset1 = $_GET['nis'];
}
mysql_select_db($database_koneksi, $koneksi);
$query_Recordset1 = sprintf("SELECT * FROM siswa ORDER BY nis ASC", GetSQLValueString($colname_Recordset1, "text"));
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $koneksi) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Unit Informasi Akademik</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 
     
</head>

<body>
     <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashadmin.html"><i class="fa fa-gear"></i> <strong>Unit Informasi Akademik</strong></a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">                
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Profil User</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Pengaturan</a>
                        </li>
                        <li><a href=""><i class="fa fa-plus-square fa-fw"></i> Register</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="form.html"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
		<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                    <li>
                        <a class="active-menu" href="dashadmin.html"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                   
                    <li>
                         <a href="#"><i class="fa fa-edit"></i> Master Data <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="inputdatasiswa.php">Siswa</a>
                            </li>
                             <li>
                                <a href="inputdataguru.php">Wali Kelas</a>
                            </li>
							       <li>
                                <a href="inputdatakeluarga.php">Orangtua</a>
                            </li>
							<li>
								<a href ="inputdatamapel.php"> Mata Pelajaran </a>
							</li>
							    <li>
                                <a href="inputdatakelas.php">Kelas</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> Input Nilai<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="inputnilaimapel.php">Nilai Mata Pelajaran</a>
                            </li>
                            <li>
                                <a href="inputnilaiekstra.php">Nilai Ekstrakurikuler</a>
                            </li>
                            <li>
                                <a href="inputnilaisikap.php">Nilai Sikap</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-file"></i> Laporan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="datasiswa.php">Laporan Data Siswa</a>
                            </li>
                            <li>
                                <a href="datamapel.php">Laporan Data Mata Pelajaran</a>
                            </li>
                            <li>
                                <a href="datakelas.php">Laporan Data Kelas</a>
                            </li>
                             <li>
                                <a href="dataguru.php">Laporan Data Guru</a>
                            </li>
                             <li>
                                <a href="datakeluarga.php">Laporan Data Keluarga</a>
                            </li>
                        </ul>
                    </li>

                 
                
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Entry Data Siswa
                        </h1>
						
                    </div>
                </div>
				
				
               <div class="row">
                <div class="col-md-12 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Input Data Siswa
                        </div>
                        <div class="panel-body">
                        	<div class="row">
                                <div class="col-lg-6">
                                    <form method="POST" action="<?php echo $editFormAction; ?>" name="form" role="form">
                            			 <div class="form-group">
                                         <table border="0" width="840" class="table1">
                                         <tr>
                                            <td width="100"><label>Nis</label></td>
                                            <td width="10">   :  </td>
											<td width="300"><input type="text" class="form-control" id="nis" name="nis"></td>
                                            <td width="20"></td><br>
                                                                                       
                                         </tr>
                                          <tr>
                                            <td width="100"><label>Nama</label></td>
                                            <td width="10">   :  </td>
											<td width="300"><input type="text" class="form-control" id="nama" name="nama"></td>
                                            <td width="20"></td>
                                            
                                         </tr>
                                          <tr>
                                            <td width="100"><label>Tempat Lahir</label></td>
                                            <td width="10">   :  </td>
											<td width="300"><input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"></td>
                                            <td width="20"></td>
                                            
                                         </tr>
                                          <tr>
                                            <td width="100"><label>Tanggal Lahir</label></td>
                                            <td width="10">   :  </td>
											<td width="300"><input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"></td>

                                         </tr>
                                           <tr>
                                            <td width="100"><label>Alamat </label></td>
                                            <td width="10">   :  </td>
											<td width="300"><input type="text" class="form-control" id="alamat" name="alamat"></td>
                                            
                                         </tr>
                                         <tr>
                                            <td width="100"><label>Jenis Kelamin</label></td>
                                            <td width="10">   :  </td>
											<td width="300">
                                            	<label class="radio-inline">
                                                    <input type="radio" name="jenis_kelamin" id="jklaki" value="Laki-laki"> Laki-laki
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="jenis_kelamin" id="jkperempuan" value="Perempuan"> Perempuan
                                                </label></td>
                                         </tr>
                                         <tr>
                                            <td width="100"><label>Sekolah Asal</label></td>
                                            <td width="10">   :  </td>
											<td width="300"><input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal"></td>
                                         </tr>
                                           <tr>
                                            <td width="100"><label>Agama</label></td>
                                            <td width="10">   :  </td>
											<td width="300"><input type="text" class="form-control" id="agama" name="agama"></td>
                                         </tr>
                                           <tr>
                                            <td width="100"><label>No. HP</label></td>
                                            <td width="10">   :  </td>
											<td width="300"><input type="text" class="form-control" id="hp" name="hp"></td>
                                         </tr>
										 <tr>
										 <td width="100"><label>Kode kelas</label></td>
                                            <td width="10">   :</td>
											<td width="300"><input type="text" class="form-control" id="kode_kelas" name="kode_kelas"></td>
											</tr>
											<tr>
										 <td width="100"><label>Kode Ekstrakurikuler</label></td>
                                            <td width="10">   :</td>
											<td width="300"><input type="text" class="form-control" id="kode_ekstra" name="kode_ekstra"></td>
											</tr>
											<tr>
											<td width="100"><label>Kode Keluarga</label></td>
                                            <td width="10">   :</td>
											<td width="300"><input type="text" class="form-control" id="kode_keluarga" name="kode_keluarga" ></td>
											</tr>
                                         <tr height="30">
                                            <td width="100"></td>
                                            <td width="10"></td>
											<td width="300"></td>
                                            </tr><tr>
                                         <td width="100" ></td>
                                            <td width="10"></td>
											<td width="300">  
                                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Submit</button>
											<button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span> Reset</button></td>
                                           </tr>
                                         </table>
                                          
                                        </div>
                            			 <input type="hidden" name="MM_insert" value="form">
                                    </form>
                               </div>
                               </div>
                        </div>

                    </div>
             
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
 

</body>

</html>
<?php
mysql_free_result($Recordset1);
?>
