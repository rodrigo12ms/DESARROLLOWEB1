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
    <h1 class="text-center" style="background:#ff0019">Pagina paciente </h1>
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
                <img src="img/clinica2.JPG" alt="" width="700" height="550">
            
            </table>
        </div>
    </div>
</body>
</html>