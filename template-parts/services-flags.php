<section class="services">
	<div class="services__inner container">
		<div class="services__carts">
			<ul class="services__carts-container">
				<?php
				$exclElem = "";
				$zoneName = carbon_get_post_meta($post->ID, 'tech_zon_name');
				if ($zoneName === "МКАД")  $exclElem = "noMKAD";
				if ($zoneName === "ТТК")  $exclElem = "noTTK";
				if ($zoneName === "СК")  $exclElem = "noSK";
				if ($zoneName === "ДК")  $exclElem = "noDK";
				?>
				<?php if ($exclElem != "noMKAD") : ?>
					<li class="services__carts-item">
						<div class="services__carts-inner">
							<p class="services__carts-heading">Пропуск на <br />МКАД</p>
							<i class="services__carts-img" style="background-image: url(<?php bloginfo("template_url"); ?>/img/carts/1.jpg);"></i>
							
							<!-- <div class="services__carts-price">
								<div class="services__carts-price-old">20 000 &#x20BD;</i></div>
								<div class="services__carts-price-real"> 12 000 &#x20BD;</i></div>
							</div>
							 -->
							<div class="services__carts-about">
								<a href="<?the_permalink(5)?>" class="services__carts-about-link">Подробнее</a>
								<div class="services__carts-about-text">Позволяет грузовому транспорту с разрешенной массой более 12 т свободно передвигаться в зоне от МКАД до ТТК</div>
							</div>
							<div class="services__carts-action">
								<a href="#modal_feedback" class="services__carts-action-btn action-btn js-modal-open">Получить пропуск</a>
							</div>
						</div>
					</li>
				<?php endif; ?>

				<?php if ($exclElem != "noTTK") : ?>
					<li class="services__carts-item">
						<div class="services__carts-inner">
							<p class="services__carts-heading">Пропуск на <br />ТТК</p>
							<i class="services__carts-img" style="background-image: url(<?php bloginfo("template_url"); ?>/img/carts/2.jpg);"></i>
							<!-- <div class="services__carts-price">
								<div class="services__carts-price-old">20 000 &#x20BD;</i></div>
								<div class="services__carts-price-real"> 12 000 &#x20BD;</i></div>
							</div> -->
							<div class="services__carts-about">
								<a href="<?the_permalink(7)?>" class="services__carts-about-link">Подробнее</a>
								<div class="services__carts-about-text">Дает право грузовым автомобилям с разрешенной массой от 1 тонны свободно передвигаться в зоне ТТК (без заезда на СК)</div>
							</div>
							<div class="services__carts-action">
								<a href="#modal_feedback" class="services__carts-action-btn action-btn js-modal-open">Получить пропуск</a>
							</div>
						</div>
					</li>
				<?php endif; ?>

				<?php if ($exclElem != "noSK") : ?>
					<li class="services__carts-item">
						<div class="services__carts-inner">
							<p class="services__carts-heading">Пропуск на <br />СК</p>
							<i class="services__carts-img" style="background-image: url(<?php bloginfo("template_url"); ?>/img/carts/3.jpg);"></i>
							<!-- <div class="services__carts-price">
								<div class="services__carts-price-old">20 000 &#x20BD;</i></div>
								<div class="services__carts-price-real"> 12 000 &#x20BD;</i></div>
							</div> -->
							<div class="services__carts-about">
								<a href="<?the_permalink(9)?>" class="services__carts-about-link">Подробнее</a>
								<div class="services__carts-about-text">Грузовой пропуск в зоне СК дает право передвижения по всей территории Москвы без ограничений</div>
							</div>
							<div class="services__carts-action">
								<a href="#modal_feedback" class="services__carts-action-btn action-btn js-modal-open">Получить пропуск</a>
							</div>
						</div>
					</li>
				<?php endif; ?>

				<?php if ($exclElem != "noDK") : ?>
					<li class="services__carts-item">
						<div class="services__carts-inner">
							<p class="services__carts-heading">Диагностическая<br /> карта</p>
							<i class="services__carts-img services__carts-img--contain" style="background-image: url(<?php bloginfo("template_url"); ?>/img/carts/diagnosticheskaia_karta.png);"></i>
							<!-- <div class="services__carts-price">
								<div class="services__carts-price-old">1500 &#x20BD;</i></div>
								<div class="services__carts-price-real">1000 &#x20BD;</i></div>
							</div> -->
							<div class="services__carts-about">
								<!-- <a href="#" class="services__carts-about-link">Подробнее</a> -->
								<div class="services__carts-about-text">Диагностическая права является подтверждением пригодности грузового автотранспорта для передвижения по дорогам на территории РФ</div>
							</div>
							<div class="services__carts-action">
								<a href="#modal_feedback" class="services__carts-action-btn action-btn js-modal-open">Подробнее</a>
							</div>
						</div>
					</li>
				<?php endif; ?>

			</ul>
		</div>

		<div class="services__sub">
			<p class="services__sub-heading section-heading">Пропуска для иностранных автомобилей</p>

			<div class="services__sub-list">
				<ul class="services__sub-list-container">
					<?php
					$posts = get_posts(array(
						'numberposts' => -1,
						'category'    => 3,
						'orderby'     => 'date',
						'order'       => 'ASC',
						'post_type'   => 'post',
						'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					));

					// $result = wp_get_recent_posts($args);

					foreach ($posts as $post) {
					?>
						<li class="services__sub-list-item services__sub-list-item-flags">
							<a href="<?php echo get_permalink(); ?>" class="services__sub-list-link services__sub-list-link-flags"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), "tominiatyre"); ?> " alt=""></a>
						</li>
					<?php
					}
					?>
				</ul>
			</div>

		</div>
	</div>
</section> <!-- /.services -->