$(document).ready(function() {
	$('body').onPageLoad();
	// var $borderTop = $('.border-box__top');	
	// var $borderRight = $('.border-box__right');
	// var $borderBottom = $('.border-box__bottom');
	// var $borderLeft = $('.border-box__left');
	// var $navItem = $('.nav__item');
	// var $logo = $('.logo');

	var $page = $('#wrapper'),
			options = {
				prefetch: true,
				cacheLength: 4,
				onStart: {
				duration: 1600,
					render: function ($container) {
					$('.cover').addClass('page-is-changing');
					$('.cover2').addClass('page-is-changing');
					setTimeout(function(){
						$('.loading-bar').addClass('page-is-changing');	
					}, 500);

					if ( $('.fp-enabled').length ) {
            			setTimeout (function () {
							$.fn.fullpage.destroy('all');
						}, 350);
        			}
				}	
			},
				onReady: {
				duration: 1300,
					render: function ($container, $newContent) {
					$container.html($newContent);
					$('.cover').addClass('page-is-changing');
					$('.cover2').addClass('page-is-changing');
					$('.loading-bar').addClass('page-is-changing');
					setTimeout (function () {
						setTimeout(function(){
							$('.cover').removeClass('page-is-changing');
							$('.cover2').removeClass('page-is-changing');
						}, 500);
						$('.loading-bar').removeClass('page-is-changing');
					}, 500);
					}
				},
				onAfter : function($container) {
						$container.onPageLoad();
				}
			},
			smoothState = $page.smoothState(options).data('smoothState');
});
			
	$.fn.onPageLoad = function() {
	$('#fullpage').fullpage({
	navigation: true,
	navigationPosition: 'left',
	scrollingSpeed: 500,
	onLeave: function(index, nextIndex, direction){
	var leavingSection = $(this);
	var $companyName2 = $('#second-section .company-name');
	var $companyName1 = $('#first-section .company-name');
	var $background1 = $('#first-section');
	var $background2 = $('#second-section');
	var $description1 = $('#first-section .company-description');
	var $description2 = $('#second-section .company-description');
	var $textCase2 = $('#second-section .text-case');
	var $btn2 = $('#second-section .btn-link');
	var $textCase1 = $('#first-section .text-case');
	var $btn1 = $('#first-section .btn-link');

	//after leaving section 2
	if(index == 1 && direction =='down'){
	var tl = new TimelineLite();
	tl
	.from($textCase2, 0.3, {y: 80, opacity: 0}, '+0.5')
	.from($companyName2, 0.3, {y: 80, opacity: 0}, '-=0.2')
	.from($description2, 0.3, {y: 80, opacity: 0}, '-=0.3')
	.from($btn2, 0.3, {y: 80, opacity: 0}, '-=0.2');
	} else if(index == 2 && direction == 'up'){
	var tl2 = new TimelineLite();
	tl2
	.from($textCase1, 0.3, {y: -80, opacity: 0}, '+0.5')
	.from($companyName1, 0.3, {y: -80, opacity: 0}, '-=0.2')
	.from($description1, 0.3, {y: -80, opacity: 0}, '-=0.3')
	.from($btn1, 0.3, {y: -80, opacity: 0}, '-=0.2');
	}
	}
	});

}
