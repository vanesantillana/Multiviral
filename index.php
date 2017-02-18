<?php

	 $dbhost = 'localhost';
	 $dbuser = 'root';
	 $dbpass = '123456';
	 $dbname = 'prueba';
	 ini_set('display_errors', 1);
	 error_reporting(E_ALL);
	 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
	 header("Content-Type: text/html;charset=utf-8");
	$conn->set_charset("utf8");

	$query="SELECT * FROM servicios";
	$result = $conn->query($query);

	$results = array();
	while($row = $result->fetch_row()) {
	  $rows[]=$row;
	}

	function print_array($arr){
		for ($i=0; $i<count($arr); $i++) {
			for ($j=0; $j<count($arr[$i]); $j++) {
				echo $arr[$i][$j];
				echo " | ";
			}
			echo "<br>";
		} 	
	}

	$servicio=array(array("Selecciona servicio","0"));
	//,array("servicio1","20"),array("servicio2","32"),array("servicio3","12"),array("servicio4",19));
	$tam=count($rows);
	for ($i=0; $i<$tam; $i++) {
		array_push($servicio, array($rows[$i][1],$rows[$i][2]));
	} 

	$tam=count($servicio);
	$opcion="";
	for ($i=0; $i<$tam ; $i++) { 
		$opcion=$opcion."<option class='prueba' value='";
		$opcion=$opcion.$i;
		$opcion=$opcion."'>";
		$opcion=$opcion.$servicio[$i][0];
		$opcion=$opcion."</option>";
	}

	if (!isset($_POST['email']) && !isset($_POST['email-c'])) {
?>

<!DOCTYPE html>
<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="MultiViral soluciones informaticas desarrolla paginas web y software en general.">
        <meta name="author" content="MultiViral">
        <title>MultiViral - Soluciones informaticas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="img/logo/logo_pestaña.png" />
		
		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Owl Carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- Grid Component css -->
        <link rel="stylesheet" href="css/component.css">
		<!-- Slit Slider css -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
		<!-- Media Queries -->
        <link rel="stylesheet" href="css/media-queries.css">
        <!-- Fa Icons-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
		<!--
		Google Font
		=========================== -->                    
		
		<!-- Oswald / Title Font -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
		<!-- Ubuntu / Body Font -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
		
		<!-- Modernizer Script for old Browsers -->		
        <script src="js/modernizr-2.6.2.min.js"></script>
	
			<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-54152927-1', 'auto');
		  ga('send', 'pageview');
		
		</script>

		<script type="text/javascript">
    		var servicio=<?php echo json_encode($servicio);?>;
    		var servicios_select = new Array();

 		</script>
 		<style>
 			.prueba {background-color: #333;
					
 					 }
 		</style>
    </head>
	
    <body id="body">
	    <!--
	    Start Preloader
	    ==================================== -->
		<div id="loading-mask">
			<div class="loading-img">
				<img  id="ini" src="img/logo/logo_sm.png"/>
			</div>
		</div>
        <!--
        End Preloader
        ==================================== -->
		
        <!--
        Welcome Slider
        ==================================== -->
		<section id="home">	    
		
            <div id="slitSlider" class="sl-slider-wrapper">
				<div class="sl-slider">	
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
						<div class="carousel-caption">
							<div>
								<img class="wow fadeInUp" src="img/logo/logo_sm.png" alt="Meghna">
								<h2 data-wow-duration="50ms"  data-wow-delay="50ms" class="heading animated fadeInRight">Bienvenido a MultiViral</h2>
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="heading animated fadeInDown">Soluciones Informaticas</h2>
								<h3 class="animated fadeInUp">Creamos paginas web y software a medida</h3>
								<a class="btn btn-green animated fadeInUp" href="#servicio">Quiero saber mas</a>
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="heading animated fadeInRight">Cotiza tu proyecto y arma tu presupuesto</h2>
								<h3 class="animated fadeInLeft">Selecciona entre todos nuestros servicios solo los que requieras</h3>
								<a class="btn btn-green animated fadeInUp" href="#cotizacion">Quiero cotizar</a>
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->

				</div><!-- /sl-slider -->
				
				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		<!--/#home section-->
		
        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">
							MULTIVIRAL
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Inicio</a></li>
                        <li><a href="#servicio">Servicios</a></li>
                        <li><a href="#paquete">Planes y/o paquetes</a></li>
                        <li><a href="#cotizacion">Cotización</a></li>                        
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->

		
		<!-- Start Services Section
		==================================== -->
		
		<section id="servicio" class="bg-one">
			<div class="container">
				<div class="row">
					
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>Nuestros <span class="color">Servicios</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					<div class="row">
                    <!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-desktop fa-5x"></i>
							</div>
							<h3>Diseño de Pagina Web</h3>
							<p>Creamos páginas web de máxima calidad, creativas y utilizando las técnicas más innovadoras para dar una imagen profesional, moderno, limpio, intuitivo y persuasivo.</p>
						</div>
					</article>
                    <!-- End Single Service Item -->
                    
                    <!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-gears fa-5x"></i>
							</div>
							<h3>Desarrollo Web</h3>
							<p>Realizamos sistemas exclusivamente para su empresa, adaptándose a la perfección de sus necesidades a fin de un mejor trabajo; estamos comprometidos con el éxito de tu proyecto.</p>
						</div>
					</article>
                    <!-- End Single Service Item -->
                    
                    <!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-tablet fa-5x"></i>
							</div>
							<h3>Adaptabilidad</h3>
							<p>Tu diseño de página web será adaptable y flexible a cualquier dispositivo móvil o tablet, además aseguraremos la velocidad y la fácil utilización del sitio web.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
					</div>

					<div class="row">
					<!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-wrench fa-5x"></i>
							</div>
							<h3>Optimización Web</h3>
							<p>Nos encargamos de mejorar el rendimiento de las partes más determinantes de tu web, además se corrigen las deficiencias y se refuerza las fortalezas.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
					
					<!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-magic fa-5x"></i>
							</div>
							<h3>Administrable</h3>
							<p>Te ayudamos a no ser dependientes de terceros para manejar el contenido de tu web, podrás subir imagenes, videos, mensajes y más.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
					
					<!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="service-block text-center kill-margin-bottom">
							<div class="service-icon text-center">
								<i class="fa fa-line-chart fa-5x"></i>
							</div>
							<h3>Posicionamiento Web</h3>
							<p>Llevaremos tu página web a los primeros lugares de los buscadores como Google, de tal manera que logres llegar a tu público objetivo.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
					</div>

					<div class="row">
					<!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-android fa-5x"></i>
							</div>
							<h3>Desarrollo de APPS Móviles</h3>
							<p>Tienes una idea de una App, cuéntanos nosotros nos encargamos de hacerlo realidad en sistemas operativos como Android y IOS.</p>
						</div>
					</article>
					<!-- End Single Service Item -->

					<!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-handshake-o fa-5x"></i>
							</div>
							<h3>Software a Medida</h3>
							<p>Desarrollamos sistemas puntuales de acuerdo a las necesidades del cliente utilizando las ultimas tecnologías.
							</p>
						</div>
					</article>
					<!-- End Single Service Item -->
					<!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-paint-brush fa-5x"></i>
							</div>
							<h3>Creación de Logos</h3>
							<p>Nuestros especialistas en marketing se encargaran de manejar una mejor imagen para tu empresa, cubriendo sus necesidades.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
					</div>
						
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		
		
		<!-- Start Pricing section
		=========================================== -->
		
		<section id="paquete" class="parallax-section">
			<div class="container">
				<div class="row">
					
					<!-- section title -->
				    <div class="title text-center wow fadeInDown" data-wow-duration="500ms">
			        	<h2>Planes y/<span class="color">o Paquetes</span></h2>
				        <div class="border"></div>
				    </div>
				    <!-- /section title -->
					
					<!-- single pricing table -->
					<!-- single pricing table -->
					<article class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="pricing">
						
							<!-- plan name & value -->
							<div class="price-title">
								<h3>Basico</h3>
							</div>
							<!-- /plan name & value -->
							
							<!-- plan description -->
							<ul>
								<li>Diseño web personalizado</li>
								<li>Visualización en dispositivos móviles, smartphones, tablets</li>
								<li>Integracion con redes sociales</li>
								<li>Dominio Gratis (Depende de la disponibilidad)</li>
							</ul>
							<div class="price-title">								
								<p>S/.<strong class="value">350</strong> </p>
							</div>
							<!-- Solicitar button -->
							<a class="btn btn-transparent" id="p1" href="#contacto">Solicitar</a>
							<!-- /signup button -->
							
						</div>
					</article>
					<!-- end single pricing table -->
					
					<!-- single pricing table -->
					<article class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="pricing">
							
							<!-- plan name & value -->
							<div class="price-title">
								<h3>Negocio</h3>
							</div>
							<!-- /plan name & value -->
							
							<!-- plan description -->
							<ul>
								<li>Diseño web personalizado</li>
								<li>Visualización en dispositivos móviles, smartphones, tablets</li>
								<li>Integracion con redes sociales</li>
								<li>Dominio Gratis (Depende de la disponibilidad)</li>
								<li>Administrador de contenidos</li>
								<li>Configuracion de Base de Datos</li>
								<li>Soporte multi idioma</li>

							</ul>
							<div class="price-title">								
								<p>S/.<strong class="value">550</strong></p>
							</div>
							<!-- /plan description -->
							
							<!-- signup button -->
							<a class="btn btn-transparent" id="p2" href="#contacto">Solicitar</a>
							<!-- /signup button -->
							
						</div>
					</article>
					<!-- end single pricing table -->
					
					<!-- single pricing table -->
					<article class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="750ms">
						<div class="pricing kill-margin-bottom">
						
							<!-- plan name & value -->
							<div class="price-title">
								<h3>Tienda Virtual</h3>
							</div>
							<!-- /plan name & value -->
							
							<!-- plan description -->
							<ul>
								<li>Diseño web personalizado</li>
								<li>Visualización en dispositivos móviles, smartphones, tablets</li>
								<li>Integracion con redes sociales</li>
								<li>Dominio Gratis (Depende de la disponibilidad)</li>
								<li>Administrador de contenidos</li>
								<li>Configuracion de Base de Datos</li>
								<li>Soporte multi idioma</li>
								<li>Chat en linea</li>
								<li>Carrito de compras</li>
							</ul>
							<div class="price-title">								
								<p>S/. <strong class="value">750</strong></p>
							</div>							
							<!-- signup button -->
							<a class="btn btn-transparent" id="p3" href="#contacto">Solicitar</a>
							<!-- /Solicitar button -->
							
						</div>
					</article>
					<!-- end single pricing table -->
				    
					
				</div>       <!-- End row -->
			</div>   	<!-- End container -->     <!-- End container -->
		</section>    <!-- End Section -->
		
		
	
		
		<!-- Srart Contact Us
		=========================================== -->		
		<section id="cotizacion">
			<div class="container">
				<div class="row">
					
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>Arma tu <span class="color">Presupuesto</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- Contact Details -->
					<form id="contact-form" method="post" action="#contacto" role="form">
						<div class="contact-form col-md-6 wow fadeInUp" style="" data-wow-duration="500ms" data-wow-delay="300ms">	
							<div style="text-align : justify; font-size: 18px;">
							En esta sección podrás armar tu presupuesto; selecciona solo los servicios que requieras y recibe un presupuesto personalizado y elaborado por ti. Finalmente envia la cotización con todos tus datos, para ponernos en contacto contigo.
							</div>
							<br>
							<center>
								<img id="ini" src="img/parallax/hombrecito.png"/>
							</center>	
							

						</div>		
						<!--<input type="text" value="1" id="total" name="total" style="visibility: hidden;">-->
						
						<div class="contact-form col-md-6 wow fadeInUp" style="" data-wow-duration="500ms" data-wow-delay="300ms">			
							<div id="div_1" class="form-group">
					    			<select class="importe_linea form-control" style="width: 60%; float: left;" value="" id="servicio1" name="servicio1" onchange="refresh(this)">
								  		<?php echo $opcion; ?>
							    	</select>
				     				<p class="form-control" id="demo1" name="demo" style="width: 30%; float: left; text-align: center;"></p>
			     					<input class="form-control bt_plus" id="1" type="button" value="+" style="width: 10%; float: left;" />
									<br>		
							</div>
							<div class="form-group">
								<!--<span>Total: <input class="form-control" readonly="readonly" type="text" id="total_final" value="0"/></span>-->
								<div class="price-title" style="text-align: center;">								
									<strong class="value" id="total_final" ></strong>
								</div>							
								<br>
									<a class="cotizar_final btn btn-transparent" id="p3" href="#contacto" style="width: 100%;">Cotizar</a>
								
							</div>					
						</div>
				</form>
				</div>
			</div> 
		</section> 
		
	<section id="contacto" class="parallax-section">
				<div class="container">
				<div class="row">
					
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>Contactenos<span class="color"> Ahora</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- Contact Details -->
					<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
						<h3>Detalles de Contácto</h3>
						<p>Comunicate con nosotros en cualquier momento, estamos dispuestos a tu servicio, lo llamaremos dentro de las 24 horas de 8 am a 10 pm una vez enviado sus datos.</p>
						<div class="contact-details">
							<div class="con-info clearfix">
								<i class="fa fa-whatsapp fa-lg"></i>
								<span>Whatsapp: 943-434-338</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-phone fa-lg"></i>
								<span>Celular: 943-434-338 / 942-365-569</span>
							</div>
														
							<div class="con-info clearfix">
								<i class="fa fa-envelope fa-lg"></i>
								<span>Email: multiviralbeta@gmail.com</span>
							</div>
						</div>
					</div>
					<!-- / End Contact Details -->
						
					<!-- Contact Form -->
					<div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
						<form id="contact-form" method="post" action="<?=$_SERVER['PHP_SELF']?>" role="form">
						
							<div class="form-group">
								<input type="text" placeholder="Nombre" class="form-control" name="nombre" id="nombre" required>
							</div>

							<div class="form-group">
								<input type="tel" placeholder="Celular" class="form-control" name="celular" id="celular" required>
							</div>
							
							<div class="form-group">
								<input type="email" placeholder="Correo Electrónico" class="form-control" name="email" id="email" required>
							</div>
							
							<div class="form-group">
								<input type="text" placeholder="Asunto" class="form-control" name="asunto" id="asunto">
							</div>
							
							<div class="form-group">
								<textarea rows="6" placeholder="Mensaje" class="form-control" name="mensaje" id="mensaje" required></textarea>	
							</div>
							
							<div id="mail-success" class="success">
								Thank you. The Mailman is on His Way :)
							</div>
							
							<div id="mail-fail" class="error">
								Sorry, don't know what happened. Try later :(
							</div>
							
							<div id="cf-submit">
								<input type="submit" id="contact-submit" class="btn btn-transparent" value="Contactar" style="border-color: #ED3237;">
							</div>						
							
						</form>
					</div>
					<!-- ./End Contact Form -->
				
				</div> <!-- end row -->
			</div> <!-- end container -->
		
	</section>


		<!-- end Contact Area
		========================================== -->
		
		<footer id="footer" class="bg-one">
			<div class="container">
			    <div class="row wow fadeInUp" data-wow-duration="500ms">
					<div class="col-lg-12">
						
						<!-- Footer Social Links -->
						<div class="social-icon">
							<ul>
								<li><a href="https://www.facebook.com/multiviralbeta" target="_BLANK"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/multiviralbeta?cn=bG9naW5fbm90aWZpY2F0aW9u&refsrc=email" target="_BLANK"><i class="fa fa-twitter"></i></a></li>
								<!--<li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
							</ul>
						</div>
						<!--/. End Footer Social Links -->

						<!-- copyright -->
						<div class="copyright text-center">
							<a href="index.html">
								<!--	
								<img src="img/logo-meghna.png" alt="Meghna" /> 
								-->
								<h1 style="font-family: 'astera';"> MultiViral</h1>
							</a>
							<br />
							
							<p>Diseñado y desarrollado <a href="https://www.facebook.com/multiviralbeta"> MultiViral</a>. Copyright &copy; 2017. Todos los derechos reservados.</p>
						</div>
						<!-- /copyright -->
						
					</div> <!-- end col lg 12 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</footer> <!-- end footer -->
		
		<!-- Back to Top
		============================== -->
		<a href="javascript:;" id="scrollUp">
			<i class="fa fa-angle-up fa-2x"></i>
		</a>
		
		<!-- end Footer Area
		========================================== -->
		
		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.addfield.js"></script>

		<!-- Bootstrap 3.1 -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Slitslider -->
		<script src="js/jquery.slitslider.js"></script>
		<script src="js/jquery.ba-cond.min.js"></script>
		<!-- Parallax -->
		<script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Portfolio Filtering -->
		<script src="js/jquery.mixitup.min.js"></script>
		<!-- Custom Scrollbar -->
		<script src="js/jquery.nicescroll.min.js"></script>
		<!-- Jappear js -->
		<script src="js/jquery.appear.js"></script>
		<!-- Pie Chart -->
		<script src="js/easyPieChart.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing-1.3.pack.js"></script>
		<!-- tweetie.min -->
		<script src="js/tweetie.min.js"></script>
		<!-- Google Map API -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Highlight menu item -->
		<script src="js/jquery.nav.js"></script>
		<!-- Sticky Nav -->
		<script src="js/jquery.sticky.js"></script>
		<!-- Number Counter Script -->
		<script src="js/jquery.countTo.js"></script>
		<!-- wow.min Script -->
		<script src="js/wow.min.js"></script>
		<!-- For video responsive -->
		<script src="js/jquery.fitvids.js"></script>
		<!-- Grid js -->
		<script src="js/grid.js"></script>
		<!-- Custom js -->
		<script src="js/custom.js"></script>
		<script>
