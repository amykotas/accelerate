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
<section class="about-page">
  <div id="primary" class="site-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class='about-hero'>
        <?php the_content(); ?>
        <h1><span id="first-word">Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h1>
      </div><!-- #content -->
    <?php endwhile; // end of the loop. ?>
  </div><!-- #primary -->
</section><!-- .about-page -->

<section class="about-services-intro">
  <div class="services-intro">
    <h2>OUR SERVICES</h2>
    <p>We take pride in our clients and the content we create
    for them.<br>Here's a brief overview of our offered services.</p>
  </div>
</section>

<!-- List of Services -->
<section class="services">
  <div class="site-content">
    <h3></h3>
  </div>
</section> <!-- end .services -->


<?php get_footer(); ?>