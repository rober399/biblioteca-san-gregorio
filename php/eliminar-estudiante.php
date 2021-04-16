<?php
require_once "conexionBD.php";
if(isset($_GET['CARNET'])){
$CARNET=$_GET['CARNET'];
$consulta="DELETE FROM ESTUDIANTE WHERE CARNET='$CARNET'";
if($mysqli->query($consulta)){
echo'<script type="text/javascript">
alert("Datos Eliminados");
window.location.href="listaEstud.php";
</script>';
}else{
echo "Error no se pudo eliminar el registro";
}
}else{
echo "Error no se pudo procesar la peticion";
}
?>