<?php
/**
 * The template for displaying Woocommerce Product
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
      <div class="container">
    <section id="primary" class="content-area col-sm-12 col-md-12 col-lg-12">
        <main id="main" class="site-main" role="main">
          
            <?php woocommerce_content(); ?>
           
        </main><!-- #main -->
    </section><!-- #primary -->
  </div>
<?php
get_sidebar();
get_footer();
