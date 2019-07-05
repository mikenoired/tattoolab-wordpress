<?php get_header(); ?>
<main itemscope itemtype="http://schema.org/BlogPosting">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <article itemprop="articleBody">
        <h1 itemprop="headline"><?php the_title(); ?></h1>
        <?php the_content('Читать далее'); ?>
      </article>
    <?php endwhile;
  else : echo '<h1 class="noContent">Записи отстутствуют</h1>';
  endif;
  ?>
</main>
<?php get_footer(); ?>