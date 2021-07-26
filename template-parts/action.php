<section class="action">
		<div class="action__inner container">
			<div class="action__main">

				<?php if(is_page(array(5,7,9)) && !empty(carbon_get_post_meta($post->ID, 'tech_need_pass'))):?>

			<?php 
			global $title;
	        if($title == 0):
		      ?>
					<p class="action__main-heading section-heading"><?php echo carbon_get_post_meta($post->ID, 'tech_need_pass')?></p>
		      <?php else:?>
					<h2 class="action__main-heading section-heading"><?php echo carbon_get_post_meta($post->ID, 'tech_need_pass')?></h2>
		    <?php endif;?>
				<?php else:?>

			<?php 
	        if($title == 0):
		      ?>
				<p class="action__main-heading section-heading">Нужен пропуск в Москву прямо сейчас? Оставьте заявку ниже и получите бесплатный пропуск на 10 дней за наш счет:</p>
		      <?php else:?>
				<h2 class="action__main-heading section-heading">Нужен пропуск в Москву прямо сейчас? Оставьте заявку ниже и получите бесплатный пропуск на 10 дней за наш счет:</h2>
		    <?php endif;?>
			<?php endif;?>
				<div class="action__main-timer">
					<p class="action__main-timer-heading">До конца акции</p>
					<div class="action__main-timer-self form__timer js-timer-cnt">
						<div class="action__main-timer-item form__timer-item">
							<div class="form__timer-number js-days">2</div>
							<div class="form__timer-text form__timer-text--white">дня</div>
						</div>
						<div class="action__main-timer-item form__timer-item">
							<div class="form__timer-number js-hours">11</div>
							<div class="form__timer-text form__timer-text--white">часов</div>
						</div>
						<div class="action__main-timer-item form__timer-item">
							<div class="form__timer-number js-minutes">48</div>
							<div class="form__timer-text form__timer-text--white">минут</div>
						</div>
						<div class="action__main-timer-item form__timer-item">
							<div class="form__timer-number js-seconds">53</div>
							<div class="form__timer-text form__timer-text--white">секунд</div>
						</div>
					</div>
				</div>
			</div>
			<div class="action__form">
				<form action="" class="feedback__form-container" id = "footerform" >
					<input type="text" name="name" class="feedback__form-item feedback__form-item-field form__fields-item uniFormName" autocomplete="off" required placeholder="Напишите ваше имя">
					<input type="text" name="phone_number" class="feedback__form-item feedback__form-item-field form__fields-item mascedtel uniFormTel" autocomplete="off" required placeholder="Введите номер телефона">
					<div class="feedback__form-item feedback__form-item-btn action-btn uniSendBtn"   data-formid = "footerform" data-mailmsg = "Форма - в подвале">Получить официальный пропуск</div>
				</form>
			</div>
		</div>
	</section> <!-- /.action -->