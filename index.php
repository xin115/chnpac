<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no front-page.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Novo_US
 */

get_header();
?>

    <main id="primary" class="site-main"> <?php // Changed ID to primary as 'main' is often used on front-page.php ?>
        <div class="container"> <?php // Added a container for consistency ?>

            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php
            if ( have_posts() ) :

                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format) and that will be used instead.
                     * For now, we'll create a generic content.php or just output directly.
                     * Let's output a simplified version directly for now.
                     */
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php
                            if ( is_singular() ) :
                                the_title( '<h1 class="entry-title">', '</h1>' );
                            else :
                                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                            endif;

                            if ( 'post' === get_post_type() ) :
                                ?>
                                <div class="entry-meta">
                                    <?php
                                    // Example of post meta, customize as needed
                                    // novo_us_posted_on();
                                    // novo_us_posted_by();
                                    echo '<p class="post-date">' . get_the_date() . '</p>'; // Simple date
                                    ?>
                                </div><!-- .entry-meta -->
                            <?php endif; ?>
                        </header><!-- .entry-header -->

                        <?php // Post thumbnail placeholder
                        // if ( has_post_thumbnail() ) {
                        //     the_post_thumbnail('medium_large', ['class' => 'alignleft']); // Example usage
                        // }
                        ?>

                        <div class="entry-content">
                            <?php
                            // For archive pages, blog index, search results, show an excerpt.
                            // For single posts (is_singular()), show full content.
                            if ( is_singular() ) {
                                the_content(
                                    sprintf(
                                        wp_kses(
                                            /* translators: %s: Name of current post. Only visible to screen readers */
                                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'novous' ),
                                            array(
                                                'span' => array(
                                                    'class' => array(),
                                                ),
                                            )
                                        ),
                                        get_the_title()
                                    )
                                );

                                wp_link_pages(
                                    array(
                                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'novous' ),
                                        'after'  => '</div>',
                                    )
                                );
                            } else {
                                the_excerpt(); // Display an excerpt for archives/blog index
                                echo '<a href="' . esc_url( get_permalink() ) . '" class="read-more button">' . esc_html__( 'Read More', 'novous' ) . '</a>';
                            }
                            ?>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer">
                            <?php // novo_us_entry_footer(); // Placeholder for potential footer meta content ?>
                        </footer><!-- .entry-footer -->
                    </article><!-- #post-<?php the_ID(); ?> -->
                    <?php

                endwhile;

                // Previous/next page navigation.
                the_posts_navigation(array(
                    'prev_text' => esc_html__('&laquo; Older posts', 'novous'),
                    'next_text' => esc_html__('Newer posts &raquo;', 'novous'),
                ));


            else :

                // If no content, include the "No posts found" template.
                // For simplicity, directly outputting a message.
                // Consider get_template_part( 'template-parts/content', 'none' );
                ?>
                <section class="no-results not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'novous' ); ?></h1>
                    </header><!-- .page-header -->

                    <div class="page-content">
                        <?php
                        if ( is_home() && current_user_can( 'publish_posts' ) ) :
                            printf(
                                '<p>' . wp_kses(
                                    /* translators: 1: link to WP admin new post page. */
                                    __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'novous' ),
                                    array(
                                        'a' => array(
                                            'href' => array(),
                                        ),
                                    )
                                ) . '</p>',
                                esc_url( admin_url( 'post-new.php' ) )
                            );
                        elseif ( is_search() ) :
                            ?>
                            <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'novous' ); ?></p>
                            <?php
                            get_search_form();
                        else :
                            ?>
                            <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'novous' ); ?></p>
                            <?php
                            get_search_form();
                        endif;
                        ?>
                    </div><!-- .page-content -->
                </section><!-- .no-results -->
                <?php
            endif;
            ?>
        </div> <!-- .container -->
    </main><!-- #primary -->

<?php
get_footer();
```
