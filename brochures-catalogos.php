<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>BROCCA Diseño y Arte :: Brochures y Catálogos</title>
	<meta name="description" content="BROCCA Diseño y Arte :: Brochures y Catálogos">
	<?php include("includes/head.php"); ?>
	<link rel="stylesheet" href="flexslider/flexslider.css">
	<script type="text/javascript" src="flexslider/jquery.flexslider-min.js"></script>
	<script type="text/javascript">
		$(document).on("ready", inicio);

		function inicio(){
			$("#contenido").fadeIn(1000);
			$('.flexslider').flexslider({
			    animation: "slide",
				controlNav: false, 
			});
		};
	</script>
	<style type="text/css" media="screen">
        .flexslider .slides li img{
        	width:100%;
        }

		#fondos{
			background: url("imagenes/fondo2.jpg") no-repeat right #e8e8e8;
			background-size: auto 100%;
			opacity: 0.5;
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
			<h1 class="TituloGaleria">Brochures / Catalogos</h1>
			<section id="contenido">
		        <div class="flexslider">
				  <ul class="slides">
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos1.jpg" alt="Brochures/Catalogos 1" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos2.jpg" alt="Brochures/Catalogos 2" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos3.jpg" alt="Brochures/Catalogos 3" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos4.jpg" alt="Brochures/Catalogos 4" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos5.jpg" alt="Brochures/Catalogos 5" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos6.jpg" alt="Brochures/Catalogos 6" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos7.jpg" alt="Brochures/Catalogos 7" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos8.jpg" alt="Brochures/Catalogos 8" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos9.jpg" alt="Brochures/Catalogos 9" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos10.jpg" alt="Brochures/Catalogos 10" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos11.jpg" alt="Brochures/Catalogos 11" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos12.jpg" alt="Brochures/Catalogos 12" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos13.jpg" alt="Brochures/Catalogos 13" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos14.jpg" alt="Brochures/Catalogos 14" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos15.jpg" alt="Brochures/Catalogos 15" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos16.jpg" alt="Brochures/Catalogos 16" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos17.jpg" alt="Brochures/Catalogos 17" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos18.jpg" alt="Brochures/Catalogos 18" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos19.jpg" alt="Brochures/Catalogos 19" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos20.jpg" alt="Brochures/Catalogos 20" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos21.jpg" alt="Brochures/Catalogos 21" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos22.jpg" alt="Brochures/Catalogos 22" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos23.jpg" alt="Brochures/Catalogos 23" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos24.jpg" alt="Brochures/Catalogos 24" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos25.jpg" alt="Brochures/Catalogos 25" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos26.jpg" alt="Brochures/Catalogos 26" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos27.jpg" alt="Brochures/Catalogos 27" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos28.jpg" alt="Brochures/Catalogos 28" /></li>
				    <li><img src="imagenes/brochures-catalogos/brochures-catalogos29.jpg" alt="Brochures/Catalogos 29" /></li>
				  </ul>
				</div>
			</section>
		</section>
		<div id="a"><?php include("includes/footer.php"); ?></a>
	</section>
	<div id="b"><?php include("includes/footer.php"); ?></b>
</body>
</html>