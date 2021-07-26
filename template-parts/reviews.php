<?php $array_reviews = carbon_get_the_post_meta('tech_complex_reviews');
$main = '';
if(is_home() || is_front_page()) {
		$array_reviews = carbon_get_theme_option('tech_complex_reviews_main');
		$main = '_main';
}
	if($array_reviews):

?>
<div class="container review-cont">
	<p class="clients__reviews-heading  section-heading">Отзывы наших клиентов:</p>
	<div itemscope itemtype="http://schema.org/Organization" class="reviews-slider">
		<?php foreach($array_reviews as $review):?>
			<div property="review" typeof="Review" class="reviews-slider__item">
				<div property="reviewRating" class="reviews-slider__item-rating">
					<?php 
					$rating = $review['tech_complex_reviews_rating' . $main];
					$i = 1;
					while($i < 6):?>
						<?php if($i <= (int)$rating):?>
							<div class="reviews-slider__item-star" style="background-image: url(<?php echo get_template_directory_uri();?>/img/icons/star.svg);"></div>
						<?php else:?>
							<div class="reviews-slider__item-star" style="background-image: url(<?php echo get_template_directory_uri();?>/img/icons/star-white.svg);"></div>
						<?php endif; $i++;?>
					<?php endwhile;?>
				</div>
				<div property="description" class="reviews-slider__item-text">
					<?php echo $review['tech_complex_reviews_text' .$main];?>
				</div>
				<div property="author" class="reviews-slider__item-name"><?php echo $review['tech_complex_reviews_name'.$main];?></div>
			</div>
		<?php endforeach;?>
	</div>
</div>
<?php endif;?>