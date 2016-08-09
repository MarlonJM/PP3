<?php include "phpclass/conectar.php"; ?>
<?php include "phpclass/persona.php"; ?>
<?php include "gestion_persona.php"; ?>
<?php include "header.php" ?>

<section id="acerca">

			<div id="profile" class="colorHeader">
					<div id	="image"><img src="img/Colors/lentes.png" alt=""></div>
					<div id="nombre"><h3> <?php echo $resul["nombre"]." " .$resul["apellido1"]?> </h3> </div>
			</div>

			<div id="info" class="colorHeader">
					<div id="pxs" class="cleardat"></div>
					<div class="datos"><img src="img/Colors/telefono.png" alt=""><h1><span>Telefono:</span> 9999-9999</h1></div>
					<div class="cleardat"></div>
					<div class="datos"><img src="img/Colors/celular.png" alt=""><h1><span>Celular: </span>9999-9999</h1></div>
					<div class="cleardat"></div>	
					<div class="datos"><img src="img/Colors/correo.png" alt=""><h1><span>Correo:</span> <?php echo $resul["correo"]?></h1></div>
					<div class="cleardat"></div>
					<div class="datos"><img src="img/Colors/gorro.png" alt=""><h1><span>Enfasis:</span> <?php echo $resul["descripcion"]?></h1></div>
					<div class="cleardat"></div>
					<div class="datos"><img src="img/Colors/nacimiento.png" alt=""><h1><span>Nacimiento:</span> <?php echo $resul["fechaNacimiento"]?></h1></div>
					<div class="cleardat"></div>
			</div>

			<div style= "margin-top:20px; margin-bottom:100px;" id="colegio" class="colorHeader">	
					<img src="img/Colors/diploma.png" alt="Colegio"><h1>Colegio</h1>
					<div class="clear"></div>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus nihil sint earum quibusdam natus fuga ullam provident enim at officiis, assumenda numquam possimus rerum illum molestiae dicta quam reiciendis?</p>
			</div>
			
			<div style= "margin-top:20px;margin-bottom:100px;" id="uni" class="colorHeader">
				<img src="img/Colors/uni.png" alt="Universidad"><h1>Universidad</h1>
				<div class="clear"></div>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, illo mollitia a commodi soluta suscipit, consequuntur deleniti tempore. Ad laboriosam illo placeat rem! Nostrum enim nihil dignissimos blanditiis, soluta culpa?</p>
			</div>

		</section>

		<div class="clear"></div>

		<!-- <div id="software" class="colorHeader">
			<h1>Software</h1>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus tenetur impedit modi laboriosam fugiat voluptatum facilis, eius consequatur cupiditate vel quasi dolores, reprehenderit numquam dolor asperiores sint quisquam suscipit eum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error laboriosam in fugiat ullam, eum incidunt libero blanditiis delectus, veritatis fuga corrupti dignissimos. Quo ut recusandae esse incidunt nulla, commodi alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et fuga obcaecati labore qui itaque! Perspiciatis, error deleniti, neque laudantium, corrupti autem ut repudiandae aspernatur, quod officiis cupiditate alias beatae facere!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque quas earum quibusdam aliquam in neque alias eaque accusantium nostrum, dolor aliquid repudiandae fugiat numquam quasi ratione enim blanditiis autem distinctio.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere repellendus, a aut aperiam dolorum odit asperiores atque minima optio beatae velit voluptatum praesentium. Itaque voluptas minus sed, aspernatur impedit vel. ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, sunt ad molestiae ipsam alias aliquid fugiat, minima? Exercitationem, ratione rem, voluptate veritatis velit, molestiae neque suscipit assumenda ipsum vel corrupti.</p>
			<div class="clear"></div>
		</div> -->

		<div id="proyectos" class="colorHeader">
				<!-- <img src="images/Colors/proyectos.png" alt=""> -->
				<h1>Proyectos</h1>
				<img src="" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus aut perspiciatis voluptates iusto fugiat accusantium. Quaerat, suscipit minima sed odit temporibus. Reiciendis, aliquam. Eligendi voluptatum, accusantium nisi eius, recusandae neque.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa at et eveniet doloremque nesciunt, nemo a eos placeat commodi in tempore assumenda, impedit nostrum rerum optio facere ut aspernatur. Quas.</p>
				<div class="clear"></div>
		</div>

		

		<div id="gallery" class="colorGallery">
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
					<div class="preview">
						<img src="" alt="">
					</div>
				</div>

		<div id="pasatiempos">
			<img class="colorHeader" src="" alt="Pasatiempos">
		</div>

<?php include "footer.php" ?>