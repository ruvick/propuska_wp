<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Настройки темы')
	->add_fields(array(
		Field::make("text", "main_sendmail", "e-mail для отправки")
			->help_text('Введите e-mail через запятую')->set_width(50),

		Field::make("text", "main_them_mail", "e-mail для темы")
			->help_text('Введите e-mail для отображения')->set_width(50),

		Field::make("text", "main_adress", "Введите адрес организации")
			->help_text('Введите Адрес'),

		Field::make("text", "main_phone", "Контактный телефон")
			->help_text('Введите телефон')->set_width(50),

		Field::make("text", "main_phone_lnk", "Контактный телефон для ссылки")
			->help_text('Введите телефон без скобок и +')->set_width(50),

		Field::make('complex', 'tech_complex_reviews_main', 'Отзыв')
			->add_fields(array(
				Field::make('text', 'tech_complex_reviews_name_main', 'Имя')
					->set_width(30),
				Field::make('textarea', 'tech_complex_reviews_text_main', 'Текст отзыва')
					->set_width(30),
				Field::make('text', 'tech_complex_reviews_rating_main', 'Оценка')
					->set_width(30),
			)),


	));

Container::make('post_meta', 'tech_additional_child', 'Доп поля')
	->show_on_page_children('dopolnitelnye-uslugi')
	->add_fields(array(
		Field::make('text', 'tech_additional_price', 'Цена'),
	));

Container::make('post_meta', 'tech_page_settings', 'Доп поля')
	->show_on_post_type('page')
	->add_fields(array(
		Field::make('image', 'tech_banner_bg', 'Фон баннера'),
		Field::make('checkbox', 'tech_invert_color', 'Инвертировать текст заголовка')->set_option_value('yes'),
		Field::make('text', 'tech_text_podzag', 'Подзаголовок на основном банере'),
		Field::make('text', 'tech_text_zag', 'Заголовок в текстовом блоке под банером'),
		Field::make('text', 'tech_zon_name', 'Название зоны'),
	));
Container::make('post_meta', 'tech_page_settings', 'Доп поля')
	->show_on_template(array('page-brand.php'))
	->add_fields(array(
		Field::make('image', 'tech_logo_brand', 'Логотип бренда'),
	));
Container::make('post_meta', 'tech_page_mkad_ttk_sk', 'Доп поля')
	->show_on_template(array('page-propusk-na-mkad.php', 'page-propusk-sk.php', 'page-propusk-ttk.php'))
	->add_fields(array(
		Field::make('text', 'tech_title_page', 'Текст для Заголовка страницы'),

		Field::make('text', 'tech_check_pass', 'Текст в блоке <Проверить пропуск в Москву на грузовой транспорт>'),
		Field::make('text', 'tech_get_result', 'Текст в блоке <Вы получите результат через 30 сек>'),
		Field::make('text', 'tech_package_note', 'Текст-примечание для блока <Необходимый пакет документов>'),
		Field::make('rich_text', 'tech_about_company', 'Текст для блока <О нашей компании>'),
		Field::make('text', 'tech_need_pass', 'Текст для блока <Нужен пропуск в Москву прямо сейчас?>'),

	));
Container::make('post_meta', 'tech_page_mkad_ttk_sk', 'Отзывы')
	->show_on_template(array('page-propusk-na-mkad.php', 'page-propusk-sk.php', 'page-propusk-ttk.php', 'page-dop-item.php'))
	->add_fields(array(
		Field::make('complex', 'tech_complex_reviews', 'Отзыв')
			->add_fields(array(
				Field::make('text', 'tech_complex_reviews_name', 'Имя')
					->set_width(30),
				Field::make('textarea', 'tech_complex_reviews_text', 'Текст отзыва')
					->set_width(30),
				Field::make('text', 'tech_complex_reviews_rating', 'Оценка')
					->set_width(30),
			))

	));

Container::make('post_meta', 'tech_page_mkad_ttk_sk', 'Отзывы')
	->show_on_template(array('page-dop-item.php'))
	->add_fields(array(
		Field::make('rich_text', 'dop_item_about', 'О нашей компании'),

	));

Container::make('post_meta', 'single-region', 'Доп поля инностраннных автомобилей')
	->show_on_template(array('single-region.php'))
	->add_fields(array(
		Field::make('image', 'region_flag', 'Флаг страны'),
		Field::make('text', 'region_title_header', 'Заголовок страны в шапке')
			->set_width(30),
		Field::make('text', 'region_title_2', 'Заголовок страны во втором блоке')
			->set_width(30),
		Field::make('text', 'region_title_3', 'Пакет документов для')
			->set_width(30),
	));
