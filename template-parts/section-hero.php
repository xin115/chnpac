<?php
/**
 * Template part for displaying the Hero section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Novo_US
 */

?>

<section id="hero" class="hero-section section section-bg-light" aria-labelledby="hero-title"> <?php // Consider `aria-label` or `aria-labelledby` for sections ?>
    <div class="container">
        <div class="hero-content text-center"> <?php // Added text-center for typical hero layout ?>
            <?php // Main heading for the hero section. Content should be editable, e.g., via Customizer or page content. ?>
            <!-- Dynamic Hero Title Start -->
            <h1 id="hero-title" class="hero-title">
                <?php echo esc_html__( 'Drive smart, save more. With Novo.', 'novous' ); ?>
            </h1>
            <!-- Dynamic Hero Title End -->

            <?php // Subheading or descriptive text. Should also be editable. ?>
            <!-- Dynamic Hero Subtitle Start -->
            <p class="hero-subtitle">
                <?php echo esc_html__( "At Novo, we put you in control over your driving and your pricing. We're giving you all the tools you need to become a safer driver. And the safer you drive, … the higher your Safety Score… and the higher your score, the lower your price.", 'novous' ); // Text from novo.us scan ?>
            </p>
            <!-- Dynamic Hero Subtitle End -->

            <?php // Call to action button(s). URL and text should be editable. ?>
            <!-- Dynamic Hero Button Start -->
            <div class="hero-actions">
                <a href="<?php echo esc_url( home_url( '/get-my-price' ) ); // Placeholder URL, update as needed ?>" class="button button-primary hero-button">
                    <?php echo esc_html__( 'GET MY PRICE', 'novous' ); // Text from novo.us scan ?>
                </a>
            </div>
            <!-- Dynamic Hero Button End -->

            <?php // Optional: Placeholder for a scroll-down button or other elements if observed on the site.
                  // This could link to the next section, e.g., #how-it-works.
            ?>
            <!-- Example Scroll Down Button:
            <div class="scroll-down" style="margin-top: 2rem;">
                <a href="#how-it-works" class="scroll-down-button" aria-label="<?php // esc_attr_e('Scroll to next section', 'novous'); ?>">
                    <?php // echo esc_html__( 'Learn More', 'novous' ); // Or an SVG arrow icon ?>
                </a>
            </div>
            -->
        </div><!-- .hero-content -->

        <?php // Optional: Placeholder for a hero image or background image.
              // If using a background image, it might be applied via CSS (theme.css) or inline style here.
              // If it's a foreground image, ensure it's responsive and has alt text.
        ?>
        <!-- Example Hero Image:
        <div class="hero-image-container">
            <?php // Example of referencing an image from the assets/images folder using get_template_directory_uri(): ?>
            <img src="<?php // echo esc_url( get_template_directory_uri() . '/assets/images/hero-placeholder.jpg' ); ?>" alt="<?php // esc_attr_e( 'Illustration of Novo service benefits', 'novous' ); // Be descriptive with alt text ?>">
        </div>
        -->

    </div><!-- .container -->
</section><!-- #hero -->
