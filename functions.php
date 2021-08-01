<?php
ini_set("display_errors",1);
error_reporting(E_ALL);

add_action( 'carbon_fields_register_fields', 'boots_register_custom_fields' );
function boots_register_custom_fields() {
// путь к пользовательскому файлу определения поля (полей), измените под себя
require_once __DIR__ . '/inc/custom-fields-options/metabox.php';


}
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( get_template_directory() . '/inc/carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

include_once('options_page.php');
include_once('aus.php');

add_theme_support( 'woocommerce' );

$title = true;

register_nav_menus( array(
	'header_menu' => 'Главное меню'
) );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 185, 185 ); 

add_post_type_support( 'page', 'excerpt' );

// Подключение стилей и nonce для Ajax в админку 
add_action('admin_head', 'my_assets_admin');
function my_assets_admin(){
	wp_enqueue_style("style-adm",get_template_directory_uri()."/style-admin.css");
	
	wp_localize_script( 'jquery', 'allAjax', array(
			'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
		) );
}

define("allversion", "1.0.8");

// Подключение стилей и nonce для Ajax и скриптов во фронтенд 
add_action( 'wp_enqueue_scripts', 'my_assets' ); 
	function my_assets() {
		wp_enqueue_style('circle', get_template_directory_uri() . '/css/circle.css', array(), allversion, 'all');
		wp_enqueue_style("style-frontend",get_template_directory_uri()."/css/style.css", array(), allversion, 'all');
		wp_enqueue_style("style-modal",get_template_directory_uri()."/css/jquery.arcticmodal-0.3.css", array(), allversion, 'all');
		
		wp_enqueue_style("slick",get_template_directory_uri()."/css/slick.css", array(), allversion, 'all');
		wp_enqueue_style("fb",get_template_directory_uri()."/css/jquery.fancybox.min.css", array(), allversion, 'all');
		
		wp_enqueue_script( 'jquery');

		wp_enqueue_script( 'cookie', get_template_directory_uri().'/js/jquery.cookie.js', array('jquery'), null, true);
		wp_enqueue_script( 'masced', get_template_directory_uri().'/js/jquery.inputmask.bundle.js', array('jquery'), null, true);
		wp_enqueue_script( 'amodal', get_template_directory_uri().'/js/jquery.arcticmodal-0.3.min.js', array('jquery'), null, true);
		
		wp_enqueue_script( 'cand', get_template_directory_uri().'/js/jquery.countdown.min.js', array('jquery'), null, true);
		wp_enqueue_script( 'slick', get_template_directory_uri().'/js/slick.min.js', array('jquery'), null, true);
		//wp_enqueue_script( 'fbx', get_template_directory_uri().'/js/jquery.fancybox.min.js', array('jquery'), null, true);
		wp_enqueue_script( 'scripts', get_template_directory_uri().'/js/scripts.js', array('jquery'), null, true);
		wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array('jquery'), null, true);
		
		
		wp_localize_script( 'jquery', 'allAjax', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
		) );
	}

	
	add_action( 'wp_ajax_check_aus', 'check_aus' );
	add_action( 'wp_ajax_nopriv_check_aus', 'check_aus' );

	function check_aus() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			
			if(!empty($_REQUEST['ausnum'])){
				
				wp_die(json_encode(getNewData($_REQUEST['ausnum'])));
			}
			else{
				wp_die("Нужен номер авто!");
			}

			
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
	}
	
	
		add_action( 'wp_ajax_check_shtraf', 'check_shtraf' );
	add_action( 'wp_ajax_nopriv_check_shtraf', 'check_shtraf' );

	function check_shtraf() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			
			if((!empty($_REQUEST['tsnum']))&&(!empty($_REQUEST['ptsnum']))){
				
				$rus=array("А", "В", "Е", "К", "М", "Н", "О", "Р", "С", "Т", "У","Х");
	$lat=array("A", "B", "E", "K", "M", "H", "O", "P", "C", "T", "Y","X");
				
				$reg=mb_strtoupper($_POST['regnum']);
				$regnum=explode(' ',str_replace($rus,$lat,urldecode($_REQUEST['tsnum'])))[0];
				$regreg=explode(' ',str_replace($rus,$lat,urldecode($_REQUEST['ptsnum'])))[1];
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, "http://check.gibdd.ru/proxy/check/fines");
				// откуда пришли на эту страницу
				curl_setopt($ch, CURLOPT_REFERER, "https://гибдд.рф/check/fines");
				// cURL будет выводить подробные сообщения о всех производимых действиях
				curl_setopt($ch, CURLOPT_VERBOSE, 1);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				curl_setopt($ch, CURLOPT_ENCODING ,"UTF-8");
				curl_setopt($ch, CURLOPT_COOKIESESSION, true);
				curl_setopt($ch, CURLOPT_COOKIEFILE, dirname( $_SERVER['SCRIPT_FILENAME'] ).'/cookies/'.str_replace(".","_",$_SERVER['REMOTE_ADDR']));


				//curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query(array('regnum' =>  $regnum,'regreg' => $regreg ,'stsnum' =>  str_replace($rus,$lat,mb_strtoupper($_POST['stsnum'])),'captchaWord' => $_POST['cpt'] )));
				curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query(array('regnum' =>  $regnum,'regreg' => $regreg )));
				curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (Windows; U; Windows NT 5.0; En; rv:1.8.0.2) Gecko/20070306 Firefox/1.0.0.4");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$result=curl_exec($ch);
				
				wp_die($result);
			}
			else{
				wp_die("Номера документов не указаны");
			}

			
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
	}

	if( ! is_admin() ){
	add_action( 'pre_handle_404', 'remove_author_pages_page' );
	add_filter( 'author_link', 'remove_author_pages_link' );

	// Ставим 404 статус
	function remove_author_pages_page( $false ) {
		if ( is_author() ) {
			global $wp_query;
			$wp_query->set_404();
			status_header( 404 );
			nocache_headers();

			return true; // для обрыва хука
		}

		return $false;
	}

	// удаляем ссылку
	function remove_author_pages_link( $content ) {
		return home_url();
	}
}
	
	add_filter('excerpt_more', 'propusc_excerpt_more');
	function propusc_excerpt_more($args) {
		return '...';
	}
	
	add_action( 'wp_ajax_universal_send', 'universal_send' );
	add_action( 'wp_ajax_nopriv_universal_send', 'universal_send' );

	function universal_send() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			
			$headers = array(
				'From: Сайт Пропуск МКАД <noreply@propuska-mkad-ttk-sk.ru>',
				'content-type: text/html',
			);
			$telegram_message = 'Text message';
			message_to_telegram($telegram_message);
			message_to_telegram_1($message_telegram);
			add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
			if (wp_mail(carbon_get_theme_option( 'main_sendmail' ), 'Заказ с сайта', '<strong>С какой формы:</strong> '.$_REQUEST["msg"].'<br/> <strong>Имя/гос.номер:</strong> '.$_REQUEST["name"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["tel"]." <br/> <strong>Госномер:</strong> ".$_REQUEST["gn"], $headers))
				wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
			else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
			
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
	}

