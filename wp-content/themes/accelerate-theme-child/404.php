<?php
/**
 * The template for displaying the custom 404 page
 *
 * This is the template that displaying the custom 404 page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<!-- Gets the hero and intro content for About page -->
<section class="error-page">
  <div class="site-content">
      <div class="error-content">
        <div class="error-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.gif" alt="Trump wrong"></div>
        <div class="error-text">
          <h2>Be nice, Donald.</h2>
          <p>Sorry, but the page you were looking for no longer exists, never existed or has been moved. Take a look around our <a href="/blog">blog</a> or some of our <a href="archive-case_studies.php">work</a>.</p>
        </div>
      </div>
  </div><!-- .site-content -->
</section><!-- .404-page -->

<?php get_footer(); ?>