<?php
if(isset($_GET["dni"])){
    $dni=$_GET["dni"];
    $sql=$conexion->query("DELETE from pacientes where DNI=$dni");
    if($sql==1){
        header("location:encargado.php");
      }else{
        echo "no se pudo eliminar";
      }
}
?>