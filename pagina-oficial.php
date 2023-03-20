<?php
$config = include 'inc/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Créditos del sitio web oficial de Juan Cruz Maculet 'Donjuániman'.">
<meta name="author" content="José Carlos PHP">
<title>Página oficial - Donjuániman</title>
<base href="<?php echo $config['baseurl']; ?>" />
<link rel="canonical" href="<?php echo $config['baseurl']; ?>pagina-oficial/" />
<link href="css/unificado.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="favicon.png" />
<link rel="icon" href="favicon.png" />
<script src="js/unificado.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Menú</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" title="Páginas web desde Granada">Donjuániman</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#presentacion">Presentación</a></li>
					<li><a href="#por-gusto">Por gusto</a></li>
					<li><a href="#bolero-y-son">Bolero y son</a></li>
					<li><a href="#contactar">Contactar</a></li>
					<li><a href="galeria/">Galería</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="pagina-oficial/">Página oficial</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<h1 class="entry-title post-title">Página oficial</h1>
		<p>Estás visitando el sitio web oficial de Juan Cruz Maculet <strong>Donjuániman</strong>.</p>
		<p>Este sitio ha sido desarrollado por <strong>José Carlos PHP</strong>.</p>
		<p>Para asuntos técnicos relacionados con la página web donjuaniman.com, por favor dirígete directamente a José Carlos PHP. Puedes contactar desde su página personal: <a href="https://josecarlosphp.com" alt="Desarrollo web por programador PHP">josecarlosphp.com</a>.</p>
		<hr class="featurette-divider">
		<footer>
			<div class="row">
				<div class="col-lg-12">
					<p>2007-<?php echo date('Y'); ?> <strong>Donjuániman</strong> - Gracias a <a href="https://josecarlosphp.com" title="Programador PHP">José Carlos PHP</a></p>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>