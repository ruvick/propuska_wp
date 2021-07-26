<section class="checking">
		<div class="checking__inner  container textOformlenie">
			<div class="checking__info">
				<?php 
				global $post;
				if(is_page(array(5,7,9)) && !empty(carbon_get_post_meta($post->ID, 'tech_check_pass'))):?>
					<!-- <h2 class="checking__info-heading  section-heading"><?php echo carbon_get_post_meta($post->ID, 'tech_check_pass')?></h2> -->
				<?php else:?>
					<!-- <h2 class="checking__info-heading  section-heading">Проверить пропуск<br/> в Москву на грузовой транспорт</h2> -->
				<?php endif;?>
			<?php 
			global $title;
	        if($title == 0):
			      ?>
				<p class="checking__info-heading  section-heading">Повышение эко-класса</p>
			      <?php else:?>
				<h2 class="checking__info-heading  section-heading">Повышение эко-класса</h2>
			    <?php endif;?>
				<p>Для грузового автотранспорта установлен стандарт Euro-3 для передвижения по Москве в пределах ТТК. Для передвижения по МКАД действует стандарт Euro-2. Данное правило действует с 1 сентября 2013 года.</p>
				<p>Для получения разрешения на передвижение по данным зонам требуется наличие соответствующего экологического класса. И если он отсутствует, то необходимо его повышение.</p>
				<p>Наша компания помогает с повышением экологического класса. Срок выполнения не превышает одной рабочей недели.</p>
			</div>
			<div class="checking__form boxshadowuni">

				<form class="checking__form-container form__container">
					<p class="checking__form-heading">Оставьте заявку на повышение эко-класса</p>
					
					<div class="form__fields" id = "checform" >
						<input type="text" name="inv_number" class="form__fields-item uniFormName" placeholder="Имя" required autocomplete="off">
						<input type="tel" name="phone_number" class="form__fields-item mascedtel uniFormTel" placeholder="Ваш номер телефона" required autocomplete="off">
					</div>
					<div class="form__action">
						<div class="checking__form-btn form__action-btn action-btn uniSendBtn" data-formid = "checform" data-mailmsg = "Форма - Повышение эко-класса">Оставить заявку</div>
					</div>
				</form>
			</div>
		</div>
	</section> <!-- /.checking -->
	<section class="povyshenie-text textOformlenie">
		<div class="container">
			<p>Законодательством России установлены конкретные ограничения к экологическим классам автомобилей. Они определяют разрешенный уровень токсичных выбросов. Несоблюдение требований грозит автовладельцам штрафными санкциями и, кроме того, потерей прибыли из-за вынужденного простоя техники.</p>
			<p>В компании "Пропуск на МКАД" клиентам предлагают услуги, гарантирующие устранение конфликтных ситуаций регулирующими органами и снижение сумм выплат по вступившему в силу налогу. У нас в Москве вы сможете в максимально короткие сроки подтвердить или повысить экологический класс грузового автомобиля. Сроки выполнения работ зависят от сложности поставленной задачи и варьируются в пределах от 1 дня до 1 месяца. Стоимость услуг - от 60 до 150 тыс. рублей</p>
		</div>
	</section>