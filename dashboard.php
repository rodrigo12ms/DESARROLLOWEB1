<?php 
session_start();
include 'source/db_connect.php';
$usuariom =$_SESSION['username'];
if(!isset($usuariom)){
    header("location:index.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Inicio</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background: #ECE9E6;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #FFFFFF, #ECE9E6);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #FFFFFF, #ECE9E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            }
    
    </style>


</head>
<body>

    <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

    <?php else: ?>

    <?php endif ?>

    <?php echo "<h1> Bienvenido ".$_SESSION['username']." esta es la pantalla de inicio </h1>" ?>

    <h2><a href="logout.php">cerrar secion</a></h2>
        
</body>
</html>