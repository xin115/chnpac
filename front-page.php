<?php
/**
 * The template for displaying the front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Novo_US
 */

get_header();
?>

    <main id="main" class="site-main" role="main">

        <?php
        /**
         * The front page is constructed by loading a series of template parts.
         * Each get_template_part() call below loads a specific section of the homepage.
         * These files are located in the 'template-parts/' directory.
         * Example: get_template_part( 'template-parts/section', 'hero' ) loads 'template-parts/section-hero.php'.
         */

        // Load the hero section (typically the main introductory content at the top of the page)
        get_template_part( 'template-parts/section', 'hero' );

        // Load the 'How It Works' section (explains the service or product)
        get_template_part( 'template-parts/section', 'howitworks' );

        // Load the 'Testimonials' section (customer feedback, also referred to as "What They Say")
        get_template_part( 'template-parts/section', 'testimonials' );

        // Load the 'Join Us' section (final call to action, app downloads, etc.)
        // This section was identified as "JOIN US" from the novo.us site scan.
        // If its purpose changes or it's not a distinct section, this call can be modified or removed.
        get_template_part( 'template-parts/section', 'joinus' );

        // Further sections can be added by creating new template part files in 'template-parts/'
        // and then calling them here, for example:
        // get_template_part( 'template-parts/section', 'example-feature' ); // Loads template-parts/section-example-feature.php
        // get_template_part( 'template-parts/section', 'another-cta' );    // Loads template-parts/section-another-cta.php
        ?>

    </main><!-- #main -->

<?php
get_footer();

```
