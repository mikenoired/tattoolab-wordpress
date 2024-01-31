<?php get_header(); ?>
<main id="pageContent">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <h1 class="pageHeader"><?php the_title(); ?></h1>
      <article <?php post_class(); ?> id="article">
        <?php the_content(); ?>
      </article>
    <?php endwhile;
  else :
    echo '<h1 class="noContent">Запись отстутствуют</h1>';
  endif; ?>
</main>
<?php get_footer(); ?>