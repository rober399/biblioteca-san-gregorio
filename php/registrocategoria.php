<?php
require_once"conexionBD.php";

$nombre=$_POST['NOMBRE'];

$consulta="INSERT INTO CATEGORIA(CODIGO, NOMBRE) VALUES('','$nombre')";

if($mysqli->query($consulta)){
echo '<script type="text/javascript"> alert("Datos guardados");
window.location.href="listacategorias.php";</script>';
}else{
echo "Ourrio un errror";
}
?>