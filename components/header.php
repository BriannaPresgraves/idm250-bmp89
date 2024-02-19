<header class="bg-cyan-100 px-4 py-2">

<img class="header-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="logo">

        <nav class="text-right lg:gap-x-12">

        <?php wp_nav_menu([
            'theme_location' => 'primary'
        ]); ?>
        </nav>

    </header>
