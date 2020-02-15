<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<main id="site-main-content" class="main-content content-single-post">
    <div class="container">
        <section class="error-404 not-found">
            <svg viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg"><path class="cls-1" d="M64,3A61,61,0,1,1,3,64,61.06,61.06,0,0,1,64,3m0-3a64,64,0,1,0,64,64A64,64,0,0,0,64,0Z"/><path class="cls-1" d="M86.26,94.81a1.47,1.47,0,0,1-.85-.26,38,38,0,0,0-24.09-6.7A37.48,37.48,0,0,0,42.6,94.54a1.5,1.5,0,1,1-1.72-2.46,40.5,40.5,0,0,1,20.23-7.22,41,41,0,0,1,26,7.22,1.5,1.5,0,0,1-.85,2.73Z"/><path class="cls-1" d="M43.83,60.63a9.34,9.34,0,0,1-8.28-5,1.5,1.5,0,1,1,2.64-1.41,6.39,6.39,0,0,0,11.27,0,1.5,1.5,0,1,1,2.65,1.41A9.37,9.37,0,0,1,43.83,60.63Z"/><path class="cls-1" d="M85.57,60.63a9.34,9.34,0,0,1-8.28-5,1.5,1.5,0,1,1,2.64-1.41,6.39,6.39,0,0,0,11.27,0,1.5,1.5,0,1,1,2.64,1.41A9.34,9.34,0,0,1,85.57,60.63Z"/></svg>
            <div class="error-404-content">
                <h1><?php esc_html_e('That Page Can\'t Be Found.', 'ciao'); ?></h1>
                <h5><?php esc_html_e('Sorry, we couldn\'t find the page you’re looking for.', 'ciao'); ?></h5>
                <?php get_search_form(); ?>
                <a href="<?php echo esc_url(home_url());?>" class="back-to-home" title="<?php esc_attr_e('Back to Home','ciao')?>"><?php esc_html_e('Or Back To Home Page','ciao')?></a>
            </div>
        </section>
    </div>
</main>
<?php get_footer();
