<?php 

	/*session_start();

	echo "Bienvenido: ";	
	//echo "Valor: ".$_SESSION['usuario11'];	
	$usuar=$_SESSION['usuario11'];
	echo $usuar;
	echo $_SESSION['nom3'];
	$archivo="japo"; */


	require 'config/validate_session.php';
    require 'config/validate_roles.php';


	//$fecha=$_SESSION[""];
	//$fecha='2019-06-23';
	//echo $fecha;
	//$fecha=$_POST['fecha'];
	//$nombre11 = ;

	//require_once "conexion.php";
    //$conexion=conexion();

//if (isset($_SESSION['user']))

// {
 include 'session_paragraph.php';	

?>



<!DOCTYPE html>
<html lang="en"><!--<![endif]--><!-- BEGIN HEAD -->
<head><meta charset="us-ascii">
	<title>PROJECT3</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta content="width=device-width, initial-scale=1.0" name="viewport"/><meta content="" name="description"/><meta content="" name="author"/><!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" /><!-- END GLOBAL MANDATORY STYLES --><!-- BEGIN: BASE PLUGINS  -->
	<link href="assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css" /><!-- END: BASE PLUGINS --><!-- BEGIN THEME STYLES -->
	<link href="assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
	<link href="assets/demos/default/css/themes/default.css" id="style_theme" rel="stylesheet" type="text/css" />
	<link href="assets/demos/default/css/custom.css" rel="stylesheet" type="text/css" /><!-- END THEME STYLES -->
	<link href="imgVarias/icono3.png" rel="shortcut icon" type="image/png" />
</head>
<body class="c-layout-header-fixed c-layout-header-mobile-fixed"><!-- BEGIN: LAYOUT/HEADERS/HEADER-1 --><!-- BEGIN: HEADER -->


<header class="c-layout-header c-layout-header-2 c-header-transparent-dark c-layout-header-dark-mobile" data-minimize-offset="80">
<div class="c-topbar c-topbar-dark">
<div class="container"><!-- BEGIN: INLINE NAV -->
<nav class="c-top-menu c-pull-left">
<ul class="c-icons c-theme-ul">

	<h1>PROYECTO INVESTIGACION3 EQUIPOS Y MANTENIMIENTO</h1>
	<img alt="JANGO" class="c-desktop-logo" src="imgVarias/asc800.png" />
	<li></li>
	<li></li>
	<li></li>
	<li class="hide"><span>Phone: 7</span></li>
</ul>
</nav>
<!-- END: INLINE NAV --><!-- BEGIN: INLINE NAV --><!-- END: INLINE NAV --></div>
</div>

<div class="c-navbar">
<div class="container"><!-- BEGIN: BRAND -->
<div class="c-navbar-wrapper clearfix">
<div class="c-brand c-pull-left"><a class="c-logo" href="">
	<!--<img alt="JANGO" class="c-desktop-logo" src="imgVarias/asc800.png" />
	<img alt="JANGO" class="c-desktop-logo-inverse" src="imgVarias/asc801.png" />
	<img alt="JANGO" class="c-mobile-logo" src="imgVarias/asc801.png" /> </a>
	<button class="c-hor-nav-toggler" data-target=".c-mega-menu" type="button"></button>
	<button class="c-topbar-toggler" type="button"></button>
	<button class="c-search-toggler" type="button"></button>
	<button class="c-cart-toggler" type="button"> 
	<span class="c-cart-number c-theme-bg">2</span></button>-->
</div>
<!-- END: BRAND --><!-- BEGIN: QUICK SEARCH -->

<form action="#" class="c-quick-search"><input autocomplete="off" class="form-control" name="query" placeholder="Type to search..." type="text" value="" /> <span class="c-theme-link">&times;</span></form>
<!-- END: QUICK SEARCH --><!-- BEGIN: HOR NAV --><!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU --><!-- BEGIN: MEGA MENU --><!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->

<nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-theme c-fonts-uppercase c-fonts-bold">
<!--<ul class="nav navbar-nav c-theme-nav">
	<li><a class="c-link dropdown-toggle" href="index.html">INICIO</a></li>
	<li class="c-active c-menu-type-classic"><a class="c-link dropdown-toggle" href="mision.html">ASC</a>
	<ul class="dropdown-menu c-pull-right">
		<li><a href="mision.html#quienessomos">Quienes somos?</a></li>
		<li><a href="mision.html#mision">Misi&oacute;n</a></li>
		<li><a href="mision.html#vision">Visi&oacute;n</a></li>
		<li><a href="mision.html#servicios">Servicios</a></li>
	</ul>
	</li>
	<li class="c-active c-menu-type-classic"><a class="c-link dropdown-toggle" href="portafolio.html">SERVICIOS</a>
	<ul class="dropdown-menu c-menu-type-classic c-pull-left">
		<li class="dropdown-submenu c-active"><a href="javascript:;">Servivio al cliente</a>
		<ul class="dropdown-menu c-pull-right">
			<li><a href="portafolio.html#diseno">Termograf&iacute;a</a></li>
			<li><a href="portafolio.html#diseno">Medicion puesta a tierra</a></li>
			<li><a href="portafolio.html#diseno">Capacitacion URE</a></li>
			<li class="c-active"><a href="portafolio.html#diseno">Datos de consumo horario</a></li>
		</ul>
		</li>
		<li class="dropdown-submenu"><a href="portafolio.html#diseno">Construcci&oacute;n</a></li>
		<li class="dropdown-submenu"><a href="portafolio.html#diseno">Dise&ntilde;o</a></li>
		<li class="dropdown-submenu"><a href="portafolio.html#diseno">Asesor&iacute;a</a></li>
		<li class="dropdown-submenu"><a href="portafolio.html#diseno">An&aacute;lisis y Diagn&oacute;stico</a></li>
	</ul>
	</li>
	<li class="c-active c-menu-type-classic"><a class="c-link dropdown-toggle" href="normativa.html">NORMATIVA</a>
	<ul class="dropdown-menu c-pull-right">
		<li><a href="normativa.html">Tarifas</a></li>
		<li><a href="normativa.html">Codigo de medida</a></li>
		<li><a href="normativa.html">Costos eficientes</a></li>
		<li><a href="normativa.html">Resoluciones</a></li>
		<li><a href="Tarifas\CONTRATO_DE_CONDICIONES_UNIFORMES_ASC_INGENIERIA.pdf" target="_blank">Condiciones Uniformes</a></li>
		
	</ul>
	</li>
	<li><a class="c-link dropdown-toggle" href="contacto.html">CONTACTO</a></li>
	<li class="c-search-toggler-wrapper"></li>
	<li><a class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-circle c-btn-uppercase c-btn-sbold" data-target="#login-form" data-toggle="modal" href="#">Sign In</a></li>
	<li class="c-quick-sidebar-toggler-wrapper"></li>
</ul> -->
</nav>
<!-- END: MEGA MENU --><!-- END: LAYOUT/HEADERS/MEGA-MENU --><!-- END: HOR NAV --></div>
<!-- BEGIN: LAYOUT/HEADERS/QUICK-CART --><!-- BEGIN: CART MENU --><!-- END: CART MENU --><!-- END: LAYOUT/HEADERS/QUICK-CART --></div>
</div>
</header>
<!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-1 --><!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-1 --><!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->

<div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
<div class="modal-dialog">
<div class="modal-content c-square">
<div class="modal-header c-no-border"><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button></div>

<div class="modal-body">
<h3 class="c-font-24 c-font-sbold">Password Recovery</h3>

<p>To recover your password please fill in your email address</p>

<form>
<div class="form-group"><label class="hide" for="forget-email">Email</label> <input class="form-control input-lg c-square" id="forget-email" placeholder="Email" type="email" /></div>

<div class="form-group"><button class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login" type="submit">Submit</button><a class="c-btn-forgot" data-dismiss="modal" data-target="#login-form" data-toggle="modal" href="javascript:;">Back To Login</a></div>
</form>
</div>

<div class="modal-footer c-no-border"><span class="c-text-account">Don&#39;t Have An Account Yet ?</span> <a class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup" data-dismiss="modal" data-target="#signup-form" data-toggle="modal" href="javascript:;">Signup!</a></div>
</div>
</div>
</div>


<div class="modal fade c-content-login-form" id="login-form" role="dialog">
<div class="modal-dialog">
<div class="modal-content c-square">
<div class="modal-header c-no-border"><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button></div>

<div class="modal-body">
<h3 class="c-font-24 c-font-sbold">Buen d&iacute;a</h3>

<p>Por favor escribir sus datos</p>

