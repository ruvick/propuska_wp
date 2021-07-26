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
					<p class="intro__info-text-heading"><?php the_title();?></p>
		      <?php else:?>
					<h1 class="intro__info-text-heading"><?php the_title();?></h1>
		    <?php endif;?>
					<div class="intro__info-text-desc">для грузовых автомобилей</div>
				</div>
				<div class="intro__info-form">
					<div class="form">
						<div class="form__info">
							<p class="form__info-caption section-heading">Бесплатно</p>
							<div class="form__info-desc">
								временный пропуск на 14 дней
								<div class="form__info-desc--small">до конца акции</div>
							</div>
						</div>
						<div class="form__timer js-timer-cnt">
							<div class="form__timer-item">
								<div class="form__timer-number js-days">2</div>
								<div class="form__timer-text">дня</div>
							</div>
							<div class="form__timer-item">
								<div class="form__timer-number js-hours">11</div>
								<div class="form__timer-text">часов</div>
							</div>
							<div class="form__timer-item">
								<div class="form__timer-number js-minutes">48</div>
								<div class="form__timer-text">минут</div>
							</div>
							<div class="form__timer-item">
								<div class="form__timer-number js-seconds">53</div>
								<div class="form__timer-text">секунд</div>
							</div>
						</div>
						<form action="" class="form__container">
							<div class="form__fields">
								<input type="text" name="name" class="form__fields-item" placeholder="Напишите ваше имя" required autocomplete="off">
								<input type="tel" name="phone_number" class="form__fields-item mascedtel" placeholder="Введите номер телефона" required autocomplete="off">
							</div>
							<div class="form__action">
								<button class="form__action-btn action-btn">Получить бесплатно</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="intro__utp">
			<section class="utp">
				<div class="utp__inner  container">
					<div class="utp__list">
						<ul class="utp__list-container">
							<li class="utp__list-item">
								<div class="utp__list-media"><img src="<?php bloginfo("template_url");?>/img/icons/mkad_icon_1.svg" alt="svg icon" class="utp__list-media-img"></div>
								<div class="utp__list-text">Оплата по факту получения</div>
							</li>
							<li class="utp__list-item">
								<div class="utp__list-media"><img src="<?php bloginfo("template_url");?>/img/icons/mkad_icon_2.svg" alt="svg icon" class="utp__list-media-img"></div>
								<div class="utp__list-text">100% гарантия оформления</div>
							</li>
							<li class="utp__list-item">
								<div class="utp__list-media"><img src="<?php bloginfo("template_url");?>/img/icons/mkad_icon_3.svg" alt="svg icon" class="utp__list-media-img"></div>
								<div class="utp__list-text">При поддержке департамента транспорта г. Москвы</div>
							</li>
							<li class="utp__list-item">
								<div class="utp__list-media"><img src="<?php bloginfo("template_url");?>/img/icons/mkad_icon_4.svg" alt="svg icon" class="utp__list-media-img"></div>
								<div class="utp__list-text">Оформление<br/> за 1 ДЕНЬ</div>
							</li>
						</ul>
					</div>
				</div>
			</section> <!-- /.utp -->
		</div>
	</section> <!-- /.intro -->