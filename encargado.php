<?php 
session_start();
include 'db_connect.php';
$usuariom =$_SESSION['username'];
if(!isset($usuariom)){
    header("location:indexp.php");
}
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
<?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

<?php else: ?>

<?php endif ?>

<?php echo "<h1 > Bienvenido ".$_SESSION['username']." esta es la pantalla de citas </h1>" ?>
    <script>
        function eliminar(){
            var respuesta=confirm("seguro que desea eliminar?");
            return respuesta;
        }
    </script>
    <h1 class="text-center" style="background:#ff0019">Pagina Encargado</h1>
    <div class="container-fluid row">
        <form class="col-4 px-5" action="" method="POST">
            <h3>Registro de pacientes</h3>
            <?php
            include "modelo/conexion.php";
            include "controlador/registrar_cliente.php";
            ?>
             <div class="mb-3">
                <label  class="form-label">DNI</label>
                <input type="number" class="form-control" name="dni">
            </div>
            <div class="mb-3">
                <label  class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label  class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label  class="form-label">Direccion</label>
                <input type="text" class="form-control" name="direccion">
            </div>
            <div class="mb-3">
                <label  class="form-label">Telefono</label>
                <input type="tel" class="form-control" name="telefono">
            </div>
            <button type="submit" class="btn btn-primary" name="registrar">Registrar</button>
            <h2><a href="indexp.php" class="btn btn-primary" >cerrar secion</a></h2>

        </form>
        <div class="col-8">
            <?php
            include "controlador/eliminar_cliente.php";
            ?>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">DNI</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from pacientes");
                    while($datos=$sql->fetch_object()){
                ?>
                    <tr>
                        <td><?= $datos->DNI ?></td>
                        <td><?= $datos->NOMBRE ?></td>
                        <td><?= $datos->APELLIDOS ?></td>
                        <td><?= $datos->DIRECCION ?></td>
                        <td><?= $datos->TELEFONO ?></td>

                        <td>
                            <a href="actualizarcliente.php?dni=<?= $datos->DNI ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a onclick="return eliminar()" href="encargado.php?dni=<?= $datos->DNI ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>