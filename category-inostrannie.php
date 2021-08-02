<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-test
 */

get_header();
get_template_part('/template-parts/intro-page-middle-region');
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main-region site-main container">

    <?php if (have_posts()) : ?>
      <?php if (!is_category(2)) : ?>
      <?php endif; ?>
      <?php if (is_category()) : ?>
        <div class="additional-service is-category">
        <?php endif; ?>
      <?php
      /* Start the Loop */
      while (have_posts()) :
        the_post();

        /*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
        get_template_part('template-parts/content-region', get_post_type());

      endwhile;

      the_posts_navigation();

    else :

      get_template_part('template-parts/content-region', 'none');

    endif;
      ?>
      <?php if (is_category()) : ?>
        </div>
      <?php endif; ?>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
