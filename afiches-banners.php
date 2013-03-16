<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>BROCCA Diseño y Arte :: Afiches y Banners</title>
	<meta name="description" content="BROCCA Diseño y Arte :: Afiches y Banners">
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
			background: url("imagenes/fondo5.jpg") no-repeat right #e8e8e8;
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
			<h1 class="TituloGaleria">Afiches / Banners</h1>
			<section id="contenido">
		        <div class="flexslider">
				  <ul class="slides">
				    <li><img src="imagenes/afiches-banners/afiches-banners1.jpg" alt="Afiches/Banners 1" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners2.jpg" alt="Afiches/Banners 2" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners3.jpg" alt="Afiches/Banners 3" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners4.jpg" alt="Afiches/Banners 4" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners5.jpg" alt="Afiches/Banners 5" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners6.jpg" alt="Afiches/Banners 6" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners7.jpg" alt="Afiches/Banners 7" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners8.jpg" alt="Afiches/Banners 8" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners9.jpg" alt="Afiches/Banners 9" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners10.jpg" alt="Afiches/Banners 10" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners11.jpg" alt="Afiches/Banners 11" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners12.jpg" alt="Afiches/Banners 12" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners13.jpg" alt="Afiches/Banners 13" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners14.jpg" alt="Afiches/Banners 14" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners15.jpg" alt="Afiches/Banners 15" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners16.jpg" alt="Afiches/Banners 16" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners17.jpg" alt="Afiches/Banners 17" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners18.jpg" alt="Afiches/Banners 18" /></li>
				    <li><img src="imagenes/afiches-banners/afiches-banners19.jpg" alt="Afiches/Banners 19" /></li>
				  </ul>
				</div>
			</section>
		</section>
		<div id="a"><?php include("includes/footer.php"); ?></a>
	</section>
	<div id="b"><?php include("includes/footer.php"); ?></b>
</body>
</html>