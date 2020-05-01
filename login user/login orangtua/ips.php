<?php
    session_start();
    if(isset($_SESSION['nis']) && isset($_SESSION['password_orangtua'])){
    }
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../bahanweb/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../bahanweb/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../../bahanweb/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="../../bahanweb/plugins/iCheck/all.css">
  <link rel="stylesheet" href="../../bahanweb/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="../../bahanweb/plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="../../bahanweb/plugins/select2/select2.min.css">
  <link rel="stylesheet" href="../../bahanweb/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../css_form/AdminLTE.min.css">
  <link rel="stylesheet" href="../../bahanweb/plugins/iCheck/square/blue.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
    <a href="index.html"><p class="login-box-msg"><img src="../logo/login.png" width="100%" height="auto"></p></a><br>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="number" class="form-control" placeholder="Nis" name="nis">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password_orangtua">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Ingatkan Saya
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
      </div>
    </form>
  <a href="#">Lupa Sandi?</a><br>
	    <?php
        require_once('../../koneksi.php');
		
        if (isset($_POST['nis']) && isset($_POST['password_orangtua'])) 
        {
            $nis = $_POST['nis'];
            $pass = $_POST['password_orangtua'];
			
            
            $qry = mysqli_query($conn, "select * from data_siswa_ips where nis = '$nis' and password_orangtua = '$pass'"); 
            $cek = mysqli_num_rows($qry);
            
            if($cek > 0) 
            {	
                session_start();
                $_SESSION['nis']=$nis;
                $_SESSION['password_orangtua']=$pass;
                header("location:../../users/ortu ips.php");
            }
            else 
            {
                echo "<font color='red'>nis dan password salah!</font>";
            }mysqli_close($conn);
            
        }	
    ?>
  </div>
</div>

<script src="../../bahanweb/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bahanweb/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../bahanweb/plugins/select2/select2.full.min.js"></script>
<script src="../../bahanweb/plugins/iCheck/icheck.min.js"></script>
<script src="../../bahanweb/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="../../bahanweb/plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../bahanweb/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../bahanweb/plugins/input-mask/jquery.inputmask.extensions.js"></script>

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