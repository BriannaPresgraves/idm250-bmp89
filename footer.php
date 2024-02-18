<footer class="bg-cyan-100 py-5 flex items-center justify-center"> 

<p class="mr-2"> &copy; <?php echo date('Y'); ?> Crafted Charm </p>

<?php wp_nav_menu([
            'theme_location' => 'footer'
        ]); ?>

</footer>
<?php wp_footer(); ?>
</body>

</html>