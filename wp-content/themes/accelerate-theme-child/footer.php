<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
?>

    </div><!-- #main -->


    <footer id="colophon" class="site-footer" role="contentinfo">
      <div class="site-info">
        <div class="site-description">
        <p><?php bloginfo('description'); ?></p>
        <p>&copy; <?php bloginfo('title'); ?>, LLC
        </div>
      </div><!-- .site-info -->
      <div class="menu-social nav-container" class="menu">
              <?php wp_nav_menu( array( 'theme_location' => 'social-media' ) ); ?>
      </div>
    </footer><!-- #colophon -->
  </div><!-- #page -->

  <?php wp_footer(); ?>
</body>
</html>