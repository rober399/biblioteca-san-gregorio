
<?php
require_once"conexionBD.php";
$DUI = $_POST['DUI'];
$NOMBRE = $_POST['NOMBRES'];
$APELLIDO = $_POST['APELLIDOS'];
$TELEFONO = $_POST['TELEFONO'];
$DIRECCION= $_POST['DIRECCION'];
$USUARIO = $_POST['USUARIO'];
$CONTRASE = $_POST['CONTRASEÑA'];
$EMAIL = $_POST['EMAIL'];
$GENERO = $_POST['GENERO'];
$consulta ="INSERT INTO REGISTRO(DUI,NOMBRES,APELLIDOS,TELEFONO,DIRECCION,USUARIO,CONTRASEÑA,EMAIL,GENERO) VALUES('$DUI','$NOMBRE','$APELLIDO','$TELEFONO','$DIRECCION','$USUARIO','$CONTRASE','$EMAIL','$GENERO')";
if($mysqli->query($consulta)){
echo'<script type="text/javascript"> alert("Datos Guardados"); window.location.href="listaAdmin.php"; </script>';
}else{
echo "Ocurrio un error";}