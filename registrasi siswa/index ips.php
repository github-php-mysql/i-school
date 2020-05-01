<?php
    session_start();
    if(isset($_SESSION['id_user'])){
    }
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
<p>Masukan Kode Akses Id-User Untuk Register</p>
    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="kode registrasi" name="id_user">
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
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="register2">Kirim</button>
        </div>
      </div>
    </form>
		    <?php
        require_once('../koneksi.php');
		
        if (isset($_POST['id_user'])) 
        {
            $id_user = $_POST['id_user'];
			if(!empty($id_user)){
			
            
            $qry = mysqli_query($conn, "select * from data_siswa_ips where id_user = '$id_user'"); 
            $cek = mysqli_num_rows($qry);
            
            if($cek > 0) 
            {	
                session_start();
                $_SESSION['id_user']=$id_user;
                header("location:verifikasi ips.php");
            }
            else 
            {
                echo "<font color='red'>id_user salah!</font>";
            }mysqli_close($conn);
			
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