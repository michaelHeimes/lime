jQuery( document ).ready(function($) {
	
	var _app = window._app || {};
		
	_app.emptyParentLinks = function() {
			
		$('.menu li a[href="#"]').click(function(e) {
		    e.preventDefault ? e.preventDefault() : e.returnValue = false;
		});	
		
	};
	
	_app.fixed_nav_hack = function() {
			
		$('.off-canvas').on('opened.zf.offCanvas', function() {
			$('#off-canvas').fadeIn(200);
			$('header.header').css('postiion', 'fixed');
		});
		
		$('.off-canvas').on('close.zf.offCanvas', function() {
			$('#off-canvas').fadeOut(200);
			$('header.header').css('postiion', 'absolute');
		});
		
		$(window).on('resize', function() {
			if ($(window).width() > 1023) {
				$('.off-canvas').foundation('close');
				$('header.header').removeClass('off-canvas-content has-transition-push');
			}
		});

	}
	
	_app.blog_gradient_bg = function() {
		
		if( $('body').hasClass('blog') || $('body').hasClass('archive') || $('body').hasClass('single')) {
			$(window).on('resize load', function(event) {
				let $headerHeight = $('header.header').height();
				$('header.article-header.page-banner .bg').css('top', -$headerHeight)				
			})
		}
		
	}
	
	_app.testimonial_slider = function() {
		if ($('.testimonial-slider.swiper .swiper-slide').length > 1) {
			const swiper = new Swiper('.testimonial-slider', {
				// Optional parameters
				loop: false,
				loopAdditionalSlides: 2,
				slidesPerView: 1,
				spaceBetween: 0,
				speed: 400,
				effect: 'fade',
					fadeEffect: {
						crossFade: true
					},
			
				// If we need pagination
				pagination: {
					el: '.swiper-pagination',
				},
				
				// Navigation arrows
				navigation: {
					nextEl: '.swiper-btn.button-next',
					prevEl: '.swiper-btn.button-prev',
				},
			});
		}
	}
			
	_app.init = function() {
		
		// Standard Functions
		_app.emptyParentLinks();
		_app.fixed_nav_hack();
		
		// Custom Functions
		_app.testimonial_slider();
		_app.blog_gradient_bg();
	}


	// initialize functions on load
	$(function() {
		_app.init();
	});

});