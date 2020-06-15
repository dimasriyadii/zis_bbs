<!DOCTYPE html>
<html>
    <head>
    <title>Masjid Babussalam</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <link rel="shortcut icon" type="image/">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="assets/fa/css/font-awesome.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
    </head>
    <body>
    <div class="login-box">
		  <div class="login-logo">
		        <a href="login.php"><b>ZIS BBS</b></a>
		</div>
		  <!-- /.login-logo -->
		  <div class="login-box-body">
        <b><p class="login-box-msg">Login</p></b>
			<form action="cek_login.php" method="post">
			  <div class="form-group has-feedback">
				<input type="text" name="username" class="form-control" placeholder="username" />
					<span class="form-control-feedback"><i class="fa fa-user"></i></span>
			</div>
				  <div class="form-group has-feedback">
					<input type="password" name="password" class="form-control" placeholder="password" />
					<span class="form-control-feedback"><i class="fa fa-unlock"></i></span>
			  </div>
			  <div class="row">
				<div class="col-xs-8">
				  <div class="checkbox icheck">
				  </div>
				</div>

				<div class="text-right col-xs-4 ">
        <input name="login" type="submit" value="login" class="btn btn-primary btn-block btn-flat"></input>
                  
				</div>
			  </div>
    </form>
    </body>
</html>