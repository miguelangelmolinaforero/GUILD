<?php
  include("conexion/Conexion.php");
  //include ("Encryptar.php");
  $bd = new Conexion();
  //$enc = new Encryptar();
  session_start();
  if (!isset($_SESSION["id_usuario"])) {
      header("Location: ?controller=path&action=login");
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mi cesta</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style>
        #wrapper {
            height: 66vh;
        }

        .container{
          text-align: center;
          height: 66vh;
      }

      .row {
          margin: 50px;
          justify-content: center;
      }
    </style>

</head>

<body>

    <div id="wrapper">

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Mi cuenta <small>Productos subastados</small>
                        </h1>
                        <ol class="breadcrumb">
                          <li>
                              <i class="fa fa-dashboard"></i> Consola
                          </li>
                          <li class="active">
                              <i class="fa fa-tasks"></i> Mi cuenta
                          </li>
                        </ol>
                    </div>
                </div>

                <!-- Listado de subastas -->
                <div class="row">
                  <div class="col-lg-6">

                    <div class="table-responsive">
                      <h2>Subastas activas</h2>
                      <hr>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Pagado</th>
                                </tr>
                            </thead>
                            <tbody>

                  <?php

                          //Inicia consulta de subastas
                          $iduser = $_SESSION['id_usuario'];
                          $res = $bd->select("SELECT * from subasta where subastador=$iduser and estado=0 order by id_subasta desc");
                          if ($res->num_rows > 0) {
                              while ($row = $res->fetch_assoc()) {
                                  $sub = $row["id_subasta"];
                                  $min = $row["min"];
                                  $max = $row["max"];
                                  $ini = $row["tiempo_ini"];
                                  $fin = $row["tiempo_fin"];
                                  $id_producto = $row["id_producto"];

                                  //Inicia consulta de producto de las subastas
                                  $res2 = $bd->select("SELECT * from producto where id_producto=$id_producto");
                                  if ($res2->num_rows > 0) {
                                      while ($row2 = $res2->fetch_assoc()) {
                                          $nombre_p = $row2["nombre"];
                                          $imagen_p = $row2["imagen"];
                                          $catego_p = $row2["id_categoria"];

                                          //Inicia consulta de categoria del producto
                                          $result = $bd->select("SELECT * from categoria where id_categoria=$catego_p");
                                          $categoria_arr = mysqli_fetch_array($result);
                                          $categoria = $categoria_arr["categoria"];

                                          //Inicia consulta de categoria del producto
                                          $result1 = $bd->select("SELECT * from oferta where id_subasta=$sub order by id_oferta desc limit 1");
                                          $oferta = mysqli_fetch_array($result1);
                                          //$of_final = $oferta["oferta"];
                                          if (isset($oferta["oferta"])) {
                                              $of_final = $oferta["oferta"];
                                          } ?>


                                      <tr>
                                          <td width="180px">
                                            <center>
                                              <a href="<?php echo "?controller=path&action=subasta&id=$sub"; ?>">
                                                <img src="<?php echo "php/images/productos/$imagen_p"; ?>" style="height: 80px;">
                                              </a>
                                            </center>
                                          </td>
                                          <td><?php echo "<b class='text-success'>$nombre_p</b>"; ?></td>
                                          <td><?php echo $categoria; ?></td>
                                          <?php if (!empty($of_final)) {
                                              echo "<td><b class='text-danger'>$$of_final.00</b></td>";
                                          } else {
                                              echo "<td><b class='text-danger'>$0.00</b></td>";
                                          } ?>
                                      </tr>


                                  <?php
                                      }
                                  }
                              }
                          }

                      //Termina consulta de subastas

                  ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Inicia subastas mias que ya fueron vendidas -->
                  <div class="col-lg-6">

                    <div class="table-responsive">
                      <h2>Subastas cerradas</h2>
                      <hr>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Pagado</th>
                                </tr>
                            </thead>
                            <tbody>

                  <?php

                          //Inicia consulta de subastas
                          $iduser = $_SESSION['id_usuario'];
                          $res = $bd->select("SELECT * from subasta where subastador=$iduser and estado=1 order by id_subasta desc");
                          if ($res->num_rows > 0) {
                              while ($row = $res->fetch_assoc()) {
                                  $sub = $row["id_subasta"];
                                  $min = $row["min"];
                                  $max = $row["max"];
                                  $ini = $row["tiempo_ini"];
                                  $fin = $row["tiempo_fin"];
                                  $id_producto = $row["id_producto"];

                                  //Inicia consulta de producto de las subastas
                                  $res2 = $bd->select("SELECT * from producto where id_producto=$id_producto");
                                  if ($res2->num_rows > 0) {
                                      while ($row2 = $res2->fetch_assoc()) {
                                          $nombre_p = $row2["nombre"];
                                          $imagen_p = $row2["imagen"];
                                          $catego_p = $row2["id_categoria"];

                                          //Inicia consulta de categoria del producto
                                          $result = $bd->select("SELECT * from categoria where id_categoria=$catego_p");
                                          $categoria_arr = mysqli_fetch_array($result);
                                          $categoria = $categoria_arr["categoria"];

                                          //Inicia consulta de categoria del producto
                                          $result1 = $bd->select("SELECT * from oferta where id_subasta=$sub order by id_oferta desc limit 1");
                                          $oferta = mysqli_fetch_array($result1);
                                          //$of_final = $oferta["oferta"];
                                          if (isset($oferta["oferta"])) {
                                              $of_final = $oferta["oferta"];
                                          } ?>


                                      <tr>
                                          <td width="180px">
                                            <center>
                                              <a href="<?php echo "?controller=path&action=subasta&id=$sub"; ?>">
                                                <img src="<?php echo "php/images/productos/$imagen_p"; ?>" style="height: 80px;">
                                              </a>
                                            </center>
                                          </td>
                                          <td><?php echo "<b class='text-success'>$nombre_p</b>"; ?></td>
                                          <td><?php echo $categoria; ?></td>
                                          <?php if (!empty($of_final)) {
                                              echo "<td><b class='text-danger'>$$of_final.00</b></td>";
                                          } else {
                                              echo "<td><b class='text-danger'>$0.00</b></td>";
                                          } ?>
                                      </tr>


                                  <?php
                                      }
                                  }
                              }
                          }

                      //Termina consulta de subastas

                  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Termina subastas mias que ya fueron vendidas -->
                <a class="btn btn-info" href="?controller=path&action=logout">Cerrar sesion</a>
              </div>
              <!-- Fin de listado -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
