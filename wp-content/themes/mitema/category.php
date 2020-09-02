<?php get_header(); ?>

<main>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Categoría <?php single_cat_title(); ?></h1>
			</div>
		</div>
	</div>

	<?php get_template_part('publicaciones'); ?>
</main>

<?php get_footer(); ?>