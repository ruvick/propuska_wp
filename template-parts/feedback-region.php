	<section class="feedback">
		<div class="feedback__inner  container">
			<?php 
			global $title;
	        if($title == 0):
		      ?>
			<p class="feedback__heading section-heading">Оставьте заявку прямо сейчас и получите официальный пропуск за 1 день</p>
		      <?php else:?>
			<h2 class="feedback__heading section-heading">Оставьте заявку прямо сейчас и получите официальный пропуск за 1 день</h2>
		    <?php endif;?>
			<div class="feedback__form">
				<form action="" class="feedback__form-container" id = "feedbackform">
					<input type="text" name="name" class="feedback__form-item feedback__form-item-field form__fields-item uniFormName" autocomplete="off" required placeholder="Напишите ваше имя">
					<input type="text" name="phone_number" class="feedback__form-item feedback__form-item-field form__fields-item mascedtel uniFormTel" autocomplete="off" required placeholder="Введите номер телефона">
					<div class="feedback__form-item feedback__form-item-btn action-btn uniSendBtn"  data-formid = "feedbackform" data-mailmsg = "Форма - этапы оформления">Получить официальный пропуск</div>
				</form>
			</div>

			<div class="feedback__steps">
				<p class="feedback__steps-heading">Этапы оформления:</p>
				<div class="feedback__steps-list">
					<ul class="feedback__steps-list-container">
						<li class="feedback__steps-list-item">
							<div class="feedback__steps-list-item-inner">
								<span class="feedback__steps-list-number">1</span>
								<div class="feedback__steps-list-text">Оформляете заявку</div>
							</div>
						</li>
						<li class="feedback__steps-list-item">
							<div class="feedback__steps-list-item-inner">
								<span class="feedback__steps-list-number">2</span>
								<div class="feedback__steps-list-text">Присылаете документы</div>
							</div>
						</li>
						<li class="feedback__steps-list-item">
							<div class="feedback__steps-list-item-inner">
								<span class="feedback__steps-list-number">3</span>
								<div class="feedback__steps-list-text">Получаете пропуск</div>
							</div>
						</li>
						<li class="feedback__steps-list-item">
							<div class="feedback__steps-list-item-inner">
								<span class="feedback__steps-list-number">4</span>
								<div class="feedback__steps-list-text">Оплачиваете</div>
							</div>
						</li>
					</ul>
					<div class="feedback__steps-list-desc">Вся процедура занимает не более 1 дня</div>
				</div>
			</div>
		</div>
	</section> <!-- /.feedback -->