<!DOCTYPE html>

<?php
    require_once('../../koneksi.php');
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Input Data Kelas</title>
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
          <a href="../admin.php">
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
			<li class="active"><a href="input kelas.php"><i class="fa fa-circle-o"></i> Kelas</a></li>       
            <li><a href="input walikelas.php"><i class="fa fa-circle-o"></i> Wali Kelas</a></li>
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
		<h4>Input Data Kelas</h4>
    </section>

    <section class="content">
      <div class="row">
	  
	  <!--masukan kode disini-->
	  
						<div class="alert alert-dismissable alert-info">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<i class="fa fa-exclamation-circle"/></i> Input data Kelas, Isikan form yang di bawah ini dengan benar. Klik Simpan untuk menyimpan data dan untuk Batal untuk membatalkan inputan.
			</div>
						
				<div class="panel panel-sky col-xs-12 col-md-5 col-sm-6 col-lg-6">
					<div class="panel-heading">
						<h4>Form Input Data Kelas IPA</h4>
					</div>
					<div class="panel-body collapse in">
						<form method="POST" class="form-horizontal row-border">
						<div class="form-group">
								<label class="col-sm-3 control-label">ID-Kelas :</label>
								<div class="col-sm-6">
									<input type="text" name="id_kelas" maxlength="3" class="form-control popovers" data-trigger="hover" data-toggle="popover" data-content="Contoh : A-1" data-original-title="Buat Id kelas untuk menambah Kelas">
								</div>
							</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Kelas :</label>
							<div class="col-sm-6">
								<select class="form-control" name="kelas">
								<optgroup label="Kelas 1 : ">
									<option>X-A</option>
									<option>X-B</option>
									<option>X-C</option>
								</optgroup>
								<optgroup label="Kelas 2 : ">
									<option>XI-A</option>
									<option>XI-B</option>
									<option>XI-C</option>
								</optgroup>
								<optgroup label="Kelas 3 : ">
									<option>XII-A</option>
									<option>XII-B</option>
									<option>XII-C</option>
								</optgroup>
								</select>
							</div>
						</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">ID-Semester :</label>
								<div class="col-sm-6">
									<input type="text" name="id_semester" maxlength="4" class="form-control popovers" data-trigger="hover" data-toggle="popover" data-content="Contoh : sm-1">
								</div>
							</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Semester :</label>
							<div class="col-sm-6">
								<select class="form-control" name="semester">
									<option>Semester-1</option>
									<option>Semester-2</option>
									<option>Semester-3</option>
									<option>Semester-4</option>
									<option>Semester-5</option>
									<option>Semester-6</option>
								</select>
							</div>
						</div>
						<div class="panel-footer">
							<div class="row">
								<div class="col-sm-6 col-sm-offset-4">
										<a href="input walikelas.php"><input type="button" value="Batal" class="btn btn-default"></a>
										<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
					</form>	
						</div>
							</div>
								</div>
								</div>
								<center>
						
									<?php
									if (isset($_POST['simpan']))
									{
										$id_kelas = $_POST['id_kelas'];
										$kelas = $_POST['kelas'];
										if (!empty($id_kelas) && !empty($kelas))
										{
										$id_semester = $_POST['id_semester'];
										$semester = $_POST['semester'];
										
										if (!empty($id_semester) && !empty($semester))
										{  
											$sql = "insert into kelas_ipa (id_kelas, kelas,id_semester, semester) 
											values ('$id_kelas', '$kelas','$id_semester','$semester')";

											if(mysqli_query($conn,$sql)) 
											{
											echo"<span class='badge bg-green'><span class='fa fa-check-circle'></span>  berhasil tambah data kelas ipa </span>";
										} else{
											echo "<span class='badge bg-red'><span class='fa fa-warning'></span>  gagal tambah data kelas ipa</span>";
									}
										}else{
											echo"<span class='badge bg-yellow'><span class='fa fa-exclamation-circle'></span>  pengisian data semester ipa tidak boleh kosong</span>";
									}
									
										}else{
										echo"<span class='badge bg-yellow'><span class='fa fa-exclamation-circle'></span>  pengisian data ipa tidak boleh kosong</span>";
										}
									}
							?>
							</center>
							</div>

				
				
				<div class="panel panel-sky col-xs-12 col-md-5 col-sm-6 col-lg-6">
					<div class="panel-heading">
						<h4>Form Input Data Kelas IPS</h4>
					</div>
					<div class="panel-body collapse in">
						<form method="POST" class="form-horizontal row-border">
						<div class="form-group">
								<label class="col-sm-3 control-label">ID-Kelas :</label>
								<div class="col-sm-6">
									<input type="text" name="id_kelas2" maxlength="3" class="form-control popovers" data-trigger="hover" data-toggle="popover" data-content="Contoh : A-1" data-original-title="Buat Id kelas untuk menambah Kelas">
								</div>
							</div>
							<div class="form-group">
							<label class="col-sm-3 control-label">Kelas :</label>
							<div class="col-sm-6">
								<select class="form-control" name="kelas2">
								<optgroup label="Kelas 1 : ">
									<option>X-A</option>
									<option>X-B</option>
									<option>X-C</option>
								</optgroup>
								<optgroup label="Kelas 2 : ">
									<option>XI-A</option>
									<option>XI-B</option>
									<option>XI-C</option>
								</optgroup>
								<optgroup label="Kelas 3 : ">
									<option>XII-A</option>
									<option>XII-B</option>
									<option>XII-C</option>
								</optgroup>
								</select>
							</div>
						</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">ID-Semester :</label>
								<div class="col-sm-6">
									<input type="text" name="id_semester2" maxlength="4" class="form-control popovers" data-trigger="hover" data-toggle="popover" data-content="Contoh : sm-1">
								</div>
							</div>
							<div class="form-group">
							<label class="col-sm-3 control-label">Semester :</label>
							<div class="col-sm-6">
								<select class="form-control" name="semester2">
									<option>Semester-1</option>
									<option>Semester-2</option>
									<option>Semester-3</option>
									<option>Semester-4</option>
									<option>Semester-5</option>
									<option>Semester-6</option>
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
								if (isset($_POST['simpan2']))
								{
										$id_kelas2 = $_POST['id_kelas2'];
										$kelas2 = $_POST['kelas2'];
									if (!empty($id_kelas2) && !empty($kelas2))
									{ 
										$id_semester2 = $_POST['id_semester2'];
										$semester2 = $_POST['semester2'];
										
										if (!empty($id_semester2) && !empty($semester2))
										{  
											$sql = "insert into kelas_ips (id_kelas, kelas, id_semester, semester) 
											values ('$id_kelas2', '$kelas2','$id_semester2','$semester2')";

											if(mysqli_query($conn,$sql)) 
											{
											echo"<span class='badge bg-green'><span class='fa fa-check-circle'></span>  berhasil tambah data ips </span>";
										} else{
											echo "<span class='badge bg-red'><span class='fa fa-warning'></span>  gagal tambah data ips</span>";
									}
										}else{
											echo"<span class='badge bg-yellow'><span class='fa fa-exclamation-circle'></span>  data pengisian semester ipa tidak boleh boleh kosong</span>";
									}
									
										}else{
										echo"<span class='badge bg-yellow'><span class='fa fa-exclamation-circle'></span>  pengisian data ips tidak boleh kosong</span>";
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
