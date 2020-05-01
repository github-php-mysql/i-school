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
  $insertSQL = sprintf("INSERT INTO sikap (kode_sikap, semester, kelakuan, kerajinan, kerapian, ijin, sakit, alpha) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['kode_sikap'], "text"),
                       GetSQLValueString($_POST['semester'], "text"),
                       GetSQLValueString($_POST['kelakuan'], "text"),
                       GetSQLValueString($_POST['kerajinan'], "text"),
                       GetSQLValueString($_POST['kerapian'], "text"),
                       GetSQLValueString($_POST['ijin'], "text"),
                       GetSQLValueString($_POST['sakit'], "text"),
                       GetSQLValueString($_POST['alpha'], "text"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($insertSQL, $koneksi) or die(mysql_error());

  $insertGoTo = "inputnilaisikap.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
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
    <script type="text/javascript" src="jquery.min.js"></script>

	<script>
	$(document).ready(function()
	{
		$("#kelas").change(function()
		{
			var kelas = $("#kelas").val();
			$.ajax({
				url:"proses_siswa.php",
				data:"kelas=" + kelas,
				success:function(data)
				{
					$("#siswa").html(data);
				}
			});
		});

		$("#siswa").change(function(){
			var siswa = $("#siswa").val();
			$.ajax({
				url: "proses_nis.php",
				data: "siswa=" + siswa,
				success: function(data)
				{
					$("#nis").val(data);
				}
			});
		});
		
		$("#siswa").change(function()
		{
			var siswa = $("#siswa").val();
			$.ajax({
				url:"proses_sikap.php",
				data:"siswa=" + siswa,
				success:function(data)
				{
					$("#kode_sikap").val(data);
				}
			});
		});
	});
	</script>
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
                            Input Nilai Sikap
                        </h1>
						
                    </div>
                </div>
				
				
               <div class="row">
                <div class="col-md-12 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Input Data Nilai Sikap
                        </div>
                        <div class="panel-body">
                        	<div class="row">
                                <div class="col-lg-6">
                                    <form method="POST" action="<?php echo $editFormAction; ?>" name="form" role="form">
                            			 <div class="form-group">
                                         <table border="0" width="198%" class="table1">
                                         <tr>
                                            <td width="7%"><label>Kelas</label></td>
                                            <td width="2%">  :  </td>
											<td width="15%"><select class="form-control" id="kelas" name="kelas">											
                                         	 <option value="">-- Pilih Kelas --</option>
													<?php
														mysql_connect("localhost","root","");
														mysql_select_db("db_akademik");

														$sql = mysql_query("select * from kelas order by kode_kelas");
														while ($p = mysql_fetch_array($sql)) 
														{
															echo "<option value=$p[kode_kelas]>$p[nama_kelas]</option> \n";
														}
													?>
                                           </select></td>
                                            <td width="2%"></td>
                                            <td width="13%"><label>Nama Siswa</label></td>
                                            <td width="2%">  :  </td>
											<td width="19%"><select class="form-control" id="siswa" name="siswa" >
                                            <option>-- Pilih Siswa --</option>
                                           </select></td>
                                           <td width="2%"></td>
                                            <td width="10%"><label>Kode Sikap</label></td>
                                            <td>  :  </td>
											<td width="12%"><input type="text" class="form-control" id="kode_sikap" name="kode_sikap" readonly></td>
                                            
                                          <td width="2%"></td>
                                            <td width="10%">.</td>
                                            <td>   </td>
											<td width="12%"></td>
                                            <td width="2%"></td>
                                             <td width="8%"></td>
                                            <td>  . </td>
											<td width="17%"></td>
                                         </tr>
                                         </table>
                                         <table border="0" width="50%" class="table1">	
                                         <tr>
                                         	<td width="30%"><label>NIS</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="nis" name="nis" readonly></td>
                                         </tr>
                                         <br>
                                         <tr>
                                         	<td width="30%"></td>
                                            <td>.</td>
											<td></td>
                                         </tr>
                                         <tr>
                                            <td width="30%"><label>Semester</label></td>
                                            <td>  :  </td>
											<td><select class="form-control" id="semster" name="semester">
													<option>Semester 1</option>
                                                    <option>Semester 2</option>
                                                    <option>Semester 3</option>
                                                    <option>Semester 4</option>
                                                    <option>Semester 5</option>
													<option>Semester 6</option>
													</select></td>
                                         </tr>
                                         
                                         </table></br>
                                          <table border="0" width="207%">
                                         <tr>
                                         <td>
                                         <div class="panel panel-info">
                        					<div class="panel-heading">
                            					Nilai Kepribadian
                        					</div>
                                         <table border="0" width="80%" class="table1">	
                                         <tr>
                                         	<td width="50%"><label>Kelakuan</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="kelakuan" name="kelakuan" ></td>
                                         </tr>
                                         <tr>
                                            <td width="50%"><label>Kerajinan</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="kerajinan" name="kerajinan"></td>
                                         </tr>
                                         <tr>
                                            <td width="50%"><label>Kerapian</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="kerapian"  name="kerapian"></td>
                                         </tr>
                                         <tr>
                                         <td width="50%">.</td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         </tr>
                                         </table>
                                         
                                         
                                         </div>
                                         </td>
                                         <td width="2%"></td>
                                         <td>
                                         <div class="panel panel-info">
                        					<div class="panel-heading">
                            					Nilai Kehadiran
                        					</div>
                                         <table border="0" width="80%" class="table1">	
                                         <tr>
                                         	<td width="50%"><label>Ijin</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="ijin" name="ijin" ></td>
                                         </tr>
                                         <tr>
                                            <td width="50%"><label>Sakit</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="sakit" name="sakit" ></td>
                                         </tr>
                                         <tr>
                                            <td width="50%"><label>Alpha</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="alpha" name="alpha" ></td>
                                         </tr>
                                         <tr>
                                         <td width="50%">.</td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         </tr>
                                         </table>
                                         
                                         </div>
                                         </td>
                                         </table>
                                         <table border="0" class="table1">
                                         <tr>
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