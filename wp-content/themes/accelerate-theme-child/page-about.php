<?php
/**
 * The template for displaying the custom About page
 *
 * This is the template that displaying the custom About page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-page">
  <div id="primary" class="site-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class='about-hero'>
        <?php the_content(); ?>
        <h3>Is this thing working?</h3>
      </div>
    <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
  </div><!-- #primary -->
</section><!-- .about-page -->

<?php get_footer(); ?>