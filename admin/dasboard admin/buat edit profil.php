<!DOCTYPE html>

<?php
    require_once('../../koneksi.php');
     
    $nis = $_GET['nis'];
    $qry = mysqli_query($conn, "SELECT * FROM data_siswa_ipa where nis='$nis'");
    $data = mysqli_fetch_array($qry);
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Siswa</title>
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
	
	
    <section class="content-header">
		<h4>Edit data Siswa Dengan NIS : <?php echo $data['nis']; ?> </h4>
    </section>

    <section class="content">
      <div class="row">
	  
	  <!--masukan kode disini-->
	  
	  <div class="alert alert-dismissable alert-warning" id="pulsate1">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<i class="fa fa-exclamation-circle"/></i> edit data Siswa, Untuk mencari nama siswa tinggal klik kolom pencarian. Tombol Ikon Kuning Untuk Mengedit, Tombol Ikon Merah Untuk Menghapus.
		</div>
	  
         <div class="col-md-3">
		 <form method="post" enctype="multipart/form-data">
          <div class="box box-primary">
            <div class="box-body box-profile">
              <?php echo "<img class='profile-user-img img-responsive img-circle' src='photos/".$data['foto']."' width='150px' height='150px'/>"; ?>
              <h3 class="profile-username text-center"><?php echo $data['nama']; ?></h3>
              <p class="text-muted text-center">Nis : <?php echo $data['nis']; ?></p>
			  <div class="box-header with-border">
			</div>
			
          <div class="box box-primary">
		  <input type="file" name="foto" class="btn btn-primary btn-block"  onclick="dyn_notice();" placeholder="ganti foto"></input>
		  <p>
			   <div class="col-sm-offset-3 col-sm-10">
                   <button type="submit" class="btn btn-success" onclick="dyn_notice();" name="ubah_foto">Ubah Foto</button>
               </div>
			</form>
			 <?php
        if(isset($_POST['ubah_foto'])) 
            {
                $nama_file = $_FILES['foto']['name'];
                $ukuran_file = $_FILES['foto']['size'];
                $tipe_file = $_FILES['foto']['type'];
                $tmp_file = $_FILES['foto']['tmp_name'];

                $waktu = date('His');
                $nama_file_baru = $waktu.$nama_file;
                $path = "photos/".$nama_file_baru;

                    if($tipe_file == "image/jpeg" || $tipe_file == "image/png")
                    {
                        if($ukuran_file <= 2000000)
                        {
                            move_uploaded_file($tmp_file, $path);

                            $sql = "update data_siswa_ipa set foto='".$nama_file_baru."' where nis='".$nis."'";
                            if(mysqli_query($conn,$sql)) 
                            {
                                echo "<script>alert('foto siswa berhasil diubah');</script>";
                            }
                            else 
                            {
                                echo "<font color='red'>Gagal update foto!</font>";
                            }
                        }
                        else
                        {
                            echo "<font color='red'>Maaf, ukuran filenya terlalu besar.</font>";
                        }
                    }
                    else
                    {
                        echo "<font color='red'>Maaf, tipe filenya harus jpg/png.</font>";
                    }
            }
        
    ?>
			
			
            </div>

          </div>
		  </div>
        </div>
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Pengaturan Data Sekolah</a></li>
              <li><a href="#timeline" data-toggle="tab">Pengturan Akun</a></li>
              <li><a href="#settings" data-toggle="tab">Pengaturan Umum</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <div class="post">
				<form class="form-horizontal" action="" method="post">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nis</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $data['nis']; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kode Kelas</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="k_kelas" <?php echo $data['k_kelas']; ?>>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kode Extrakurikuler</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="k_extra" placeholder="Extrakurikuler">
                    </div>
                  </div>
				  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success" name="simpan1">Simpan</button>
                    </div>
					</div>
                </form>
				<?php
				if(isset($_POST['simpan1'])){
						$k_kelas = $_POST['k_kelas'];
						$k_extra = $_POST['k_extra'];
							if(!empty($k_kelas))
					{
							$sql = "UPDATE data_siswa_ipa SET k_kelas='".$k_kelas."', k_extra='".$k_extra."' where nis='".$nis."'";
							if (mysqli_query($conn, $sql)) 
						{
								echo"<script>alert('Data Berhasil Di Ubah');</script>";
						} else{
								echo "Error mengganti record: ";
							}
					}else{
								echo"data harus diisi";
							}
				}
			?>
                </div>
              </div>
			  
              <div class="tab-pane" id="timeline">
			  <form class="form-horizontal" action="" method="post">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" value="<?php echo $data['password']; ?>">
                    </div>
                  </div>
				  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success" name="simpan2">Simpan</button>
                    </div>
                  </div>
                </form>
			<?php
				if(isset($_POST['simpan2'])){
						$nama = $_POST['nama'];
						$pass = $_POST['password'];
						$email = $_POST['email'];
							if(!empty($nama))
					{
							$sql = "UPDATE data_siswa_ipa SET password='".$pass."', nama='".$nama."', email='".$email."' where nis='".$nis."'";
							if (mysqli_query($conn, $sql)) 
						{
								echo"<script>alert('Data Berhasil Di Ubah');</script>";
						} else{
								echo "Error updating record: ";
							}
					}else{
								echo"data harus diisi";
							}
				}
			?>
              </div>
			  
              <div class="tab-pane" id="settings">
                <form class="form-horizontal" action="" method="post">
				<div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Nama Lengkap</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Tanggal Lahir</label>

                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $data['tanggal_lahir']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Agama</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="agama" value="<?php echo $data['agama']; ?>">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Sekolah Asal</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="asl_skolah" value="<?php echo $data['asal_sekolah']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">No Telepon</label>

                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="telepon" value="<?php echo $data['no_telepon']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success" name="simpan3">Simpan</button>
                    </div>
                    </div>
                  </div>
                </form>
				<?php
				if(isset($_POST['simpan3'])){
						$nama_lengkap = $_POST['nama_lengkap'];
						$tanggal_lahir= $_POST['tgl_lahir'];
						$agama = $_POST['agama'];
						$asl_skolah = $_POST['asl_skolah'];
						$alamat = $_POST['alamat'];
						$telepon = $_POST['telepon'];
							if(!empty($agama))
					{
							$sql = "UPDATE data_siswa_ipa SET nama_lengkap='".$nama_lengkap."', tanggal_lahir='".$tanggal_lahir."', agama='".$agama."', asal_sekolah='".$asl_skolah."', alamat='".$alamat."', no_telepon='".$telepon."' where nis='".$nis."'";
							if (mysqli_query($conn, $sql)) 
						{
								echo"<script>alert('Data Berhasil Di Ubah');document.location='siswa ipa.php'</script>";
						} else{
								echo "Error updating record: ";
							}
					}else{
								echo"data harus diisi";
							}
				}
			?>		
			
              </div>
            </div>
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
	
<script src="../../bahanweb/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../../bahanweb/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../bahanweb/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../../bahanweb/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../../bahanweb/plugins/fastclick/fastclick.js"></script>
<script src="../../bahanweb/dist/js/app.min.js"></script>
<script src="../../bahanweb/dist/js/demo.js"></script>

<script type='text/javascript' src='../../bahanweb/assets2/js/jquery-1.10.2.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/js/jqueryui-1.10.3.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/js/bootstrap.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/js/enquire.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/js/jquery.cookie.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/js/jquery.nicescroll.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/plugins/codeprettifier/prettify.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/plugins/easypiechart/jquery.easypiechart.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/plugins/sparklines/jquery.sparklines.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/plugins/form-toggle/toggle.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/plugins/pines-notify/jquery.pnotify.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/plugins/pulsate/jQuery.pulsate.min.js'></script> 
<script type='text/javascript' src='../../bahanweb/assets2/demo/demo-alerts.js'></script> 
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
