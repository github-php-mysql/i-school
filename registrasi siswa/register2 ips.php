<?php
	include "../koneksi.php";
	session_start();
    if(isset($_SESSION['id_user'])) {
	require_once('../koneksi.php');
	$id_user = $_SESSION['id_user'];
	$qry = mysqli_query ($conn, "select * from data_siswa_ips where id_user = '$id_user'");
	if ($data = mysqli_fetch_array($qry)){
	?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bahanweb/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../bahanweb/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../bahanweb/lugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="../bahanweb/plugins/iCheck/all.css">
  <link rel="stylesheet" href="../bahanweb/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="../bahanweb/plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="../bahanweb/plugins/select2/select2.min.css">
  <link rel="stylesheet" href="../bahanweb/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="css_form/AdminLTE.min.css">
  <link rel="stylesheet" href="../bahanweb/plugins/iCheck/square/blue.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body">
    <p class="login-box-msg"><img src="logo/register.png" width="100%" height="auto"></p><br>
     <form method="post">
	  <div class="form-group has-feedback">
        <input type="user" class="form-control" placeholder="Nama Lengkap" name="nama">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
	  <div class="form-group">
       <select class="form-control select2" data-placeholder="Agama" style="width: 100%;" name="agama">
       <option>Islam</option>
       <option>Kristen</option>
	    <option>Budha</option>
       <option>Hindu</option>
       </select>
      </div>
	<div class="form-group has-feedback">
        <input type="number" class="form-control" placeholder="No.Telp" name="tlp">
        <span class="fa fa-phone form-control-feedback"></span>
      </div>
	  
	  <div class="form-group has-feedback">
        <textarea type="user" class="form-control" placeholder="Alamat" name="alamat"></textarea>
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
          </div>
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="Registrasi">Lanjut</button>
        </div>
      </div>
    </form>
	
<?php
				if(isset($_POST['Registrasi'])){
							$nama = $_POST['nama'];
							$agama= $_POST['agama'];
							$tlp = $_POST['tlp'];
							$alamat = $_POST['alamat'];
							if(!empty($nama) && !empty($agama) && !empty($tlp) && !empty($alamat)){
								
							$sql = "UPDATE data_siswa_ips SET nama_lengkap='".$nama."', agama='".$agama."', no_telepon='".$tlp."', alamat='".$alamat."' where id_user='".$id_user."'";
							if (mysqli_query($conn, $sql)) 
						{
								echo "<script>alert('Data di simpan');document.location='register3 ips.php'</script>";
						} else{
								echo"<script>alert('Gagal Register');</script>";
							}
					}else{
							echo"<script>alert('Data Tidak Boleh Kosong');</script>";
						}
				}
											
			?>
</div>
</div>
		
		

<script src="../bahanweb/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../bahanweb/bootstrap/js/bootstrap.min.js"></script>
<script src="../bahanweb/plugins/select2/select2.full.min.js"></script>
<script src="../bahanweb/plugins/iCheck/icheck.min.js"></script>
<script src="../bahanweb/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="../bahanweb/plugins/input-mask/jquery.inputmask.js"></script>
<script src="../bahanweb/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../bahanweb/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
  
  $(".select2").select2();
  
  $('#datepicker').datepicker({
      autoclose: true
    });
</script>
</body>
</html>
<?php
	}					
	}
?>