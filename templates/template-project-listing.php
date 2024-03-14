<?php
/* Template Name: Blog Listing */

get_header(); ?>

<h1 class="text-3xl my-8 text-center">
    <?php echo get_the_title(); ?>
</h1>

<?php
$image = get_featured_image_data(get_the_ID());
// Query terms for current post and return an array of term IDs
$categoryIds = wp_get_post_terms(get_the_ID(), 'category', ['fields' => 'ids']); // [3, 10]

// custom wp query to get related posts for current category
$related_posts = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' =>6,
    'post__not_in' => [get_the_ID()],

]);

?>

<?php if ($related_posts->have_posts()) : ?>
<section class="listing-posts">
  <div class="posts-container">
    <div class="posts-layout">
      <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
      <div class="post-background">
        <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('thumbnail'); ?>
          <h4 class="listing-category">
            <?php echo get_the_category_list(); ?> </h4>
          <h3 class="listing-title">
            <?php echo get_the_title(); ?></h3>
          <h5 class="listing-author">
            By: Brianna Presgraves </h5>
          </p>
        </a>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>