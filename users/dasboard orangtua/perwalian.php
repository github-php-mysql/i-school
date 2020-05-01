<!DOCTYPE html>

<?php
	include "../../koneksi.php";
	session_start();
    if(isset($_SESSION['nis']) && isset($_SESSION['password_orangtua'])) {
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perwalian</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
<link rel='stylesheet' type='text/css' href='../../bahanweb/assets2/plugins/pines-notify/jquery.pnotify.default.css' /> 
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
     
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu"><li class="treeview">
          <a href="../ortu.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        
	  
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Data Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="data nilai.php"><i class="fa fa-circle-o"></i>Nilai Siswa</a></li>
			<li><a href="data absensi.php"><i class="fa fa-circle-o"></i>Daftar Hadir Siswa</a></li>
			<li><a href="data pembayaran.php"><i class="fa fa-circle-o"></i>Pembayaran Siswa</a></li>
		  </ul>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">

    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Chat</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
				  <th>User<th>
                  <th>Tanggal</th>
                  <th>Keterangan</th>
				  <th>Action</th>
                </tr>
				 <?php
						if (isset($_GET['cari'])) {
						  $cari = $_GET['cari'];
						}
						if (empty($cari)) {
						  $qry = mysqli_query($conn, "SELECT * from perwalian ");
						} else {
						  $qry = mysqli_query($conn, "SELECT * from perwalian where nama like '%".$cari."%'");
						}

						while ($data = mysqli_fetch_array($qry)) {
				?>
                <tr>
                  <td><?php echo "<span class='label label-success'>".$data['nama']."</span>"; ?></td>
				  <td><?php echo "<span class='label label-warning'>".$data['nama_ayah']."</span>"; ?></td>
                  <td><?php echo $data['date']; ?></td>
				  <td><?php echo $data['keterangan']; ?></td>
				  <td><a href="hapus chat.php?nis=<?php echo $data['nis']; ?>" onclick="return confirm('Apakah anda yakin menghapus data chat ini?')">
							<span data-toggle="tooltip" title="Hapus Chat"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
							</center>
							</a>
				  </td>
                </tr>
				<?php    
					}
				?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
	  
	  
	  
	  
	  
	  
	  
	  
	   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tulis Pesan
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
			
			
				<?php
					require_once('../../koneksi.php');
					$nis = $_SESSION['nis'];
					$qry = mysqli_query ($conn, "select * from data_siswa_ipa where nis = '$nis'");
					if ($data = mysqli_fetch_array($qry)){
						$nis = $data['nis'];
				?>
					
            <div class="box-body pad">
              <form method="post">
			  <input type="hidden" name="nama_ayah" value="<?php echo $data['nama_ayah'];?>">
			  <input type="hidden" name="nis" value="<?php echo $data['nis'];?>">
              <textarea class="textarea" name="pesan" placeholder="Masukan Text Disini" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              <input type="submit" name="kirim" value="kirim">
			  </form>
			  <?php
									if (isset($_POST['kirim']))
									{
										$tanggal = date("Y-m-d");
										$nama = $_POST['nama_ayah'];
										$pesan = $_POST['pesan']; 
										$nis = $_POST['nis']; 
										
											$sql = "insert into perwalian (date, keterangan, nama, nis) 
											values ('$tanggal', '$pesan', '$nama', '$nis')";

											if(mysqli_query($conn,$sql)) 
											{
											echo "<script>alert('Pesan Dikirim');document.location='perwalian.php'</script>";
										}
									}
			  ?>
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

<script type='text/javascript' src='../../bahanweb/assets2/plugins/pulsate/jQuery.pulsate.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/plugins/pines-notify/jquery.pnotify.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/demo/demo-alerts.js'></script> 
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
</body>
</html>

<?php
	}}
?>