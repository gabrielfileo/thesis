<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Skripsi</title>

    <!-- Bootstrap Core CSS -->
    <link href="/TCID/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/TCID/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/TCID/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="/TCID/pages/css/index.css" rel="stylesheet">
    <link href="/TCID/pages/css/login.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/TCID/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<?php
		if (!isset($_SESSION)) session_start();
		
	?>
	<div class="loginBox">
		<div>
			<div class="panel-heading">
				<p><img src="/TCID/pages/images/logo.png" alt="Transcosmos Indonesia" width="158" height="54"></p>
				<h5>Sign In to Continue</h5>
			</div>
			<div class="panel-body">
				<form role="form" action="/TCID/pages/doLogin.php" method="post">
					<fieldset>
						<div class="form-group postRelative">
							<input class="form-control" placeholder="NIK" name="nik" autofocus>
							<i class="fa fa-user setPost01"></i>
						</div>
						<div class="form-group postRelative">
							<input class="form-control" placeholder="Password" name="password" type="password" value="">
							<i class="fa fa-key setPost01"></i>
						</div>
						<!-- Change this to a button or input when using this as a form -->
						<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
					</fieldset>
				</form>
				<p class="message">
					<?php
            if(isset($_REQUEST['msg']))
            {
              echo $_REQUEST['msg'];
            }
            else
            {
              echo '<br>';
            }
          ?>
        </p>
			</div>
		</div>
	</div>

    <!-- jQuery -->
    <script src="/TCID/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/TCID/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/TCID/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/TCID/dist/js/sb-admin-2.js"></script>

</body>

</html>
