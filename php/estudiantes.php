
<?php
include"conexionBD.php";
$query= mysqli_query($mysqli,"SELECT DUI, NOMBRES FROM REGISTRO ORDER BY NOMBRES DESC");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Estudiante</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/full.css">
</head>
<body>
   
   	<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				
				<li>
					<a href="../search.php" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
			</ul>
		</nav>
           
           
		       
  
   
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-ct">
	
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				<img src="../img/logo_uls_caba%C3%B1as.png" width="250px" height="45px">
			</div>
			
			
			
			<div class="full-box dashboard-sideBar-UserInfo">
					
					<center><figcaption class="text-center text-titles">Administrador </figcaption></center>
				
				<ul class="full-box list-unstyled text-center">
					
					
					<li>
						<a href="../Login.html" title="Salir del sistema" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			
			
			
			
		<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="../inicio.html">
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
							<a href="../categorias.html"><i class="zmdi zmdi-labels zmdi-hc-fw"></i> Categorías</a>
						</li>
						<li>
							<a href="../proveedores.html"><i class="zmdi zmdi-truck zmdi-hc-fw"></i> Proveedores</a>
						</li>
						<li>
							<a href="nuevo-libro.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Nuevo libro</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="../RegistroAdmin.html"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administradores</a>
						</li>
						
					</ul>
				</li>
				
			</ul>
		</div>
	</section>
   
   
   <center>
            <div class="lista">
			 <a href="listaEstud.php" class="btn btn-success">
			 <i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE ESTUDIANTES
			 </a>
			</div>
        <hr class="hr">
        
        <div class="contenedor">
        <div class="form">
        <div class="cuenta"><br>
<legend><i class="zmdi zmdi-account-box"></i> &nbsp; Información personal</legend>
              <form class="formulario" action="registrar_estudiantes.php" method="POST">
                <label>Carnet</label>
                <input class="fo" type="text" name="CARNET"><br><br>
                 <label>Nombres</label>
                <input class="fo" type="text" name="NOMBRE"><br><br>
                 <label>Apellidos</label>
                <input class="fo" type="text" name="APELLIDO"><br><br>
                  <label>Admin</label>
                   <select  name="DUI" class="form-control" >
										  		      <?php
                                      while($arreglo1= mysqli_fetch_array($query)){?>
                                      <option value="<?php echo $arreglo1['DUI']?>">
                                  <?php echo $arreglo1['NOMBRES']?>
                                      </option>
                                      <?php

                                      }
                                      ?>
										  	</select> 
                
                 <br><br>  
                   <center>
                   <button type="submit" class="boton">Guardar</button>
                   </center>
            
           
           
            </form>
            </div>
        </div>
    </div>
    
    
</center>

<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/sweetalert2.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
	<script>
		$.material.init();
	</script>
   
    
</body>
</html>