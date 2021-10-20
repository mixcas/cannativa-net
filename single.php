<?php
get_header();
?>

<main id="main-content">
  <section id="posts">

<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
    $post_main_category = get_the_category();
    $post_main_category_name = $post_main_category[0]->cat_name;
?>
    <?php get_template_part('partials/single-cat-menu'); ?>
    <div class="container">
      <div class="grid-row">


        <article <?php post_class('grid-item item-s-12 margin-bottom-large'); ?> id="post-<?php the_ID(); ?>">
          <header class="header-image-holder margin-bottom-mid">
            <div class="image-wrapper">
              <?php echo get_the_post_thumbnail($post->ID, 'single-featured'); ?>
            </div>
            <div class="title-holder grid-row justify-center text-align-center margin-bottom-basic">
              <div class="grid-item item-s-12 item-m-8">
                <h3 class="title font-size-basic font-bold font-uppercase text-align-center spacing-wide color-red">
                <a href="<?php the_permalink() ?>"><?php echo $post_main_category_name; ?></a>
                </h3>
                <h1 class="title font-size-large font-bold font-uppercase text-align-center">
                  <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h1>
                <div class="font-size-mid font-capitalize">
                  <?php the_date(); ?> | <?php echo get_the_author(); ?>
                </div>
              </div>
            </div>
          </header>

          <div class="grid-row justify-center">
            <div class="grid-item item-s-12 item-m-7">
              <div class="single-content">
              <?php the_content(); ?>
              </div>

              <?php // TAGS
              $posttags = get_the_tags();
              if ($posttags) {
              ?>
                <ul class="tags-list font-bold font-size-mid font-uppercase">
              <?php
                foreach($posttags as $tag) {
              ?>
                <li>
                  <a href="#">
                    <?php echo $tag->name; ?>
                  </a>
                </li>
              <?php
                }
              ?>
                </ul>
              <?php
              }
              ?>
            </div>
            <aside class="grid-item item-s-12 item-m-3">
            </aside>
          </div>
        </article>
      </div>
    </div>
<?php
  }
} else {
?>
        <article class="u-alert grid-item item-s-12"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>

      </div>

    </div>
    <?php get_template_part('partials/related'); ?>
  </section>

  <?php get_template_part('partials/pagination'); ?>

</main>

<?php
get_footer();
?>
