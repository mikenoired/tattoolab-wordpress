<?php
/**
 * Template Name: Лонгрид
 */

get_header();
$query = new WP_Query(array(
  'tag' => 'longread',
  'posts_per_page' => -1,
));
?>

<main id="pageContent" class="category" itemscope itemtype="http://schema.org/BlogPosting">
  <h1 class="pageHeader"><?php the_title(); ?></h1>
  <div class="masonry">
    <div class="grid-sizer"></div>
    <div class="gutter-sizer"></div>
    <?php if ( $query->have_posts() ) :
      while ( $query->have_posts() ) : $query->the_post();?>
      <article id="article" <?php post_class(); ?> itemprop="articleBody">
        <time itemprop="datePublished"><?php the_modified_date('F j Y'); ?></time>
        <h1 itemprop="headline"><?php the_title(); ?></h1>
        <?php the_content('Читать далее'); ?>
      </article>
      <?php endwhile;?>
  </div>
  <?php else : echo '<h1 class="noContent">Записи отстутствуют</h1>';
  wp_reset_postdata();
endif; ?>
</main>

<?php get_footer(); ?>
 