<?php get_header();
?>

<div class="content">
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
	) ); ?>
	<?php 
		if (have_posts()):
		    while (have_posts()) : the_post(); ?>
<<<<<<< HEAD
		       	<article>
=======
		       	<div class="article">
>>>>>>> parent of 00b8dde... 1.1.1
			       	<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="cardImg">
		       		<div class="postContent">
			       		<h2><?php the_title(); ?></h2>
			       		<?php the_content('Читать далее'); ?>
		       		</div>
		       	</div>
		    <?php endwhile;
		else:
		    echo '<h1 class="no-content">Записи отстутствуют</h1>';
		endif; 
	?>
</div>

<?php get_footer(); ?>