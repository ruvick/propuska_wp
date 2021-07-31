<?php

/*
Template Name: Шаблон записи Страна
Template Post Type: post
*/


get_header(); ?>

<?php $title = '1'; ?>

	<?php $title = 1;
  get_template_part('/template-parts/intro-region'); ?>

	<?php $title = 1;
  get_template_part('/template-parts/info-region'); ?>

	<?php $title = 0;
  get_template_part('/template-parts/services-region'); ?>

	<?php $title = 1;
  get_template_part('/template-parts/checking'); ?>

	<?php $title = 0;
  get_template_part('/template-parts/advantages-region'); ?>

	<?php $title = 0;
  get_template_part('/template-parts/docs-region'); ?>

	<?php $title = 0;
  get_template_part('/template-parts/feedback-region'); ?>

	<?php $title = 1;
  get_template_part('/template-parts/about-region'); ?>

	<?php $title = 1;
  get_template_part('/template-parts/action'); ?>
	
	<?php $title = 1;
  get_template_part('template-parts/clients'); ?>

	<?php $title = 1;
  get_template_part('/template-parts/map'); ?>
	
<?php get_footer(); ?>