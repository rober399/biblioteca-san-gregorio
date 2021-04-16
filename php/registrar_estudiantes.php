<?php
require_once"conexionBD.php";

$CARNET=$_POST['CARNET'];
$NOMBRE=$_POST['NOMBRE'];
$APELLIDO=$_POST['APELLIDO'];
$DUI=$_POST['DUI'];

$consulta="INSERT INTO ESTUDIANTE(CARNET,NOMBRES,APELLIDOS,DUI) VALUES('$CARNET','$NOMBRE','$APELLIDO','$DUI')";

if($mysqli->query($consulta)){
echo '<script type="text/javascript"> alert("Datos guardados");
window.location.href="listaEstud.php";</script>';
}else{
echo "Ourrio un error";
}
?>