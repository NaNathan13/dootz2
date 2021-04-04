<nav id="site-navigation" class="main-navigation">
    <button class="menu-toggle nav_toggle_btn" aria-controls="primary-menu" aria-expanded="false">
        <div class="nav_menu_burger"></div>
    </button>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
        )
    );
    ?>
</nav><!-- #site-navigation -->