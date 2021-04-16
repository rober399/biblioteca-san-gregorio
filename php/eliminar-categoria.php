<?php
require_once "conexionBD.php";
if(isset($_GET['CODIGO'])){
$CODIGO=$_GET['CODIGO'];
$consulta="DELETE FROM CATEGORIA WHERE CODIGO='$CODIGO'";
if($mysqli->query($consulta)){
echo'<script type="text/javascript">
alert("Datos Eliminados");
window.location.href="listacategorias.php";
</script>';
}else{
echo "Error no se pudo eliminar el registro";
}
}else{
echo "Error no se pudo procesar la peticion";
}
?>