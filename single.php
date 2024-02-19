<?php get_header(); ?>
<h1 class="text-xl">
    <?php echo get_the_title(); ?>
</h1>

<div>
<?php
echo get_the_content();
?>
</div>

<p> This is a single.php template</p>

<?php get_footer(); ?>