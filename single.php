<?php
get_header();
?>

<main id="main-content">
  <section id="posts">
    <div class="container">
      <div class="grid-row">

<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
?>

        <article <?php post_class('grid-item item-s-12'); ?> id="post-<?php the_ID(); ?>">
          <header id="single-header-image-holder">
            <?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
            <div class="grid-row justify-center">
              <div class="grid-item item-s-12 item-m-8">
                <h1 class="font-size-large text-align-center">
                  <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h1>
                <div class="text-align-center">
                  <?php the_date(); ?>
                  <?php echo get_the_author(); ?>
                </div>
              </div>
            </div>
          </header>

          <div class="grid-row justify-center">
            <div class="single-content grid-item item-s-12 item-m-7">
              <?php the_content(); ?>
            </div>
            <aside class="grid-item item-s-12 item-m-3">
            </aside>
          </div>




        </article>

<?php
  }
} else {
?>
        <article class="u-alert grid-item item-s-12"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>

      </div>
    </div>
  </section>

  <?php get_template_part('partials/pagination'); ?>

</main>

<?php
get_footer();
?>
