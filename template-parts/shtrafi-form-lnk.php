<?php 
$class_for_template = '';
if(is_page_template(array('page-proverit-propusk.php', 'page-service.php'))):
	$class_for_template = 'info-page';
endif;
?>
<section class="info <?php echo $class_for_template?>">
		<div class="info__inner info__inner-page container">
			<div class="info__banner">
				<?php the_post(); the_content()?>
				<div class="info__text info__text_margin">
			<?php 
			global $title;
	        if($title == 0):
		      ?>
			<p class="info__text-heading info__text-heading-page">Проверьте свои штрафы</p>
	      <?php else:?>
			<h2 class="info__text-heading info__text-heading-page">Проверьте свои штрафы</h2>
	    <?php endif;?>
				</div>
				
				<div class = "formBlk" id = "checShtrafForm">
					<form>
						<input name = "tsName" id = "tsName" class = "form__fields-item" placeholder = "Введите номер авто" value = "М048УЕ46">
						<input name = "ptsName" id = "ptsName" class = "form__fields-item" placeholder = "Введите номер ПТС" value = "46XY472842">
						
						<div class="form__action-btn action-btn" id = "checShtraf">Проверить</div>
					</form>
				</div>
			</div>
		</div>
		<div class="info__cars">
			<img src="<?php bloginfo("template_url");?>/img/kamaz-big.png" alt="kamaz big image" class="info__cars-item info__cars-item-big">
			<img src="<?php bloginfo("template_url");?>/img/kamaz-smaller.png" alt="kamaz smaller image" class="info__cars-item info__cars-item-small">
		</div>
</section> <!-- /.info -->