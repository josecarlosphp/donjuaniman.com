<?php
$config = include 'inc/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Juan Cruz Maculet 'Donjuániman', artista irrepetible, el uno.">
<meta name="author" content="José Carlos PHP">
<title>Juan Cruz Maculet 'Donjuániman'</title>
<base href="<?php echo $config['baseurl']; ?>" />
<link rel="canonical" href="<?php echo $config['baseurl']; ?>" />
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
<script type="text/javascript">
$(document).ready(function($){
	$('#contactar a').prop('href', 'ma'+'ilt'+'o'+':in'+'fo'+'@d'+'onju'+'animan.'+'com').text('in'+'fo'+'@d'+'onju'+'animan.'+'com');
});
</script>
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
	<header class="header-image">
		<div class="headline">
			<div class="container">
				<h1>Donjuániman</h1>
				<h2>Artista irrepetible</h2>
			</div>
		</div>
	</header>
	<div class="container">
		<hr class="featurette-divider">
		<div class="featurette" id="presentacion">
			<img class="featurette-image img-circle img-responsive pull-left" src="img/donjuaniman_presentacion.jpg" alt="Presentación">
			<h3 class="featurette-heading">Presentación
				<span class="text-muted">Quién es Donjuániman</span>
			</h3>
			<p class="lead">Docto en filosofía, director de teatro, actor, entusiasta del ajedrez, dominador del lenguaje, profundo conocedor de distintos y variopintos estilos musicales: flamenco, bolero, tango, jazz, swing,... Este vasto conocimiento, su personalísima voz, su encanto y su presencia, hacen de él un <strong>intérprete magistral</strong>, capaz de desplegar su genio cantando tanto <strong>bolero</strong>, como <strong>tango</strong>, y como <strong>flamenco</strong>.</p>
		</div>
		<hr class="featurette-divider">
		<div class="featurette" id="por-gusto">
			<img class="featurette-image img-circle img-responsive pull-right" src="img/donjuaniman_por-gusto.jpg" alt="Por gusto">
			<h3 class="featurette-heading">Por gusto
				<span class="text-muted">Tango y <i>filin</i> cubano</span>
			</h3>
			<p class="lead">Juan Cruz dedica este trabajo a una de sus grandes pasiones musicales: <strong>el Tango</strong>. No obstante, lo hace sin dejar del todo de lado esa vena cubana suya, incluyendo algunas pistas plenas de <i>filin</i>. Y una sorpresiva y maravillosa interpretación del tema "E se domani".</p>
		</div>
		<hr class="featurette-divider">
		<div class="featurette" id="bolero-y-son">
			<img class="featurette-image img-circle img-responsive pull-left" src="img/donjuaniman_bolero-y-son.jpg" alt="Bolero y son">
			<h3 class="featurette-heading">Bolero y son
				<span class="text-muted">Con aire cubano</span>
			</h3>
			<p class="lead">Rodeado de un selecto elenco de músicos, en gran parte cubanos, Juan Cruz recrea en este disco los <strong>boleros</strong> que más le han marcado, y canta <strong>son cubano</strong> de tal forma que en la isla misma le consideran "su paisano".</p>
		</div>
		<hr class="featurette-divider">
		<div class="featurette" id="contactar">
			<img class="featurette-image img-circle img-responsive pull-right" src="img/donjuaniman_contactar.jpg" alt="Contactar">
			<h3 class="featurette-heading">Contactar
				<span class="text-muted">con Donjuániman</span>
			</h3>
			<p class="lead">Sea cual sea el motivo por el que quieres contactar con Juan Cruz, puedes hacerlo enviando un mensaje a la dirección de correo electrónico <a href="#">nuestro email</a>.</p>
		</div>
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