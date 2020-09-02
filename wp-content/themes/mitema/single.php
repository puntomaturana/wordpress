<?php get_header(); ?>

<section class="singleee">
	<div class="container">
		<div class="row">
			<div class="col-md-8 contenido">
				<?php while(have_posts()) {
					the_post();
				?>
				<!--traigo el titulo del post-->
				<h1><?php the_title(); ?></h1>
				<!--traigo las categorias del post-->
				<div class="categorias">
					<p>Esta noticia está en las siguientes categorias:</p>
					<?php the_category(); ?>
				</div>
				<!--traigo la imagen del post-->
				<?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
				<!--traigo el contenido-->
				<?php the_content(); ?>
				<?php } ?>
			</div>
			<div class="col-md-4 sidebar">
				<!--muestro el sidebar del sitio-->
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>