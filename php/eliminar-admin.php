<?php
require_once "conexionBD.php";
if(isset($_GET['DUI'])){
$DUI=$_GET['DUI'];
$consulta="DELETE FROM REGISTRO WHERE DUI='$DUI'";
if($mysqli->query($consulta)){
echo'<script type="text/javascript">
alert("Datos Eliminados");
window.location.href="listaAdmin.php";
</script>';
}else{
echo "Error no se pudo eliminar el registro";
}
}else{
echo "Error no se pudo procesar la peticion";
}
?>