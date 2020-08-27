<section class="publicaciones">
	<div class="container">
		<div class="row">

			<?php
			if(have_posts()) {
				// si existen post hace esto
				while(have_posts()) {
					the_post(); ?>

					<div class="col-4">
						<div class="card">
							<!--img src="..." class="card-img-top" alt="..."-->
							<?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
							<div class="card-body">
								<h5 class="card-title"><?php the_title(); ?></h5>
								<p class="card-text"><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver entrada</a>
							</div>
						</div>
					</div>

			<?php
				}
			} else {
				//si no hay post hace esto
			}
			?>
		</div>
	</div>
</section>