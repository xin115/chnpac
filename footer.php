</div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
            <div class="footer-widgets">
                <?php // Placeholder for potential footer widget areas.
                      // To use this, you would register sidebars in functions.php (e.g., 'footer-1', 'footer-2')
                      // and then display them here using: if ( is_active_sidebar( 'footer-1' ) ) { dynamic_sidebar( 'footer-1' ); }
                ?>
                <!-- Example Structure:
                <div class="footer-widget-column">
                    <?php // if ( is_active_sidebar( 'footer-1' ) ) : ?>
                        <?php // dynamic_sidebar( 'footer-1' ); ?>
                    <?php // endif; ?>
                </div>
                <div class="footer-widget-column">
                    <?php // if ( is_active_sidebar( 'footer-2' ) ) : ?>
                        <?php // dynamic_sidebar( 'footer-2' ); ?>
                    <?php // endif; ?>
                </div>
                -->
            </div><!-- .footer-widgets -->

            <div class="site-info">
                <?php // Copyright text, dynamically showing the current year. ?>
                <p>&copy; <?php echo date( 'Y' ); ?> <?php echo esc_html__( 'Novo Insurance, LLC. All Rights Reserved.', 'novous' ); ?></p>
            </div><!-- .site-info -->

            <nav class="footer-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'novous' ); ?>">
                <?php // Placeholder footer links. These URLs should be updated to actual page links when available. ?>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/terms-of-use' ) ); // Example: /terms-of-service ?>"><?php esc_html_e( 'Terms Of Use', 'novous' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/privacy-notice' ) ); // Example: /privacy-policy ?>"><?php esc_html_e( 'Privacy Notice', 'novous' ); ?></a></li>
                    <?php // Additional links based on novo.us footer: ?>
                    <li><a href="<?php echo esc_url( home_url( '/telematics-policy' ) ); ?>"><?php esc_html_e( 'Telematic Policy', 'novous' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/novo-safety-terms' ) ); ?>"><?php esc_html_e( 'Novo Safety Terms', 'novous' ); ?></a></li>
                </ul>
            </nav><!-- .footer-navigation -->

            <div class="footer-social-media">
                <p><?php esc_html_e( 'Follow Us:', 'novous' ); ?></p>
                <?php // Placeholder social media links. Replace '#' with actual URLs.
                      // Consider using SVG icons or an icon font for visual representation. ?>
                <ul>
                    <li><a href="#" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Novo on LinkedIn', 'novous'); ?>"><?php esc_html_e( 'LinkedIn', 'novous' ); ?></a></li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Novo on Twitter', 'novous'); ?>"><?php esc_html_e( 'Twitter', 'novous' ); ?></a></li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Novo on Facebook', 'novous'); ?>"><?php esc_html_e( 'Facebook', 'novous' ); ?></a></li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Novo on Instagram', 'novous'); ?>"><?php esc_html_e( 'Instagram', 'novous' ); ?></a></li>
                </ul>
            </div><!-- .footer-social-media -->

        </div><!-- .container -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); // WordPress hook. Important for plugins and theme functionality. ?>

</body>
</html>
