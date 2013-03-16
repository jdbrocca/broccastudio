<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>BROCCA Diseño y Arte :: Promociones</title>
	<meta name="description" content="BROCCA Diseño y Arte :: Promociones">
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
			background: url("imagenes/fondo3.jpg") no-repeat right #e8e8e8;
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
			<h1 class="TituloGaleria">Promociones</h1>
			<section id="contenido">
		        <div class="flexslider">
				  <ul class="slides">
				    <li><img src="imagenes/promociones/promociones1.jpg" alt="promociones 1" /></li>
				    <li><img src="imagenes/promociones/promociones2.jpg" alt="promociones 2" /></li>
				    <li><img src="imagenes/promociones/promociones3.jpg" alt="promociones 3" /></li>
				    <li><img src="imagenes/promociones/promociones4.jpg" alt="promociones 4" /></li>
				    <li><img src="imagenes/promociones/promociones5.jpg" alt="promociones 5" /></li>
				    <li><img src="imagenes/promociones/promociones6.jpg" alt="promociones 6" /></li>
				    <li><img src="imagenes/promociones/promociones7.jpg" alt="promociones 7" /></li>
				    <li><img src="imagenes/promociones/promociones8.jpg" alt="promociones 8" /></li>
				    <li><img src="imagenes/promociones/promociones9.jpg" alt="promociones 9" /></li>
				    <li><img src="imagenes/promociones/promociones10.jpg" alt="promociones 10" /></li>
				    <li><img src="imagenes/promociones/promociones11.jpg" alt="promociones 11" /></li>
				    <li><img src="imagenes/promociones/promociones12.jpg" alt="promociones 12" /></li>
				    <li><img src="imagenes/promociones/promociones13.jpg" alt="promociones 13" /></li>
				    <li><img src="imagenes/promociones/promociones14.jpg" alt="promociones 14" /></li>
				    <li><img src="imagenes/promociones/promociones15.jpg" alt="promociones 15" /></li>
				    <li><img src="imagenes/promociones/promociones16.jpg" alt="promociones 16" /></li>
				    <li><img src="imagenes/promociones/promociones17.jpg" alt="promociones 17" /></li>
				    <li><img src="imagenes/promociones/promociones18.jpg" alt="promociones 18" /></li>
				    <li><img src="imagenes/promociones/promociones19.jpg" alt="promociones 19" /></li>
				    <li><img src="imagenes/promociones/promociones20.jpg" alt="promociones 20" /></li>
				  </ul>
				</div>
			</section>
		</section>
		<div id="a"><?php include("includes/footer.php"); ?></a>
	</section>
	<div id="b"><?php include("includes/footer.php"); ?></b>
</body>
</html>