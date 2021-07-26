<?php
/*
Template Name: Проверить пропуск по номеру
*/
?>
<?php get_header();?>

<?php $title = 1; get_template_part('/template-parts/intro-page-middle');?>

<?php $title = 1; get_template_part('/template-parts/checking');?>
<a href = "#modal_feedback" class="help-section js-modal-open">
	<div class="container">
	<!-- 
		<div class="help-section__form">
			<form action="" class="form__container" id="">
				<div class="form__fields">
					<input type="text" name="name" class="form__fields-item uniFormName" placeholder="Напишите ваше имя" required="" autocomplete="off">
					<input type="tel" name="phone_number" class="form__fields-item mascedtel  uniFormTel" placeholder="Введите номер телефона" required="" autocomplete="off">
				</div>
				<div class="form__action">
					<div class="form__action-btn action-btn uniSendBtn" data-formid="mainform" data-mailmsg="Заявка с баннера Помощь в оформлении пропусков в Москву">Получить бесплатно</div>
				</div>
			</form>
		</div> -->
		<div class="help-section__content">
			<div class="help-section__block">
				<div class="help-section__price">от <span>16 000</span> р.</div>
				<div class="help-section__title">Помощь в оформлении<br> пропусков в Москву</div>
			</div>
			<div class="help-pass__wrapper">
				<div class="help-pass__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/propusk-1.jpg);"></div>
				<div class="help-pass__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/propusk-2.jpg);"></div>
				<div class="help-pass__item" style="background-image: url(<?php echo get_template_directory_uri();?>/img/propusk-3.jpg);"></div>
			</div>
		</div>
	</div>
</a>
<?php $title = 1; get_template_part('/template-parts/info-page');?>

<?php //get_template_part('/template-parts/map');?>

<?php get_footer();?>