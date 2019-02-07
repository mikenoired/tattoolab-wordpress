<?php get_header(); ?>
<main>
	<?php
		wp_nav_menu( array(
			'theme_location'  => 'sidebar',
			'container'       => 'aside',
			'items_wrap'      => '<ul>%3$s</ul>',
		));
    if (have_posts()):
      while (have_posts()) : the_post(); ?>
     	<article>
     		<h2><?php the_title(); ?></h2>
     		<?php the_content('Читать далее'); ?>
     	</article>
    <?php endwhile;
      else: echo '<h1 class="no-content">Записи отстутствуют</h1>';
    endif;
  ?>
</main>
<?php get_footer(); ?>
