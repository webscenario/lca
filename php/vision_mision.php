<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Institucional - Vision y Mision</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"/>
        <link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/main.css">

        <!-- Fuente del menu principal, logo -->
        <link href='https://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="../css/institucional.css">

        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        
		<script type="text/javascript" src="js_functions/jquery.js"></script>
		
    </head>
<body style="position: relative;" data-spy="scroll" data-target="#enviar">
	 <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
    <!-- Menu principal -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div id="menuPrincipal" class="container-fluid">
            <div class="navbar-header" maedia="min-witdh:768px">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="../index.php">
                    <img alt="logo" src="../images/svg_chico_opt.svg" class="img-responsive">
                    <span>LOS CUATRO ASES</span>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="liPadre"><a href="../index.php">INICIO</a></li>
                    
                    <!-- Submenu -->
                    <li id="itemInstitucional" class="dropdown liPadre">
                        <a id="linkInstitucional" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            INSTITUCIONAL <span class="caret"></span>
                        </a>  
                        <ul id="submenuHamburguesa" class="dropdown-menu" role="menu">
                            <li><a href="empresa.php">LA EMPRESA</a></li>
                            <li><a href="politicas.php">POL&Iacute;TICAS</a></li>
                            <li><a href="vision_mision.php">VISI&Oacute;N Y MISI&Oacute;N</a></li>
                        </ul>
                    </li>
                    
                    <li class="liPadre"><a href="contacto.php">CONTACTO</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Submenu en pantalla mayor a xs -->
        <div id="subMenu" class="container-fluid">
            <div class="collapse navbar-collapse" id="navbar-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="liPadre"><a href="empresa.php">LA EMPRESA</a></li>
                    <li class="liPadre"><a href="politicas.php">POL&Iacute;TICAS</a></li>
                    <li class="liPadre"><a href="vision_mision.php">VISI&Oacute;N Y MISI&Oacute;N</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!-- //////////////////////////////////// CONTENIDO /////////////////////////////////////////////////// -->
	<div class="container" style="margin-top:80px;">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <ol class="breadcrumb">
                    <li><a href="../index.php">Inicio</a></li>
                    <li class="active">Institucional</li>
                    <li class="active">Visi&oacute;n y misi&oacute;n</li>
                </ol>
            </div>
        </div>

		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
                    <h3>Visión y misión</h3>
                </div>
				<p>Misión y Visión.
					Nuestra misión es:
    				“Producir y comercializar, de manera sustentable, carrocerías 
					 que respondan a las necesidades del transportista, combinando eficiencia y calidad.”
					Nuestra visión:
					“Permanecer en el mercado como la marca más reconocida por 
					su calidad, servicio, y trayectoria”
                </p>
			</div>
		</div>
	</div>
	<br /><br />
	<footer></footer>
<!-- ///////////////////////////////////// SCRIPTS //////////////////////////////////////////////////// -->	
	<script type="text/javascript">
		
		$(document).ready(function(){
		 <!-- JQuery para submenu -->
				$("#itemInstitucional").click(function(){
                    $("#subMenu").slideToggle();
                 // $("#itemInstitucional").css("background-color", "white");
                });
				
			
		});
		
	</script>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="../js/vendor/bootstrap.min.js"></script>

        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>
		

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
</body>
</html>