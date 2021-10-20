<?php
$related_posts = get_related_posts( get_the_ID(), 4 );

if ($related_posts->have_posts()) {
?>
  <div class="posts-grid related-posts padding-top-large padding-bottom-large">
    <div class="container">
      <div class="grid-row">
        <div class="grid-item item-s-12 padding-bottom-basic font-bold text-align-center">
          <h2 class="font-size-large font-uppercase color-bone">Contenido relacionado</h2>
        </div>
  <?php
  while ($related_posts->have_posts()) {
    $related_posts->the_post();

    // Current post category
    $post_category = get_the_category($post->ID);
    $post_category_name = $post_category[0]->cat_name;
  ?>
        <div class="grid-item item-s-3 text-align-center">
          <div class="image-wrapper margin-bottom-small">
            <a href="<?php the_permalink() ?>">
              <?php echo get_the_post_thumbnail($post->ID, 'grid-thumbnail'); ?>
            </a>
            <div class="category-label background-red font-size-small font-uppercase font-bold padding-top-tiny padding-bottom-tiny"><?php echo $post_category_name; ?></div>
          </div>
          <h3 class="font-size-basic font-uppercase font-bold margin-bottom-small color-black">
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
          </h3>
          <a href="<?php the_permalink() ?>">
            <div class="excerpt font-size-mid">
              <?php the_excerpt(); ?>
            </div>
          </a>
        </div>
  <?php
  }
  wp_reset_postdata();
}
?>
