<!DOCTYPE html>

<?php
    require_once('../../koneksi.php');
     
    $nip = $_GET['nip'];
    $qry = mysqli_query($conn, "SELECT * FROM walikelas_ipa where nip='$nip'");
    $data = mysqli_fetch_array($qry);
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Wali-Kelas</title>
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
      <span class="logo-lg">I - Schools</span>
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
          <a href="../admin.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              
            </span>
          </a>
 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Input Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="input siswa.php"><i class="fa fa-circle-o"></i> Siswa</a></li>
			<li><a href="input kelas.php"><i class="fa fa-circle-o"></i> Kelas</a></li>       
            <li><a href="input walikelas.php"><i class="fa fa-circle-o"></i> Wali Kelas</a></li>
            <li><a href="input orangtua.php"><i class="fa fa-circle-o"></i> Orang Tua</a></li>
		  </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-file"></i> <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="data siswa.php"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
            <li><a href="data kelas.php"><i class="fa fa-circle-o"></i> Data Kelas</a></li>
            <li><a href="data walikelas.php"><i class="fa fa-circle-o"></i>  Data Wali Kelas</a></li>
			<li><a href="data orangtua.php"><i class="fa fa-circle-o"></i> Data Orang Tua</a></li>
			<li><a href="data nilai.php"><i class="fa fa-circle-o"></i>  Data Nilai</a></li>
			<li><a href="data absensi.php"><i class="fa fa-circle-o"></i>  Data Daftar Hadir</a></li>
			<li><a href="data pembayaran.php"><i class="fa fa-circle-o"></i> Data pembayaran</a>
		  </ul>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content">
      <div class="row">
	  
	  <!--masukan kode disini-->
	  
	  	  <div class="alert alert-dismissable alert-warning" id="pulsate1">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<i class="fa fa-exclamation-circle"/></i> Edit data, klik kolom untuk merubah huruf, klik tab untuk memindahkan tab, klik save untuk menyimpan dan klik    
			<a href="siswa ipa.php"<span class='badge bg-blue'><span class='fa fa-external-link'></span> disini</span></a> untuk melihat data yang lain.
		</div>
	  
      <div class="panel panel-sky col-xs-12 col-md-5 col-sm-6 col-lg-12">
					<div class="panel-heading">
						<h4>Input Data Siswa IPA</h4>
					</div>
					<div class="panel-body collapse in">
						<form method="POST" class="form-horizontal row-border">
							<div class="form-group">
								<label class="col-sm-3 control-label">NIP :</label>
								<div class="col-sm-6">
									<input type="number" name="nis" value="<?php echo $data['nis']?>" class="form-control popovers" data-trigger="hover" data-toggle="popover" data-content="Masukkan NIS">
							
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Nama :</label>
								<div class="col-sm-6">
									<input type="text" name="nama"  value="<?php echo $data['nama']?>" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Jenis Kelamin : </label>
								<div class="col-sm-6">
									<label class="radio-inline">
									  <input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki
									</label>
									<label class="radio-inline">
									  <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
									</label>
								</div>
							</div>
					<div class="form-group">
								<label class="col-sm-3 control-label">Jabatan :</label>
								<div class="col-sm-6">
									<input type="text" name="jabatan"  value="<?php echo $data['nama']?>" class="form-control">
								</div>
					</div>
					<div class="form-group">
								<label class="col-sm-3 control-label">Wali-Kelas Dari</label>
										<div class="col-sm-6">
											<select class="form-control" name="kelas_dari">
												<?php
												$qry = mysqli_query($conn, "select kelas, id_kelas from kelas_ips");
													while ($row = mysqli_fetch_row($qry))
													{
														echo"<option value=$row[0]>$row[1]";
													}
													?>
											</select>
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label">No. Telp :</label>
								<div class="col-sm-6">
									<input type="text" name="telepon"  value="<?php echo $data['nama']?>" class="form-control">
								</div>
					</div>
				
				<div class="panel-footer">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-4">
							<a href="input siswa.php"><button type="button" class="btn btn-default" data-dismiss="modal">Batal</button></a>
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							</div>
						</form>
						</div>		
						</div>
					</div>
						<center>
							<?php
								if(isset($_POST['simpan'])){
										$nip= $_POST['nip'];
										$nama= $_POST['nama'];
										$jenis_kelamin = $_POST['jenis_kelamin'];
										$jabatan = $_POST['jabatan'];
										$kelas_dari = $_POST['kelas_dari'];
										
											if(!empty($nip) && !empty($nama) && !empty($jenis_kelamin) && !empty($jabatan) && !empty($kelas_dari))
									{
											$sql = "UPDATE data_siswa_ipa SET nip='".$nip."', nama='".$nama."', jenis_kelamin='".$jenis_kelamin."', jabatan='".$jabatan."', wali_kelas_dari='".$kelas_dari."' where nip='".$nip."'";
											if (mysqli_query($conn, $sql)) 
										{
												echo"<span class='badge bg-green'><span class='fa fa-check-circle'></span>  berhasil di simpan </span>";
										} else{
												echo "<span class='badge bg-red'><span class='fa fa-warning'></span>  gagal di ubah</span>";
											}
									}else{
												echo"<span class='badge bg-yellow'><span class='fa fa-exclamation-circle'></span>  data ada yang kosong</span>";
											}
								}
							?>
					</center>
				
	</div>
				
				
				<!--tutup kode disini-->
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
    </footer>  <div class="control-sidebar-bg"></div>
</div>

	<!-- Masukan KodeModal -->
	
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content panel panel panel-sky">
		<div class="modal-header panel-heading">
		<h4>Form Input Data Siswa Ipa</h4>
		<div class="options"></div>
		</div>
		<div class="modal-body">
		<div class="panel-body collapse in">
		<form action="" class="form-horizontal row-border">
		<div class="form-group">
		<label class="col-sm-3 control-label">Nama</label>
		<div class="col-sm-6">
		<input type="text" class="form-control">
		</div>
		</div>
		<div class="form-group">
		<label class="col-sm-3 control-label">Nip</label>
		<div class="col-sm-6">
		<input type="number" class="form-control">
		</div>
		</div>
		<div class="form-group">
		<label class="col-sm-3 control-label">Kelas</label>
		<div class="col-sm-6">
		<select class="form-control" id="source">
		<optgroup label="Kelas : ">
		<option value="AK">Satu</option>
		<option value="HI">Dua</option>
		<option value="HI">Tiga</option>
		</optgroup>
		</select>
		</div>
		</div>
		</form>
		<div class="panel-footer">
		<div class="row">
		<div class="col-sm-6 col-sm-offset-4">
		<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
		<button type="button" class="btn btn-primary">Simpan</button>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>

<!--tutup kode modal-->
	
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
 
 

<!--modal-->
<script type='text/javascript' src='../../bahanweb/assets2/plugins/bootbox/bootbox.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/demo/demo-modals.js'></script> 

<!--table-->
<script type="text/javascript" language="javascript" src="../../bahanweb/jcss/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script src="../../bahanweb/jcss/js/dynamic_table_init.js"></script>

</body>
</html>
