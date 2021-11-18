<!-- Арктик модал -->
<div style="display: none;">
	<div class="box-modal" id="messgeModal">
		<div class="box-modal_close arcticmodal-close">закрыть</div>
		<div class = "modalline" id = "lineIcon">
			<img class = "okImg" src = "<?php bloginfo("template_url");?>/img/ok.svg"/>
		</div>
		
		<div class = "modalline" id = "lineMsg">
		</div>
	</div>
</div>

<div style="display: none;">
	<div class="box-modal" id="ausModal">
		<div class="box-modal_close arcticmodal-close">X</div>
		<div class = "winAus">
			<p class = "modal-heading mh3" >Информация о пропусках</p>
			<div class = "loadWraper">
				<img src = "<?php bloginfo("template_url"); ?>/img/load.svg" />
			</div>
			<div class = "ausInfo">

			</div>
			<p class = "no_aus_msg"></p>

			<p class = "mh3">Спецпредложение!</p> 
			<?php 

			$date = date_create();
			date_modify($date, '+2 day');
			$hislo = date_format($date, 'd');
			$mesatsen = date_format($date, 'F');

			$trans = array("January" => "января",
				"February" => "февраля",
				"March" => "марта",
				"April" => "апреля",
				"May" =>	"мая",
				"June"	 =>	"июня",
				"July"	 =>	"июля",
				"August"	 =>	"августа",
				"September" =>	"сентября",	
				"October"	 =>	"окрября",    
				"November"	 =>	"ноября",
				"December" =>	"декабря"

			);

			$mesats = strtr( $mesatsen, $trans);

			$rezdata =$hislo." ".$mesats;
			?>
			Постоянный пропуск за 14000 ₽. Гарантия получения 100%. Защита от аннуляции. Оставьте заявку до <?php echo $rezdata; ?> и получите временный пропуск бесплатно!
			<div class = "ausFormBlk">
				<form id = "ausForm" >
					<input class = "form__fields-item uniFormGn tranzitGn" type = "text" placeholder = "Введите гос-номер">
					<input class = "form__fields-item uniFormName" type = "email" placeholder = "Ваше Имя">
					<input class = "form__fields-item mascedtel uniFormTel" type = "text" placeholder = "Введите телефон">
					<div class = "action-btn uniSendBtnProp" data-formid = "ausForm" data-mailmsg = "Подписка на оповещение" id = "opoveshenie">Оставить заявку</div>
				</form>
			</div>
		</div>
		
	</div>
</div>
