	<footer>
		<?php dynamic_sidebar('footerdesc');
		if (has_nav_menu('social')):
			wp_nav_menu( array(
				'theme_location' => 'social',
				'menu_class'     => 'social',
				'depth'          => 1,
				'link_before'    => '<span>',
				'link_after'     => '</span>'.tattoolab_get_svg( array( 'icon' => 'chain' ) ),
			));
		endif;
		echo "<p style='color: white; margin: 0;'>2017 – " . date("Y") . "</p>";
		?>
	</footer>
	<?php wp_footer() ?>
</html>