function bu1() {
  $( "#ini" ).fadeOut( 500 ).delay( 100 ).fadeIn( 500 );
  bu2();
}
  function bu2(){
  	bu1();
  }
  bu2();
</script>

    </body>
</html>

<?php
}else{
	$mensaje="Cliente de MULTIVIRAL";
	$mensaje.= "\nNombre: ". $_POST['nombre'];
	$mensaje.= "\nEmail: ".$_POST['email'];
	$mensaje.= "\nTelefono: ". $_POST['celular'];
	$mensaje.= "\nAsunto: ". $_POST['asunto'];
	$mensaje.= "\nMensaje: ".$_POST['mensaje'];

	$destino= "multiviralbeta@gmail.com";
	$destino2="vanessa.santillana@ucsp.edu.pe";
	$destino3="anibal.ventura@ucsp.edu.pe";
	$remitente = $_POST['email'];

	$asunto = "Asunto: CONTACTO WEB DE MULTIVIRAL";
	mail($destino,$asunto,$mensaje,"FROM: $remitente");
	mail($destino2,$asunto,$mensaje,"FROM: $remitente");
	mail($destino3,$asunto,$mensaje,"FROM: $remitente");

?>

<?php
   echo "<script>";
   echo "alert('Mensaje enviado con exito');";
   echo "window.location = 'index.php';";
   echo "</script>";  
   }
?>
