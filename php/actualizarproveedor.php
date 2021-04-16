<?php
require_once "conexionBD.php";
$ID_PROVEEDOR=$_POST['ID_PROVEEDOR'];
$NOMBRE = $_POST['NOMBRE'];
$TELEFONO = $_POST['TELEFONO'];
$EMAIL = $_POST['EMAIL'];
$consulta="UPDATE PROVEEDOR SET NOMBRE='$NOMBRE',TELEFONO='$TELEFONO',CORREO='$EMAIL' WHERE ID_PROVEEDOR='$ID_PROVEEDOR'";
if($mysqli->query($consulta)){
echo'<script type="text/javascript"> alert("Datos Actualizados"); window.location.href="listaproveedores.php"; </script>';
}else{
echo "Error no se pudo actualizar los datos";
}
?>