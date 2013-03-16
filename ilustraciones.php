<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>BROCCA Diseño y Arte :: Ilustraciones</title>
	<meta name="description" content="BROCCA Diseño y Arte :: Ilustraciones">
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
			background: url("imagenes/fondo4.jpg") no-repeat right #e8e8e8;
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
			<!--<section id="fondos"><img src="imagenes/fondo2.jpg" height="100%"></section>-->
			<h1 class="TituloGaleria">Ilustraciones</h1>
			<section id="contenido">
		        <div class="flexslider">
				  <ul class="slides">
				    <li><img src="imagenes/ilustraciones/ilustraciones1.jpg" alt="Ilustraciones 1" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones2.jpg" alt="Ilustraciones 2" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones3.jpg" alt="Ilustraciones 3" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones4.jpg" alt="Ilustraciones 4" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones5.jpg" alt="Ilustraciones 5" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones6.jpg" alt="Ilustraciones 6" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones7.jpg" alt="Ilustraciones 7" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones8.jpg" alt="Ilustraciones 8" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones9.jpg" alt="Ilustraciones 9" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones10.jpg" alt="Ilustraciones 10" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones11.jpg" alt="Ilustraciones 11" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones12.jpg" alt="Ilustraciones 12" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones13.jpg" alt="Ilustraciones 13" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones14.jpg" alt="Ilustraciones 14" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones15.jpg" alt="Ilustraciones 15" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones16.jpg" alt="Ilustraciones 16" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones17.jpg" alt="Ilustraciones 17" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones18.jpg" alt="Ilustraciones 18" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones19.jpg" alt="Ilustraciones 19" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones20.jpg" alt="Ilustraciones 20" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones21.jpg" alt="Ilustraciones 21" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones22.jpg" alt="Ilustraciones 22" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones23.jpg" alt="Ilustraciones 23" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones24.jpg" alt="Ilustraciones 24" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones25.jpg" alt="Ilustraciones 25" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones26.jpg" alt="Ilustraciones 26" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones27.jpg" alt="Ilustraciones 27" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones28.jpg" alt="Ilustraciones 28" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones29.jpg" alt="Ilustraciones 29" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones30.jpg" alt="Ilustraciones 30" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones31.jpg" alt="Ilustraciones 31" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones32.jpg" alt="Ilustraciones 32" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones33.jpg" alt="Ilustraciones 33" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones34.jpg" alt="Ilustraciones 34" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones35.jpg" alt="Ilustraciones 35" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones36.jpg" alt="Ilustraciones 36" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones37.jpg" alt="Ilustraciones 37" /></li>
				    <li><img src="imagenes/ilustraciones/ilustraciones38.jpg" alt="Ilustraciones 38" /></li>
				  </ul>
				</div>
			</section>
		</section>
		<div id="a"><?php include("includes/footer.php"); ?></a>
	</section>
	<div id="b"><?php include("includes/footer.php"); ?></b>
</body>
</html>