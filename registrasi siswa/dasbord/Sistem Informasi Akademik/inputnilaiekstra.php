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
  $insertSQL = sprintf("INSERT INTO ekstra (kode_ekstra, nama_ekstra, nilai_ekstra, pengampu) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['kode_ekstra'], "text"),
                       GetSQLValueString($_POST['nama_ekstra'], "text"),
                       GetSQLValueString($_POST['nilai_ekstra'], "text"),
                       GetSQLValueString($_POST['pengampu'], "text"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($insertSQL, $koneksi) or die(mysql_error());

  $insertGoTo = "inputnilaiekstra.php";
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
				url:"proses_ekstra.php",
				data:"siswa=" + siswa,
				success:function(data)
				{
					$("#kode_ekstra").val(data);
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
                            Input Nilai Ekstraurikuler
                        </h1>
						
                    </div>
                </div>
				
				
               <div class="row">
                <div class="col-md-12 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Input Data Nilai Ekstrakurikuler
                        </div>
                        <div class="panel-body">
                        	<div class="row">
                                <div class="col-lg-6">
                                    <form method="POST" action="<?php echo $editFormAction; ?>" name="form" role="form">
                            			 <div class="form-group">
                                         <table border="0" width="198%" class="table1">
                                         <tr>
                                            <td width="6%"><label>Kelas</label></td>
                                            <td>  :  </td>
											<td width="12%"><select class="form-control" id="kelas" name="kelas">											
                                         	 <option value="">Kelas</option>
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
                                            <td>  :  </td>
											<td width="16%"><select class="form-control" id="siswa" name="siswa" >
                                            <option>-- Pilih Siswa --</option>
                                           </select></td>
                                            
                                            <td width="2%"></td>
                                            <td width="10%"><label>Kode Ekstra</label></td>
                                            <td>  :  </td>
											<td width="12%"><input type="text" class="form-control" id="kode_ekstra" name="kode_ekstra" readonly></td>
                                            <td width="2%"></td>
                                             <td width="8%"><label>Ekstrakurikuler</label></td>
                                            <td>  :  </td>
											<td width="17%"><select class="form-control" id="nama_ekstra" name="nama_ekstra">
                                                    <option>Basket</option>
                                                    <option>Futsal</option>
                                                    <option>Karya Ilmiah Remaja</option>
                                                    <option>Paduan Suara</option>
                                                    <option>Volly Ball</option>
                                                    <option>Pramuka</option>
                                                    <option>Seni Tari</option>
                                                    <option>Renang</option>
                                                    <option>Sepak Bola</option>
                                                    <option>Bulu Tangkis</option>
                                                    <option>Sepak Takraw</option>
      											</select></td>
                                         </tr>
                                         </table>
                                         <table border="0" width="60%" class="table1">	
                                         <tr>
                                         	<td width="40%"><label>NIS</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="nis" name="nis" readonly></td>
                                         </tr>
                                         <br>
                                         <tr>
                                         	<td width="40%"></td>
                                            <td>.</td>
											<td></td>
                                         </tr>
                                         <tr>
                                            <td width="40%"><label>Guru Pengampu</label></td>
                                            <td>  :  </td>
											<td width="50%"><select class="form-control" id="pengampu" name="pengampu">
                                                    <?php
														mysql_connect("localhost","root","");
														mysql_select_db("db_akademik");

														$sql = mysql_query("select * from guru order by kode_guru");
														while ($p = mysql_fetch_array($sql)) 
														{
															echo "<option value=$p[kode_guru]>$p[nama]</option> \n";
														}
													?>
      											</select></td>
                                         </tr>
                                         
                                         </table></br>
                                          <table width="207%" border="0">
                                           <td>
                                         <div class="panel panel-info">
                        					<div class="panel-heading">
                            					Nilai Ekstra
                        					</div>
                                         <table border="0" width="94%" class="table1">	
                                         <tr>
                                         	<td width="15%"><label>Nilai Ekstra</label></td>
                                            <td width="2%">  :  </td>
											<td width="15%"><input type="text" class="form-control" id="nilai_ekstra" name="nilai_ekstra" ></td>
                                            <td width="67%"></td>
                                         </tr>
                                         <tr>
                                         <td width="15%">.</td>
                                         <td width="2%"></td>
                                         <td width="15%"></td>
                                         <td width="67%"></td>
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