<?php
  session_start();
  unset($_SESSION["Usu"]); 
  unset($_SESSION["con"]);
  unset($_SESSION["Cli"]);
  unset($_SESSION["CliCon"]);
  unset($_SESSION["UsuProv"]);
  unset($_SESSION["ConProvCon"]);
  unset($_SESSION["UsuEmp"]);
  unset($_SESSION["ConEmp"]);

  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gestión Total: Cerrar Sesion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../estilos/images/icons/IgestionV2.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../estilos/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../estilos/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../estilos/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../estilos/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../estilos/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../estilos/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../estilos/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../estilos/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../estilos/css/util.css">
	<link rel="stylesheet" type="text/css" href="../estilos/css/main.css">
        <link rel="stylesheet" type="text/css" href="../estilos/css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../estilos/css/estilos_1.css">
<!--===============================================================================================-->
</head>
<body>
	<header>
            	<nav class="navegacion1">
                   
                    <ul  class="menu1">
                                
				<li><a href="LoginAdmin.php">Administrador</a></li>
				<li><a href="LoginClientes.php">Clientes</a></li>
				<li><a href="LoginEmpleados.php">Empleados</a></li>
				<li><a href="LoginProveedores.php">Proveedores</a></li>
				
			</ul>
                      
		</nav>
             <nav class="navegacion">
			<ul class="menu">
                                <li><img src="../estilos/images/gestion.png" alt="LogoGestion" height="55" width="220"></li>
				
                                <li><a href="acerca.html">Acerca  </a></li>
				<li><a>Nosotros</a>
					<ul class="submenu">
						
						<li><a href="Mision.html">MISIÓN</a></li>
						<li><a href="Vision.html">VISIÓN</a></li>
					</ul>
					<li><a href='contactenos.html' >Contáctenos</a></li>
				</li>
			</ul>
		</nav>
		
	</header>
    
	<div class="limter">
		<div class="container-login100">
			<script type="text/javascript">
        		function redireccionar(){
            		window.location="../index.html";
        		  }
       			 setTimeout ("redireccionar()", 3000);
  				</script>
                    
			<div class="wrap-login100 p-b-160 p-t-50">
                            <center><h1 class="animated" style="color: black">GESTIÓN TOTAL</h1></center>
                            &nbsp;
                            <span align="justify" >
                            <center><h3 style="color:black" >Gracias por utilizar nuestros servicios... vuelva pronto</h3></center>
                            </span> &nbsp;<center><p style="color:black" >Será redirigido en 3 segundos.</p></center>
                            <center><img src="../estilos/images/gracias.png" height="300" width="500"></center>
                        
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
  <script src="../estilos/js/ValidarTipo.js"></script>
  <script src="../estilos/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
