	<section class="feedback strahovanie-feedback">
		<div class="feedback__inner  container">
			<?php 
			global $title;
	        if($title == 0):
		      ?>
			<p class="feedback__heading section-heading">Закажите страхование уже сейчас</p>
		      <?php else:?>
			<h2 class="feedback__heading section-heading">Закажите страхование уже сейчас</h2>
		    <?php endif;?>
			<div class="feedback__form">
				<form action="" class="feedback__form-container" id = "feedbackform">
					<input type="text" name="name" class="feedback__form-item feedback__form-item-field form__fields-item uniFormName" autocomplete="off" required placeholder="Напишите ваше имя">
					<input type="text" name="phone_number" class="feedback__form-item feedback__form-item-field form__fields-item mascedtel uniFormTel" autocomplete="off" required placeholder="Введите номер телефона">
					<div class="feedback__form-item feedback__form-item-btn action-btn uniSendBtn"  data-formid = "feedbackform" data-mailmsg = "Форма - Страхование грузовых автомобилей">Заказать страхование</div>
				</form>
			</div>
		</div>
	</section> <!-- /.feedback -->