<!DOCTYPE html>

<?php
	include "../koneksi.php";
	session_start();
    if(isset($_SESSION['nip']) && isset($_SESSION['password'])) {
		$nip = $_SESSION['nip'];
		$qry = mysqli_query ($conn, "select * from walikelas_ips where nip = '$nip'");
		if ($data = mysqli_fetch_array($qry)){
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>I - Schools | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
              <span class="hidden-xs"><?php echo $data['nama'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                 <span class="hidden-xs"><?php echo $data['nip'];?></span>
                </p>
              </li>
              <!-- Menu Body -->
           
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
				
                <div class="pull-right">
                  <a href="../login user/login walikelas/logout.php" class="btn btn-default btn-flat">Logout</a>
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
      <ul class="sidebar-menu"><li class="active treeview">
          <a href="guru ips.php">
            <i class="active" class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        
	  
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart-o"></i>
            <span>Input Nilai</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="dasboard walikelas ips/nilai harian.php"><i class="fa fa-circle-o"></i> Nilai Ulangan Harian</a></li>
			<li><a href="dasboard walikelas ips/nilai uts.php"><i class="fa fa-circle-o"></i> Nilai UTS</a></li>    
			<li><a href="dasboard walikelas ips/nilai semester.php"><i class="fa fa-circle-o"></i> Nilai Semester</a></li>			

		  </ul>
        </li>
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Input Data Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="dasboard walikelas/input daftar hadir.php"><i class="fa fa-circle-o"></i> Daftar Hadir</a></li>    
			<li><a href="dasboard walikelas/input pembayaran.php"><i class="fa fa-circle-o"></i> Input Pembayaran</a></li>			

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
            <li><a href="dasboard walikelas/data siswa.php"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
			<li><a href="dasboard walikelas/data orang tua.php"><i class="fa fa-circle-o"></i> Data Orang Tua</a></li>
			<li><a href="dasboard walikelas/data absensi.php"><i class="fa fa-circle-o"></i>  Data Daftar Hadir</a></li>
			<li><a href="dasboard walikelas/data nilai.php"><i class="fa fa-circle-o"></i>  Data Nilai</a></li>
			<li><a href="dasboard walikelas/data pembayaran.php"><i class="fa fa-circle-o"></i> Data pembayaran</a>
          
		  </ul>
        </li>
		 <li class="treeview">
          <a href="dasboard walikelas/perwalian.php">
            <i class="fa  fa-envelope-o"></i>
            <span>Perwalian</span>
            <span class="pull-right-container">
            </span>
          </a>
		  </li>
		  </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	
    <section class="content-header">
      <h1>Dashboard Wali Kelas</h1><br>
		<div class="callout callout-info">
       <b>Unit Informasi Akademik</b> adalah suatu System yang di bangun untuk mengelola data-data akademik sehingga memberikan kemudahan kepada pengguna dalam kegiatan akademik sekolah secara online</p>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
	  <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <p></p><br>
              <p><b>Data Siswa</b></p><br>
			  <p></p>
            </div>
            <div class="icon">
			<div class="ion">
              <i class="fa fa-fw fa-users"></i>
            </div>
			</div>
            <a href="data siswa guru ips/data siswa.php" class="small-box-footer">Lihat Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
		
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <p></p><br>
              <p><b>Data Daftar Hadir</b></p><br>
			  <p></p>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-table"></i>
            </div>
            <a href="data siswa guru ips/data absensi.php" class="small-box-footer">Lihat Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <p></p><br>
              <p><b>Data Nilai</b></p><br>
			  <p></p>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-book"></i>
            </div>
            <a href="data siswa guru ips/data nilai.php" class="small-box-footer">Lihat Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <p></p><br>
              <p><b>Data Pembayaran</b></p><br>
			  <p></p>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-bar-chart"></i>
            </div>
            <a href="data siswa guru ips/data pembayaran.php" class="small-box-footer">Lihat Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        
        <!-- ./col -->


  </div>
   
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
    </footer>
  
<!--pengaturan-->
  <aside class="control-sidebar control-sidebar-dark">
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#" data-toggle="control-sidebar"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Pengaturan Umum</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-edit bg-red"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Edit Profile</h4>
                <p></p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Edit Akun</h4>
                <p></p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </aside>
  
  


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
</body>
</html>
<?php
	}
	}
	?>