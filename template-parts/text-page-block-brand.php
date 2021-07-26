<section class="text-page-block">
	<div class="container">
		<div class="text-page-block__content">
			<?php 
			global $title;
      if($title == 0):
      ?>
      <p class="clients__heading section-heading">Пропуска на МКАД для грузовиков <?php the_title();?></p>
      <?php else:?>
      	<h1 class="clients__heading section-heading">Пропуска на МКАД для грузовиков <?php the_title();?></h1>
      <?php endif;?>
			<p>Наша компания оформляет <a href="<?php echo get_permalink(5);?>">пропуска на МКАД</a> для грузовых автомобилей <?php the_title();?>.</p>
			<p>Оказываем услуги для всех типов ТС (от самосвалов до рефрижераторов и тягачей)</p>
			<p>Опыт работы с 2013 года. За это время было выдано более 10000 пропусков.</p>
			<p>Обращайтесь. Наш сервис - это быстро, качественно и выгодно.</p>
		</div>
		<div class="text-page-brand-block__photo" style="background-image: url(<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('tech_logo_brand'), 'full')[0];?>"></div>
	</div>
</section>