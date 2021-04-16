<?php
require_once"conexionBD.php";

$NOMBRE=$_POST['NOMBRE'];
$CODIGO=$_POST['CODIGO'];
$PROVEEDOR=$_POST['ID_PROVEEDOR'];
$EXISTENCIAS=$_POST['EXISTENCIAS'];
$DUI=$_POST['ADMIN'];

$consulta="INSERT INTO LIBRO(ID_LIBRO, NOMBRE, CODIGO, ID_PROVEEDOR,N_EXISTENCIAS,DUI) VALUES('','$NOMBRE','$CODIGO','$PROVEEDOR','$EXISTENCIAS',$DUI)";

if($mysqli->query($consulta)){
echo '<script type="text/javascript"> alert("Datos guardados");
window.location.href="lista-libros.php";</script>';
}else{
echo "Ourrio un errror";
}
?>