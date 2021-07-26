<?php

function is_current_post_start($brand_id) {
	global $post;
	$current_post_id = $post->ID;
	if($brand_id === $current_post_id) {
		echo '<div class="brands-item">';
	} else {
		echo '<a href="' . get_permalink($brand_id) . '" class="brands-item">';
	}
}
function is_current_post_end($brand_id) {
	global $post;
	$current_post_id = $post->ID;
	if($brand_id === $current_post_id) {
		echo '</div>';
	} else {
		echo '</a>';
	}
}
?>
<section class="brands">
	<div class="container">
		<?php 
			global $title;
	        if(!$title):
		      ?>
		<p class=" section-heading">Оформляем пропуска на МКАД на все бренды грузовых ТС</p>
		      <?php else:?>
		<p class=" section-heading">Оформляем пропуска на МКАД на все бренды грузовых ТС</p>
		    <?php endif;?>
		<div class="brands-wrapper">
			<?php is_current_post_start(258)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/gaz_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Газ</div>
			<?php is_current_post_end(258);?>
			<?php is_current_post_start(263)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/zil_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Зил</div>
			<?php is_current_post_end(263);?>
			<?php is_current_post_start(266)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/kamaz_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Камаз</div>
			<?php is_current_post_end(266);?>
			<?php is_current_post_start(269)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/maz_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">МАЗ</div>
			<?php is_current_post_end(269);?>
			<?php is_current_post_start(272)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/ural_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Урал</div>
			<?php is_current_post_end(272);?>
			<?php is_current_post_start(275)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/daewoo_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">DAEWOO</div>
			<?php is_current_post_end(275);?>
			<?php is_current_post_start(278)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/daf_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">DAF</div>
			<?php is_current_post_end(278);?>
			<?php is_current_post_start(281)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/ford_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">FORD</div>
			<?php is_current_post_end(281);?>
			<?php is_current_post_start(284)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/foton_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">FOTON</div>
			<?php is_current_post_end(284);?>
			<?php is_current_post_start(287)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/howo_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Howo</div>
			<?php is_current_post_end(287);?>
			<?php is_current_post_start(290)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/hino_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Hino</div>
			<?php is_current_post_end(290);?>
			<?php is_current_post_start(293)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/hyundai_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Hyunday</div>
			<?php is_current_post_end(293);?>
			<?php is_current_post_start(296)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/isuzu_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Isuzu</div>
			<?php is_current_post_end(296);?>
			<?php is_current_post_start(299)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/iveco_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Iveco</div>
			<?php is_current_post_end(299);?>
			<?php is_current_post_start(302)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/man_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Man</div>
			<?php is_current_post_end(302);?>
			<?php is_current_post_start(305)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/mersedes_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Mersedes</div>
			<?php is_current_post_end(305);?>
			<?php is_current_post_start(308)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/mitsubishi_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">MITSUBISHI</div>
			<?php is_current_post_end(308);?>
			<?php is_current_post_start(311)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/scania_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Scania</div>
			<?php is_current_post_end(311);?>
			<?php is_current_post_start(314)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/shaanxi_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Shaanxi</div>
			<?php is_current_post_end(314);?>
			<?php is_current_post_start(317)?>
				<div class="brands-item__img-wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/car/volvo_logo.jpg" alt="">
				</div>
				<div class="brands-item__title">Volvo</div>
			<?php is_current_post_end(317);?>
		</div>
	</div>
</section>