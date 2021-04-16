<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categorias</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/full.css">
</head>
<body>
   
   
     <!-- imagen usuario
					barra inferior
					 -->
					 
    	
		
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">               
					
				</li>
				<li>
					<a href="search.html" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
			</ul>
		</nav>
           
           
		       
    
    <section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
<img src="img/logo_uls_caba%C3%B1as.png" width="250px" height="45px">
			</div>
    
    
    
    		<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
				
				
					
					
					<center><figcaption class="text-center text-titles">Administrador </figcaption></center>
				</figure>
				<ul class="full-box list-unstyled text-center">
					
					
					<li>
						<a href="Login.html" title="Salir del sistema" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			
			 
			
			<!-- Menu -->
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
							<a href="categorias.html"><i class="zmdi zmdi-truck zmdi-hc-fw"></i> Categorias</a>
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
							<a href="client.html"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Clientes</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
						<i class="zmdi zmdi-book-image zmdi-hc-fw"></i> Catalogo
					</a>
				</li>
			</ul>
		</div>
    </section>
    
      
       
        
        
        <center>
            <div class="lista">
			 <a href="php/listacategorias.php" class="btn btn-success">
			 <i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE CATEGORIAS
			 </a>
			</div>
        <hr class="hr">
        
        <div class="contenedor">
        <div class="form">
                        	<?php
				require_once "conexionBD.php";
if(isset($_GET['CODIGO'])){

$CODIGO=$_GET['CODIGO'];
$consulta="SELECT * FROM CATEGORIA WHERE CODIGO='$CODIGO'";
$consulta2=$mysqli->query($consulta);
$row=$consulta2->fetch_array(MYSQLI_ASSOC);
echo '<div class="cuenta"><br><br>
<legend><i class="zmdi zmdi-assignment-o"></i> &nbsp; Información de la categoría</legend>
              <form class="formulario" action="actualizar-categoria.php" method="POST">
                 <label>CODIGO</label>
                <input class="fo" type="text" name="CODIGO" value="'.$row['CODIGO'].'"><br><br>
                
                 <label>Nombre</label>
                <input class="fo" type="text" name="NOMBRE" value="'.$row['NOMBRE'].'"><br><br>
               
            
                
                 
                 
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
    <script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>