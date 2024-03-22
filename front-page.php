<?php get_header(); ?>
<h1 class="text-3xl my-8">
    <?php echo get_the_title(); ?>
</h1>

<?php get_template_part('components/latest-posts'); ?>

<?php get_footer(); ?>