<?php
/**
 * The template for displaying all pages
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


  <div class="custom-page-hader-my">
  	
     <img class="custom-page-thumb" src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($prevID), 'full'); echo $image[0];?>" />
        <h2 class="custom-page-title-my"><?php the_title(); ?></h2>
  </div>
  <div class="container amr-asuda">
  	 <div class="row">
  	 		<section id="primary" class="content-area col-sm-12 col-lg-12 custom-page-billy">
				<main id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

		                // If comments are open or we have at least one comment, load up the comment template.
		                if ( comments_open() || get_comments_number() ) :
		                    comments_template();
		                endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</section><!-- #primary -->
  	 </div>
  </div>

<?php

get_footer();
