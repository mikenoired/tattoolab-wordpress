<?php get_header();

$query = new WP_Query(array(
  'posts_per_page' => 100,
  'tag__not_in' => wp_list_pluck(get_tags(), 'term_id')
));
?>

<main id="pageContent"
  class="<?php if (is_front_page()) {echo "frontPage";}
              if(is_single()){echo "singlePost";}
              if(is_page()){echo "singlePage";} ?>" itemscope itemtype="http://schema.org/BlogPosting">
  <div class="grid-sizer"></div>
  <div class="gutter-sizer"></div>
  <?php
  if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>
      <article id="article" <?php post_class(); ?> itemprop="articleBody">
        <time itemprop="datePublished"><?php the_modified_date('F j Y'); ?></time>
        <h1 itemprop="headline"><?php the_title(); ?></h1>
        <?php the_content('Читать далее'); ?>
      </article>
    <?php endwhile;
  else : echo '<h1 class="noContent">Записи отстутствуют</h1>';
  endif;
  ?>
</main>

<?php get_footer(); ?>