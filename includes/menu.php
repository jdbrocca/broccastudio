<script type="text/javascript">
	$(document).on("ready", efectoMenu);

	//var estado = 0;
	function efectoMenu(){
		/*$("#grafica").click(function(){
			if(estado == 1){
				$(".submenu").slideUp();
				estado = 0;
			}else{
				$(".submenu").slideDown();
				estado = 1;
			}
		});*/

		var checkCookie = $.cookie("nav-item");
		if (checkCookie != "") {
			$('#navegacion > ul > li > a:eq('+checkCookie+')').next().show();
		}
		$('#navegacion > ul > li > a').click(function(){
	  		var navIndex = $('#navegacion > ul > li > a').index(this);
	  		$.cookie("nav-item", navIndex);
	  		$('#navegacion ul li ul').slideUp();
	   		if ($(this).next().is(":visible")){
				$(this).next().slideUp();
	   		} else {
	   			$(this).next().slideToggle();
	   		}
	   		$('#navegacion ul li a').removeClass('active');
	   		$(this).addClass('active');
		});		
	};
</script>
<nav id="navegacion">
	<ul>
		<li><a href="presentacion.php" title="Presentación">Presentación</a></li>	
		<li id="grafica"><a href="#" title="Gráfica">Gráfica</a>
			<ul class="submenu">
				<li><a href="logos.php" title="Logos">Logos</a></li>
				<li><a href="brochures-catalogos.php" title="Brochures/Catálogos">Brochures/Catálogos</a></li>
				<li><a href="afiches-banners.php" title="Afiches/Banners">Afiches/Banners</a></li>
			</ul>
		</li>
		<li><a href="ilustraciones.php" title="Ilustraciones">Ilustraciones</a></li>
		<li><a href="promociones.php" title="Promociones">Promociones</a></li>
		<li><a href="contactenos.php" title="Contáctenos">Contáctenos</a></li>
	</ul>
	<select class="menuSelect">
		<option value="presentacion.php">MENU</option>
		<option value="presentacion.php">PRESENTACIÓN</option>
		<option value="">GRÁFICA</option>
		<option value="logos.php"> --> LOGOS</option>
		<option value="brochures-catalogos.php"> --> BROCHURES/CATÁLOGOS</option>
		<option value="afiches-banners.php"> --> AFICHES/BANNERS</option>
		<option value="ilustraciones.php">ILUSTRACIONES</option>
		<option value="promociones.php">PROMOCIONES</option>
		<option value="contactenos.php">CONTÁCTENOS</option>
	</select>	
</nav>