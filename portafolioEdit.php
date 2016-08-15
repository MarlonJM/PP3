<?php include "phpclass/conectar.php"; ?>
<?php include "phpclass/persona.php"; ?>
<?php include "header.php" ?>


		<div id="intro">
			<div id="sideEdit" style="width:100%;height:100%;background-color:black;z-index:1;position:absolute;">

				<form>
					<div id="perfilEdit">
						<div id="profileImgEdit"></div>
						<input type="text" name="" style="margin-top:20px;">
						<input id="boton"  type="button" name="" value="Aceptar">
					</div>
				</form>
			</div>

			<video id="videoIntro" autoplay="autoplay" loop>
				<source src="video/back3.mp4" type="video/mp4"></source>
			</video>

			<div class="dropdown">
				  <i class="icon-menu"></i>
				  <div class="dropdown-content">
				    <a href="#acerca">Acerca</a>
				    <a href="#proyectos">Proyectos</a>
				    <a href="#galeria">Galería</a>
				  </div>
			</div>

			<div id="perfil">
				
			</div>
			
		</div>

		<div id="acerca">

		<!-- Editar -->
			<div id="sideEdit" style="width:100%;height:100%;background-color:blue;z-index:1;position:absolute;">

			<div id="descripcionEdit">
					<h1>Acerca de Mi</h1>
					<textarea cols="89" rows="20s" style="margin-top:20px;resize: none;"></textarea>
				</div>

				<div id="contactoEdit">
				<form>
					<div id="datosEdit">
						<h1>Contacto</h1>
							
						<div class="acercaIconEdit" style="margin-top:20px;"><i class="icon-phone"></i><input type="text" name=""></div>
						<div style="clear:both;"></div>
						<div class="acercaIconEdit"><i class="icon-mobile"></i><input type="text" name=""></div>
						<div style="clear:both;"></div>
						<div class="acercaIconEdit"><i class="icon-markunread"></i><input type="text" name=""></div>
						<div style="clear:both;"></div>
					</div>

					<div id="formacionEdit">
						<h1>Formación Académica</h1>
						<div class="acercaIconEdit" style="padding-top:20px;"><i class="icon-mode_edit"></i><input type="text" name=""></div>
						<div style="clear:both;"></div>
						<div class="acercaIconEdit"><i class="icon-graduation-cap"></i><input type="text" name=""></div>
						<div style="clear:both;"></div>
					</div>
				</div>
				<input type="button" name="" value="aceptar">
				</form>
			</div>

			<!-- Fin Editar -->

			<div id="descripcion">
				<h1>Acerca de Mi</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidata.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

			<div id="contacto">
				<div id="datos">
					<h1>Contacto</h1>
						
					<div class="acercaIcon" style="padding-top:20px;"><i class="icon-phone"></i><h2>2256-1564</h2></div>
					<div style="clear:both;"></div>
					<div class="acercaIcon"><i class="icon-mobile"></i><h2>6067-0585</h2></div>
					<div style="clear:both;"></div>
					<div class="acercaIcon"><i class="icon-markunread"></i><h2>marlonjarquin@hotmail.com</h2></div>
					<div style="clear:both;"></div>
				</div>

				<div id="formacion">
					<h1>Formación Académica</h1>
					<div class="acercaIcon" style="padding-top:20px;"><i class="icon-mode_edit"></i><h2>Liceo Mauro Fenández Acuña</h2></div>
					<div style="clear:both;"></div>
					<div class="acercaIcon"><i class="icon-graduation-cap"></i><h2>U.I.A</h2></div>
					<div style="clear:both;"></div>
				</div>
				
			</div>

		</div>

		<div id="proyectos">
			
			<h1>Proyectos</h1>

			<div class="proyecto">
				<div class="proyectoImg"></div>
				<h2>Titulo</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
			</div>

			<div class="proyecto">
				<div class="proyectoImg"></div>
				<h2>Titulo</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
			</div>

			<div class="proyecto">
				<div class="proyectoImg"></div>
				<h2>Titulo</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
			</div>
			

		</div>

		<div style="clear:both;"></div>


		<div id="galeria">
			<h1>Galería</h1>
			<div class="thumb"></div>
			<div class="thumb"></div>
			<div class="thumb"></div>
			<div class="thumb"></div>
			<div class="thumb"></div>
			<div class="thumb"></div>
			<div class="thumb"></div>
			<div class="thumb"></div>
			<div class="thumb"></div>
			<div class="thumb"></div>
			<div class="thumb"></div>
			<div class="thumb"></div>
			<div class="thumb"></div>
			<div class="thumb"></div>
			<div class="thumb"></div>
		</div>

		<div id="pasatiempos">
			<h1>Pasatiempos</h1>
			<div id=contenedor>
				<div class="pasatiempo">
					<div class="pasatiempoImg"></div>
					<h2>Titulo</h2>
				</div>

				<div class="pasatiempo">
					<div class="pasatiempoImg"></div>
					<h2>Titulo</h2>
				</div>

				<div class="pasatiempo">
					<div class="pasatiempoImg"></div>
					<h2>Titulo</h2>
				</div>

				<div class="pasatiempo">
					<div class="pasatiempoImg"></div>
					<h2>Titulo</h2>
				</div>
			</div>
		</div>

<?php include "footer.php" ?>