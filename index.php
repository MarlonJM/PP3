<<<<<<< HEAD
<?php
include 'phpclass/conectar.php';
include 'phpclass/persona.php';
include 'gestion_personas.php';
?>
<?php include "headerAdmin.php" ?>
=======
<?php include "phpclass/conectar.php"; ?>
<?php include "phpclass/persona.php"; ?>
<?php include "gestion_personas.php"; ?>
<?php include "header.php" ?>
>>>>>>> origin/master

			<div id="Intro">

<<<<<<< HEAD
				<video id="videoIntro" autoplay="autoplay" loop>
				    <source src="video/back5.mp4" type="video/mp4"></source>
				</video><!-- 
				<div style="margin-bottom:30px;height:50px;">
					
				</div> -->

				<nav id="menu">
					<ul>
						<li><a href="#who">¿Quienes Somos?</a></li>
						<li><a href="#team">Nuestro Equipo</a></li>
						<li><a href="#formulario">Forma Parte</a></li>
						<li><a href="#">Login</a></li>
					</ul>	
				</nav>
=======
			<div id="profile" class="colorHeader">
					<div id	="image"><img src="img/Colors/lentes.png" alt=""></div>
					<div id="nombre"><h3> </h3> </div>
			</div>

			<div id="info" class="colorHeader">
					<div id="pxs" class="cleardat"></div>
					<div class="datos"><img src="img/Colors/telefono.png" alt=""><h1><span>Telefono:</span> 9999-9999</h1></div>
					<div class="cleardat"></div>
					<div class="datos"><img src="img/Colors/celular.png" alt=""><h1><span>Celular: </span>9999-9999</h1></div>
					<div class="cleardat"></div>	
					<div class="datos"><img src="img/Colors/correo.png" alt=""><h1><span>Correo:</span></h1></div>
					<div class="cleardat"></div>
					<div class="datos"><img src="img/Colors/gorro.png" alt=""><h1><span>Enfasis:</span> </h1></div>
					<div class="cleardat"></div>
					<div class="datos"><img src="img/Colors/nacimiento.png" alt=""><h1><span>Nacimiento:</span></h1></div>
					<div class="cleardat"></div>
			</div>
>>>>>>> origin/master

				<div id="logo" style="margin-top:150px;">
					<h1>PKMS Design</h1>
				</div>
	
			</div>
			
			<div id="who">

			<div id="descWho">

			<h1>Somos</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

				<div class="servicios">
					<img src="img/htmlLogo.png">
					<h1>HTML</h1>
				</div>

				<div class="servicios">
					<img src="img/lapiz.png">
					<h1>Diseño</h1>
				</div>

				<div class="servicios">
					<img src="img/community2.png">
					<h1>Comunidad</h1>
				</div>
				
			</div>

			<div id="team">
			<?php foreach ($resultado as $linea) { ?>

				<div class="profile" style="">
					<div class="profilePic" style="background-image: url('img/<?php echo $linea['profileimg']?>');">

					</div>

					<div class="profileDesc">
						<h1><?php echo $linea['nombre'] ?></h1>
						<a href="portafolio.php?id_persona=<?php echo $linea['id_persona'] ?>">Ver Portafolio</a>
					</div>
				</div>

			<?php } ?> 
				
			</div>

			<div id="formulario">
				<div id="contenedor">
					<div id="cuadro">
						<h1 style="text-align:center;color: #C43B3C; margin-bottom:10px;font-size:70px;">Formulario</h1>
						<form>
							<label style="margin-top:60px;">Nombre:</label><input type="" name="" class="text">
							<label>Primer Apellido:</label><input type="" name="" class="text">
							<label>Segundo Apellido:</label><input type="" name="" class="text">
							<label>Correo Electrónico:</label><input type="" name="" class="text">
							<label>Fecha de Nacimiento:</label><input type="" name="" class="text">
							<input id="boton"  type="button" name="" value="Enviar">
						</form>
					</div>

				</div>
				
			</div>

			<footer>
				<h1>PKMS Design</h1>
			</footer>


<?php include "footerAdmin.php" ?>