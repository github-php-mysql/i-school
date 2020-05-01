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
                        <a href="#"><i class="fa fa-edit"></i> Master<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="inputdatasiswa.php">Siswa</a>
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

                
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Input Nilai Mata Pelajaran
                        </h1>
						
                    </div>
                </div>
				
				
               <div class="row">
                <div class="col-md-12 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Input Data Nilai Mata Pelajaran
                        </div>
                        <div class="panel-body">
                        	<div class="row">
                                <div class="col-lg-6">
                                    <form method="POST" action="<?php echo $editFormAction; ?>" role="form" name="autoSumForm">

										  <table border="0" width="80%" class="table1">	
                            			 <div class="form-group">
										 	<tr>
                                         	<td width="25%"><label>NIS</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="nis" name="nis" readonly></td>
                                         </tr>
										 
                                         <tr>
                                            <td width="6%"><label>Kelas</label></td>
                                            <td>  :  </td>
											<td width="50%"><select class="form-control" id="kelas" name="kelas">											
                                         	 <option value="">-- Pilih Kelas --</option>
													
                                           </select></td>
										   </tr>
                                            
                                
                                        
                                        
                                         <tr>
                                            <td width="30%"><label>Semester</label></td>
                                            <td>  :  </td>
											<td>  <select class="form-control" id="semster" name="semester">
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
                            					Nilai Ulangan
                        					</div>
                                         <table border="0" width="80%" class="table1">	
                                         <tr>
                                         	<td width="50%"><label>Ulangan 1</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="ulangan1" name="ulangan1"  onFocus="startCalc();" onBlur="stopCalc();" /></td>
                                         </tr>
                                         <tr>
                                            <td width="50%"><label>Ulangan 2</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="ulangan2" name="ulangan2" onFocus="startCalc();" onBlur="stopCalc();" /></td>
                                         </tr>
                                         <tr>
                                            <td width="50%"><label>Ulangan 3</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="ulangan3" name="ulangan3" onFocus="startCalc();" onBlur="stopCalc();" /></td>
                                         </tr>
                                         <tr>
                                            <td width="50%"><label>Ulangan 4</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="ulangan4" name="ulangan4" onFocus="startCalc();" onBlur="stopCalc();" /></td>
                                         </tr>
                                         <tr>
                                            <td width="50%"><label>Ulangan 5</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="ulangan5" name="ulangan5" onFocus="startCalc();" onBlur="stopCalc();" /></td>
                                         </tr>
                                          <tr>
                                            <td width="50%"><label>NRU</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="nru" name="nru" onchange="tryNumberFormat(this.form);" readonly></td>
                                         </tr>
                                         </table>
                                         
                                         
                                         </div>
                                         </td>
                                         <td width="2%"></td>
                                         <td>
                                         <div class="panel panel-info">
                        					<div class="panel-heading">
                            					Nilai Tugas
                        					</div>
                                         <table border="0" width="80%" class="table1">	
                                         <tr>
                                         	<td width="50%"><label>Tugas 1</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="tugas1" name="tugas1" onFocus="startCalc();" onBlur="stopCalc();" /></td>
                                         </tr>
                                         <tr>
                                            <td width="50%"><label>Tugas 2</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="tugas2" name="tugas2" onFocus="startCalc();" onBlur="stopCalc();" /></td>
                                         </tr>
                                         <tr>
                                            <td width="50%"><label>Tugas 3</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="tugas3" name="tugas3" onFocus="startCalc();" onBlur="stopCalc();" /></td>
                                         </tr>
                                         <tr>
                                            <td width="50%"><label>Tugas 4</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="tugas4" name="tugas4" onFocus="startCalc();" onBlur="stopCalc();" /></td>
                                         </tr>
                                         <tr>
                                            <td width="50%"><label>Tugas 5</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="tugas5" name="tugas5" onFocus="startCalc();" onBlur="stopCalc();" /></td>
                                         </tr>
                                          <tr>
                                            <td width="50%"><label>NRT</label></td>
                                            <td>  :  </td>
											<td><input type="text" class="form-control" id="nrt" name="nrt" onchange='tryNumberFormat(this.form);' readonly></td>
                                         </tr>
                                         
                                         </table>
                                         
                                        
                                         
                                         
                                         </div>
                                         </td>
                                         </tr>
                                         </table>
                                          <table width="207%" border="0">
                                           <td>
                                         <div class="panel panel-info">
                        					<div class="panel-heading">
                            					Nilai UTS,UAS & Akhir
                        					</div>
                                         <table border="0" width="94%" class="table1">	
                                         <tr>
                                         	<td width="15%"><label>Nilai UTS</label></td>
                                            <td>  :  </td>
											<td width="15%"><input type="text" class="form-control" id="uts" name="uts" onFocus="startCalc();" onBlur="stopCalc();" /></td>
                                         
                                         	<td width="2%"> </td>
                                            <td width="15%"><label>Nilai UAS</label></td>
                                            <td>  :  </td>
											<td width="15%"><input type="text" class="form-control" id="uas" name="uas" onFocus="startCalc();" onBlur="stopCalc();" /></td>
                                         	<td width="2%"> </td>
                                         
                                            <td width="15%"><label>Nilai Akhir</label></td>
                                            <td>  :  </td>
											<td width="15%"><input type="text" class="form-control" id="na" name="na" 'tryNumberFormat(this.form);' readonly/></td>
                                         </tr>
                                         <tr><td>.</td></tr>
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
                            			 <input type="hidden" name="MM_insert" value="autoSumForm">
                                    </form>
                               </div>
                               </div>
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
mysql_free_result($Recordset_kelas);

mysql_free_result($Recordset_siswa);
?>
