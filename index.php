<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	
	
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logoRojo.ico">

    <title>Hexadecimal </ Tecnología simple y poderosa ></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	
    <!-- Hexadecimal CSS -->
    <link href="css/hexadecimal.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>

	<?php
		include("menuNav.php");
	?>

	
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
  

	<div class="container">
	  
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>

		  <div class="carousel-inner" role="listbox">
			<div class="item active">
			  <img src="img/banner1.png" alt="Creación de sitios web">
			  <div class="carousel-caption">
				<h1>Creación de sitios web</h1>
				<p>&nbsp;</p>
				<p>Inicia, consolida o renueva tu presencia en Internet a través de la página de Internet de tu negocio.</p>
			  </div>
			</div>

			<div class="item">
			  <img src="img/banner2.png" alt="Soporte y operación">
			  <div class="carousel-caption">
				<h1>Soporte y operación</h1>
				<p>&nbsp;</p>
				<p>Ocúpate de tu negocio que nosotros nos ocupamos de que tu sitio web esté siempre disponible.</p>
			  </div>
			</div>

			<div class="item">
			  <img src="img/banner3.png" alt="Desarrollo de SW a la medida">
			  <div class="carousel-caption">
				<h1>Desarrollo de software a la medida</h1>
				<p>&nbsp;</p>
				<p>Desarrollamos tu sistema de acuerdo a las necesidades específicas de tu negocio.</p>
			  </div>
			</div>
			
			<div class="item">
			  <img src="img/banner4.png" alt="Tecnología simple y poderosa">
			  <div class="carousel-caption">
				<h1>Tecnología simple y poderosa</h1>
				<p>&nbsp;</p>
				<p><img src="img/logo.png" width="64" style="border-radius: 0px;"><br><strong style="color: #fcfcfc; font-style: italic; font-size: 28px;">Hexadecimal</strong><br><hr>Desarrollo de soluciones tecnológicas a la medida.</p>
			  </div>
			</div>
			
		  </div>

		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
		

		<div class="row">
			<div class="col-md-4">
			  <h2>Usabilidad</h2>
			  <p>Para construir un sitio web o diseñar un sistema de información, trabajaremos en conjunto contigo para identificar procesos clave que nos permitan resaltar y considerar en el diseño aquellas características que hacen de tu negocio la mejor opción para tus clientes.</p>
			  <p><a class="btn btn-primary" href="servicios.php" role="button">Ver más &raquo;</a></p>
			</div>
			<div class="col-md-4">
			  <h2>Escalabilidad</h2>
			  <p>No te preocupes si el primer diseño no ha incluido todo, o si has incorporado nuevos productos y procesos. Nuestros diseños permiten crecer al ritmo de tu negocio cuando sea necesario.</p>
			  <p><a class="btn btn-primary" href="servicios.php" role="button">Ver más &raquo;</a></p>
			</div>
			<div class="col-md-4">
			  <h2>Confiabilidad</h2>
			  <p>Trabajamos solo con los mejores proveedores de Infraestructura Tecnológica, lo que nos permite contar con una plataforma casi permanentemente disponible, además de contar con certificados SSL para que la información que viaja a través de tu sistema web sea transmitida encriptada y de forma segura.</p>
			  <p><a class="btn btn-primary" href="servicios.php" role="button">Ver más &raquo;</a></p>
			</div>
		</div>

		<hr>
		
		
		
      <footer>
        <p>&copy; <?php echo date('Y')?> Hexadecimal</p>
		<a href="mailto:contacto@hexadecimal.com.mx">contacto@hexadecimal.com.mx</a>
      </footer>
	  
	</div><!-- /container -->

	

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
