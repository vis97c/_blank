<?php
  require_once '../vendor/autoload.php';
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
		<title>Fashion girls studio app</title>
		<link type="image/ico" rel="icon" href="/favicon.ico">
		<link rel="canonical" href="https://www.fashiongirls.com/">	
		<meta name="description" content="DESCRIPCION AQUI">
		<meta name="Keywords" content="KEYWORDS AQUI">
		<!-- inicia TWITTER CARD -->
			<meta name="twitter:card" content="summary" >
			<meta name="twitter:title" content="Fashion girls studio app" >
			<meta name="twitter:description" content="DESCRIPCION" >
			<meta name="twitter:image" content="https://www.webcamboutique.com/img/pag-rosa-02.jpg" >
			<meta name="twitter:creator" content="@grupobedoya" >
		<!-- termina TWITTER CARD -->
		<!-- inicia OPEN GRAPH -->
			<meta property="og:site_name" content="Webcam Boutique" >
			<meta property="og:type" content="website">
			<meta property="og:url" content="https://www.webcamboutique.com/" >
			<meta property="og:title" content="Webcam Boutique | La tienda ideal para la modelo ideal" >
			<meta property="og:description" content="La tienda virtual para las modelos webcam. Encuentra juguetes, lenceria y detalles para una experiencia digital mas placentera." >
			<meta property="og:image" content="https://www.webcamboutique.com/img/pag-rosa-02.jpg" >
		<!-- termina OPEN GRAPH -->
	<!-- termina SEO -->

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="hsl(197, 100%, 50%)">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="hsl(197, 100%, 50%)">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="white">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="<?php echo mix('/css/main.css'); ?>">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141703275-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-141703275-2');
	</script> -->
</head>
<body>
	<noscript>
      <strong>We're sorry but hello-world doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <div id="app"></div>
    <script type="text/javascript" src="<?php echo mix('js/app.js'); ?>"></script>
</body>
</html>