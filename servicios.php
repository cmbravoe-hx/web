<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$svc = $_REQUEST["svc"];

switch ($svc) {
    case "pw":
        $ant = "servicios.php?svc=ma";
		$sig = "servicios.php?svc=ds";
        break;
    case "ds":
        $ant = "servicios.php?svc=pw";
		$sig = "servicios.php?svc=se";
        break;
    case "se":
        $ant = "servicios.php?svc=ds";
		$sig = "servicios.php?svc=da";
        break;
    case "da":
        $ant = "servicios.php?svc=se";
		$sig = "servicios.php?svc=iv";
        break;
    case "iv":
        $ant = "servicios.php?svc=da";
		$sig = "servicios.php?svc=ma";
        break;
    case "ma":
        $ant = "servicios.php?svc=iv";
		$sig = "servicios.php?svc=pw";
        break;
    default:
		$svc = "pw";
        $ant = "servicios.php?svc=ma";
		$sig = "servicios.php?svc=ds";
}

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


			<?php
				if ($svc == "pw"){
			?>
		  <div class="blog-header">
			<h1 class="blog-title">Presencia Web</h1>
			<p class="lead blog-description">Creamos y publicamos el sitio web de tu empresa</p>
		  </div>
		  <div class="row">
			<div class="col-sm-8 blog-main">
			 <div class="blog-post">
				<h2 class="blog-post-title">Hosting y dominio</h2>
				<p>Proveemos tanto el diseño como la infraestructura necesaria.</p>
				<p>Al contratar con nosotros la renta de la infraestructura necesaria para que tu sitio web esté en línea, te olvidas de tareas que desvían tu atención del verdadero objetivo de tu negocio.</p>
				<p>Si ya cuentas con un servicio de hosting y/o dominio y cuentas con los requerimientos técnicos necesarios para soportar tu proyecto podemos utilizarlo.</p>
				<img class="text-center" src="img/img1.png" width="100%">
				<p>Sí lo requieras podemos ofrecerte de forma independiente y de acuerdo a la necesidad específica los siguientes servicios:</p>
				<ul>
				  <li>Hosting</li>
				  <li>Dominio</li>
				  <li>Certificado SSL</li>
				  <li>Diseño</li>
				  <li>Correo electrónico</li>
				</ul>
			  </div><!-- /.blog-post -->
			<?php
				}elseif ($svc == "ds"){
			?>
			  <div class="blog-header">
				<h1 class="blog-title">Desarrollo de software</h1>
				<p class="lead blog-description">Diseño de sistemas a la medida</p>
			  </div>
			  <div class="row">
				<div class="col-sm-8 blog-main">
				 <div class="blog-post">
					<img src="img/img2.png" width="100%">
					<p>Desarrollamos tu sistema de información de acuerdo a las necesidades especificas de tu negocio, empresa o proceso.</p>
					<p>Controles de Producción</p>
					<ul>
					  <li>Inventarios</li>
					  <li>Costos</li>
					  <li>Ordenes</li>
					  <li>Etc.</li>
					</ul>
					<p>Seguimiento de Clientes</p>
					<ul>
					  <li>Prospectacion</li>
					  <li>Segumiento</li>
					  <li>Ordenes de compra</li>
					  <li>Cotizaciones</li>
					  <li>Seguimiento de pedidos</li>
					</ul>
					<p>Timbrado de CFDI</p>
					<ul>
					  <li>Factura</li>
					  <li>Nómina</li>
					  <li>Carta porte</li>
					  <li>Recibos de arrendamiento y honoriarios</li>
					</ul>
					<p>Cobros automatizados a través de <a target="_blank" href="http://www.openpay.mx">Openpay</a></p>
					<ul>
					  <li>En línea a través de tarjeta de crédito y debito nacional</li>
					  <li>Referenciado, imprime un recibo y paga en comercios afiliados</li>
					  <li>Transferencia electrónica, a través de SPEI a una cuenta CLABE única propia del servicio a pagar</li>
					  <li>Cargos recurrentes programados</li>
					</ul>
					<p>Sistemas de control escolar</p>
					<ul>
					  <li>Control de asistencia</li>
					  <li>Control de documentación</li>
					  <li>Control de pagos</li>
					  <li>Cobro de coleguaturas automatizado</li>
					</ul>
					<p><strong>O cualquier otro que sea el giro de tu empresa o negocio, nuestros desarrollos son a la medida, es decir, construimos el software a partir de los requerimientos específicos de tus procesos por pequeños o complejos que estos puedan ser.</strong></p>
				  </div><!-- /.blog-post -->
			<?php
				}elseif ($svc == "se"){
			?>
			  <div class="blog-header">
				<h1 class="blog-title">Seguridad</h1>
				<img src="img/img3.png" width="20%">
			  </div>
			  <div class="row">
				<div class="col-sm-8 blog-main">
				 <div class="blog-post">
					<p>Si tus procesos y/o negocio lo requiere, todos nuestros desarrollos cuentan con la opción de contratar un certificado de seguridad SSL (Secure Socket Layer).</p>
					<p>&nbsp;</p>
					<img src="img/img4.png" width="100%">
					<p>&nbsp;</p>
					<img src="img/img5.png" width="100%">
				  </div><!-- /.blog-post -->
			<?php
				}elseif ($svc == "da"){
			?>
			  <div class="blog-header">
				<h1 class="blog-title">Dashboards</h1>
				<p class="lead blog-description">Tableros de control</p>
			  </div>
			  <div class="row">
				<div class="col-sm-8 blog-main">
				 <div class="blog-post">
					<p>Otra de las ventajas de contar con una plataforma basada en tecnología web es que podemos construir tableros de control (Dashboard) que puedes presentar en cualquier monitor y/o pantalla conectada a un dispositivo con Internet.</p>
					<p>Si el sistema origen de la información es nuestro entonces la información se mostrará y actualizará en tiempo real. </p>
					<p>No obstante estos tableros pueden funcionar con cualquier sistema, incluso alguno que ya tengas trabajando en tu empresa, la actualización de la información dependerá únicamente de la disponibilidad de la misma en la Base de Datos origen.</p>
					<img src="img/img6.png" width="100%">
					<p>Monitorea y muestra a tus colaboradores todos aquellos indicadores clave que te interesa que conozcan como pueden ser: citas agendadas, ventas por oficina, ventas por representante, alcance de meta, etc.</p>
				  </div><!-- /.blog-post -->
			<?php
				}elseif ($svc == "iv"){
			?>
			  <div class="blog-header">
				<h1 class="blog-title">IVR y Conmutador Virtual</h1>
				<p class="lead blog-description">Sistema de audio-respuesta y extensiones virtuales</p>
			  </div>
			  <div class="row">
				<div class="col-sm-8 blog-main">
				 <div class="blog-post">
					<p>Actualmente el uso de tecnología Open y la existencia proveedores confiables de infraestructura a través de Internet hace posible que podamos ofrecerte estos servicios a costos accesibles.</p>
					<p>Estos servicios están basados en tecnología VoIP (Voz sobre IP) y protocolo SIP, estándares internacionalmente reconocidos y ampliamente utilizados para soluciones telefónicas de sistemas de Audio-respuesta y Conmutadores Virtuales. </p>
					<p>Cuando tus clientes hablen al número telefónico escucharan una grabación profesional que les dará la bienvenida e incluso podrás:</p>
					<ul>
					  <li>Proporcionar opciones de acuerdo a donde tu cliente se quiere comunicar</li>
					  <li>Contar con extensiones virtuales con las cuales podrás comunicar oficinas en distintas ubicaciones geografías o incluso dispositivos móviles</li>
					  <li>Si tu negocio lo requiere, puedes conectar el sistema de audio-respuesta para consultar información en tu sistema y dar respuestas automáticas a tus clientes, como por ejemplo, estatus de una orden de servicio o monto de pago pendiente</li>
					</ul>
					<img src="img/img7.png" width="100%">
				  </div><!-- /.blog-post -->
			<?php
				}elseif ($svc == "ma"){
			?>
			  <div class="blog-header">
				<h1 class="blog-title">Mailing</h1>
			  </div>
			  <div class="row">
				<div class="col-sm-8 blog-main">
				 <div class="blog-post">
					<p>Envío masivo de correos electrónicos a tu base de clientes con las más recientes promociones y/o noticias de tus productos.</p>
					<img src="img/img8.png" width="100%">
					<p>Puedes personalizarlos y utilizar plantillas propias o podemos ayudarte a crear una propuesta en cada caso que lo requieras.</p>
					<p>Si quieres notificar a tu cliente automáticamente de algún proceso y tu sistema lo permite también contamos con el servicio de entrega de correos transaccionales y notificaciones vía e-mail o sms.</p>
				  </div><!-- /.blog-post -->
			<?php
				}
			?>
			
			  <nav>
				<ul class="pager">
				  <li><a href="<?php echo $ant;?>">Anterior</a></li>
				  <li><a href="<?php echo $sig;?>">Siguiente</a></li>
				</ul>
			  </nav>

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
		
		
		
	<?php
		include 'footer.php';
	?>
	  
	</div><!-- /container -->

	

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
