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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form")) {
  $updateSQL = sprintf("UPDATE guru SET nama=%s, nip=%s, jabatan=%s, jenis_kelamin=%s, hp=%s, alamat=%s WHERE kode_guru=%s",
                       GetSQLValueString($_POST['nama'], "text"),
                       GetSQLValueString($_POST['nip'], "text"),
                       GetSQLValueString($_POST['jabatan'], "text"),
                       GetSQLValueString($_POST['jenis_kelamin'], "text"),
                       GetSQLValueString($_POST['hp'], "text"),
                       GetSQLValueString($_POST['alamat'], "text"),
                       GetSQLValueString($_POST['kode_guru'], "text"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($updateSQL, $koneksi) or die(mysql_error());

  $updateGoTo = "inputdataguru.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_Recordset1 = "-1";
if (isset($_GET['kode_guru'])) {
  $colname_Recordset1 = $_GET['kode_guru'];
}
mysql_select_db($database_koneksi, $koneksi);
$query_Recordset1 = sprintf("SELECT * FROM guru WHERE kode_guru = %s", GetSQLValueString($colname_Recordset1, "text"));
$Recordset1 = mysql_query($query_Recordset1, $koneksi) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Informasi Akademik</title>
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
                <a class="navbar-brand" href="dashadmin.html"><i class="fa fa-gear"></i> <strong>Sistem Informasi Akademik</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Supratman S.pd</strong>
                                    <span class="pull-right text-muted">
                                        <em>Hari ini</em>
                                    </span>
                                </div>
                                <div>Telah menginputkan nilai Mapel Matematika...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Suharti S.pd</strong>
                                    <span class="pull-right text-muted">
                                        <em>Kemarin</em>
                                    </span>
                                </div>
                                <div>Telah menginputkan nilai Mapel Bahasa Inggris...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Drs Tuti Hartati</strong>
                                    <span class="pull-right text-muted">
                                        <em>Kemarin</em>
                                    </span>
                                </div>
                                <div>Telah menginputkan nilai Mapel Fisika...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Verifikasi Nilai</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Cetak Raport</strong>
                                        <span class="pull-right text-muted">28% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                            <span class="sr-only">28% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Input Nilai</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Input Data Master</strong>
                                        <span class="pull-right text-muted">85% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                            <span class="sr-only">85% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> Komentar Terbaru
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Pesan Terkirim
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> Tugas Baru
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Profil User</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Pengaturan</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
		<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

<li>
                        <a class="active-menu" href="dashadmin.html"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                   
<li>
                        <a href="#"><i class="fa fa-edit"></i> Master<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="inputdatasiswa.php">Siswa</a>
                            </li>
                            <li>
                                <a href="inputdatamapel.php">Mata Pelajaran</a>
                            </li>
                             <li>
                                <a href="inputdatakelas.php">Kelas</a>
                            </li>
                             <li>
                                <a href="inputdataguru.php">Guru</a>
                            </li>
                             <li>
                                <a href="inputdatakeluarga.php">Keluarga</a>
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
<li>
                        <a href="cetakrapot.php"><i class="fa fa-print"></i>Cetak Raport</span></a>
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
                            Update Data Guru
                        </h1>
						
                    </div>
                </div>
				
				
               <div class="row">
                <div class="col-md-12 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Update Data Guru
                        </div>
                        <div class="panel-body">
                        	<div class="row">
                                <div class="col-lg-6">
                             <form action="<?php echo $editFormAction; ?>" method="POST" name="form" role="form">
                            			 <div class="form-group">
                                         <table border="0" width="740" class="table1">
                                         <tr>
                                            <td width="200"><label>Kode Guru</label></td>
                                            <td width="10">  :  </td>
											<td width="300"><input type="text" class="form-control" id="kode_guru" name="kode_guru" value="<?php echo $row_Recordset1['kode_guru']; ?>" readonly/></td>
                                            <td width="20"></td>
                                           
                                            
                                         </tr>
                                          <tr>
                                            <td width="200"><label>Nama Guru</label></td>
                                            <td width="10">  :  </td>
											<td width="300"><input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row_Recordset1['nama']; ?>" /></td>
                                            <td width="20"></td>
                                           
                                         </tr>
                                          <tr>
                                            <td width="200"><label>NIP</label></td>
                                            <td width="10">  :  </td>
											<td width="300"><input type="text" class="form-control" id="nip" name="nip" value="<?php echo $row_Recordset1['nip']; ?>"/></td>
                                            <td width="20"></td>
                                            
                                         <tr>
                                            <td width="100"><label>Jenis Kelamin</label></td>
                                            <td width="10">  :  </td>
											<td width="300">
                                            	<label class="radio-inline">
                                                    <input type="radio" name="jenis_kelamin" id="jklaki" value="Laki-laki"> Laki-laki
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="jenis_kelamin" id="jkperempuan" value="Perempuan"> Perempuan
                                                </label></td>
                                         </tr>   
                                         </tr>
                                             <tr>
                                            <td width="200"><label>Alamat</label></td>
                                            <td width="10">  :  </td>
											<td width="300"><input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row_Recordset1['alamat']; ?>" /></td>
                                            <td width="20"></td>
                                            
                                         </tr>
                                          </tr>
                                             <tr>
                                            <td width="200"><label>Jabatan</label></td>
                                            <td width="10">  :  </td>
											<td width="300"><input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $row_Recordset1['jabatan']; ?>" /></td>
                                            <td width="20"></td>
                                            
                                         </tr>
                                          </tr>
                                             <tr>
                                            <td width="200"><label>No. HP</label></td>
                                            <td width="10">  :  </td>
											<td width="300"><input type="text" class="form-control" id="hp" name="hp" value="<?php echo $row_Recordset1['hp']; ?>"/></td>
                                            <td width="20"></td>
                                            
                                         </tr>
                                         <tr height="30">
                                         </tr><tr>
                                         <td width="100" ></td>
                                            <td width="10"></td>
											<td width="300">  
                                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Submit</button>
											<button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span> Reset</button></td>
                                           </tr>
                                         </table>
                                          
                                        </div>
                            			 <input type="hidden" name="MM_update" value="form">
                             </form>
                               </div>
                          </div>
                        </div>
                        <div class="panel-footer">
                            Sistem Informasi Akademik
                        </div>
                    </div>
                </div>
              
			
		
				<footer><p>Tugas Besar Miracle Team </p>
				
        
				</footer>
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
