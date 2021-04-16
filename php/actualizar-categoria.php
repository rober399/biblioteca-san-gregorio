<?php
require_once "conexionBD.php";
$CODIGO=$_POST['CODIGO'];
$NOMBRE = $_POST['NOMBRE'];
$consulta="UPDATE CATEGORIA SET NOMBRE='$NOMBRE' WHERE CODIGO='$CODIGO'";
if($mysqli->query($consulta)){
echo'<script type="text/javascript"> alert("Datos Actualizados"); window.location.href="listacategorias.php"; </script>';
}else{
echo "Error no se pudo actualizar los datos";
}
?>