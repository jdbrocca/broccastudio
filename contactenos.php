<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>BROCCA Diseño y Arte :: Contáctenos</title>
	<meta name="description" content="BROCCA Diseño y Arte :: Contáctenos">
	<?php include("includes/head.php"); ?>
	<style type="text/css">
		#fondos{
			background: url("imagenes/fondo3.jpg") no-repeat right #e8e8e8;
			background-size: auto 100%;
			opacity: 0.1;
		}
		#tituloContactenos{

		}
	</style>	
	<script type="text/javascript">
		$(document).on("ready", function(){
			$("#imgContactenos").animate({
				opacity: "1",
			}, 2000, function(){
				$("#tituloContactenos").typewriter();
				$("#tituloContactenos").animate({
					opacity: "1",
					right: "20%",
				}, 500);
			});	

		});
	</script>
</head>
<body>
	<section id="principal">
		<section id="fondos"></section>
		<section id="izquierda">
			<?php include("includes/header.php"); ?>
			<?php include("includes/menu.php"); ?>
		</section>
		<section id="derecha">
			<div id="ladoIzquierdo">
				<img src="imagenes/circulo-contactenos.png" width="100%" alt="" style="opacity:0;" id="imgContactenos">
				<div id="tituloContactenos">Contáctenos </div>
			</div>
			<div id="ladoDerecho">
				<div id="iconosContactenos">
					<div id="telefono">
						<div class="icono"><img src="imagenes/icono-telf.png" width="100%" alt="Telefonos"></div>
						<div class="textoIcono"><a href="tel:014952983" target="_blank">495-2983</a><br><a href="tel:993703603" target="_blank">993703603</a><br>
							Lima-Perú</div>
					</div>
					<div id="correo">
						<div class="icono"><img src="imagenes/icono-mail.png" width="100%" alt="Correo"></div>
						<div class="textoIcono"><a href="mailto:lvbrocca@yahoo.es" target="_blank">lvbrocca@yahoo.es</a></div>
					</div>
				</div>
			</div>
		</section>
		<div id="a"><?php include("includes/footer.php"); ?></a>
	</section>
	<div id="b"><?php include("includes/footer.php"); ?></b>
</body>
</html>