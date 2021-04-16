<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de estudiantes</title>
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
						<li>
							<a href="estudiantes.php"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Estudiantes</a>
						</li>
					</ul>
				</li>
				
			</ul>
		</div>
	</section>
   
           
                   <div class="lista2">
                    <a href="../estudiantes.html" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp; AGREGAR NUEVO ESTUDIANTE
			  		</a>
			  		</div>
			  		
  
    <hr class="hr">
     <div class="container">
      <table>
          <thead>
              <tr>
                  <th>CARNET</th><th>NOMBRES</th><th>APELLIDOS</th><th>ADMIN</th><th>ELIMINAR</th>
              </tr>
          </thead>
          
          
    
          
          
          
           <tbody>
                    <?php
    require_once "conexionBD.php";      
                    
        $consulta="SELECT * FROM ESTUDIANTE";
        $consulta2=$mysqli->query($consulta);
        
        while($row=$consulta2->fetch_array(MYSQLI_ASSOC)){
            
            echo "<tr>
                <td>".$row['CARNET']."</td>
                <td>".$row['NOMBRES']."</td>
                   <td>".$row['APELLIDOS']."</td>
                     
                            <td>".$row['DUI']."</td>
                
                
                    
                
                 <td><a href='eliminar-estudiante.php?CARNET=".$row['CARNET']."'>Eliminar</a></td>
                    
</tr>";
        }
        ?>
                </tbody>


      </table>
      <script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/sweetalert2.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
	<script>
		$.material.init();
	</script>
      
      </div>
      
      
     
</body>
</html>