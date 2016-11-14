<?php
	include('../connect.php');
	if (!isset($_SESSION)) session_start();

	if($_REQUEST['name']=="")
	{
		header('location:/TCID/pages/admin/updateAccount.php?msg=You must fill all form&id='.$_REQUEST['id']);
	}
	else
	{
		mysql_query("UPDATE useraccount set nama = '".$_REQUEST['name']."', Usertype = '".$_REQUEST['usertype']."' where NIK = '".$_REQUEST['uac']."'");
		header('location:/TCID/pages/admin/listAccount.php');
	}