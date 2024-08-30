<?php
// Add menu shortcode
function show_basic_menu_shortcode() {
    ob_start(); 

    // HTML for the logo and site information
    
    $custom_logo = get_custom_logo();
    ?>

    <header class="header">
        <div class="header__branding">
            <a class="header__branding__logo" href="<?php echo esc_url(home_url('/')); ?>">
                <?php if ($custom_logo) : ?>
                    <?php echo $custom_logo; ?>
                <?php else : ?>
                    <?php bloginfo('name'); ?>
                <?php endif; ?>
            </a>
        </div>

        <?php
        wp_nav_menu(array(
            'theme_location'    => 'menu-principal',
            'container'         => 'nav',
            'container_class'   => 'header__menu',
            'menu_class'        => 'header__menu__nav',
            'fallback_cb'       => false
        ));
        ?>

    </header>

    <?php
    return ob_get_clean();
}

// Register the shortcode
add_shortcode('show_menu', 'show_basic_menu_shortcode');