<?php
/**
 * Template part for displaying the "Join Us" section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Novo_US
 */

?>

<section id="join-us" class="join-us-section section" aria-labelledby="joinus-title">
    <div class="container">
        <div class="section-header text-center">
            <?php // Section Title. Should be editable. ?>
            <!-- Dynamic Section Title Start -->
            <h2 id="joinus-title" class="section-title">
                <?php echo esc_html__( 'JOIN US', 'novous' ); // Text from novo.us scan ?>
            </h2>
            <!-- Dynamic Section Title End -->
        </div>

        <div class="join-us-content text-center"> <?php // Added text-center to the main content wrapper ?>
            <?php // Introductory text for the "Join Us" section. Should be editable. ?>
            <!-- Dynamic Join Us Intro Text Start -->
            <p class="section-description">
                <?php echo esc_html__( 'Ready to take control of your auto insurance? Download the Novo app today and start your journey towards smarter driving and better rates.', 'novous' ); // Generic placeholder text ?>
            </p>
            <!-- Dynamic Join Us Intro Text End -->

            <div class="app-store-badges">
                <?php // Placeholder for App Store Buttons/Badges.
                      // Links and actual badge images should be updated.
                      // The placeholder images (app-store-placeholder.png, google-play-placeholder.png) were created as empty files.
                ?>
                <!-- Dynamic App Store Link 1 (Apple) Start -->
                <a href="#" class="app-store-button app-store-apple" aria-label="<?php esc_attr_e( 'Download Novo on the Apple App Store', 'novous'); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/app-store-placeholder.png' ); ?>" alt="<?php esc_attr_e( 'Download on the App Store', 'novous' ); ?>" style="width:150px; height:auto; display:inline-block; margin:10px;">
                    <?php // Alt text is important, actual text inside link is usually replaced by image. ?>
                </a>
                <!-- Dynamic App Store Link 1 (Apple) End -->

                <!-- Dynamic App Store Link 2 (Google) Start -->
                <a href="#" class="app-store-button app-store-google" aria-label="<?php esc_attr_e( 'Get Novo on Google Play', 'novous'); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/google-play-placeholder.png' ); ?>" alt="<?php esc_attr_e( 'Get it on Google Play', 'novous' ); ?>" style="width:150px; height:auto; display:inline-block; margin:10px;">
                </a>
                <!-- Dynamic App Store Link 2 (Google) End -->
            </div>

            <?php // Optional: A final Call to Action button if the app store badges aren't the only desired action. ?>
            <!-- Dynamic Final CTA Button Start -->
            <!--
            <div class="join-us-actions" style="margin-top: 2rem;">
                <a href="<?php // echo esc_url( home_url( '/get-started' ) ); // Placeholder URL, update as needed ?>" class="button button-secondary">
                    <?php // echo esc_html__( 'Learn More About the App', 'novous' ); ?>
                </a>
            </div>
            -->
            <!-- Dynamic Final CTA Button End -->

        </div><!-- .join-us-content -->
    </div><!-- .container -->
</section><!-- #join-us -->
