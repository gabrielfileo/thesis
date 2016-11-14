<?php
	include('../connect.php');
	
	if (!isset($_SESSION)) session_start();

	if($_REQUEST['namePro']=="" || $_REQUEST['codePro']=="" || $_REQUEST['totalPro']=="" || $_REQUEST['deadPro']=="" || $_REQUEST['member']!=selected)
	{
		header('location: /TCID/pages/leader/addProject.php?msg=You must fill all form');
		exit();
	}
	/*else if(!is_numeric($_REQUEST['nik']))
	{
		header('location: /TCID/pages/admin/addAccount.php?msg=NIK must number');
		exit();
	}*/
	else
	{
		mysql_query("INSERT into projectdata values ('".$_REQUEST['namePro']."','".$_REQUEST['codePro']."','".$_REQUEST['totalPro']."', '".$_REQUEST['deadpro']."' )");
		header('location:/TCID/pages/admin/listAccount.php');
	}