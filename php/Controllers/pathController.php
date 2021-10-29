<?php 
/**
* 
*/
class PathController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('php/Views/Path_page/index.php');
	}

	function register(){
		require_once('php/Views/Path_page/register.php');
	}

	function error(){
		require_once('php/Views/Path_page/error.php');
	}

}

?>