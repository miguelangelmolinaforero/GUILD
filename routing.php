<?php 

// arreglo contenedor de todas los procedimientos controladores
$controllers=array(
	'path'=>['index','register','save','show','updateshow','update','delete','search','error']
);

if (array_key_exists($controller,  $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	}
	else{
		call('path','error');
	}		
}else{
	call('path','error');
}

// funcion de llamado de archivo php
function call($controller, $action){
	// requerimiento de funciones de controlador
	require_once('php/Controllers/'.$controller.'Controller.php');

	switch ($controller) {
		case 'path':
		require_once('php/Model/path.php');
		// se crea un nuevo objeto UsuarioController
		$controller = new PathController();
		break;
	}
	$controller->{$action}();
}

?>