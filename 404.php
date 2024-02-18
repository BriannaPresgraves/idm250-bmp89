<?php get_header('simple'); ?>
<h1 class="text-xl">
    <?php echo get_the_title(); ?>
</h1>

<p> 404 </p>

<?php wp_nav_menu([
            'theme_location' => '404-menu'
        ]); ?>

<?php get_footer(); ?>