(function($) {

	// First Page Animation
	$(document).one('ready',function(){
		var $borderTop = $('.border-box__top');
		var $borderRight = $('.border-box__right');
		var $borderBottom = $('.border-box__bottom');
		var $borderLeft = $('.border-box__left');
		var $navItem = $('.nav__item');
		var $logo = $('.logo');
		var $mainTitle = $('.main-about__title');
		var $mainDescription = $('.main-about__description');
		var $mainImage = $('.img-container');

		var tlBorder = new TimelineMax();
		tlBorder
		.set($borderTop, {scale: 0, opacity: 0})
		.set($borderRight, {scale: 0, opacity: 0})
		.set($borderBottom, {scale: 0, opacity: 0})
		.set($borderLeft, {scale: 0, opacity: 0})
		.to($borderTop, 0.2, {scale: 1, opacity: 1}, '+=1')
		.to($borderRight, 0.2, {scale: 1, opacity: 1})
		.to($borderBottom, 0.2, {scale: 1, opacity: 1})
		.to($borderLeft, 0.2, {scale: 1, opacity: 1})
		.from($logo, 0.2, {y: '-20', opacity: 0, clearProps: 'all'})
		.staggerFrom($navItem, 0.2, {y: '-20', opacity: 0, clearProps: 'all'}, 0.1)
		.from($mainTitle, 0.2, {y: '-20', opacity: 0, clearProps: 'all'})
		.from($mainDescription, 0.2, {y: '-20', opacity: 0, clearProps: 'all'})
		.from($mainImage, 2, {opacity: 0, clearProps: 'all'});

	});


	// Page Transition Animation
	$(document).ready(function() {
		$('body').addClass('loaded');
		$('body').onPageLoad();

		var $page = $('#wrapper'),
				options = {
					prefetch: true,
					cacheLength: 4,
					blacklist: '.contact-form',
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
							}, 500);
	        			}
					}
				},
					onReady: {
					duration: 100,
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
		var $projectName = $('.project__name');
		var $description = $('.project__text');
		var $textCase = $('.project__case');
		var $btn = $('.btn__morelink');
		function goingDown() {
			var tl = new TimelineLite();
			tl
			.from($textCase, 0.3, {y: 80, opacity: 0, clearProps: 'all'}, '+=0.5')
			.from($projectName, 0.3, {y: 80, opacity: 0, clearProps: 'all'}, '-=0.2')
			.from($description, 0.3, {y: 80, opacity: 0, clearProps: 'all'}, '-=0.3')
			.from($btn, 0.3, {y: 80, opacity: 0, clearProps: 'all'}, '-=0.2');
		}

		function goingUp() {
			var tl2 = new TimelineLite();
			tl2
			.from($textCase, 0.3, {y: -80, opacity: 0, clearProps: 'all'}, '+=0.5')
			.from($projectName, 0.3, {y: -80, opacity: 0, clearProps: 'all'}, '-=0.2')
			.from($description, 0.3, {y: -80, opacity: 0, clearProps: 'all'}, '-=0.3')
			.from($btn, 0.3, {y: -80, opacity: 0, clearProps: 'all'}, '-=0.2');
		}

		$('#fullpage').fullpage({
			navigation: true,
			navigationPosition: 'left',
			scrollingSpeed: 600,
			onLeave: function(index, nextIndex, direction){
				var leavingSection = $(this);

				if(index == 1 && direction =='down'){
					goingDown();
				}
				else if(index == 2 && direction == 'up'){
					goingUp();
				}
				else if(index == 2 && direction == 'down'){
					goingDown();
				}
				else if(index == 3 && direction == 'up'){
					goingUp();
				}
				else if(index == 3 && direction == 'down'){
					goingDown();
				}
				else if(index == 4 && direction == 'up'){
					goingUp();
				}

			}
		});

}


})( jQuery );
