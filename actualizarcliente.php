<?php

include "modelo/conexion.php";
$dni = $_GET["dni"];
$sql=$conexion->query("select * from pacientes where DNI=$dni");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="css/all.min.js"></script>
</head>
<body>
    <form class="col-4 px-5 m-auto" action="" method="POST">
        <?php 
        include "controlador/actualizar_cliente.php";
        ?>
        <h3>Actualizar Cliente</h3>
        <input type="text" name="id" hidden value="<?= $_GET["dni"]?>">
        <?php
        while($datos=$sql->fetch_object()){
        ?>
        <div class="mb-3">
            <label  class="form-label">DNI</label>
            <input type="number" class="form-control" name="dni" value="<?= $datos->DNI?>">
        </div>
        <div class="mb-3">
            <label  class="form-label">Nombres</label>
            <input type="text" class="form-control" name="nombre" value="<?= $datos->NOMBRE?>">
        </div>
        <div class="mb-3">
            <label  class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellido" value="<?= $datos->APELLIDOS?>">
        </div>
        <div class="mb-3">
            <label  class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion" value="<?= $datos->DIRECCION?>">
        </div>
        <div class="mb-3">
            <label  class="form-label">Telefono</label>
            <input type="tel" class="form-control" name="telefono" value="<?= $datos->TELEFONO?>">
        </div>
        <?php
        }
        ?>
        <button type="submit" class="btn btn-primary" name="actualizar" value="ok">Actualizar</button>
    </form>
</body>
</html>