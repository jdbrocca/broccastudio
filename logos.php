<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>BROCCA Diseño y Arte :: Logos</title>
	<meta name="description" content="BROCCA Diseño y Arte :: Logos">
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
			background: url("imagenes/fondo1.jpg") no-repeat right #e8e8e8;
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
			<h1 class="TituloGaleria">Logos</h1>
			<section id="contenido">
		        <div class="flexslider">
				  <ul class="slides">
				    <li><img src="imagenes/logos/logos1.jpg" alt="Logo 1" /></li>
				    <li><img src="imagenes/logos/logos2.jpg" alt="Logo 2" /></li>
				    <li><img src="imagenes/logos/logos3.jpg" alt="Logo 3" /></li>
				    <li><img src="imagenes/logos/logos4.jpg" alt="Logo 4" /></li>
				    <li><img src="imagenes/logos/logos5.jpg" alt="Logo 5" /></li>
				    <li><img src="imagenes/logos/logos6.jpg" alt="Logo 6" /></li>
				    <li><img src="imagenes/logos/logos7.jpg" alt="Logo 7" /></li>
				    <li><img src="imagenes/logos/logos8.jpg" alt="Logo 8" /></li>
				    <li><img src="imagenes/logos/logos9.jpg" alt="Logo 9" /></li>
				    <li><img src="imagenes/logos/logos10.jpg" alt="Logo 10" /></li>
				    <li><img src="imagenes/logos/logos11.jpg" alt="Logo 11" /></li>
				    <li><img src="imagenes/logos/logos12.jpg" alt="Logo 12" /></li>
				    <li><img src="imagenes/logos/logos13.jpg" alt="Logo 13" /></li>
				    <li><img src="imagenes/logos/logos14.jpg" alt="Logo 14" /></li>
				    <li><img src="imagenes/logos/logos15.jpg" alt="Logo 15" /></li>
				    <li><img src="imagenes/logos/logos16.jpg" alt="Logo 16" /></li>
				    <li><img src="imagenes/logos/logos17.jpg" alt="Logo 17" /></li>

				  </ul>
				</div>
			</section>
		</section>
		<div id="a"><?php include("includes/footer.php"); ?></a>
	</section>
	<div id="b"><?php include("includes/footer.php"); ?></b>
</body>
</html>