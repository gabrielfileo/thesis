<?php
	if (!isset($_SESSION)) session_start();

	unset($_SESSION['nik']);
	header('location:/TCID/pages/login.php');
	
	
	?>