define('TELEGRAM_TOKEN', '988598320:AAG_xYsrpWbqXI7vH6w4o0XN7HfkFK4UKxY');
define('TELEGRAM_CHATID', '86447923');
function message_to_telegram($text)
{
		
	$ch = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => TELEGRAM_CHATID,
                'text' => $text,
            ),
        )
    );
    $output = curl_exec($ch);
	$current = file_get_contents("tglog.txt");
	$current .= print_r($output, true);
	file_put_contents("tglog.txt", $current);
	
}
function message_to_telegram_1($text)
{
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => '381762556',
                'text' => $text,
            ),
        )
    );
    $output = curl_exec($ch);
	
	$file = 'people.txt';
	
	// $current = file_get_contents("tglog.txt");
	// $current .= print_r($output, true);
	// file_put_contents("tglog.txt", $current);
	
}

	function service_text_f($atts) {
		$params = shortcode_atts(array(
			'text' => '',
		), $atts);
		return $params['text'];
	}

	add_shortcode('service_text', 'service_text_f');

	add_filter('cron_schedules', 'set_interval_for_write_date');
	function set_interval_for_write_date($args) {
		$args['new_int'] = array(
			'interval' => 86400,
			'display' => 'Каждые 2 дня'
		);
		$args['min_int'] = array(
			'interval' => 30,
			'display' => 'Каждые пол-минуты',
		);
		return $args;
	}



	function write_date() {
		$file = get_template_directory() . '/date.txt';
		$current_time = time() + 86400 * 2;
		$time = date('n/d/Y H:i:s', $current_time);
		file_put_contents($file, $time);
		return true;
	}

	add_action('set_date_for_script', 'write_date');
	if(!wp_next_scheduled('set_date_for_script'))
		wp_schedule_event(time(), 'new_int', 'set_date_for_script');
	

	


