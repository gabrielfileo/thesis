<?php
	session_start();
	include('../connect.php');

	mysql_query("delete from useraccount where NIK = '".$_REQUEST['uac']."'");
	header('location:/TCID/pages/admin/listAccount.php');