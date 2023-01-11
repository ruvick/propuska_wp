<?php
/*
Template Name: Дополнительные услуги
*/
?>

<?php get_header();?>

<?php $title = 1; get_template_part('/template-parts/intro-page-middle');?>

<div class="container">
	<?php 
		global $post;
		$args = array(
			'posts_per_page' => -1,
			'post_type' => 'page',
			'post_parent' => $post->ID,
		);
		$query = new WP_Query($args);

if($query->have_posts()) :?>
	<ul class="services__carts-container additional-service">
		<?php while($query->have_posts()):
			$query->the_post();
			?>
		<li class="services__carts-item">
			<div class="services__carts-inner">
				<a href="<?php echo get_the_permalink();?>"><h3 class="services__carts-heading"><?php the_title();?></h3></a>
				<a href="<?php echo get_the_permalink();?>">
					<i class="services__carts-img" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full');?>);"></i>
				</a>
				<?php 
				$is_price = '';
				if(empty(carbon_get_the_post_meta('tech_additional_price'))):
					$is_price = 'opacity-0';
				endif;?>
<!-- 				
				<div class="services__carts-price <?php echo $is_price?>">
					<div class="services__carts-price-real"><?php echo carbon_get_the_post_meta('tech_additional_price')?> ₽</div>
				</div> -->
			
				<div class="services__carts-about">
					<div class="services__carts-about-text"><?php the_excerpt();?></div>
				</div>
				<div class="services__carts-action">
					<a href="<?php echo get_the_permalink();?>" class="services__carts-action-btn action-btn ">Подробнее</a>
				</div>
			</div>
		</li>
			<?php endwhile; wp_reset_postdata();?>
	</ul>
<?php endif;?>
</div>

<?php $title = 1; get_template_part('/template-parts/map');?>

<?php get_footer();?>