<?php
/* Template Name: Page with sidebar */

get_header();

?>
<h1 class="text-3xl my-8">
  <?php echo get_the_title(); ?>
</h1>

<div class="featured-image">
    <?php
    if(has_post_thumbnail()){
        the_post_thumbnail('full');
    }
    ?>
</div>

<main class="flex w-full mx-auto max-w-7xl mt-10">
  <div class="content" id="side">
    <?php
    echo get_the_content();
    ?>
  </div>
  <aside class="sidebar">
  <?php
    if (is_active_sidebar('right_sidebar')) :
        dynamic_sidebar('right_sidebar');
    endif;
?>
    <?php get_template_part('components/related-posts-sidebar');?>
  </aside>
</main>
<?php get_footer(); ?>