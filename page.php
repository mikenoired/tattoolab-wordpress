<?php get_header();
?>

<main>
	<?php wp_nav_menu( array(
		'theme_location'  => 'sidebar',
		'menu'            => '',
		'container'       => 'ul',
		'container_class' => 'sidebar',
		'container_id'    => '',
		'menu_class'      => 'sidebar',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => '',
	) );
		if (have_posts()):
		    while (have_posts()) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
		       	<div class="article">
		       		<div class="postContent">
			       		<?php the_content(); ?>
		       		</div>
		       	</div>
		    <?php endwhile;
		else:
		    echo '<h1 class="no-content">Запись отстутствуют</h1>';
		endif; 
	?>
</main>

<?php get_footer(); ?>