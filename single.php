<?php get_header(); ?>
<h1 class="text-4xl my-8">
    <?php echo get_the_title(); ?>
</h1>

<div class="content">
<?php
echo get_the_content();
?>
</div>


<?php get_footer(); ?>