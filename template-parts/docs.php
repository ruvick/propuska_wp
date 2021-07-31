<section class="docs">
		<div class="docs__inner container">
			<?php 
			global $title;
	        if($title == 0):
		      ?>
			<p class="docs__heading  section-heading">Необходимый пакет документов</p>
		      <?php else:?>
			<h2 class="docs__heading  section-heading">Необходимый пакет документов</h2>
		    <?php endif;?>
			<div class="docs__list">
				<ul class="docs__list-container">
					<li class="docs__list-item">
						<p class="docs__list-heading">ДЛЯ ФИЗ ЛИЦ</p>
						<div class="docs__list-content">
							<ul class="list">
								<li class="list__item">ПТС</li>
								<li class="list__item">СТС</li>
								<li class="list__item">Диагностическая карта</li>
								<li class="list__item">Водительское удостоверение</li>
								<li class="list__item">Паспорт собственника</li>
							</ul>
						</div>
					</li>
					<li class="docs__list-item">
						<p class="docs__list-heading">ДЛЯ ИП</p>
						<div class="docs__list-content">
							<ul class="list">
								<li class="list__item">ПТС</li>
								<li class="list__item">СТС</li>
								<li class="list__item">Диагностическая карта</li>
								<li class="list__item">Водительское удостоверение</li>
								<li class="list__item">Карточка организации</li>
								<li class="list__item">Договор лизинга<br/> (если машина в лизинге)</li>
							</ul>
						</div>
					</li>
					<li class="docs__list-item">
						<p class="docs__list-heading">ДЛЯ ЮР. ЛИЦ</p>
						<div class="docs__list-content">
							<ul class="list">
								<li class="list__item">ПТС</li>
								<li class="list__item">СТС</li>
								<li class="list__item">Диагностическая карта</li>
								<li class="list__item">Водительское удостоверение</li>
								<li class="list__item">Карточка организации</li>
								<li class="list__item">Договор лизинга<br/> (если машина в лизинге)</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<?php if(is_page(array(5,7,9)) && !empty(carbon_get_post_meta($post->ID, 'tech_package_note'))):?>
				<div class="docs__desc"><?php echo carbon_get_post_meta($post->ID, 'tech_package_note')?></div>
			<?php else:?>
			<div class="docs__desc">Оформление пропусков для грузовиков в Москву требует предоставления полного пакета документов.<br/> Разрешение на въезд в пределы зон МКАД-ТТК-СК позволит избежать штрафов размером 5000 руб.</div>
		<?php endif;?>
		</div>
	</section> <!-- /.docs -->