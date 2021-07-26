<?php
$url_banner_bg = '';
global $post;
if(!empty(carbon_get_the_post_meta('tech_banner_bg'))) {
	$url_banner_bg = wp_get_attachment_image_src(carbon_get_post_meta($post->ID, 'tech_banner_bg'), 'full')[0];
} else {
	$url_banner_bg = get_template_directory_uri() . '/img/intro-bg.jpg';
}
?>

<section class="intro" style="background-image: url(<?php echo $url_banner_bg;?>);">
		<div class="intro__inner  container">
			<?php include("contact-in-h.php") ?>
			<div class="intro__navbar">
				<div class="intro__navbar-inner">
					<ul class="intro__navbar-container">
						<li class="intro__navbar-item"><a href="<?php echo get_permalink(5)?>" class="intro__navbar-link action-btn">Пропуск на мкад</a></li>
						<li class="intro__navbar-item"><a href="<?php echo get_permalink(7)?>" class="intro__navbar-link action-btn">Пропуск ттк</a></li>
						<li class="intro__navbar-item"><a href="<?php echo get_permalink(9)?>" class="intro__navbar-link action-btn">Пропуск ск</a></li>
						<li class="intro__navbar-item"><a href="<?php echo get_permalink(12)?>" class="intro__navbar-link action-btn active">Проверить пропуск по номеру</a></li>
						<li class="intro__navbar-item"><a href="<?php echo get_permalink(14)?>" class="intro__navbar-link action-btn">Проверить штрафы</a></li>
					</ul>
				</div>
			</div>
			<div class="intro__info">
				<div class="intro__info-text">
			<?php 
			global $title;
	        if($title == 0):
		      ?>
					<p class="intro__info-text-heading intro__info-text-heading-single">
							<?php 
								if (!is_category())
									if(is_page_template('page-brand.php')) {
										// echo 'Пропуска на МКАД для грузовиков ' . the_title();
									} else {
										the_title();
									} 
								else
									single_cat_title();
							?>
					</p>
		      <?php else:?>
					<h1 class="intro__info-text-heading intro__info-text-heading-single">
							<?php 
								if (!is_category())
									if(is_page_template('page-brand.php')) {
										// echo 'Пропуска на МКАД для грузовиков ' . the_title();
									} else {
										the_title();
									} 
								else
									single_cat_title();
							?>
					</h1>
		    <?php endif;?>
				</div>
				
			</div>
		</div>

	</section> <!-- /.intro -->