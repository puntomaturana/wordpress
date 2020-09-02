<aside>
	<?php do_action('before_sidebar') ?>
	<?php //si no existe un sidebar, escribimos esto
	if(!dynamic_sidebar('sidebar-1')) { ?>
		<div class="search">
			<?php get_search_form(); ?>
			<p>No existen más componentes</p>
		</div>
	<?php } ?>
</aside>