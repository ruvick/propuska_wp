<section class="clients">
		<div class="clients__inner  container">
			<?php 
			global $title;
	        if($title == 0):
		      ?>
			<p class="clients__heading section-heading">Клиенты, которые заключили с нами контракт на подготовку постоянных пропусков:</p>
		      <?php else:?>
			<h2 class="clients__heading section-heading">Клиенты, которые заключили с нами контракт на подготовку постоянных пропусков:</h2>
		    <?php endif;?>
			<ul class="clients__logos js-clients-cnt">
				<li class="clients__logos-item">
					<div class="clients__logos-item-inner">
						<img src="<?php bloginfo("template_url");?>/img/clients/4-1.png" alt="4-1.png" class="clients__logos-item-img">
					</div>
				</li>
				<li class="clients__logos-item">
					<div class="clients__logos-item-inner">
						<img src="<?php bloginfo("template_url");?>/img/clients/logo-dpd.png" alt="logo-dpd.png" class="clients__logos-item-img">
					</div>
				</li>
				<li class="clients__logos-item">
					<div class="clients__logos-item-inner">
						<img src="<?php bloginfo("template_url");?>/img/clients/logo-pickpoint.svg" alt="logo-pickpoint.svg" class="clients__logos-item-img">
					</div>
				</li>
				<li class="clients__logos-item">
					<div class="clients__logos-item-inner">
						<img src="<?php bloginfo("template_url");?>/img/clients/viber image.png" alt="viber image.png" class="clients__logos-item-img">
					</div>
				</li>
				<li class="clients__logos-item">
					<div class="clients__logos-item-inner">
						<img src="<?php bloginfo("template_url");?>/img/clients/pek.png" alt="pek.png" class="clients__logos-item-img">
					</div>
				</li>
				<li class="clients__logos-item">
					<div class="clients__logos-item-inner">
						<img src="<?php bloginfo("template_url");?>/img/clients/4-1.png" alt="4-1.png" class="clients__logos-item-img">
					</div>
				</li>
				<li class="clients__logos-item">
					<div class="clients__logos-item-inner">
						<img src="<?php bloginfo("template_url");?>/img/clients/logo-dpd.png" alt="logo-dpd.png" class="clients__logos-item-img">
					</div>
				</li>
				<li class="clients__logos-item">
					<div class="clients__logos-item-inner">
						<img src="<?php bloginfo("template_url");?>/img/clients/logo-pickpoint.svg" alt="logo-pickpoint.svg" class="clients__logos-item-img">
					</div>
				</li>
				<li class="clients__logos-item">
					<div class="clients__logos-item-inner">
						<img src="<?php bloginfo("template_url");?>/img/clients/viber image.png" alt="viber image.png" class="clients__logos-item-img">
					</div>
				</li>
				<li class="clients__logos-item">
					<div class="clients__logos-item-inner">
						<img src="<?php bloginfo("template_url");?>/img/clients/pek.png" alt="pek.png" class="clients__logos-item-img">
					</div>
				</li>
			</ul>

			<div class="clients__reviews">
			<?php 
	        if($title == 0):
		      ?>
				<p class="clients__reviews-heading  section-heading">Отзывы наших клиентов:</p>
		      <?php else:?>
				<p class="clients__reviews-heading  section-heading">Отзывы наших клиентов:</p>
		    <?php endif;?>
				<?php $array_reviews = carbon_get_the_post_meta('tech_complex_reviews');
				$main = '';
				if(is_home() || is_front_page()) {
						$array_reviews = carbon_get_theme_option('tech_complex_reviews_main');
						$main = '_main';
				}
					if($array_reviews):
				
				?>
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
				<?php endif;?>
				<!-- <div class="clients__reviews-list">
					<ul class="clients__reviews-list-container">
						<li class="clients__reviews-list-item">
							<iframe width="450" height="249" src="https://www.youtube.com/embed/djj1c3xFOnU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</li>
						<li class="clients__reviews-list-item">
							<iframe width="450" height="249" src="https://www.youtube.com/embed/3Tbmo6inXf8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</li>
						<li class="clients__reviews-list-item">
							<iframe width="450" height="249" src="https://www.youtube.com/embed/ZoT44TWWbwA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</li>
						
						<li class="clients__reviews-list-item">
							<iframe width="450" height="249" src="https://www.youtube.com/embed/jfdWp-YfyeE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</li>
						
						<li class="clients__reviews-list-item">
							<iframe width="450" height="249" src="https://www.youtube.com/embed/FUVUoAQs0Yw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</li>
						
						<li class="clients__reviews-list-item">
							<iframe width="450" height="249" src="https://www.youtube.com/embed/JQbblAxnwk4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</li>
					</ul>
				</div> -->
			</div>
		</div>
	</section> <!-- /.clients -->