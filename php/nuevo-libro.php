<?php
include"conexionBD.php";

$query= mysqli_query($mysqli,"SELECT DUI,NOMBRES FROM REGISTRO ORDER BY NOMBRES DESC");
$query2= mysqli_query($mysqli,"SELECT ID_PROVEEDOR,NOMBRE FROM PROVEEDOR ORDER BY NOMBRE DESC");
$query3= mysqli_query($mysqli,"SELECT CODIGO,NOMBRE FROM CATEGORIA ORDER BY NOMBRE DESC");

?>
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
						<li>
							<a href="estudiantes.php"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Estudiantes</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>
	
	
<center>
            <div class="lista">
			 <a href="lista-libros.php" class="btn btn-success">
			 <i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE LIBROS
			 </a>
			</div>
              
        <hr class="hr">
        
        <div class="contenedor">
        <div class="form">
        <div class="cuenta"><br><br>
<legend><i class="zmdi zmdi-account-box"></i> &nbsp; Datos de libro</legend>
              <form class="formulario" action="registrarlibro.php" method="POST">
                 <label>NOMBRE</label>
                <input class="fo" type="text" name="NOMBRE"><br><br>
                <label class="">Seleccione Categoria*</label>
										  	<select  name="CODIGO" class="form-control" >
										  		      <?php
                                      while($arreglo2= mysqli_fetch_array($query3)){?>
                                      <option value="<?php echo $arreglo2['CODIGO']?>">
                                  <?php echo $arreglo2['NOMBRE']?>
                                      </option>
                                      <?php

                                      }
                                      ?>
										  	</select> 
               <label class="">Seleccione Proveedor*</label>
										  	<select  name="ID_PROVEEDOR" class="form-control" >
										  		      <?php
                                      while($arreglo= mysqli_fetch_array($query2)){?>
                                      <option value="<?php echo $arreglo['ID_PROVEEDOR']?>">
                                  <?php echo $arreglo['NOMBRE']?>
                                      </option>
                                      <?php

                                      }
                                      ?>
										  	</select> 
                
             
                
                   <label>N° EXISTENCIAS</label>
                <input class="fo" type="text" name="EXISTENCIAS"><br><br>
                     <label class="">Seleccione Administrador*</label>
										  	<select  name="ADMIN" class="form-control" >
										  		      <?php
                                      while($arreglo1= mysqli_fetch_array($query)){?>
                                      <option value="<?php echo $arreglo1['DUI']?>">
                                  <?php echo $arreglo1['NOMBRES']?>
                                      </option>
                                      <?php

                                      }
                                      ?>
										  	</select> 
                
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