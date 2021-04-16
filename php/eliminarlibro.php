<?php
require_once "conexionBD.php";
if(isset($_GET['ID_LIBRO'])){
$ID_LIBRO=$_GET['ID_LIBRO'];
$consulta="DELETE FROM LIBRO WHERE ID_LIBRO='$ID_LIBRO'";
if($mysqli->query($consulta)){
echo'<script type="text/javascript">
alert("Datos Eliminados");
window.location.href="lista-libros.php";
</script>';
}else{
echo "Error no se pudo eliminar el registro";
}
}else{
echo "Error no se pudo procesar la peticion";
}
?>