<?php
require_once"conexionBD.php";

$CARNET=$_POST['CARNET'];
$DUI=$_POST['ADMIN'];
$ID_LIBRO=$_POST['ID_LIBRO'];
$INICIO=$_POST['INICIO'];
$FINAL=$_POST['FINAL'];


$consulta="INSERT INTO PRESTAMO(ID_PRESTAMO,CARNET,ID_LIBRO,FECHA_INICIO,FECHA_FINAL,DUI) VALUES('','$CARNET','$ID_LIBRO','$INICIO','$FINAL',$DUI)";

if($mysqli->query($consulta)){
echo '<script type="text/javascript"> alert("Datos guardados");
window.location.href="prestamo-libro.php";</script>';
}else{
echo "Ourrio un error";
}
?>