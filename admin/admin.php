<!DOCTYPE html>

<?php
	include "../koneksi.php";
	session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard | I-Schools</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bahanweb/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../bahanweb/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../bahanweb/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../bahanweb/plugins/pace/pace.min.css">
  <script src="../bahanweb/plugins/pace/pace.min.js"></script>
  
  
<link rel="stylesheet" href="../bahanweb/assets2/css/gaya2.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'> 
<link href='../bahanweb/assets2/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher'> 
<link href='../../bahanweb/assets2/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'> 
<link rel='stylesheet' type='text/css' href='../bahanweb/assets2/plugins/datatables/dataTables.css' /> 
<link rel='stylesheet' type='text/css' href='../bahanweb/assets2/plugins/codeprettifier/prettify.css' /> 
<link rel='stylesheet' type='text/css' href='../bahanweb/assets2/plugins/form-toggle/toggles.css' /> 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">

    <!-- Logo -->
     <div class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Menu</span>
      <!-- logo for regular state and mobile devices -->
      <img src="logo/logo.png" width="auto" height="36px">
    </div>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
		  <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo"<b>".$_SESSION['username']."</b>"; ?></span>
            </a>
        <ul class="dropdown-menu">
              <!-- Menu Body -->
				
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu"><li class="treeview active">
          <a href="#">
            <i class="fa fa-dashboard active"></i> <span>Dashboard</span>
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
            <li><a href="dasboard admin/input siswa.php"><i class="fa fa-circle-o"></i> Siswa</a></li>
			<li><a href="dasboard admin/input kelas.php"><i class="fa fa-circle-o"></i> Kelas</a></li>       
            <li><a href="dasboard admin/input walikelas.php"><i class="fa fa-circle-o"></i> Wali Kelas</a></li>
            <li><a href="dasboard admin/input orangtua.php"><i class="fa fa-circle-o"></i> Orang Tua</a></li>
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
            <li><a href="dasboard admin/data siswa.php"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
            <li><a href="dasboard admin/data kelas.php"><i class="fa fa-circle-o"></i> Data Kelas</a></li>
            <li><a href="dasboard admin/data walikelas.php"><i class="fa fa-circle-o"></i>  Data Wali Kelas</a></li>
			<li><a href="dasboard admin/data orangtua.php"><i class="fa fa-circle-o"></i> Data Orang Tua</a></li>
			<li><a href="dasboard admin/data nilai.php"><i class="fa fa-circle-o"></i>  Data Nilai</a></li>
			<li><a href="dasboard admin/data absensi.php"><i class="fa fa-circle-o"></i>  Data Daftar Hadir</a></li>
			<li><a href="dasboard admin/data pembayaran.php"><i class="fa fa-circle-o"></i> Data pembayaran</a>
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
	  
	  <section class="content-header">
      <h1>Dashboard Admin</h1><br>
		<div class="callout callout-info">
       <b>Unit Informasi Akademik</b> <P>Adalah suatu Sistem yang di bangun untuk mengelola data-data akademik sehingga memberikan kemudahan kepada pengguna dalam kegiatan akademik sekolah secara online</p>
        </div>
    </section>
	  
	 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <br><p>

              <h4>Data Siswa</h4>
			  <br>
            </div>
            <div class="icon">
			<div class="ion">
              <i class="fa fa-fw fa-users"></i>
            </div>
			</div>
            <a href="dasboard admin/data siswa.php" class="small-box-footer">Lihat Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <br><p>

              <h4>Data Kelas</h4>
			  <br>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-home"></i>
            </div>
            <a href="dasboard admin/data kelas.php" class="small-box-footer">Lihat Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <br><p>

              <h4>Data Wali Kelas</h4>
			  <br>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-users"></i>
            </div>
            <a href="dasboard admin/data walikelas.php" class="small-box-footer">Lihat Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <br><p>

              <h4>Data Orang Tua</h4>
			  <br>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-users"></i>
            </div>
            <a href="dasboard admin/data orangtua.php" class="small-box-footer">Lihat Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
				
				<!--tutup kode disini-->
      </div>
    </section>
	
  </div>
    <footer role="contentinfo">
        <div class="clearfix">
            <ul class="list-unstyled list-inline pull-left">
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
		<label class="col-sm-3 control-label">Nis</label>
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
	

<script src="../bahanweb/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../bahanweb/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../bahanweb/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../bahanweb/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../bahanweb/plugins/fastclick/fastclick.js"></script>
<script src="../bahanweb/dist/js/app.min.js"></script>
<script src="../bahanweb/dist/js/demo.js"></script>


<script type='text/javascript' src='../bahanweb/assets2/js/jqueryui-1.10.3.min.js'></script> 
<script type='text/javascript' src='../bahanweb/assets2/js/bootstrap.min.js'></script> 
<script type='text/javascript' src='../bahanweb/assets2/js/enquire.js'></script> 
<script type='text/javascript' src='../bahanweb/assets2/js/jquery.cookie.js'></script> 
<script type='text/javascript' src='../bahanweb/assets2/js/jquery.nicescroll.min.js'></script> 
<script type='text/javascript' src='../bahanweb/assets2/plugins/codeprettifier/prettify.js'></script> 
<script type='text/javascript' src='../bahanweb/assets2/plugins/easypiechart/jquery.easypiechart.min.js'></script> 
<script type='text/javascript' src='../bahanweb/assets2/plugins/sparklines/jquery.sparklines.min.js'></script> 
<script type='text/javascript' src='../bahanweb/assets2/plugins/form-toggle/toggle.min.js'></script> 
<script type='text/javascript' src='../bahanweb/assets2/plugins/datatables/jquery.dataTables.min.js'></script> 
<script type='text/javascript' src='../bahanweb/assets2/plugins/datatables/dataTables.bootstrap.js'></script> 
<script type='text/javascript' src='../bahanweb/assets2/demo/demo-datatables.js'></script> 
<script type='text/javascript' src='../bahanweb/assets2/js/placeholdr.js'></script> 
<script type='text/javascript' src='../bahanweb/assets2/js/application.js'></script>
<script type='text/javascript' src='../bahanweb/assets2/demo/demo.js'></script>
 

<!--modal-->
<script type='text/javascript' src='../bahanweb/assets2/plugins/bootbox/bootbox.min.js'></script> 
<script type='text/javascript' src='../bahanweb/assets2/demo/demo-modals.js'></script> 

<!--table-->
<script type="text/javascript" language="javascript" src="../bahanweb/jcss/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script src="../bahanweb/jcss/js/dynamic_table_init.js"></script>


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
<?php
}
	else
	{
  		
	}
?>