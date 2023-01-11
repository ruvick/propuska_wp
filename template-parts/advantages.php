<section class="advantages">
		<div class="advantages__inner container">
		<?php 
			global $title;
	        if($title == 0):
		      ?>
			<p class="advantages__heading  section-heading">Преимущества работы с нами</p>
		      <?php else:?>
			<h2 class="advantages__heading  section-heading">Преимущества работы с нами</h2>
		    <?php endif;?>
			
			<div class="advantages__list">
				<ul class="advantages__list-container">
					
					<li class="advantages__list-item">
						<div class="advantages__list-item-inner">
							<div class="advantages__list-media">
								<img src="<?php bloginfo("template_url");?>/img/icons/Preim_icon_1.svg" class="advantages__list-media-icon">
							</div>
							<div class="advantages__list-text">Работаем<br/> без предоплаты</div>
						</div>
					</li>
					
					<li class="advantages__list-item">
						<div class="advantages__list-item-inner">
							<div class="advantages__list-media">
								<img src="<?php bloginfo("template_url");?>/img/icons/Preim_icon_2.svg" class="advantages__list-media-icon">
							</div>
							<div class="advantages__list-text">Оформляем<br/> пропуск за 1 день</div>
						</div>
					</li>
					
					<li class="advantages__list-item">
						<div class="advantages__list-item-inner">
							<div class="advantages__list-media">
								<img src="<?php bloginfo("template_url");?>/img/icons/Preim_icon_3.svg" class="advantages__list-media-icon">
							</div>
							<div class="advantages__list-text">Официально в департаменте транспорта</div>
						</div>
					</li>
					
					<li class="advantages__list-item">
						<div class="advantages__list-item-inner">
							<div class="advantages__list-media">
								<img src="<?php bloginfo("template_url");?>/img/icons/Preim_icon_4.svg" class="advantages__list-media-icon">
							</div>
							<div class="advantages__list-text">Круглосуточное сопровождение</div>
						</div>
					</li>
					
					<li class="advantages__list-item">
						<div class="advantages__list-item-inner">
							<div class="advantages__list-media">
								<img src="<?php bloginfo("template_url");?>/img/icons/Preim_icon_5.svg" class="advantages__list-media-icon">
							</div>
							<div class="advantages__list-text">Выгодные условия сотрудничества</div>
						</div>
					</li>

					<li class="advantages__list-item">
						<div class="advantages__list-item-inner">
							<div class="advantages__list-media">
								<img src="<?php bloginfo("template_url");?>/img/icons/Preim_icon_6.svg" class="advantages__list-media-icon">
							</div>
							<div class="advantages__list-text">Бесплатный<br/> пропуск на 20 дней</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section> <!-- /.advantages -->