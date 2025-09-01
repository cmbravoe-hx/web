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


		  <div class="blog-header">
			<h1 class="blog-title">Hexadecimal</h1>
			<p class="lead blog-description"><font style="color: #595959;">Tecnología</font><font style="color: #262626;font-weight: bold;">simple</font><font style="color: #595959;">y</font><font style="color: #ff0000;font-weight: normal;">poderosa</font></p>
		  </div>
		  <div class="row">
			<div class="col-sm-8 blog-main">
			 <div class="blog-post">
				<h2 class="blog-post-title"></h2>
				<p>Somos una empresa surgida en Querétaro, México en 2012 a partir del emprendimiento de un grupo de colegas profesionistas especializados en diversas áreas tecnológicas y administrativas.</p>
				<p>En este mismo año se liberan los primeros proyectos de desarrollo de software en plataforma web. Principalmente en tecnologías Open como es PHP y MySQL.</p>
				<p>Con la normatividad respecto a CFDi en 2013 nace el sistema de facturación electrónica y timbrado CFDI en línea, <a target="_blank" href="http://www.factured.com.mx">Factured</a>.</p>
				<p>A partir de 2015 realizamos proyectos de sistemas de Audio-respuesta, Conmutadores Virtuales y telefonía SIP.</p>
			  </div><!-- /.blog-post -->


			</div><!-- /.blog-main -->

			<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
			  <div class="sidebar-module sidebar-module-inset">
				<h4>Hexadecimal</h4>
				<p>Desarrollo de soluciones tecnológicas a la medida.</p>
			  </div>
			  <div class="sidebar-module">
				<h4>Catálogo de servicios</h4>
				<ol class="list-unstyled">
				  <li><a href="servicios.php?svc=pw">Presencia web</a></li>
				  <li><a href="servicios.php?svc=ds">Desarrollo de sistemas a la medida</a></li>
				  <li><a href="servicios.php?svc=se">Seguridad</a></li>
				  <li><a href="servicios.php?svc=da">Dashboards</a></li>
				  <li><a href="servicios.php?svc=iv">IVR y Conmutador Virtual</a></li>
				  <li><a href="servicios.php?svc=ma">Mailing</a></li>
				</ol>
			  </div>
			</div><!-- /.blog-sidebar -->

		  </div><!-- /.row -->
	  

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
