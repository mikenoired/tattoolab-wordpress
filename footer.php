	<footer>
		<p>Tattoo Laboratory | Official Site | 2017 - <?php echo date('Y'); ?></p>
		<?php 
		if (has_nav_menu('social')):
			wp_nav_menu( array(
				'theme_location' => 'social',
				'menu_class'     => 'social',
				'depth'          => 1,
				'link_before'    => '<span>',
				'link_after'     => '</span>'.tattoolab_get_svg( array( 'icon' => 'chain' ) ),
			) );
		endif; ?>
	</footer>
	<div class="ink-layer">
		<div class="bg-layer"></div>
	</div>
	<?php wp_footer() ?>
</html>
