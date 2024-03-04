<?php get_header(); ?>
<h1 class="text-3xl my-8 text-center">
    <?php echo get_the_title(); ?>
</h1>

<div class="content">
<?php
echo get_the_content();
?>
</div>

<?php get_footer(); ?>