<?php
require_once "conexionBD.php";
if(isset($_GET['ID_PRESTAMO'])){
$ID_PRESTAMO=$_GET['ID_PRESTAMO'];
$consulta="DELETE FROM PRESTAMO WHERE ID_PRESTAMO='$ID_PRESTAMO'";
if($mysqli->query($consulta)){
echo'<script type="text/javascript">
alert("Datos Eliminados");
window.location.href="lista_prestamo.php";
</script>';
}else{
echo "Error no se pudo eliminar el registro";
}
}else{
echo "Error no se pudo procesar la peticion";
}
?>