<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Informasi Akademik</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/login-style.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 
     
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="fa fa-gear"></i> <strong>Sistem Informasi Akademik</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                        <i class="fa fa-user fa-fw"></i><b>Login</b> <i class="fa fa-caret-down"></i>
                    </a>
                  <ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
							<center><b>Login</b></center><br>
								 <form class="form" role="form" method="POST" action="periksa.php" name="login" id="login-nav">
                                 		<div class="form-group">
											 <select class="form-control" id="level" name="level" required>
                                                    <option>Admin</option>
                                                    <option>Guru</option>
                                                    <option>Siswa</option>                                                  
      											</select>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputUser2">Username</label>
											 <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 </form>
							</div>
					 </div>
				</li>
			</ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
		
				
            </div>
            <!-- /. PAGE INNER  -->
        
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
 

</body>

</html>