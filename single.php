<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
	<?php get_template_part('template-parts/intro-nav')?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main container allStyleText" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'template-parts/content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				// comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'screen_reader_text' => 'Навигация по блоку',
				'next_text' => 
					'<span class="post-title">%title</span> <span class="meta-nav" aria-hidden="true">&#8594;</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">&#8592;</span> ' .
					'<span class="post-title">%title</span>',
			) );

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
