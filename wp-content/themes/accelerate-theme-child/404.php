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

<!-- Gets the hero and intro content for About page -->
<section class="404-page">
  <div class="site-content">
      <div class="404-content">
        <div class="404-image"><img src="http://localhost:8888/accelerate/wp-content/uploads/2016/10/wrong.gif" alt="Trump wrong"></div>
        <div class="404-text">
          <h2>Make Accelerate Great Again</h2>
          <p>Sorry, this page no longer exists, never existed or has been moved. Take a look around our <a href="/blog">blog</a> or some of our <a href="archive-case_studies.php">work</a>.</p>
        </div>
      </div>
  </div><!-- .site-content -->
</section><!-- .404-page -->

<?php get_footer(); ?>