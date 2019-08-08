<?php
  require_once './vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Cache-control" content="public" max-age="31536000">
	<meta http-equiv="Content-Language" content="es">

	<!-- inicia SEO -->
		<title>NOMBRE_DEL_SITIO | PAGE_TITLE</title>
		<link type="image/ico" rel="icon" href="/favicon.ico">
		<link rel="canonical" href="https://www.DOMAIN/">	
		<meta name="description" content="DESCRIPCION">
		<meta name="Keywords" content="TAGS">
		<!-- inicia TWITTER CARD -->
			<meta name="twitter:card" content="summary" >
			<meta name="twitter:title" content="NOMBRE_DEL_SITIO | PAGE_TITLE" >
			<meta name="twitter:description" content="DESCRIPCION" >
			<meta name="twitter:image" content="https://www.DOMAIN/images/THUMBNAIL.EXTENSION" >
			<meta name="twitter:creator" content="@EMPRESA" >
		<!-- termina TWITTER CARD -->
		<!-- inicia OPEN GRAPH -->
			<meta property="og:site_name" content="NOMBRE_DEL_SITIO" >
			<meta property="og:type" content="website">
			<meta property="og:url" content="https://www.DOMAIN" >
			<meta property="og:title" content="NOMBRE_DEL_SITIO | PAGE_TITLE" >
			<meta property="og:description" content="DESCRIPCION" >
			<meta property="og:image" content="https://www.DOMAIN/images/THUMBNAIL.EXTENSION" >
		<!-- termina OPEN GRAPH -->
	<!-- termina SEO -->

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="hsl(197, 100%, 50%)">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="hsl(197, 100%, 50%)">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="white">

	<!-- Main font @GoogleFonts -->
	<link rel="stylesheet" href="FUENTE_1">
	<!-- Icons @FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	
	<!-- Custom web app styles -->
	<link type="text/css" rel="stylesheet" href="<?php echo mix('/css/main.css'); ?>">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141703275-3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-141703275-3');
	</script> -->
</head>
<body>
	<noscript>
		<style type="text/css">
			.noscript{
				width:100%;
				height: 100%;
				overflow: auto;
				padding: 100px;
				display: -webkit-box;
				display: -ms-flexbox;
				display: flex;
				-webkit-box-orient: horizontal;
				-webkit-box-direction: normal;
				-ms-flex-flow: row nowrap;
				flex-flow: row nowrap;
				-webkit-box-pack: center;
				-ms-flex-pack: center;
				justify-content: center;
				-webkit-box-align: center;
				-ms-flex-align: center;
				align-items: center;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
			}
			.noscript strong{
				max-width: 80vh;
				font-size: 18px;
				text-align: center;
			}
		</style>
		<div class="noscript">
    		<strong>Lo sentimos pero esta pagina requiere javascript para funcionar, por favor activalo o usa un navegador compatible.</strong>
		</div>
    </noscript>
    <div id="app"></div>
    <script type="text/javascript" src="<?php echo mix('js/app.js'); ?>"></script>
</body>
</html>