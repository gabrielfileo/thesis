<?php
	include('connect.php');
	
	if (!isset($_SESSION)) session_start();

	if($_REQUEST['nik']=="" || $_REQUEST['password'] == "")
	{
		header('location:/TCID/pages/login.php?msg=You must fill all form');
		exit();
	}
	else
	{
		$pass = md5($_REQUEST['password']);
		/*if(mysql_num_rows(mysql_query("SELECT a.nama, b.password from useraccount a LEFT JOIN userlogin b ON a.email=b.email where b.email='".$_REQUEST['email']."' AND b.password='$pass'"))!=1)*/
		if(mysql_num_rows(mysql_query("select * from useraccount where NIK = '".$_REQUEST['nik']."' and password = '$pass'"))!=1)
		{
			header('location:/TCID/pages/login.php?msg=Acount not Regristed');
		}
		else
		{
			$result = mysql_query("select * from useraccount where NIK = '".$_REQUEST['nik']."' and password = '$pass'");
			while($row = mysql_fetch_assoc($result))
			{
				if($row['Usertype'] == 0){
					header('location:/TCID/pages/admin/');
				}
				else if($row['Usertype'] == 1){
					header('location:/TCID/pages/leader/');
				}
				else if($row['Usertype'] == 2 || $row['Usertype'] == 3){
					header('location:/TCID/pages/');
				}
				
				$_SESSION['nama'] = $row['nama'];
				$_SESSION['nik'] = $row['NIK'];
			}
		}
	}
	