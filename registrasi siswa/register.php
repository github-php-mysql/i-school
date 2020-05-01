<?php
	include "../koneksi.php";
	session_start();
    if(isset($_SESSION['id_user'])) {
	require_once('../koneksi.php');
	$id_user = $_SESSION['id_user'];
	$qry = mysqli_query ($conn, "select * from data_siswa_ipa where id_user = '$id_user'");
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
        <input type="number" class="form-control" name="nis" value="<?php echo $data['nis']; ?>" readonly>
        <span class="fa fa-credit-card form-control-feedback"></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="user" class="form-control" placeholder="Nama Lengkap" name="nama">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
	  <div class="form-group">
       <select class="form-control select2" data-placeholder="Jenis Kelamin" style="width: 100%;" name="js">
       <option>Laki-Laki</option>
       <option>Perempuaan</option>
       </select>
      </div>
	  <div class="form-group has-feedback">
        <input type="text" class="form-control pull-right" id="datepicker" placeholder="Tanggal Lahir" name="tgl_lahir">
        <span class="fa fa-calendar form-control-feedback"></span>
	  </div><br><br>  
      <p><div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
	  
	  <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Ulang Password" name="ulang">
        <span class="glyphicon glyphicon-repeat form-control-feedback"></span>
      </div>
	  <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="fa fa-envelope form-control-feedback"></span>
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
							$jenis_kelamin= $_POST['js'];
							$tgl_lahir = $_POST['tgl_lahir'];
							$password = $_POST['password'];
							$password2 = $_POST['ulang'];
							$email = $_POST['email'];
							if ($_POST["password"] == $_POST["ulang"]) {
							if(!empty($nama) && !empty($jenis_kelamin) && !empty($tgl_lahir) && !empty($password==$password2) && !empty($email)){
								
							$sql = "UPDATE data_siswa_ipa SET nama='".$nama."', jenis_kelamin='".$jenis_kelamin."', tanggal_lahir='".$tgl_lahir."', password='".$password."', email='".$email."' where id_user='".$id_user."'";
							if (mysqli_query($conn, $sql)) 
						{
								echo "<script>alert('Data di simpan');document.location='register2.php'</script>";
						} else{
								echo"<script>alert('Gagal Register');</script>";
							}
					}else{
							echo"<script>alert('Data Tidak Boleh Kosong');</script>";
						}
							}else {
						echo"password sama";
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