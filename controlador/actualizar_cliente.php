<?php
if(isset($_POST["actualizar"])){
    if(!empty($_POST["dni"]) && !empty($_POST["nombre"]) && !empty($_POST["apellido"] && !empty($_POST["direccion"])) && !empty($_POST["telefono"])){
     $dni=$_POST["dni"];
     $nombre=$_POST["nombre"];
     $apellido=$_POST["apellido"];
     $direccion=$_POST["direccion"];
     $telefono=$_POST["telefono"];

     $sql=$conexion->query("UPDATE pacientes SET NOMBRE='$nombre',
     APELLIDOS='$apellido',DIRECCION='$direccion', TELEFONO=$telefono WHERE DNI=$dni");
     if($sql==1){
        header("location:encargado.php");
      }else{
        echo "no se pudo registrar";
      }
     }else{
        echo "los campos estan vacios";
     }
    }

?>