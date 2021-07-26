<section class="text-page-block">
	<div class="container">
		<div class="text-page-block__content textOformlenie">
			<?php 
			global $title;
      if($title == 0):
      ?>
			<p class="clients__heading section-heading">Страхование грузовых автомобилей ОСАГО</p>
      <?php else:?>
      	<h2 class="clients__heading section-heading">Страхование грузовых автомобилей ОСАГО</h2>
      <?php endif;?>
			<p>Получение страхового полиса для грузового автомобиля является ежегодной необходимостью каждого владельца ТС. Наша компания помогает в оперативном получении страховых полисов ОСАГО.</p>
			<p>Мы сотрудничаем с ведущими компаниями-страховщиками и можем предложить оптимальные условия в получении полиса.</p>
		</div>
		<div class="text-page-block__photo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/wagon.jpg);"></div>
	</div>
</section>