	<section class="about">
		<div class="about__inner  container">
			<?php 
			global $title;
	        if($title == 0):
		      ?>
			<p class="about__heading section-heading">О нашей компании</p>
		      <?php else:?>
			<h2 class="about__heading section-heading">О нашей компании</h2>
		    <?php endif;?>
			<div class="about__content">
				<?php if(is_page(array(5,7,9)) && !empty(carbon_get_post_meta($post->ID, 'tech_about_company'))):?>
					<?php echo carbon_get_post_meta($post->ID, 'tech_about_company')?>
				<?php else:?>
				<p class="about__content-text">Мы работаем с 2014 года и помогаем в оформлении пропусков для грузового транспорта официально в Департаменте Транспорта на территорию МКАД-ТТК-СК. Работа осуществляется в установленном законе порядке. Наша деятельность полностью регламентирована всеми нормативными актами и проводится с соблюдением всех требований.</p>
				<p class="about__content-heading">При оформлении пропусков в Москву официально вы получаете:</p>
				<div class="about__content-text about__content-text-list">
					<ul class="list">
						<li class="list__item">Официальное разрешение на въезд внутрь Москвы;</li>
						<li class="list__item">Оперативную помощь в оформлении;</li>
						<li class="list__item">Круглосуточную поддержку;</li>
						<li class="list__item">Круглосуточный мониторинг пропусков со своевременным оповещением по электронной почте;</li>
					</ul>
				</div>
			<?php endif;?>
			</div>
		</div>
	</section> <!-- /.about -->