<?php get_header(); ?>
<main>
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <h1 class="pageHeader"><?php the_title(); ?></h1>
      <article>
        <?php the_content(); ?>
      </article>
    <?php endwhile;
  else :
    echo '<h1 class="noContent">Запись отстутствуют</h1>';
  endif; ?>
</main>
<?php get_footer(); ?>