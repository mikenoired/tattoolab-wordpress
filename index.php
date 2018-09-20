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
	) ); ?>
	<?php 
		if (have_posts()):
		    while (have_posts()) : the_post(); ?>
		       	<article>
			       	<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="cardImg">
		       		<div class="postContent">
			       		<h2><?php the_title(); ?></h2>
			       		<?php the_content('Читать далее'); ?>
		       		</div>
		       	</article>
		    <?php endwhile;
		else:
		    echo '<h1 class="no-content">Записи отстутствуют</h1>';
		endif; 
	?>
</div>

<?php get_footer(); ?>