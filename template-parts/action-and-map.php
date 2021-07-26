<section class="action">
	<div class = "zonAction container">	
		<div class = "mapInAction">
		<?php
			$zoneName = carbon_get_post_meta($post->ID, 'tech_zon_name');
			  $exclElem = "noMKAD";
			if($zoneName === "ТТК")  $exclElem = "noTTK";
			if($zoneName === "СК")  $exclElem = "noSK";
		?>
			<?php if($zoneName === "МКАД"):?>
				<i class="services__carts-img" style="background-image: url(<?php bloginfo("template_url");?>/img/carts/1.jpg);"></i>
				<div class="services__carts-price">
					<div class="services__carts-price-old">20 000 &#x20BD;</i></div>
					<div class="services__carts-price-real">12 000 &#x20BD;</i></div>
				</div>
			<?php endif; ?>
			
			<?php if($zoneName === "ТТК"):?>
				<i class="services__carts-img" style="background-image: url(<?php bloginfo("template_url");?>/img/carts/2.jpg);"></i>
				<div class="services__carts-price">
					<div class="services__carts-price-old">20 000 &#x20BD;</i></div>
					<div class="services__carts-price-real">12 000 &#x20BD;</i></div>
				</div>
			<?php endif; ?>
			
			<?php if($zoneName === "СК"):?>
				<i class="services__carts-img" style="background-image: url(<?php bloginfo("template_url");?>/img/carts/3.jpg);"></i>
				<div class="services__carts-price">
					<div class="services__carts-price-old">20 000 &#x20BD;</i></div>
					<div class="services__carts-price-real">12 000 &#x20BD;</i></div>
				</div>
			<?php endif; ?>
		</div>
		
		<div class="action__inner ">
			<div class="action__main">
				<h2 class="action__main-heading section-heading">Оформите пропуск на <?php echo carbon_get_post_meta($post->ID, 'tech_zon_name'); ?> и получите скидку до 8000 руб</h2>
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
				<form action="" class="feedback__form-container" id = "actionform" >
					<input type="text" name="name" class="feedback__form-item feedback__form-item-field form__fields-item uniFormName" autocomplete="off" required placeholder="Напишите ваше имя">
					<input type="text" name="phone_number" class="feedback__form-item feedback__form-item-field form__fields-item mascedtel uniFormTel" autocomplete="off" required placeholder="Введите номер телефона">
					<div class="feedback__form-item feedback__form-item-btn action-btn uniSendBtn"   data-formid = "actionform" data-mailmsg = "Форма - в подвале">Получить официальный пропуск</div>
				</form>
			</div>
		</div>
	</div>
</section> <!-- /.action -->