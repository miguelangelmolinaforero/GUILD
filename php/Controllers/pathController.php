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

	function categoria(){
		require_once('php/Views/Path_page/categoria.php');
	}

	function register(){
		require_once('php/Views/Path_page/register.php');
	}

	function login(){
		require_once('php/Views/Path_page/login.php');
	}
	
	function vender(){
		require_once('php/Views/Path_page/vender_view.php');
	}

	function ofertas(){
		require_once('php/Views/Path_page/ofertas_view.php');
	}

	function error(){
		require_once('php/Views/Path_page/error.php');
	}

}

?>