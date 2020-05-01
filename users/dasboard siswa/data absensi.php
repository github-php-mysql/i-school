<!DOCTYPE html>

<?php
	include "../../koneksi.php";
	session_start();
    if(isset($_SESSION['nis']) && isset($_SESSION['password'])) {
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Data Absensi</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../bahanweb/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../bahanweb/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../../bahanweb/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../../bahanweb/plugins/pace/pace.min.css">
  <script src="../../bahanweb/plugins/pace/pace.min.js"></script>
  
  
<link rel="stylesheet" href="../../bahanweb/assets2/css/styles.css?=121">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'> 
<link href='../../bahanweb/assets2/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher'> 
<link href='../../bahanweb/assets2/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'> 
<link rel='stylesheet' type='text/css' href='../../bahanweb/assets2/plugins/datatables/dataTables.css' /> 
<link rel='stylesheet' type='text/css' href='../../bahanweb/assets2/plugins/codeprettifier/prettify.css' /> 
<link rel='stylesheet' type='text/css' href='../../bahanweb/assets2/plugins/form-toggle/toggles.css' /> 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">

    <!-- Logo -->
    <div class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Menu</span>
      <!-- logo for regular state and mobile devices -->
      <img src="../logo/logo.png" width="auto" height="36px">
    </div>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">

      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
     <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu"><li class="treeview">
          <a href="../siswa.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-file"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="data nilai.php"><i class="fa fa-circle-o"></i> Laporan Data Nilai</a></li>
			<li class="active"><a href="data absensi.php"><i class="fa fa-circle-o"></i> Laporan Data Absensi</a></li>
			<li><a href="data pembayaran.php"><i class="fa fa-circle-o"></i> Laporan Data pembayaran</a>
          
		  </ul>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	
    <section class="content-header">
		<h2>Data Absensi Siswa</h2>
    </section>

    <section class="content">
      <div class="row">
                <div class="col-md-12 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Table Data Absensi
                        </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div class="box-body table-responsive no-padding">
              <table class="table table-bordered">
			  <?php
					require_once('../../koneksi.php');
					$nis = $_SESSION['nis'];
					$qry = mysqli_query ($conn, "select * from kehadiran_ipa where nis = '$nis'");
					$no = 1;
					if ($data = mysqli_fetch_array($qry)){
						$nis2 = $data['nis'];
				?>
                <tr>
				  <th>NAMA</th>
				  <th>DATE</th>
				  <th>SENIN</th>
				  <th>SELASA</th>
				  <th>RABU</th>
				  <th>KAMIS</th>
				  <th>JUMAT</th>
				  <th>SABTU</th>
				  
				  <th style="width: 40px">KEHADIRAN</th>
                  <th style="width: 40px">SAKIT</th>
				  <th style="width: 40px">IZIN</th>
				  <th style="width: 40px">ALFA</th>
                </tr>
		
                <tr>
                  <td>
                    <?php echo $data['nama'];?>
                  </td>
				  <td><?php
						$qry1 = mysqli_query ($conn,"select tanggal from kehadiran_ipa where nis = '$nis'");
						if ($data1 = mysqli_fetch_array($qry1)){
							echo $data1['tanggal'];
						}
					?></td>
				  <td><span class="badge bg-light-blue">SAKIT</span></td>
				  <td><?php
						$qry1 = mysqli_query ($conn,"select kehadiran from kehadiran_ipa where nis = '$nis'");
						if ($data1 = mysqli_fetch_array($qry1)){
							echo "<span class='badge bg-green'>".$data1['kehadiran']."</span>";
						}
					?>
					</td>
				  <td><span class="badge bg-yellow"></span></td>
				  <td><span class="badge bg-green"></span></td>
				  <td><span class="badge bg-green"></span></td>
                  <td><span class="badge bg-red"></span></td>
				  
				  <th></th>
				  <th>1</th>
				  <th>1</th>
				  <th></th>
				  
                </tr>
              </table>
            </div>
          </div>
		  </div>
		  </div>
		  </div>
		  </section>
	
  </div>
 <footer role="contentinfo">
        <div class="clearfix">
            <ul class="list-unstyled list-inline pull-left">
			<li><button class="pull-right btn btn-inverse-alt btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
            </li>
			</ul>
			<ul class="list-unstyled list-inline pull-right">
			<li>I-Schools Copyright © 2017 by SkyLight
			</li>
		</div>
    </footer>
  <div class="control-sidebar-bg"></div>
</div>

<script src="../../bahanweb/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../../bahanweb/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../bahanweb/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../../bahanweb/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../../bahanweb/plugins/fastclick/fastclick.js"></script>
<script src="../../bahanweb/dist/js/app.min.js"></script>
<script src="../../bahanweb/dist/js/demo.js"></script>


<script type='text/javascript' src='../../bahanweb/assets2/js/jqueryui-1.10.3.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/js/bootstrap.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/js/enquire.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/js/jquery.cookie.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/js/jquery.nicescroll.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/plugins/codeprettifier/prettify.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/plugins/easypiechart/jquery.easypiechart.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/plugins/sparklines/jquery.sparklines.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/plugins/form-toggle/toggle.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/plugins/datatables/jquery.dataTables.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/plugins/datatables/dataTables.bootstrap.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/demo/demo-datatables.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/js/placeholdr.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/js/application.js'></script>
<script type='text/javascript' src='../../bahanweb/assets2/demo/demo.js'></script>
 

<!--modal-->
<script type='text/javascript' src='../../bahanweb/assets2/plugins/bootbox/bootbox.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/demo/demo-modals.js'></script> 

<!--table-->
<script type="text/javascript" language="javascript" src="../../bahanweb/jcss/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script src="../../bahanweb/jcss/js/dynamic_table_init.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
<?php
	}}
?>