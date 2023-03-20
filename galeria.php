<?php
$config = include 'inc/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Galería de fotos y videos de Juan Cruz Maculet 'Donjuániman'.">
<meta name="author" content="José Carlos PHP">
<title>Galería - Donjuániman</title>
<base href="<?php echo $config['baseurl']; ?>" />
<link rel="canonical" href="<?php echo $config['baseurl']; ?>galeria/" />
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
		<h1 class="entry-title post-title">Galería</h1>
		<h2>Videos</h2>
		<h3>Presentando "Por gusto"</h3>
        <iframe width="100%" height="600" src="https://www.youtube.com/embed?v=fBWRKlkLso8&list=PL3FE2CE17E8E62368" title="Donjuániman - Presentando 'Por gusto' - 'Fangal'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <!--<iframe width="300" height="225" src="https://www.youtube-nocookie.com/embed/Sdby9IMU-r0" title="Donjuániman - Cafetín de Buenos Aires" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="300" height="225" src="https://www.youtube-nocookie.com/embed/fBWRKlkLso8" title="Donjuániman - Fangal" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="300" height="225" src="https://www.youtube-nocookie.com/embed/NVWNED9qZoA" title="Donjuániman - Qué sabes tú" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="300" height="225" src="https://www.youtube-nocookie.com/embed/a-Rl5zHShWc" title="Donjuániman - Los cosos de al lao" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="300" height="225" src="https://www.youtube-nocookie.com/embed/ihqixNUjyKY" title="Donjuániman - Maquillaje" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="300" height="225" src="https://www.youtube-nocookie.com/embed/iY8hY4N0Id0" title="Donjuániman - Barrio de tango" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
		<h4>Juan Cruz <i>Donjuániman</i> presentó su disco <b>Por gusto</b> en el Teatro Isabel la Católica de Granada, dentro del Festival Internacional de Tango de Granada, en su 19ª edición, año 2007.</h4>
        <p>He aquí la lista de temas que interpretó:</p>
        <ol>
            <li>Fangal</li>
            <li>Maquillaje</li>
            <li>Vete de mí</li>
            <li>Qué sabes tú</li>
            <li>Barrio de tango</li>
            <li>Los cosos de al <i>lao</i></li>
            <li>La última curda</li>
            <li>Cafetín de Buenos Aires</li>
        </ol>
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