<?php
	include "../koneksi.php";
	session_start();
    if(isset($_SESSION['id_user'])) {
		$id_user = $_SESSION['id_user'];
		$qry = mysqli_query ($conn, "select * from data_siswa_ipa where id_user = '$id_user'");
		if ($data = mysqli_fetch_array($qry)){
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>verifikasi</title>
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
<p>NIS anda</p>
    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" value="<?php echo $data['nis'];?>" readonly>
        <span class="fa fa-credit-card form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
		  <label>
            </label>
          </div>
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="register2"><a href="register.php?id_user=
			<?php 
				$id_user = $data['id_user'];
				$qry = mysqli_query ($conn, "select * from data_siswa_ipa where id_user = '$id_user'");
				if ($data2 = mysqli_fetch_array($qry)){
					echo $data2['nama']; 
				}	
			?>">Verifikasi</a></button>
        </div>
      </div>
    </form>
		    
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
</body>
</html>
<?php
	}
	}
	?>
