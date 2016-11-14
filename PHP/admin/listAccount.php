<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Skripsi | Dasboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="/TCID/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/TCID/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="/TCID/dist/css/timeline.css" rel="stylesheet">
    <link href="/TCID/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/TCID/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="/TCID/pages/css/index.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/TCID/bower_components/morrisjs/morris.css" rel="stylesheet">

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
		require_once("../connect.php");
		
		
	?>
    <div id="wrapper" class="op">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="/TCID/pages/images/logo.png" alt="Transcosmos Indonesia" width="130" height="40"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
              <li class="mgR15"><?php
              	echo $_SESSION['nama'];
							?></li>
              <li class="bdrL"><a href="doLogout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/TCID/pages/admin/listAccount.php"><i class="fa fa-list fa-fw"></i> List Account</a>
                        </li>
                        <li>
                            <a href="/TCID/pages/admin/addAccount.php"><i class="fa fa-plus-circle fa-fw"></i> Add Account</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">List Account</h1>
          </div>
        </div>
        <div class="panel panel-default">
        <div class="panel-heading">
            List Account Data
        </div>
        <div class="panel-body">
        
        <div class="row">
        <div class="col-sm-12">
        <table class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline wd50" role="grid" id="dataTables-example">
        	<thead>
          	<tr role="row">
            	<th class="wd20">No.</th>
              <th>Name</th>
              <th>NIK</th>
              <th>Type</th>
              <th rowspan="2">Action</th>
            </tr>
        	</thead>
          <tbody>
						<?php
            $query = 'SELECT * from useraccount';
            $result = mysql_query($query);
            $i=1;
      
            while($row = mysql_fetch_array($result))
            {
          ?>
            <tr class="gradeA odd" role="row">
                    <td><?=$i?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['NIK']?></td>
                    <td>
                    <?php
										if($row['Usertype'] == 1)
										{
											echo "Leader";	
										}
										if($row['Usertype'] == 0)
										{
											echo "Admin";	
										}
										else if($row['Usertype'] == 2)
										{
											echo "Member";	
										}
										else if($row['Usertype'] == 3)
										{
											echo "Internship";	
										}
										?>
                    </td>
                    <td>
                      <form action="/TCID/pages/admin/updateAccount.php" method="post" class="fL mgR15">
                        <input type="hidden" name="uac" value="<?=$row['NIK']?>">
                        <input type="submit" value="Update">
                      </form>
          
                      <form action="/TCID/pages/admin/doDelete.php" method="post">
                        <input type="hidden" name="uac" value="<?=$row['NIK']?>">
                        <input type="submit" value="Delete">
                      </form>
                    </td>
          	</tr>
				<?php
            $i++;
          }
        ?>
              </tbody>
				</table>
          </div>
       	</div>
        </div>
        </div>
      </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/TCID/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/TCID/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/TCID/bower_components/metisMenu/dist/metisMenu.min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="/TCID/dist/js/sb-admin-2.js"></script>
    <script src="/TCID/pages/js/common.js"></script>

<!--<script>
$(document).ready(function() {
		
	window.onbeforeunload = function () {
		$.ajax({
				url: "doLogout.php",
				type: "POST",
				data: {},
				contentType: "application/json; charset=utf-8",
				dataType: "json"
		});
	};
});
</script>-->
</body>