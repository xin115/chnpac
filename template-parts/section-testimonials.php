<?php
/**
 * Template part for displaying the Testimonials section ("What They Say")
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Novo_US
 */

?>

<section id="testimonials" class="testimonials-section section section-bg-light" aria-labelledby="testimonials-title">
    <div class="container">
        <div class="section-header text-center">
            <?php // Section Title. Should be editable. ?>
            <!-- Dynamic Section Title Start -->
            <h2 id="testimonials-title" class="section-title">
                <?php echo esc_html__( 'WHAT THEY SAY', 'novous' ); // Text from novo.us scan ?>
            </h2>
            <!-- Dynamic Section Title End -->
        </div>

        <div class="testimonials-content">
            <?php // This area will display testimonials.
                  // Currently, these are static placeholders.
                  // In a full implementation, testimonials might be managed as a Custom Post Type (e.g., 'testimonial')
                  // and displayed here in a loop (e.g., WP_Query).
                  // Consider using a slider or a responsive grid for display.
            ?>
            <div class="testimonials-grid"> <?php // This class suggests a grid layout. Could also be 'testimonial-slider' etc. ?>

                <?php // Testimonial Item 1 Start ?>
                <?php // Each testimonial should be an <article> for semantic correctness. ?>
                <article class="testimonial-item">
                    <blockquote class="testimonial-quote">
                        <?php // The testimonial text itself. Should be editable. ?>
                        <!-- Dynamic Testimonial Quote Start -->
                        <p><?php echo esc_html__( 'This is a placeholder for a glowing testimonial. Customers love Novo!', 'novous' ); ?></p>
                        <!-- Dynamic Testimonial Quote End -->
                    </blockquote>
                    <footer class="testimonial-author">
                        <?php // Author of the testimonial. Should be editable. ?>
                        <!-- Dynamic Testimonial Author Start -->
                        <cite><?php echo esc_html__( '- Satisfied Customer A', 'novous' ); ?></cite>
                        <!-- Dynamic Testimonial Author End -->
                        <?php // Optionally, add a source, company, or role. E.g., <span class="testimonial-source">CEO, ExampleCorp</span> ?>
                    </footer>
                </article>
                <?php // Testimonial Item 1 End ?>

                <?php // Testimonial Item 2 Start ?>
                <article class="testimonial-item">
                    <blockquote class="testimonial-quote">
                        <!-- Dynamic Testimonial Quote Start -->
                        <p><?php echo esc_html__( 'Another fantastic experience! The app is easy to use and the savings are real.', 'novous' ); ?></p>
                        <!-- Dynamic Testimonial Quote End -->
                    </blockquote>
                    <footer class="testimonial-author">
                        <!-- Dynamic Testimonial Author Start -->
                        <cite><?php echo esc_html__( '- Happy Driver B', 'novous' ); ?></cite
                        ><!-- Dynamic Testimonial Author End -->
                    </footer>
                </article>
                <?php // Testimonial Item 2 End ?>

                <?php // Testimonial Item 3 Start (Optional, for demonstration) ?>
                <article class="testimonial-item">
                    <blockquote class="testimonial-quote">
                        <!-- Dynamic Testimonial Quote Start -->
                        <p><?php echo esc_html__( 'I recommend Novo to all my friends. Fair pricing and great service.', 'novous' ); ?></p>
                        <!-- Dynamic Testimonial Quote End -->
                    </blockquote>
                    <footer class="testimonial-author">
                        <!-- Dynamic Testimonial Author Start -->
                        <cite><?php echo esc_html__( '- Smart Saver C', 'novous' ); ?></cite>
                        <!-- Dynamic Testimonial Author End -->
                    </footer>
                </article>
                <?php // Testimonial Item 3 End ?>

            </div><!-- .testimonials-grid -->

            <?php // Placeholder for pagination (if many testimonials and not using a slider) or slider navigation controls. ?>
            <!-- Example Slider Navigation:
            <div class="testimonials-navigation text-center" style="margin-top: 2rem;">
                <button class="slider-button prev-testimonial" aria-label="<?php // esc_attr_e('Previous testimonial', 'novous'); ?>"><?php // esc_html_e( 'Prev', 'novous' ); ?></button>
                <button class="slider-button next-testimonial" aria-label="<?php // esc_attr_e('Next testimonial', 'novous'); ?>"><?php // esc_html_e( 'Next', 'novous' ); ?></button>
            </div>
            -->
        </div><!-- .testimonials-content -->
    </div><!-- .container -->
</section><!-- #testimonials -->
