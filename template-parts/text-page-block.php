<section class="text-page-block">
	<div class="container">
		<div class="text-page-block__content">
			<?php 
			global $title;
	        if($title == 0):
		      ?>
			<p class="clients__heading section-heading">Переоборудование грузовых автомобилей в спецтранспорт</p>
			      <?php else:?>
			<h2 class="clients__heading section-heading">Переоборудование грузовых автомобилей в спецтранспорт</h2>
		    <?php endif;?>
			<p>Переоборудование грузового транспорта в спецтранспорт дает большое преимущество при передвижении в Москве:</p>
			<ul class="list-style-star">
				<li>Проезд по третьей полосе;</li>
				<li>Возможность проезда на территорию Москвы без пропуска;</li>
				<li>Бесплатная парковка в центре Мосвквы в течение 1 часа.</li>
			</ul>
			<div class="text-page-block__content-info">
				Данная услуга особенно актуальна для грузовых автомобилей без Еврокласса
			</div>
		</div>
		<div class="text-page-block__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/wagon.jpg);"></div>
	</div>
</section>