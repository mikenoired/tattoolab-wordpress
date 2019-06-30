<?php get_header(); ?>
<main>
  <?php
  wp_nav_menu(array(
    'theme_location'  => 'sidebar',
    'container'       => 'aside',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'items_wrap'      => '<ul>%3$s</ul>',
  ));
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <article>
        <?php the_content(); ?>
      </article>
    <?php endwhile;
  else :
    echo '<h1 class="no-content">Запись отстутствуют</h1>';
  endif; ?>
</main>
<?php get_footer(); ?>