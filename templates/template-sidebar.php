<?php
/* Template Name: Page with Sidebar */

get_header();

?>
<h1 class="text-3xl my-8">
  <?php echo get_the_title(); ?>
</h1>

<main class="flex w-full mx-auto max-w-7xl mt-10">
  <div class="content" id="side">
    <?php
    echo get_the_content();
    ?>
  </div>
  <aside class="sidebar">
  <?php
    // output the sidebar main_sidebar
    if (is_active_sidebar('right_sidebar')) :
        dynamic_sidebar('right_sidebar');
    endif;
?>
  </aside>
</main>
<?php get_footer(); ?>