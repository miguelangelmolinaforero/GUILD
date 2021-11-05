<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINK DEL LOGO -->
    <link rel="shortcut icon" href="../images/logo_pagina_pestania.jpg" type="image/x-icon">

    <!-- INCLUIR CSS PRINCIPAL -->
    <link rel="stylesheet" href="../../../../GUILD/assets/css/styles_main_page.css">

	<!-- INCLUIR CSS LOGIN -->
    <!-- <link rel="stylesheet" href="../../../../GUILD/assets/css/grafi.css"> -->

	<!-- INCLUIR CSS CATEGORIAS -->
	<link rel="stylesheet" href="../../../../GUILD/assets/css/categorias.css">
    
	<!-- INLCUIR BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <title>GUILD</title>
</head>
<body>
	<!-- header -->
	<header class="header">
		<?php require_once('header.php'); ?>
	</header>

	<!-- rutas -->
	<?php require_once('routing.php'); ?>

	<!-- footer -->
	<footer>
		<?php require_once('footer.php'); ?>
	</footer>

</body>
</html>
