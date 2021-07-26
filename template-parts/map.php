<section class="map">
		<div class="map__self" id="map"></div>
		<div class="map__inner  container">
			<div class="map__cart">
				<div class="map__cart-box">
		
				<p class="map__cart-heading">Наш адрес:</p>
		  
					<div class="map__cart-text">г. Москва,<br/> <?php echo carbon_get_theme_option('main_adress'); ?></div>
				</div>
				<div class="map__cart-box">
			
					<p class="map__cart-heading">Наш контакты:</p>
		      
					<div class="map__cart-text">
						<a href="tel:<?php echo carbon_get_theme_option('main_phone_lnk'); ?>" class="map__cart-number"><?php echo carbon_get_theme_option('main_phone'); ?></a><br/>
						<a href="mailto:<?php echo carbon_get_theme_option('main_them_mail'); ?>" class="map__cart-mail"><?php echo carbon_get_theme_option('main_them_mail'); ?></a>
					</div>
				</div>

			</div>
		</div>
	</section> <!-- /.map -->