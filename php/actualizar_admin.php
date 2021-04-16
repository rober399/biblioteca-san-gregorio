<?php
require_once "conexionBD.php";
$DUI=$_POST['DUI'];
$NOMBRE = $_POST['NOMBRES'];
$APELLIDO = $_POST['APELLIDOS'];
$TELEFONO= $_POST['TELEFONO'];
$DIRECCION = $_POST['DIRECCION'];
$USUARIO = $_POST['USUARIO'];
$CONTRASEÑA = $_POST['CONTRASEÑA'];
$EMAIL = $_POST['EMAIL'];
$GENERO = $_POST['GENERO'];
$consulta="UPDATE REGISTRO SET NOMBRES='$NOMBRE', APELLIDOS='$APELLIDO',
TELEFONO='$TELEFONO',DIRECCION='$DIRECCION',USUARIO='$USUARIO',CONTRASEÑA='$CONTRASEÑA',EMAIL='$EMAIL',GENERO='$GENERO' WHERE DUI='$DUI'";
if($mysqli->query($consulta)){
echo'<script type="text/javascript"> alert("Datos Actualizados"); window.location.href="listaAdmin.php"; </script>';
}else{
echo "Error no se pudo actualizar los datos";
}
?>