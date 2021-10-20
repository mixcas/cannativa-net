<?php
// Current post category
$selected_category = get_the_category($post_id);
$selected_category_name = $selected_category[0]->cat_name;

// Default Category
$default_category_id = get_option('default_category');
$default_category_name = get_the_category_by_ID($default_category_id);

// Children of default category
$categories = get_categories(array(
  'child_of' => $default_category_id,
));

?>
<div class="single-category-menu margin-bottom-basic">
  <div class="container padding-top-basic padding-bottom-basic">
    <div class="grid-row justify-center font-size-large font-uppercase font-bold margin-bottom-small spacing-wide">
      <?php echo $default_category_name; ?>
    </div>
    <div class="grid-row justify-center font-size-small font-bold">
    <?php
    foreach($categories as $category) {
      if ($category->name != 'Uncategorized') {
        $category_link = get_category_link($category->term_id);

        $classes = 'category-link grid-item';
        if($category->name == $selected_category_name){
          $classes = $classes . ' selected-category';
        }

        echo '<div class="' . $classes . '"><a href="' . $category_link . '">' . $category->name . '</a></div>';

      }
    }
    ?>
    </div>
  </div>
</div>
