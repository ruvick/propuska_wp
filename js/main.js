jQuery(document).ready(function($) {
	var inputmask_96e76a5f = {"mask":"+7(999)999-99-99"};
	jQuery(".mascedtel").inputmask(inputmask_96e76a5f);
	
	// верификация телефона
	//if ((jQuery("#formZayavka #zphone").val() == "")||(jQuery("#phone").val().indexOf("_")>0)){
	//		jQuery("#formZayavka #zphone").css("background-color","#f9d6c5");
	//		return;
	//	}
	
	//Меню мобильная версия
	jQuery(".menuBtn").click(function(){ 
		jQuery("#mainMenuHead ul").toggle("slow", function(){});
	});
	
	// сообщение а арктик модал
	//jQuery('#messgeModal #lineIcon').html('<i style = "color:green;" class="fa fa-check-circle"></i>');
	//jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
	//jQuery('#messgeModal').arcticmodal();
	
	
		jQuery(".uniSendBtn").click(function(event){ 
			event.stopPropagation();
			var formid = jQuery(this).data("formid");
			var message = jQuery(this).data("mailmsg");
			
			if ((jQuery("#"+formid+" .uniFormTel").val() == "")||(jQuery("#"+formid+" .uniFormTel").val().indexOf("_")>0)) {
				jQuery("#"+formid+" .uniFormTel").css("background-color","#ff91a4")
			} else {
				var  jqXHR = jQuery.post(
					allAjax.ajaxurl,
					{
						action: 'universal_send',		
						nonce: allAjax.nonce,
						msg: message,
						name: jQuery("#"+formid+" .uniFormName").val(),
						tel: jQuery("#"+formid+" .uniFormTel").val()
					}
					
				);
				
				
				jqXHR.done(function (responce) {
					
					jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
					jQuery('#messgeModal').arcticmodal();
					
				});
				
				jqXHR.fail(function (responce) {
					jQuery('#messgeModal #lineIcon').html('');
					jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
					jQuery('#messgeModal').arcticmodal();
				});
			}
			return false;
		});

		jQuery(".uniSendBtnProp").click(function(){ 
			var formid = jQuery(this).data("formid");
			var message = jQuery(this).data("mailmsg");
			
			if ((jQuery("#"+formid+" .uniFormTel").val() == "")||(jQuery("#"+formid+" .uniFormTel").val().indexOf("_")>0)) {
				jQuery("#"+formid+" .uniFormTel").css("background-color","#ff91a4")
			} else {
				var  jqXHR = jQuery.post(
					allAjax.ajaxurl,
					{
						action: 'universal_send',		
						nonce: allAjax.nonce,
						msg: message,
						name: jQuery("#"+formid+" .uniFormName").val(),
						tel: jQuery("#"+formid+" .uniFormTel").val(),
						gn: jQuery("#"+formid+" .uniFormGn").val(),
					}
					
				);
				
				
				jqXHR.done(function (responce) {
					
					jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
					jQuery('#messgeModal').arcticmodal();
					
				});
				
				jqXHR.fail(function (responce) {
					jQuery('#messgeModal #lineIcon').html('');
					jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
					jQuery('#messgeModal').arcticmodal();
				});
			}
		});	

/*
	jQuery('.help-section').click(function(e) {
		e.preventDefault();
		jQuery("#check-modal").arcticmodal();
	});
*/		
	jQuery('#ausviceNum').change(function(){
	   jQuery(this).val(jQuery(this).val().replace(/ +/g, ''));
	});
	
	jQuery("#checkAusvice").click(function(){ 
				var car_number = jQuery("#ausviceNum").val();
				car_number = del_spaces(car_number);
			
			if (jQuery("#ausviceNum").val() == "") {
				jQuery("#ausviceNum").css("background-color","#ff91a4")
			} else {
				console.log(car_number);
				jQuery('#ausModal').arcticmodal();

				

				var  jqXHR = jQuery.get("https://propuska-mkad-ttk-sk.ru/wp-json/lscrm/v2/number_info?number="+car_number);

				// var  jqXHR = jQuery.post(
				// 	allAjax.ajaxurl,
				// 	{
				// 		action: 'check_aus',		
				// 		nonce: allAjax.nonce,
				// 		ausnum: car_number,
				// 	}
				// );
				
				
				jqXHR.done(function (responce) {
					console.log(responce);

					var RezStr = "<table class='skip-information'>";
					RezStr += "<thead>";
						RezStr += "<tr>";
							RezStr += "<th>Номер</th>";
							RezStr += "<th>Тип пропуска</th>";
							RezStr += "<th>Серия</th>";
							RezStr += "<th>Дата начала действия</th>";
							RezStr += "<th>Дата окончания</th>";
							RezStr += "<th>Осталось дней</th>";
						RezStr += "</tr>";
					RezStr += "</thead>";

					responce.forEach(function(element){ 
						
							// var date_start = element.dateStart.replace(/\./g, '-');
							// var date_start_arr = date_start.split('-');
							// var date_start_arr_day = date_start_arr[0];
							// date_start_arr[0] = date_start_arr[1];
							// date_start_arr[1] = date_start_arr_day;
							// date_start = date_start_arr.join('-');
							// var date_end = element.dateEnd.replace(/\./g, '-');
							// var date_end_arr = date_end.split('-');
							// var date_end_arr_day = date_end_arr[0];
							// date_end_arr[0] = date_end_arr[1];
							// date_end_arr[1] = date_end_arr_day;
							// date_end = date_end_arr.join('-');
							
							// var number_of_days = (Date.parse(date_end) - Date.parse(date_start)) / (1000 * 60 * 60 * 24);
							// console.log(number_of_days);
							// if(Date.now() > Date.parse(date_end)) {
							// 	number_of_days = 'закончен';
							// } else if(Date.now() < Date.parse(date_end) && element.status != 'CANCELED') {
							// 	var number_of_days = Math.ceil((Date.parse(date_end) - Date.now()) / (1000 * 60 * 60 * 24));
							// } else if(element.status == 'CANCELED') {
							// 	var now_date = new Date();
							// 	var now_day = now_date.getDate();
							// 	var now_month = now_date.getMonth() + 1;
							// 	if(now_month < 10) {
							// 		now_month = '0' + now_month;
							// 	}
							// 	var now_year = now_date.getFullYear();
							// 	//var number_of_days = 'аннулирован ' + now_day + '.' + now_month + '.' + now_year;
							// 	var number_of_days = 'аннулирован ' + element.cancelationdate;
							// }

							let dc = element.deycount;
						if ( element.sys_status == "Действует") {
							RezStr += "<tr class='bg-green'>";
						} else if (element.sys_status == "Анулирован") {
							RezStr += "<tr class='bg-red'>";
							dc = "Аннулирован " + new Date(element.record_updated_on).toLocaleDateString()
						} else {
							RezStr += "<tr>";
						}
								RezStr += "<td class='car_number'>" + element.truck_num + "</td>";
								RezStr += "<td class='element_zone'>"+element.pass_zone+" ("+((element.type_pass==null)?'Дневной':element.type_pass)+")"+"</td>";
								RezStr += "<td class='element_passInfo'>"+element.series+" "+element.pass_number+"</td>";
								RezStr += "<td class='element_dateStart'>"+element.valid_from.substr(0, 10)+"</td>";
								RezStr += "<td class='element_dateEnd'>"+element.valid_to.substr(0, 10)+"</td>";
								RezStr += "<td class='element_number_of_days'>" + dc  + "</td>";
							RezStr += "</tr>";
					});
					
					RezStr += "</table>";
					
					jQuery("#ausModal .loadWraper").hide();
					jQuery("#ausModal .ausInfo").html(RezStr);
					jQuery(".tranzitGn").val(car_number);
					
				});
				
				jqXHR.fail(function (responce) {
					jQuery("#ausModal .loadWraper").hide();
					jQuery("#ausModal .ausInfo").html("Сервис недоступен попробуйте позднее!");
					console.log(responce);
				});
			}
	});

	jQuery("#checShtraf").click(function(){ 
			
			if (jQuery("#checShtrafForm #tsName").val() == "") {
				jQuery("#checShtrafForm #tsName").css("background-color","#ff91a4")
			} else 
			if (jQuery("#checShtrafForm #ptsName").val() == "") {
				jQuery("#checShtrafForm #ptsName").css("background-color","#ff91a4")
			} else
			{
				var  jqXHR = jQuery.post(
					allAjax.ajaxurl,
					{
						action: 'check_shtraf',		
						nonce: allAjax.nonce,
						tsnum: jQuery("#checShtrafForm #tsName").val(),
						ptsnum: jQuery("#checShtrafForm #ptsName").val(),
						
					}
					
				);
				
				
				jqXHR.done(function (responce) {
					
					//var rez = JSON.parse(responce);
					//console.log(rez);
					console.log(responce);
					
				});
				
				jqXHR.fail(function (responce) {
					jQuery("#ausModal .loadWraper").hide();
					jQuery("#ausModal .ausInfo").html("Сервис недоступен попробуйте позднее!");
					console.log(responce);
				});
			}
	});	
	
	
	if(jQuery(window).width() < 480) {
		var height = jQuery(window).width();
		jQuery('.clients__reviews-list-item iframe').attr('width', height - 30);
	}
	jQuery(document).ready(function() {
var services__carts_heading_height = 0;
	jQuery('.services__carts-heading').each(function() {
		if(jQuery(this).height() > services__carts_heading_height) {
			services__carts_heading_height = jQuery(this).height();
		}
	});
	jQuery('.additional-service .services__carts-heading').height(services__carts_heading_height);

	jQuery(".reviews-slider").slick({
		slidesToShow: 3,
		autoplay: true,
		autoplaySpeed: 6000,
		responsive: [
            {
              breakpoint: 800,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 608,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },

          ]
	})
});
});

function del_spaces(str) {
	str = str.replace(/\s/g, '');
	return str;
}