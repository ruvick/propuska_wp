<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-test
 */
$class_article_post = '';
if (is_category()) {
	$class_article_post = 'additional-service__item additional-service__item-region';
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class($class_article_post); ?>>

	<header class="entry-header">
		<div class="entry-card-img">
			<img src="<?php $imgTm = get_the_post_thumbnail_url(get_the_ID(), "tominiatyre");
								echo empty($imgTm) ? get_bloginfo("template_url") . "/img/no-photo.jpg" : $imgTm; ?>" alt="">
		</div>
		<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title docs__heading  section-heading">', '</h1>');
		else :
			the_title('<h2 class="entry-title docs__heading additional-service__item-title docs__list-heading"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()) :
		?>
			<div class="entry-meta">
				<?php
				// tst_posted_on();
				// tst_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php get_the_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		if (is_single()) :
			the_content(sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'tst'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			));
		else :
			the_excerpt();
		?>
			<a href="<?php echo get_the_permalink(); ?>" class="services__carts-about-link link-to-single">Подробнее</a>
		<?php
		endif;

		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'tst'),
			'after'  => '</div>',
		));
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //entry_footer(); 
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->