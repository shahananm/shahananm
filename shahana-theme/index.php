<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme.
 *
 * @package Shahana_Theme
 */

get_header();

// If this is the front page, load front-page template
if (is_front_page()) {
    get_template_part('front-page');
} else {
    // Default content for other pages
    ?>
    <main class="site-main">
        <div class="container">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        </header>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                    <?php
                endwhile;
            else :
                ?>
                <p><?php esc_html_e('No content found.', 'shahana-theme'); ?></p>
                <?php
            endif;
            ?>
        </div>
    </main>
    <?php
}

get_footer();
