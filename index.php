<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>BROCCA Diseño y Arte :: Estudio Gráfico Publicitario</title>
	<meta name="description" content="BROCCA Diseño y Arte :: Estudio Gráfico Publicitario">
	<?php include("includes/head.php"); ?>
	<script type="text/javascript">
		$(document).on("ready", function(){
			var cont = 1;
			setInterval(function() {
				$("#fondos").fadeOut(1500, function(){
					cont++;
					$(this).css("background-image", "url('imagenes/fondo"+cont+".jpg')");
					$(this).fadeIn(1500);
					if(cont==5){
						cont=0;
					}
				});
			}, 7000);

			setTimeout(function(){
				$("#cont1").fadeOut(function(){
					$("#cont2").fadeIn();
				})
			}, 12000);
		})
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

		</section>
		<div id="a"><?php include("includes/footer.php"); ?></a>
	</section>
	<div id="b"><?php include("includes/footer.php"); ?></b>
</body>
</html>