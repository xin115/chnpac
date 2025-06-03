<?php
/**
 * Template part for displaying the "How It Works" section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Novo_US
 */

?>

<section id="how-it-works" class="how-it-works-section section" aria-labelledby="howitworks-title">
    <div class="container">
        <div class="section-header text-center">
            <?php // Section Title. Should be editable. ?>
            <!-- Dynamic Section Title Start -->
            <h2 id="howitworks-title" class="section-title">
                <?php echo esc_html__( 'HOW IT WORKS', 'novous' ); // Text from novo.us scan ?>
            </h2>
            <!-- Dynamic Section Title End -->
        </div>

        <div class="how-it-works-content">
            <?php // Main descriptive content for this section. Should be editable. ?>
            <!-- Dynamic How It Works Content Start -->
            <p class="section-description text-center">
                <?php echo esc_html__( "New customers enjoy automatic enrollment discount of up to 15%. Welcome to Novo, where we're flipping the script in the insurance game with rates that don't stay static. You have a chance to lower your rates every month when you keep it safe on the road.", 'novous' ); // Text from novo.us scan - combined lines ?>
            </p>
            <!-- Dynamic How It Works Content End -->

            <?php // Placeholder for potential sub-sections, feature list, or steps if this section becomes more complex.
                  // This could be implemented using child pages, custom post types (e.g., 'features'), or Advanced Custom Fields repeaters.
            ?>
            <!-- Example Structure for Steps/Features:
            <div class="how-it-works-steps columns-3"> <?php // 'columns-3' would be a utility class for layout ?>
                <div class="step">
                    <img src="<?php // echo esc_url( get_template_directory_uri() . '/assets/images/step1-icon.png' ); ?>" alt="<?php // esc_attr_e( 'Icon for Step 1', 'novous' ); ?>">
                    <h3><?php // esc_html_e( 'Step 1: Sign Up', 'novous' ); ?></h3>
                    <p><?php // esc_html_e( 'Brief description of the first step in the process.', 'novous' ); ?></p>
                </div>
                <div class="step">
                    <img src="<?php // echo esc_url( get_template_directory_uri() . '/assets/images/step2-icon.png' ); ?>" alt="<?php // esc_attr_e( 'Icon for Step 2', 'novous' ); ?>">
                    <h3><?php // esc_html_e( 'Step 2: Drive Safe', 'novous' ); ?></h3>
                    <p><?php // esc_html_e( 'Explanation of how driving behavior is monitored or encouraged.', 'novous' ); ?></p>
                </div>
                <div class="step">
                    <img src="<?php // echo esc_url( get_template_directory_uri() . '/assets/images/step3-icon.png' ); ?>" alt="<?php // esc_attr_e( 'Icon for Step 3', 'novous' ); ?>">
                    <h3><?php // esc_html_e( 'Step 3: Save Money', 'novous' ); ?></h3>
                    <p><?php // esc_html_e( 'Details on how savings are achieved and applied.', 'novous' ); ?></p>
                </div>
            </div>
            -->

            <?php // Call to action button. URL and text should be editable. ?>
            <!-- Dynamic How It Works Button Start -->
            <div class="how-it-works-actions text-center">
                <a href="<?php echo esc_url( home_url( '/get-my-price' ) ); // Placeholder URL, update as needed ?>" class="button button-primary">
                    <?php echo esc_html__( 'GET MY PRICE', 'novous' ); // Text from novo.us scan ?>
                </a>
            </div>
            <!-- Dynamic How It Works Button End -->
        </div><!-- .how-it-works-content -->
    </div><!-- .container -->
</section><!-- #how-it-works -->
