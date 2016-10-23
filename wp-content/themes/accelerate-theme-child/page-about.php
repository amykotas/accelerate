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
  <div class="services-intro site-content">
    <!-- You can use custom fields for this title and this paragraph -->
    <?php while ( have_posts() ) : the_post();
      $intro_title = get_field('intro_title');
      $intro_text = get_field('intro_text');?>
    <h2><?php the_field('intro_title'); ?></h2>
    <p><?php the_field('intro_text'); ?></p>
    <?php endwhile; //end of the loop. ?>
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

    <?php endwhile; //end of the loop. ?>
    <?php wp_reset_query(); // resets the altered query back to the original ?>
  </div><!-- end .site-content -->
</section> <!-- end .services -->

<?php get_footer(); ?>