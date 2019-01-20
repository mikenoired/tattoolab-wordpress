<?php get_header();
?>

<main>
	<?php wp_nav_menu( array(
		'theme_location'  => 'sidebar',
		'container'       => 'ul',
		'container_class' => 'sidebar',
		'menu_class'      => 'sidebar',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'items_wrap'      => '<aside><ul>%3$s</ul></aside>',
	) );
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
</main>

<?php get_footer(); ?>