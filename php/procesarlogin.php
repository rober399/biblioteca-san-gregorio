<?php
require_once 'conexionBD.php';
$usuario=$_POST['USUARIO'];
$contrase=$_POST['CONTRASEÑA'];
$consulta="SELECT*FROM REGISTRO WHERE USUARIO='$usuario' AND CONTRASEÑA='$contrase'";
$consultaBD=$mysqli->query($consulta);
if($consultaBD->num_rows>=1){
    $row=$consultaBD->fetch_array(MYSQLI_ASSOC);
    session_start();
    $_SESSION['USUARIO']=$row['USUARIO'];
    $_SESSION['autenticar']=true;
    header("location:../inicio.html");
    
}else{
   echo'<script type="text/javascript"> alert("DATOS ERRONEOS"); window.location.href="../Login.html"; </script>';
}
    ?>