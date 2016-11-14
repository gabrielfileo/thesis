<?php
	include('../connect.php');
	
	if (!isset($_SESSION)) session_start();

	if($_REQUEST['name']=="" || $_REQUEST['nik']=="" || $_REQUEST['pass']=="")
	{
		header('location: /TCID/pages/admin/addAccount.php?msg=You must fill all form');
		exit();
	}
	else if(!is_numeric($_REQUEST['nik']))
	{
		header('location: /TCID/pages/admin/addAccount.php?msg=NIK must number');
		exit();
	}
	else
	{
		mysql_query("INSERT into useraccount values ('".$_REQUEST['nik']."','".$_REQUEST['name']."','".md5($_REQUEST['pass'])."', '".$_REQUEST['usertype']."' )");
		header('location:/TCID/pages/admin/listAccount.php');
	}