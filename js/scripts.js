let timer_str2 = "12/22/2019 01:15:26";

/* menu toggle button */
function menuToggle(_this, selector) {
	jQuery(_this).toggleClass("opened");
	menuShowHide();
}

/* показ/скрытие меню */
function menuShowHide(_duration){

	_duration = _duration || 300;


	let menu = jQuery(".js-menu");

	menu.slideToggle(_duration, function(){
		if (menu.is(":not(:visible)")) {
			menu.removeAttr("style");
		}
	});
}

/* закрывает меню, когда шелкнули в свободное место */
jQuery(document.body).on("click", function(e){
	if (e.target.nodeName == 'A')
		return;
	
	e.stopPropagation();

	if (jQuery(e.target).closest(".js-menu, .js-menu-toggle").length)
		return false;

	menuClose();
});

function menuClose() {
	jQuery(".js-menu-toggle.opened").each(function(idx, el){
		if (jQuery(el).is(":visible")) {
			jQuery(el).click();
		}
	});
}




/*
* slider of .js-clients-cnt
*/
jQuery('.js-clients-cnt').slick({
	infinite: true,
	slidesToShow: 5,
	slidesToScroll: 5,
	speed: 300,
	arrows: true, 
	dots: false,
	adaptiveHeight: false,
	centerMode: false,
	centerPadding: "50px",
	autoplay: true,
	autoplaySpeed: 8000,
	responsive: [
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 4,
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
			}
		},
		{
			breakpoint: 650,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		},
	]
});



/**
* Timer крч
**/
console.log(timer_str);
jQuery(".js-timer-cnt").countdown(timer_str, function(event) {
	jQuery(this).find('.js-days').text(event.strftime("%D"));
	jQuery(this).find('.js-hours').text(event.strftime("%H"));
	jQuery(this).find('.js-minutes').text(event.strftime("%M"));
	jQuery(this).find('.js-seconds').text(event.strftime("%S"));
});
/**
*  modals
**/

jQuery("body").on("click", ".js-modal-open", function(e){
	e.preventDefault();
	modalOpen(jQuery(this).attr('href'));
});

jQuery(".js-modals-close").on("click", function(){
	modalClose();
});

/** modal opening **/
function modalOpen(modalID){

	jQuery(".modals, " + modalID).fadeIn(300);
};

/** modal closing **/
function modalClose(){
	jQuery(".modals, .modals__item").fadeOut(300);
};


/* 
** fancybox слайдер
*/

function fancyboxInit(){
	try{
		jQuery('a[data-fancybox]').fancybox({
			loop : true
		}).css({
			outline : 0
		});
	}
	catch(e){}
}

jQuery(function(){
	fancyboxInit();
});

var additional_service__item_height = 0;
jQuery('.additional-service__item').each(function() {
	if(jQuery(this).height() > additional_service__item_height) {
		additional_service__item_height = jQuery(this).height();
	}
});
if(jQuery(window).width() > 992) {
	jQuery('.additional-service__item').height(additional_service__item_height);
}