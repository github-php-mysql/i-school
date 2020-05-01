<!DOCTYPE html>

<?php
    require_once('../../koneksi.php');
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Input Walikelas</title>
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
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              
            </span>
          </a>
 
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Input Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu active">
            <li><a href="input siswa.php"><i class="fa fa-circle-o"></i> Siswa</a></li>
			<li><a href="input kelas.php"><i class="fa fa-circle-o"></i> Kelas</a></li>       
            <li class="active"><a href="input walikelas.php"><i class="fa fa-circle-o"></i> Wali Kelas</a></li>
            <li><a href="input orangtua.php"><i class="fa fa-circle-o"></i> Orang Tua</a></li>
		  </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="data siswa.php"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
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
	
	
    <section class="content-header">
		<h4>Input Wali Kelas</h4>
    </section>

    <section class="content">
      <div class="row">
	  
	  <!--masukan kode disini-->
	  
					<div class="alert alert-dismissable alert-info">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="fa fa-exclamation-circle"/></i> Input data Walikelas, Isikan form yang di bawah ini dengan benar. klik Simpan untuk menyimpan dan untuk mereset klik Reset.
					</div>
						
				<div class="panel panel-sky col-xs-12 col-md-5 col-sm-6 col-lg-6">
					<div class="panel-heading">
						<h4>Form Input Data Wali Kelas IPA</h4>
					</div>
					<div class="panel-body collapse in">
						<form method="post" class="form-horizontal row-border">
							<div class="form-group">
								<label class="col-sm-3 control-label">NIP</label>
								<div class="col-sm-6">
									<input type="number" name="nip" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Nama</label>
								<div class="col-sm-6">
									<input type="text" name="nama" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Jenis Kelamin  </label>
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
								<label class="col-sm-3 control-label">Kode Guru</label>
								<div class="col-sm-6">
									<input type="text" name="kode_guru" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Jabatan</label>
								<div class="col-sm-6">
									<input type="text" name="jabatan" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">No Telepon</label>
								<div class="col-sm-6">
									<input type="number" name="telepon" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Kelas Dari</label>
										<div class="col-sm-6">
											<select class="form-control" name="kelas_dari">
												<?php
												$qry = mysqli_query($conn, "select kelas, id_kelas from kelas_ipa");
													while ($row = mysqli_fetch_row($qry))
													{
														echo"<option value=$row[0]>$row[1]";
													}
													?>
											</select>
										</div>
							</div>
						
						<div class="panel-footer">
							<div class="row">
								<div class="col-sm-6 col-sm-offset-4">
							<a href="input walikelas.php"><input type="button" value="Batal" class="btn btn-default"></a>
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
								</div>
							</form>
							</div>
						</div>
					</div>
					<center>
							<?php
						if(isset($_POST['simpan'])){
							$nip = $_POST['nip'];
							$nama = $_POST['nama'];
							$kode_guru = $_POST['kode_guru'];
							$jabatan = $_POST['jabatan'];
							$kelas_dari = $_POST['kelas_dari'];
							$jenis_kelamin=$_POST['jenis_kelamin'];
							$telepon = $_POST['telepon'];
							
							if(!empty($nip) && !empty($nama) && !empty($kode_guru) && !empty($jabatan) && !empty($jenis_kelamin) && !empty($kelas_dari) && !empty($telepon)){
								
								$sqldata = "insert into walikelas_ipa (password, nip, nama, jenis_kelamin, jabatan, wali_kelas_dari, kontak) values
								('$kode_guru','$nip', '$nama', '$jenis_kelamin', '$jabatan', '$kelas_dari', '$telepon')";
								if(mysqli_query($conn,$sqldata)){
										echo"<span class='badge bg-green'><span class='fa fa-check-circle'></span>  berhasil di tambah </span>";
								} else{
										echo "<span class='badge bg-red'><span class='fa fa-warning'></span>  gagal di tambah</span>";
									}
							}else{
										echo"<span class='badge bg-yellow'><span class='fa fa-exclamation-circle'></span>  data pengisian tidak boleh kosong</span>";
									}
								}
						
							
						?>
						</center>
							
				</div>
				
				
				<div class="panel panel-sky col-xs-12 col-md-5 col-sm-6 col-lg-6">
					<div class="panel-heading">
						<h4>Form Input Data Wali Kelas IPS</h4>
					</div>
					<div class="panel-body collapse in">
						<form method="post" class="form-horizontal row-border">
							<div class="form-group">
								<label class="col-sm-3 control-label">NIP</label>
								<div class="col-sm-6">
									<input type="number" name="nip" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Nama</label>
								<div class="col-sm-6">
									<input type="text" name="nama" class="form-control">
								</div>
							</div>
		
							<div class="form-group">
								<label class="col-sm-3 control-label">Jenis Kelamin  </label>
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
								<label class="col-sm-3 control-label">Kode Guru</label>
								<div class="col-sm-6">
									<input type="text" name="kode_guru" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Jabatan</label>
								<div class="col-sm-6">
									<input type="text" name="jabatan" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">No Telepon</label>
								<div class="col-sm-6">
									<input type="number" name="telepon" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Kelas Dari</label>
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
						
						<div class="panel-footer">
							<div class="row">
								<div class="col-sm-6 col-sm-offset-4">
							<a href="input walikelas.php"><input type="button" value="Batal" class="btn btn-default"></a>
							<input type="submit" name="simpan2" value="Simpan" class="btn btn-primary">
								</div>
							</form>
							</div>
						</div>
					</div>
					<center>
							<?php
						if(isset($_POST['simpan2'])){
							$nip = $_POST['nip'];
							$nama = $_POST['nama'];
							$kode_guru = $_POST['kode_guru'];
							$jabatan = $_POST['jabatan'];
							$kelas_dari = $_POST['kelas_dari'];
							$jenis_kelamin=$_POST['jenis_kelamin'];
							$telepon = $_POST['telepon'];
							
							if(!empty($nip) && !empty($nama) && !empty($kode_guru) && !empty($jabatan) && !empty($jenis_kelamin) && !empty($kelas_dari) && !empty($telepon)){
								
								$sqldata = "insert into walikelas_ips (password, nip, nama, jenis_kelamin, jabatan, wali_kelas_dari, kontak) values
								('$kode_guru','$nip', '$nama', '$jenis_kelamin', '$jabatan', '$kelas_dari', '$telepon')";
								if(mysqli_query($conn,$sqldata)){
										echo"<span class='badge bg-green'><span class='fa fa-check-circle'></span>  berhasil di tambah </span>";
								} else{
										echo "<span class='badge bg-red'><span class='fa fa-warning'></span>  gagal di tambah</span>";
									}
							}else{
										echo"<span class='badge bg-yellow'><span class='fa fa-exclamation-circle'></span>  data pengisian tidak boleh kosong</span>";
									}
								}
						
							
						?>
						</center>
							
				</div>
				
				
				<!--tutup kode disini-->
      </div>
    </section>
  </div>
  <br>
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
</div>

	<!-- Masukan KodeModal -->
	

<!--tutup kode modal-->
		
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
    $('#bootbox-demo-5').click(function(){
        bootbox.dialog({
            message: "I am a custom dialogf",
            title: "Custjjj",
            buttons: {
                    success: {
                      label: "Success!",
                      className: "btn-success",
                      callback: function() {
                        alert("great success");
                    }
                  },
                  danger: {
                    label: "Danger!",
                    className: "btn-danger",
                    callback: function() {
                        alert("uh oh, look out!");
                    }
                },
                main: {
                    label: "Click ME!",
                    className: "btn-primary",
                    callback: function() {
                        alert("Primary button");
                    }
                }
            }
        });
    });

</script>
</body>
</html>
