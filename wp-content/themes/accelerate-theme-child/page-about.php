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
  <div class="site-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class='about-hero'>
        <?php the_content(); ?>
      </div><!-- .about-hero -->
    <?php endwhile; // end of the loop. ?>
  </div><!-- .site-content -->
</section><!-- .about-page -->

<section class="about-services-intro">
  <div class="services-intro">
    <!-- You can use custom fields for this title and this paragraph -->
    <h2>OUR SERVICES</h2>
    <p>We take pride in our clients and the content we create
    for them.<br>Here's a brief overview of our offered services.</p>
  </div>
</section>

<!-- List of Services -->
<section class="about-services-list">
  <div class="site-content">
    <?php query_posts('posts_per_page=4&post_type=services'); ?>
    <?php while ( have_posts() ) : the_post();
      $image_1 = get_field("image_1");
      $size = "medium";?>

    <div class="about-services-posts">
      <div class="about-services-icon">
        <?php echo wp_get_attachment_image($image_1, $size); ?>
      </div>
      <div class="services-list-content">
        <div class="services-list-title">
          <?php the_title(); ?>
        </div>
        <?php the_content(); ?>
      </div>

    </div>

  </div><!-- end .site-content -->
  <?php endwhile; //end of the loop. ?>
  <?php wp_reset_query(); // resets the altered query back to the original ?>
</section> <!-- end .services -->


<?php get_footer(); ?>