<form>
<div class="form-group"><label class="hide" for="login-email">Usuario</label> <input class="form-control input-lg c-square" id="login-email" placeholder="Email" type="email" /></div>

<div class="form-group"><label class="hide" for="login-password">Contrase&ntilde;a</label> <input class="form-control input-lg c-square" id="login-password" placeholder="Password" type="password" /></div>

<div class="form-group">
<div class="c-checkbox"><input class="c-check" id="login-rememberme" type="checkbox" /> <label class="c-font-thin c-font-17" for="login-rememberme"> Recordarme </label></div>
</div>

<div class="form-group"><button class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login" type="submit">Entrar</button><!--  <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a>   --></div>

<div class="clearfix">
<div class="c-content-divider c-divider-sm c-icon-bg c-bg-grey c-margin-b-20"><span>- - -</span></div>
<!--   <ul class="c-content-list-adjusted">
                            <li>
                                <a class="btn btn-block c-btn-square btn-social btn-twitter">
                                  <i class="fa fa-twitter"></i>
                                  Twitter
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-block c-btn-square btn-social btn-facebook">
                                  <i class="fa fa-facebook"></i>
                                  Facebook
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-block c-btn-square btn-social btn-google">
                                  <i class="fa fa-google"></i>
                                  Google
                                </a>
                            </li>
                        </ul> --></div>
</form>
</div>
<!--     <div class="modal-footer c-no-border">                
                <span class="c-text-account">Don't Have An Account Yet ?</span>
                <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
            </div> --></div>
</div>
</div>


<div class="c-layout-page"><!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 -->
<div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background-image: url(imgVarias/ascbackgrounds1.png)">
<div class="container">
<div class="c-page-title c-pull-left">
<h3 class="c-font-uppercase c-font-bold c-font-dark c-font-20 c-font-slim"></h3>

<h4 class="c-font-dark c-font-slim"></h4>
</div>

<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
	<li><a class="c-font-dark" href="#">Tarifas</a></li>
	<li class="c-font-dark">/</li>
	<li><a class="c-font-dark" href="#">Resoluciones</a></li>
	<li class="c-font-dark">/</li>
	<li class="c-state_active c-font-dark">Codigo de medida</li>
</ul> 
</div>
</div>
<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-3 --><!-- BEGIN: PAGE CONTENT -->

<div class="c-content-box c-size-md ">
<div class="container">
<div class="cbp-panel">
<div class="cbp-l-filters-underline" id="filters-container">
<div class="cbp-filter-item-active cbp-filter-item" data-filter="*">FACTURACION</div>

<div class="cbp-filter-item" data-filter=".buying">PDF FACTURAS</div>

<!-- <div class="cbp-filter-item" data-filter=".author">COSTOS EFICIENTES</div>

<div class="cbp-filter-item" data-filter=".account">CODIGO DE MEDIDA</div>-->

<div class="cbp-filter-item" data-filter=".copyright">DATOS FACTURAS</div>
<!--<div data-filter=".community" class="cbp-filter-item">
	                Community</div>-->

<div class="cbp-filter-item" data-filter=".buying2">DATOS USUARIOS</div>

<div class="cbp-filter-item" data-filter=".buying3">INFORMES FACTURACION</div>

</div>

<div class="cbp cbp-l-grid-faq" id="grid-container">



<div class="cbp-item buying">
<div class="cbp-caption">
<div class="cbp-caption-defaultWrap">USUARIO</div>

<div class="cbp-caption-activeWrap">
<div class="cbp-l-caption-body"><a href="for_Usuario.php" >NUEVO USUARIO</a><br />
<a href="http://localhost:8080/pdf/index3.php" target="_blank">FACTURAS INDIVIDUALES</a><br />

</div>
</div>
</div>
</div>




<div class="cbp-item copyright">
<div class="cbp-caption">
<div class="cbp-caption-defaultWrap">CARGUE DE DATOS</div>

<div class="cbp-caption-activeWrap">
<div class="cbp-l-caption-body"><a href="http://localhost:8080/ascfac/proceso_fac.php" target="">PROCESO FACTURACION</a><br />
<a href="http://localhost:8080/ascfac/index.php" target="">INFORMACION DE FACTURACION</a><br />
<a href="http://localhost:8080/ascfac/indexFacAnt.php" target="">INFORMACION FACTURACION ANTERIOR</a><br />

