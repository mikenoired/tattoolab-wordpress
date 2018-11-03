	<footer>
		<?php dynamic_sidebar('footerdesc');
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
	<?php wp_footer() ?>
</html>
