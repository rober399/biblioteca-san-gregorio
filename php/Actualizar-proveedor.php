<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de Nuevos Administradores</title>
    	<link rel="stylesheet" href="../css/full.css">


</head>
<body>
  
  
  

		
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				
				<li>
					<a href="search.html" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
			</ul>
		</nav>
           
           
		    
           
		       
  
   
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-ct">
	
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				ULS<i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			
			
			
			<div class="full-box dashboard-sideBar-UserInfo">
					
					<center><figcaption class="text-center text-titles">Administrador: </figcaption></center>
				
				<ul class="full-box list-unstyled text-center">
					
					
					<li>
						<a href="Login.html" title="Salir del sistema" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			
			
			
			
		<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="inicio.html">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administración <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					   <li>
							<a href="prestamo-libro.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Nuevo Prestamo</a>
						</li>
						<li>
							<a href="category.html"><i class="zmdi zmdi-labels zmdi-hc-fw"></i> Categorías</a>
						</li>
						<li>
							<a href="provider.html"><i class="zmdi zmdi-truck zmdi-hc-fw"></i> Proveedores</a>
						</li>
						<li>
							<a href="book.html"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Nuevo libro</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="RegistroAdmin.html"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administradores</a>
						</li>
						<li>
							<a href="client.html"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Estudiantes</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>
	
	
<center>
            <div class="lista">
			 <a href="php/listaproveedores.php" class="btn btn-success">
			 <i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE PROVEEDORES
			 </a>
			</div>
              
        <hr class="hr">
        
        <div class="contenedor">
        <div class="form">
        <?php
				require_once "conexionBD.php";
if(isset($_GET['ID_PROVEEDOR'])){

$ID_PROVEEDOR=$_GET['ID_PROVEEDOR'];
$consulta="SELECT * FROM PROVEEDOR WHERE ID_PROVEEDOR='$ID_PROVEEDOR'";
$consulta2=$mysqli->query($consulta);
$row=$consulta2->fetch_array(MYSQLI_ASSOC);
echo '<div class="cuenta"><br><br>
<legend><i class="zmdi zmdi-account-box"></i> &nbsp; Información Proveedor</legend>
              <form class="formulario" action="actualizarproveedor.php" method="POST">
              <label>Nombre</label>
                <input class="fo" type="text" name="ID_PROVEEDOR"value="'.$row['ID_PROVEEDOR'].'"><br><br>
                <label>Nombre</label>
                <input class="fo" type="text" name="NOMBRE"value="'.$row['NOMBRE'].'"><br><br>
                 <label>Telefono</label>
                <input class="fo" type="text" name="TELEFONO"value="'.$row['TELEFONO'].'"><br><br>
                 <label>Email</label>
                <input class="fo" type="email" name="EMAIL"value="'.$row['CORREO'].'"><br><br>
                   <center>
                   <button type="submit" class="boton">Guardar</button>
                   </center>
            
            </form>
            </div>
        </div>';
}else{
echo "Ocurrio un error inesperado";
}
?>
    </div>
       </div>
    
</center>

<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
		<script>
		$.material.init();
	</script>
</body>
</html>