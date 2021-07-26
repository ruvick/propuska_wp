</div>
	<footer class="footer">
		<div class="footer__inner container">
			<div class="footer__boxes">
				<div class="footer__boxes-item footer__boxes-logo">
					<span class="footer__boxes-logo-caption header__logo-caption">Пропуска МКАД ТТК СК</span>
					<span class="footer__boxes-logo-info header__logo-info">
						<a href="#" class="footer__boxes-logo-info-media header__logo-info-media">
							<img src="<?php bloginfo("template_url");?>/img/icons/logo-tsk.png" alt="logotype" class="footer__boxes-logo-info-img header__logo-info-img">
						</a>
						<span class="footer__boxes-logo-info-desc header__logo-info-desc">При поддержке департамента<br/> транспорта г. Москвы</span>
					</span>
				</div>

				<div class="footer__boxes-item footer__boxes-links">
					<div class="footer__boxes-links-container">
						<a href="<?php echo get_permalink(12)?>" class="footer__boxes-links-item">Проверить пропуск ОНЛАЙН</a>
						<a href="<?php echo get_permalink(5)?>" class="footer__boxes-links-item">Пропуск МКАД</a>
						<a href="<?php echo get_permalink(7)?>" class="footer__boxes-links-item">Пропуск ТТК</a>
						<a href="<?php echo get_permalink(9)?>" class="footer__boxes-links-item">Пропуск СК</a>
					</div>
				</div>

				<div class="footer__boxes-item footer__boxes-links">
					<div class="footer__boxes-links-container">
						<a href="<?php echo get_permalink(24)?>" class="footer__boxes-links-item">Другие услуги</a>
						<a href="<?php echo get_permalink(16)?>" class="footer__boxes-links-item">О компании</a>
						<a href="<?php echo get_permalink(51)?>" class="footer__boxes-links-item">Контакты</a>
					</div>
				</div>

				<div class="footer__boxes-item footer__boxes-action">
					<a href="#modal_feedback" class="footer__boxes-action-btn action-btn js-modal-open">Заказать звонок</a>
					<!-- <img src="<?php bloginfo("template_url");?>/img/icons/24_7.svg" alt="24 7 svg icon" class="footer__boxes-action-icon"> -->
					<div class="footer__boxes-soc">
						<div class="footer__boxes-soc__title">Мы в соцсетях</div>
						<div class="footer__boxes-soc-wrap">
							<a href="tg://resolve?domain=propuska_mkad_bot" class="tg-link"></a>
							<a href="https://www.instagram.com/propusk.mkad.ttk.sk/" class="insta-link"></a>
							<a href="https://vk.com/public186573023" class="vk-link"></a>
						</div>
					</div>
				</div>
			</div>

			<div class="footer__copy">
				<div class="footer__copy-box">(с) 2014-<?php echo get_the_date("Y");?>. Все права защищены</div>
				<div class="footer__copy-box"><a href="<?php echo get_permalink(3)?>" class="hover-underline">Политика конфиденциальности</a></div>
			</div>
		</div>
		<?php //write_date();
		?>
	</footer> <!-- /.footer -->
<!--<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Afcb4e239cefaf4fe84a960b314fc0834972e8e5e46b23f5f8ef7cd832fa74e91&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>-->

	<script type="text/javascript" charset="utf-8" async src="//api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Afcb4e239cefaf4fe84a960b314fc0834972e8e5e46b23f5f8ef7cd832fa74e91&amp;height=100%25&amp;lang=ru_RU&amp;scroll=false&amp;id=map&amp;"></script>
	
<?php wp_footer(); 


  // global $wpdb;
  // $query = $wpdb->get_results("SELECT `lascommand` FROM `bot_chat` WHERE `chatid` = '86447923'", ARRAY_A);
  // var_dump($query[0]["lascommand"]);
if(is_home() || is_front_page() || is_page(array(5, 7, 9, 444))): 
	//?>

<?php endif;
?>

</body>
</html>