add_action('template_redirect', 'test_redirect');
function test_redirect() {
  global $page, $wp_query;
  
    if(is_singular()) {
      if($page > 0) {
        $wp_query->set_404();
        wp_redirect( '/', 404 );

      }
    }
}

	
	/*интеграция битрикс
		define('CRM_HOST', 'b24-0c20cu.bitrix24.ru'); // your CRM domain name
		define('CRM_PORT', '443'); // CRM server port
		define('CRM_PATH', '/crm/configs/import/lead.php'); // CRM server REST service path


		define('CRM_LOGIN', 'potashov.denis@yandex.ru'); // login of a CRM user able to manage leads
		define('CRM_PASSWORD', 'RhmAbtP2OD'); // password of a CRM user
		
		add_action( 'wp_ajax_set_lis_z', 'set_lis_z' );
add_action( 'wp_ajax_nopriv_set_lis_z', 'set_lis_z' );

function set_lis_z() {
	if ( empty( $_REQUEST['nonce'] ) ) {
		wp_die( '0' );
	}
	
	if ( check_ajax_referer( 'huivzmaneinfa', 'nonce', false ) ) {
			
			$fio = explode(" ",$_REQUEST["zname"]);
			
			$sname = empty($fio[0])?"":$fio[0];
			$name = empty($fio[1])?"":$fio[1];
			$fname = empty($fio[2])?"":$fio[2];
			
			if (count($fio) == 1)
			{
				$name = $_REQUEST["zname"];
				$sname = "";
			}
			
			$postData = array(
				//'TITLE' => "Обратный звонорк (".$_REQUEST["name"]." ".$_REQUEST["phone"].")",
				'COMPANY_TITLE' => "Частное лицо",
				'NAME' => $name,
				'LAST_NAME' => $sname,
				'SECOND_NAME' => $fname,
				'PHONE_MOBILE' => $_REQUEST['zphone'],
				'ASSIGNED_BY_ID' => 12,
				//'COMMENTS' => "Перезвоните мне нужна консультация",
			);

			if ( $_REQUEST["ztype"] === "Микрозайм") {
				$postData['TITLE'] = "Заявка на микрозайм (".$name." ".$_REQUEST["zphone"].")";
				$postData['COMMENTS'] = "<h2>Заявка на Микрозайм</h2>";
				$postData['COMMENTS'] .= "Необходим микрозайм на сумму: ".$_REQUEST["zmikrozaimsumma"]." руб.";
			}
			
			if ( $_REQUEST["ztype"] === "Автокредит") {
				$postData['TITLE'] = "Заявка на Автокредит (".$name." ".$_REQUEST["zphone"].")";
				$postData['COMMENTS'] = "<h2>Заявка на Автокредит</h2>";
				$postData['COMMENTS'] .= "<strong>Марка автомобиля:</strong> ".$_REQUEST["zmrkaauto"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Год выпуска:</strong> ".$_REQUEST["zgodvipuska"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Стоимость:</strong> ".$_REQUEST["zstoimostavto"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Первоначальный взнос:</strong> ".$_REQUEST["zfirstvznos"]."<br/>";
			}
			
			if ( $_REQUEST["ztype"] === "Кредит наличными") {
				$postData['TITLE'] = "Заявка на Кредит наличными (".$name." ".$_REQUEST["zphone"].")";
				$postData['COMMENTS'] = "<h2>Заявка на Кредит наличными</h2>";
				$postData['COMMENTS'] .= "<strong>Сумма:</strong> ".$_REQUEST["zsummakredita"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Подтверждение дохода:</strong> ".$_REQUEST["zpodtverzdeniedohoda"]."<br/>";
			}
			
			if ( $_REQUEST["ztype"] === "Ипотека") {
				$postData['TITLE'] = "Заявка на Ипотеку (".$name." ".$_REQUEST["zphone"].")";
				$postData['COMMENTS'] = "<h2>Заявка на Ипотеку</h2>";
				$postData['COMMENTS'] .= "<strong>Вид жилья:</strong> ".$_REQUEST["zvidzilya"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Стоимость:</strong> ".$_REQUEST["zstoimost"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Первоначальный взнос:</strong> ".$_REQUEST["zfirstvznosipoteka"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Подтверждение дохода:</strong> ".$_REQUEST["zpodtverzdeniedohodaipoteka"]."<br/>";
			}
			
			
			if ( $_REQUEST["ztype"] === "Под залог недвижимости") {
				$postData['TITLE'] = "Заявка на Деньги под залог недвижимости (".$name." ".$_REQUEST["zphone"].")";
				$postData['COMMENTS'] = "<h2>Заявка на деньги под залог недвижимости</h2>";
				$postData['COMMENTS'] .= "<strong>Вид жилья под залог:</strong> ".$_REQUEST["zvidzilyapodzalog"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Сумма:</strong> ".$_REQUEST["zsummapodzalognedvizimost"]."<br/>";
			}
			
			if ( $_REQUEST["ztype"] === "Под залог ПТС") {
				$postData['TITLE'] = "Заявка на Деньги под залог ПТС (".$name." ".$_REQUEST["zphone"].")";
				$postData['COMMENTS'] = "<h2>Заявка на деньги под залог ПТС</h2>";
				$postData['COMMENTS'] .= "<strong>Марка авто под залог:</strong> ".$_REQUEST["zmrkaautopodzalog"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Год выпуска:</strong> ".$_REQUEST["zgodvipuskapodzalog"]."<br/>";
				$postData['COMMENTS'] .= "<strong>Сумма:</strong> ".$_REQUEST["zsummapodzalog"]."<br/>";
			}
			
			if (defined('CRM_AUTH'))
			{
				$postData['AUTH'] = CRM_AUTH;
			}
			else
			{
				$postData['LOGIN'] = CRM_LOGIN;
				$postData['PASSWORD'] = CRM_PASSWORD;
			}

			// open socket to CRM
			$fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
			if ($fp)
			{
				// prepare POST data
				$strPostData = '';
				foreach ($postData as $key => $value)
					$strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);

				// prepare POST headers
				$str = "POST ".CRM_PATH." HTTP/1.0\r\n";
				$str .= "Host: ".CRM_HOST."\r\n";
				$str .= "Content-Type: application/x-www-form-urlencoded\r\n";
				$str .= "Content-Length: ".strlen($strPostData)."\r\n";
				$str .= "Connection: close\r\n\r\n";

				$str .= $strPostData;

				// send POST to CRM
				fwrite($fp, $str);

				// get CRM headers
				$result = '';
				while (!feof($fp))
				{
					$result .= fgets($fp, 128);
				}
				fclose($fp);

				// cut response headers
				$response = explode("\r\n\r\n", $result);
				
				$json_in = array("{'", "'}", "':'", "','");
				$json_out = array('{"', '"}', '":"', '","');
				$json = str_replace($json_in, $json_out, $response[1]);
	
				// оповещение на email
				$headers = array(
					'From: Сайт Кредит-Консалт <noreply@kredit-konsalt.ru>',
					'content-type: text/html',
				);
			
				$EmailRez = "";
				add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
				if (wp_mail(array('kreditkonsaltkursk@yandex.ru','asmi046@gmail.com'), $postData['TITLE'], '<strong>Имя:</strong> '.$_REQUEST["zname"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["zphone"], $headers))
					$EmailRez = "<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>";
				else $EmailRez = "<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>";
	
				wp_die($json );
				
			}
			else
			{
				wp_die('Connection Failed! '.$errstr.' ('.$errno.')');
			}
		
		
		
		
		
	} else {
		wp_die( 'НО-НО-НО!', '', 403 );
	}
}
		
	*/
	
	/* Отправка почты
		
			$headers = array(
				'From: Сайт Кредит-Консалт <noreply@kredit-konsalt.ru>',
				'content-type: text/html',
			);
		
			add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
			if (wp_mail(array('info@kredit-konsalt.ru','asmi046@gmail.com'), 'Заказ обратного звонка', '<strong>Имя:</strong> '.$_REQUEST["name"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["phone"], $headers))
				wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
			else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
	*/
	
	
	/*	Заготовка шорткода
		function true_url_external( $atts ) {
			$params = shortcode_atts( array( // в массиве укажите значения параметров по умолчанию
				'anchor' => 'Миша Рудрастых', // параметр 1
				'url' => 'https://misha.blog', // параметр 2
			), $atts );
			return "<a href='{$params['url']}' target='_blank'>{$params['anchor']}</a>";
		}
		add_shortcode( 'trueurl', 'true_url_external' );
	*/
