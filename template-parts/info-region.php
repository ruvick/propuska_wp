<section class="info">
	<div class="info__inner container">
		<div class="info__text">
			<?php
			global $title;
			if ($title == 0) :
			?>
				<p class="info__text-heading">Пропуск в Москву для иностранных грузовиков</p>
			<?php else : ?>
				<h2 class="info__text-heading">Пропуск в Москву для иностранных грузовиков</h2>
			<?php endif; ?>
			<div class="info__text-desc">официально,<br />без ожидания,<br />с гарантией получения</div>
		</div>
		<div class="info__banner">
			<ul class="info__banner-container">
				<li class="info__banner-item">
					Оформление пропусков на МКАД для грузовиков из <? echo carbon_get_post_meta(get_the_ID(), "region_title_2"); ?> требуется для беспрепятственного въезда в дневное и ночное время суток.
				</li>
				<li class="info__banner-item">
					Компания "Пропуска МКАД-ТТК-СК" предоставляет услуги иностранным перевозчикам, в том числе из <? echo carbon_get_post_meta(get_the_ID(), "region_title_2"); ?>, кому требуется оформление
					разрешительного пропуска на провоз груза по территории Москвы. Деятельность осуществляется в соответствие с Постановление Правительства
					Москвы от 22.08.2011 №379-ПП. Срок ожидания пропуска составит 8 рабочих часов после регистрации заявления на официальном портале.
				</li>
				<li class="info__banner-item">
					Поддержка для иностранных перевозчиков осуществляется по адекватным ценам. Мы предоставляем гибкие условия сострудничества.
					Вы платите только после оказания услуги. Все вопросы по оформлению пропусков мы полностью берем на себя.
				</li>
			</ul>
		</div>
	</div>
	<div class="info__cars">
		<img src="<?php bloginfo("template_url"); ?>/img/kamaz-big.png" alt="kamaz big image" class="info__cars-item info__cars-item-big">
		<img src="<?php bloginfo("template_url"); ?>/img/kamaz-smaller.png" alt="kamaz smaller image" class="info__cars-item info__cars-item-small">
	</div>
</section> <!-- /.info -->