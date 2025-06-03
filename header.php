<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'novous' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div class="container">
            <div class="site-branding">
                <?php
                // Site title (displays "Novo") linked to the home page.
                // Uses h1 on front page/home for SEO, p on other pages.
                if ( is_front_page() && is_home() ) :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html__( 'Novo', 'novous' ); ?></a></h1>
                    <?php
                else :
                    ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html__( 'Novo', 'novous' ); ?></a></p>
                    <?php
                endif;
                // Site description was previously here, removed for cleaner header.
                // It can be re-added if needed:
                // $novous_description = get_bloginfo( 'description', 'display' );
                // if ( $novous_description || is_customize_preview() ) :
                //     echo '<p class="site-description">' . esc_html( $novous_description ) . '</p>';
                // endif;
                ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'novous' ); ?>">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <?php esc_html_e( 'Menu', 'novous' ); // Text for the mobile menu button ?>
                    <?php // Consider adding an SVG icon for the menu button here for visual representation e.g. <span class="hamburger-icon"></span> ?>
                </button>
                <?php
                // Displays the 'primary' menu registered in functions.php.
                // Fallback 'false' means no menu will be displayed if 'primary' is not set, preventing errors.
                // 'container' => false ensures the menu is not wrapped in an extra div, allowing for cleaner CSS.
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary', // Must match the key used in register_nav_menus in functions.php
                        'menu_id'        => 'primary-menu', // CSS ID for the ul element
                        'fallback_cb'    => false,
                        'container'      => false,
                    )
                );
                ?>
            </nav><!-- #site-navigation -->

            <div class="header-actions">
                <?php // "Get My Price" button - links to a placeholder URL. Update href as needed. ?>
                <a href="<?php echo esc_url( home_url( '/get-my-price' ) ); // Placeholder URL, e.g., /quote or /pricing ?>" class="button header-button button-primary"><?php esc_html_e( 'Get My Price', 'novous' ); ?></a>
                <?php // "Sign In" button - links to a placeholder URL. Update href as needed. ?>
                <a href="<?php echo esc_url( home_url( '/sign-in' ) ); // Placeholder URL, e.g., /login or /my-account ?>" class="button header-button button-secondary"><?php esc_html_e( 'Sign In', 'novous' ); ?></a>
            </div><!-- .header-actions -->

        </div><!-- .container -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
