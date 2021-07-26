<section class="pereoborudovanie-doc">
	<div class="container">
		<div class="docs__list-item boxshadowuni">
			<?php 
			global $title;
	        if($title == 0):
		      ?>
			<p class="docs__list-heading">Список необходимых документов для подачи в ГИББД</p>
		      <?php else:?>
			<h3 class="docs__list-heading">Список необходимых документов для подачи в ГИББД</h3>
		    <?php endif;?>
			<div class="docs__list-content">
				<ul class="list">
					<li class="list__item">СТС</li>
					<li class="list__item">ПТС</li>
					<li class="list__item">Водительское удостоверение</li>
				</ul>
			</div>
		</div>
		<ul class="advantages__list-container">
			<?php 
	        if($title == 0):
		      ?>
			<p class="section-heading">Как происходит процесс подачи заявления на переоборудование</p>
		      <?php else:?>
			<h3 class="section-heading">Как происходит процесс подачи заявления на переоборудование</h3>
		    <?php endif;?>
			<li class="advantages__list-item">
				<div class="advantages__list-item-inner">
					<div class="advantages__list-media">
						<img src="<?php echo get_template_directory_uri();?>/img/icons/icon1.png" class="advantages__list-media-icon">
					</div>
					<div class="advantages__list-text">Вы высылайте список <br>необходимых документов</div>
				</div>
			</li>
			
			<li class="advantages__list-item">
				<div class="advantages__list-item-inner">
					<div class="advantages__list-media">
						<img src="<?php echo get_template_directory_uri();?>/img/icons/icon2.png" class="advantages__list-media-icon">
					</div>
					<div class="advantages__list-text">Документы проходят<br> первичную проверку</div>
				</div>
			</li>
			
			<li class="advantages__list-item">
				<div class="advantages__list-item-inner">
					<div class="advantages__list-media">
						<img src="<?php echo get_template_directory_uri();?>/img/icons/icon3.png" class="advantages__list-media-icon">
					</div>
					<div class="advantages__list-text">Согласовываем стоимость услуг</div>
				</div>
			</li>
			
			<li class="advantages__list-item">
				<div class="advantages__list-item-inner">
					<div class="advantages__list-media">
						<img src="<?php echo get_template_directory_uri();?>/img/icons/icon4.png" class="advantages__list-media-icon">
					</div>
					<div class="advantages__list-text">Вы проходите осмотр в ГИБДД</div>
				</div>
			</li>
			
			<li class="advantages__list-item">
				<div class="advantages__list-item-inner">
					<div class="advantages__list-media">
						<img src="<?php echo get_template_directory_uri();?>/img/icons/icon5.png" class="advantages__list-media-icon">
					</div>
					<div class="advantages__list-text">Оплачиваете услуги</div>
				</div>
			</li>

			<li class="advantages__list-item">
				<div class="advantages__list-item-inner">
					<div class="advantages__list-media">
						<img src="<?php echo get_template_directory_uri();?>/img/icons/icon6.png" class="advantages__list-media-icon">
					</div>
					<div class="advantages__list-text">В течение 21 дня получаете официальное заключение ГИБДД</div>
				</div>
			</li>
		</ul>
	</div>
</section>