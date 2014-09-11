<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta description="Venta de Repuestos Alternativos Automotices en La Serena, Chile"/>
	<title>Daitocar Repuestos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="css/normalize.css"/>
	<link rel="stylesheet" href="css/estilo.css"/>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body>
	<nav>
		<div class="menu">
			<img src="imagenes/logo2.png" alt="Logo">
			<h1>DAITOCAR</h1>
			<ul>
				<li class="item"><a href="">Inicio</a></li>
				<li class="item"><a href="">Empresa</a></li>
				<li class="item"><a href="">Noticias</a></li>
				<li class="item"><a href="">Ofertas</a></li>
				<li class="item"><a href="">Ubicación</a></li>
				<li class="item"><a href="">Contacto</a></li>
			</ul>
		</div>
	</nav>		
	<header>

	</header>
	<div class="contenedor">
		<video width="800" height="400" autoplay controls loop muted>
			<source src="video/daitocar.mp4" type="video/mp4">
		</video>
		<div class="cajas"></div>
		<div class="cajas"></div>
		<div class="cajas"></div>
	</div>
	<footer>
		
	</footer>
	<script>
$(document).ready(function(){
                   
      var altura = $(".menu").offset().top;
                         
      $(window).scroll(function(){
             
            if($(window).scrollTop() >= altura){
                         
                  $(".menu").css("margin-top","0");
                  $(".menu").css("position","fixed");
                               
            }else{
                                     
                  $(".menu").css("margin-top","100px");
                  $(".menu").css("position","static");
                               
            }
                         
      });
                   
});
	</script>
</body>
</html>