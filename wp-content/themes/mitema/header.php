<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<!--aqui va el titulo de la pagina-->
			<a class="navbar-brand" href="#"><?php bloginfo(); ?></a>
			<!--es el boton que activa en version movil-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!--menu-->
			<?php 

			wp_nav_menu(array(
				'theme_location' => 'main-menu',
				'container' => 'div',
				'container_class' => 'collapse navbar-collapse',
				'menu_class' => 'navbar-nav'
			));

			?>
		</nav>
	</header>