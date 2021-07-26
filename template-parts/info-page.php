<?php 
$class_for_template = '';
if(is_page_template(array('page-proverit-propusk.php', 'page-service.php'))):
	$class_for_template = 'info-page';
endif;
?>
<section class="info <?php echo $class_for_template?>">
		<div class="info__inner info__inner-page container">
			<?php if (!empty(carbon_get_the_post_meta('tech_text_zag'))):?>
				<div class="info__text">
			<?php 
			global $title;
	        if($title == 0):
		      ?>
					<p class="info__text-heading info__text-heading-page"><?php echo carbon_get_the_post_meta('tech_text_zag'); ?></p>
		      <?php else:?>
					<h2 class="info__text-heading info__text-heading-page"><?php echo carbon_get_the_post_meta('tech_text_zag'); ?></h2>
		    <?php endif;?>
				</div>
			<?php endif;?>
			<div class=" allStyleText">
				<?php the_post(); the_content()?>
			</div>
		</div>
		<div class="info__cars">
			<img src="<?php bloginfo("template_url");?>/img/kamaz-big.png" alt="kamaz big image" class="info__cars-item info__cars-item-big">
			<img src="<?php bloginfo("template_url");?>/img/kamaz-smaller.png" alt="kamaz smaller image" class="info__cars-item info__cars-item-small">
		</div>
</section> <!-- /.info -->