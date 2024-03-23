<?php
$image = get_featured_image_data(get_the_ID());
// Query terms for current post and return an array of term IDs
$categoryIds = wp_get_post_terms(get_the_ID(), 'category', ['fields' => 'ids']); // [3, 10]

// custom wp query to get related posts for current category
$related_posts = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 5,
  'orderby'        => 'date',
  'order'          => 'DESC',

]);

?>

<?php if ($related_posts->have_posts()) : ?>
<h2 class="latesth2"> Latest Posts </h2>
<section class="listing-posts">
  <div class="posts-container">
    <div class="post-layout">
      <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
      <div class="posts-background">
        <a href="<?php the_permalink(); ?>">
        <div class="thumbnail">
        <?php the_post_thumbnail('thumbnail'); ?>
        </div>
          <h3 class="listings-title">
            <?php echo get_the_title(); ?></h3>
        </a>
            <h6 class="listings-category">
            <?php echo get_the_category_list(); ?> </h6>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>