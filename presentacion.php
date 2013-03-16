<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>BROCCA Diseño y Arte :: Presentación</title>
	<meta name="description" content="BROCCA Diseño y Arte :: Presentación">
	<?php include("includes/head.php"); ?>
	<script type="text/javascript">
		$(document).on("ready", inicio);

		function inicio(){
			$("#contenido").fadeIn(1000);
			setTimeout(function(){
				$("#cont1").fadeOut(function(){
					$("#cont2").fadeIn();
				})
			}, 12000);

			$("#ladoIzq").animate({
				height: "100%",
				opacity: "1",
			}, 2000, function(){
				$("#ladoDer").animate({
					opacity: "1",
				}, 2000);				
			});

		};
	</script>
	<style type="text/css">
		#fondos{
			background: url("imagenes/fondo3.jpg") no-repeat right #e8e8e8;
			background-size: auto 100%;
			opacity: 0.1;
		}
	</style>
</head>
<body>
	<section id="principal">
		<section id="fondos"></section>
		<section id="izquierda">
			<?php include("includes/header.php"); ?>
			<?php include("includes/menu.php"); ?>
		</section>
		<section id="derecha">
			<div id="ladoIzq">
				<p>&nbsp;</p>
				<span style="font-size:2em;">L</span>a Imagen de una empresa es lo que la caracteriza visualmente ante sus clientes y su público, la forma en que nuestras ideas o productos son mostrados al público.<br><br>
				<span style="font-size:2em;">N</span>uestro principal objetivo es dar respuesta a sus necesidades, porque nos comprometemos con nuestros clientes para proporcionarles la máxima calidad de servicio gráfico.
			</div>
			<div id="ladoDer">
				<p>&nbsp;</p>
				<strong style="color:#00aeed">SOLUCIONES GRÁFICAS:</strong><br>
				<ul>
					<li><strong>DECORLUX:</strong> Brochures, Folletos, Banners, Logos...</li>
					<li><strong>NORTE SUR DE COMERCIO EXTERIOR:</strong> Brochures, Folletos, Volantes, Banner...</li>
					<li><strong>TUPEMESA:</strong> Brochures, Catalogos, Volantes, Avisos de prensa...</li>
					<li><strong>SKC RENTAL:</strong> Avisos de prensa, Folletos, Banners...</li>
					<li><strong>INSTITUCIONES PÚBLICA:</strong> TV PERÚ, Ministerio de Salud, Ministerio de Educación, Ministerio Público, Ministerio del Interior.</li>
					<li><strong>CREATIS PUBLICIDAD:</strong> Apoyo gráfico con Ilustraciones para algunos de sus clientes, como INTRADEPCO (SAPOLIO), MISTI, BAYER...</li>
					<li><strong>MEDIOS ALTERNATIVOS:</strong> Merchandising para promociones de peliculas WARNER BROS (Armables, Rompecabezas, Cartas, Banner...etc), Ejemplos: Era del Hielo, Madagascar, Planet 51, Ga`Hoole, Rayas...</li>
					<li><strong>CGM RENTAL:</strong> Creacion del logo, Brochure, Avisos de prensa, Tripticos, Fichas Ténicas...
					<li><strong>INNER CONCEPT:</strong> Imagen Corporativa...</li>
				</ul>
			</div>
		</section>
		<div id="a"><?php include("includes/footer.php"); ?></a>
	</section>
	<div id="b"><?php include("includes/footer.php"); ?></b>
</body>
</html>