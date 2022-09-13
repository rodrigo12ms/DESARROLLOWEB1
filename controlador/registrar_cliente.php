<?php
if(isset($_POST["registrar"])){
 if(!empty($_POST["dni"]) && !empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["direccion"]) && !empty($_POST["telefono"])){
  $dni=$_POST["dni"];
  $nombre=$_POST["nombre"];
  $apellido=$_POST["apellido"];
  $direccion=$_POST["direccion"];
  $telefono=$_POST["telefono"];
  $sql=$conexion->query("INSERT INTO pacientes(DNI,NOMBRE,APELLIDOS,DIRECCION,TELEFONO) values('$dni','$nombre','$apellido','$direccion','telefono')");
  if($sql==1){
    echo '<div class="alert alert-success">cliente registrado</div>';
  }else{
    echo "no se pudo registrar";
  }
 }else{
    echo "los campos estan vacios";
 }
}
?>