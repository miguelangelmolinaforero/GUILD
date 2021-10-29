<?php 
	require_once('db_connection.php');
 
	if (isset($_GET['controller']) && isset($_GET['action'])) {
		
		$controller=$_GET['controller'];
		$action=$_GET['action'];
	}else{
		$controller='path';
		$action='index';
	}
	require_once('php/Views/Layouts/layout.php');	
 ?>