	<div class="modals">
		<div class="modals__wrapper">
			<div class="modals__item  modal_feedback" id="modal_feedback">
				<div class="feedback__wrapper">
					<div class="modals__close  js-modals-close">&times;</div>
					<div class="form">
						<div class="form__info">
			<?php 
			global $title;
	        if($title == 0):
		      ?>
				<p class="form__info-caption section-heading">Бесплатно</p>
		      <?php else:?>
				<h3 class="form__info-caption section-heading">Бесплатно</h3>
		    <?php endif;?>
							<div class="form__info-desc">
								временный пропуск на 10 дней
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
						<form action="" class="form__container" id = "probform">
							<div class="form__fields">
								<input type="text" name="name" class="form__fields-item uniFormName" placeholder="Напишите ваше имя" required autocomplete="off">
								<input type="tel" name="phone_number" class="form__fields-item mascedtel uniFormTel" placeholder="Введите номер телефона" required autocomplete="off">
							</div>
							<div class="form__action">
								<div class="form__action-btn action-btn uniSendBtn"  data-formid = "probform" data-mailmsg = "Форма - бесплатный пропуск на 14 дней">Заказать звонок</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="modals__bg  js-modals-close"></div>
		</div>
	</div> <!-- /.modals -->