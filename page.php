<?php get_header();
?>

<div class="content">
	<?php wp_nav_menu( array(
		'theme_location'  => 'sidebar',
		'container'       => 'ul',
		'container_class' => 'sidebar',
		'menu_class'      => 'sidebar',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
		'depth'           => 0,
	) );
		if (have_posts()):
		    while (have_posts()) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
		       	<article>
		       		<div class="postContent">
			       		<?php the_content(); ?>
		       		</div>
		       	</article>
		    <?php endwhile;
		else:
		    echo '<h1 class="no-content">Запись отстутствуют</h1>';
		endif; 
	?>
</div>

<?php get_footer(); ?>