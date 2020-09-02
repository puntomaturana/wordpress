<?php get_header(); ?>

<section class="pageee">
	<div class="container">
		<div class="row">
			<div class="col-md-12 contenido">
				<?php while(have_posts()) {
					the_post();
				?>
				<!--traigo el titulo del pagina-->
				<h1><?php the_title(); ?></h1>
				<!--traigo la imagen del pagina-->
				<?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
				<!--traigo el contenido-->
				<?php the_content(); ?>
				<?php } ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>