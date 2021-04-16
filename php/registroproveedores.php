<?php
require_once"conexionBD.php";

$nombre=$_POST['NOMBRE'];
$telefono=$_POST['TELEFONO'];
$email=$_POST['EMAIL'];

$consulta="INSERT INTO PROVEEDOR(ID_PROVEEDOR, NOMBRE, TELEFONO, CORREO) VALUES('','$nombre','$telefono','$email')";

if($mysqli->query($consulta)){
echo '<script type="text/javascript"> alert("Datos guardados");
window.location.href="../proveedores.html";</script>';
}else{
echo "Ourrio un errror";
}
?>