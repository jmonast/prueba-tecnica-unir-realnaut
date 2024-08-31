<?php
// Add menu shortcode
function show_basic_menu_shortcode() {
    ob_start(); 

    // HTML for the logo and site information
    
    $custom_logo = get_custom_logo();
    ?>

    <header class="header header--desktop">
        <div class="header__container">
            <div class="container__left">
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

            </div>

            <div class="container__right">
            
                <div class="menu__secundario">
                    <div class="menu__secundario__enlace"><img src="<?= get_template_directory_uri() ?>/assets/images/briefcase.png" alt="">Empleo</div>
                    <div class="menu__secundario__enlace"><img src="<?= get_template_directory_uri() ?>/assets/images/user.png" alt="">Campus</div>
                </div>
            
                <img class="header__branding__aux" src="<?= get_template_directory_uri() ?>/assets/images/unir-logo.png" alt="UNIR Logo">

            </div>
        </div>
    </header>

    <header class="header header--mobile">
        <div class="header__container">
            <div class="header__branding">
                <a class="header__branding__logo" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php if ($custom_logo) : ?>
                        <?php echo $custom_logo; ?>
                    <?php else : ?>
                        <?php bloginfo('name'); ?>
                    <?php endif; ?>
                </a>
            </div>
            <div class="header__toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
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