<a href="http://localhost:8080/ascfac/tbl_reemplazos.php" target="">REEMPLAZOS FACTURACION</a><br />

</div>
</div>
</div>
</div>


<div class="cbp-item buying2">
<div class="cbp-caption">
<div class="cbp-caption-defaultWrap">INFORMACION USUARIOS</div>

<div class="cbp-caption-activeWrap">
<div class="cbp-l-caption-body"><a href="http://localhost:8080/ascfac/index5.php" target="">TABLA INFORMACION INSTALACION</a><br />
<a href="http://localhost:8080/ascfac/updateCodigosValor.php" target="">ACTUALIZACION CODIGOS COMPONENTES FACTURA USUARIOS</a><br />
<a href="http://localhost:8080/ascfac/for_Instalacion.php" target="">NUEVO USUARIO</a><br />
<a href="http://localhost:8080/ascfac/index5.php" target="">ACTUALIZAR USUARIO</a><br />

</div>
</div>
</div>
</div>


<div class="cbp-item buying3">
<div class="cbp-caption">
<div class="cbp-caption-defaultWrap">INFORMES</div>

<div class="cbp-caption-activeWrap">
<div class="cbp-l-caption-body"><a href="http://localhost:8080/ascfac/tbl_contribucion.php" target="">ACTUALIZACION CONTRIBUCION</a><br />
<a href="http://localhost:8080/ascfac/tbl_subsidio_3_ant2.php" target="">ACTUALIZACION SUBSIDIOS</a><br />
<a href="http://localhost:8080/ascfac/tbl_Usuarios/index.php" target="">EXPORTAR INFORME USUARIOS</a><br />
<a href="http://localhost:8080/ascfac/tbl_Sub/index.php" target="">EXPORTAR INFORME SUBSIDIOS</a><br />
<a href="http://localhost:8080/ascfac/tbl_facturacionAux.php" target="">EXPORTAR INFORME FACTURACION ANTERIOR</a><br />
<a href="http://localhost:8080/ascfac/tbl_facturacionHis.php" target="">INFORMACION FACTURACION HISTORICA</a><br />

</div>
</div>
</div>
</div>













</div>







</div>
</div>
</div>
</div>
<!-- END: PAGE CONTENT --></div>
<!-- END: PAGE CONTAINER --><!-- BEGIN: LAYOUT/FOOTERS/FOOTER-5 -->

<p><a name="footer"></a></p>







<div class="c-layout-go2top"></div>
<!-- END: LAYOUT/FOOTERS/GO2TOP --><!-- BEGIN: LAYOUT/BASE/BOTTOM --><!-- BEGIN: CORE PLUGINS --><!--[if lt IE 9]>
	<script src="assets/global/plugins/excanvas.min.js"></script> 
	<![endif]--><script src="assets/plugins/jquery.min.js" type="text/javascript" ></script><script src="assets/plugins/jquery-migrate.min.js" type="text/javascript" ></script><script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" ></script><script src="assets/plugins/jquery.easing.min.js" type="text/javascript" ></script><script src="assets/plugins/reveal-animate/wow.js" type="text/javascript" ></script><script src="assets/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript" ></script><!-- END: CORE PLUGINS --><!-- BEGIN: LAYOUT PLUGINS --><script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script><script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script><script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script><script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script><script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script><script src="assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script><script src="assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script><script src="assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script><!-- END: LAYOUT PLUGINS --><!-- BEGIN: THEME SCRIPTS --><script src="assets/base/js/components.js" type="text/javascript"></script><script src="assets/base/js/components-shop.js" type="text/javascript"></script><script src="assets/base/js/app.js" type="text/javascript"></script><script>
	$(document).ready(function() {    
		App.init(); // init core    
	});
	</script><!-- END: THEME SCRIPTS --><!-- BEGIN: PAGE SCRIPTS --><script src="assets/demos/default/js/scripts/pages/faq.js" type="text/javascript"></script><!-- END: PAGE SCRIPTS --><!-- END: LAYOUT/BASE/BOTTOM --></body>


<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="jumbotron">
					<a href="config/logout.php" class="btn btn-info">Salir del sistema</a>
					<!--<h2>Entraste con exito</h2>-->
				</div>
			</div>
		</div>
	</div>


</html>


<?php 

//}else
//{

	//header("location:../login/charger.php");
//}

 ?> 