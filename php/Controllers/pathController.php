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
		// require_once('php/Views/Path_page/register.php');
		require_once('php/registro.php');
	}

	function login(){
		// require_once('php/Views/Path_page/login.php');
		require_once('php/login.php');
	}
	
	function vender(){
		// require_once('php/Views/Path_page/vender_view.php');
		require_once('php/alta_subasta.php');
	}

	function subasta(){
		// require_once('php/Views/Path_page/vender_view.php');
		require_once('php/subasta.php');
	}

	function ofertas(){
		require_once('php/Views/Path_page/ofertas_view.php');
	}

	function compras(){
		require_once('php/cuenta.php');
	}

	function agrega_categoria(){
		require_once('php/alta_categoria.php');
	}

	function perfil(){
		require_once('php/perfil.php');
	}

	function logout(){
		require_once('php/logout.php');
	}

	function error(){
		require_once('php/Views/Path_page/error.php');
	}

}

?>