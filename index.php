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
	<div class="contenedor_nav">
		<nav class="menu">
			<a href="http://www.daitocar.cl"><img src="imagenes/logo50.png" alt="Logo"></a>
			<h1>DAITOCAR</h1>
			<ul class="lista_menu">
				<li class="item"><a href="">Inicio</a></li>
				<li class="item"><a href="">Empresa</a></li>
				<li class="item"><a href="">Noticias</a></li>
				<li class="item"><a href="">Ofertas</a></li>
				<li class="item"><a href="">Ubicación</a></li>
				<li class="item"><a href="">Contacto</a></li>
			</ul>
			<div class="menu_movil">
				<a href="" class="icon-menu"></a>
			</div>
		</nav>

	</div>
	<div class="delimitador">
		<header>
			<img src="imagenes/repuesto.jpg" alt="Fondo header">
			<div class="titulo_header">
				<div id="marca"><h1>DAITOCAR REPUESTOS</h1></div>
				<h3>Todo lo que su vehiculo necesita</h3>
			</div>
		</header>
		<div class="contenedor">
			<div class="contenedor_video">
				<div class="muestra_video">
					<video width="700" height="400" autoplay controls loop muted>
						<source src="video/daitocar.mp4" type="video/mp4">
					</video>
				</div>
				<div class="texto_video">
					<div class="titulo_video">
						<img src="imagenes/logo50.png" alt="Logo">
						<h4>Daitocar Repuestos</h4>
					</div>
					Por más de 15 años junto a usted...bla bla bla
				</div>
			</div>
			<div class="area_noticias">
				<div class="noticia">
					<div class="imagen_noticia">
						<!--poner siempre una imagen-->
						<img src="imagenes/repuestos_news.jpg" alt="imagen para noticia">
					</div>
					<div class="titular">
						<a href="">TITULAR DE LA NOTICIA</a>
					</div>
					<div class="fecha">
						16 de Septiembre del 2014
					</div>
				</div>
				<div class="noticia">
					<div class="imagen_noticia">
						<!--poner siempre una imagen-->
						<img src="imagenes/repuestos_news.jpg" alt="imagen para noticia">
					</div>
					<div class="titular">
						<a href="">TITULAR DE OTRA NOTICIA</a>
					</div>
					<div class="fecha">
						16 de Septiembre del 2014
					</div>
				</div>
				<div class="noticia">
					<div class="imagen_noticia">
						<!--poner siempre una imagen-->
						<img src="imagenes/repuestos_news.jpg" alt="imagen para noticia">
					</div>
					<div class="titular">
						<a href="">También puede ir la publicación de una Oferta</a>
					</div>
					<div class="fecha">
						16 de Septiembre del 2014
					</div>
				</div>
			</div>
			<div class="costado">
				
			</div>
		</div>
	</div>
	<footer>
		<div class="datos_contacto">
			<ul>
				<li class="info">Casa Matriz La Serena</li>
				<li class="info">Pampa Baja n° 3038</li>
				<li class="info">512298150</li>
				<li class="info"><a href="mailto:ventaspampa@daitocar.cl">ventaspampa@daitocar.cl</a></li>
			</ul>
		</div>
		<div class="datos_contacto">
			<ul>
				<li class="info">Sucursal Centro La Serena</li>
				<li class="info">Juan de Dios Peni n°870</li>
				<li class="info">512219575</li>
				<li class="info"><a href="mailto:ventaspeni@daitocar.cl">ventaspeni@daitocar.cl</a></li>
			</ul>
		</div>	
		<div id="logo_pie">
			<img src="imagenes/logo2.png" alt="">
		</div>
		<div id="redes_sociales">
			<ul id="lista_redes">
				<a href="http://www.facebook.com/daitocar" class="icon-facebook"></a>
				<a href="" class="icon-twitter"></a>
				<a href="" class="icon-googleplus"></a>
			</ul>
		</div>
	</footer>
	<script>
$(document).ready(function(){
                   
      var altura = $(".menu").offset().top;
                         
      $(window).scroll(function(){
             
            if($(window).scrollTop() >= altura){
                         
                  //$(".menu").css("margin-top","0");
                  $(".menu").css("position","fixed");
                               
            }else{
                                     
                  //$(".menu").css("margin-top","100px");
                  $(".menu").css("position","static");
                               
            }
                         
      });
                   
});
	</script>
</body>
</html>