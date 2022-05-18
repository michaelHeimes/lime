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
			
	_app.init = function() {
		
		// Standard Functions
		_app.emptyParentLinks();
		_app.fixed_nav_hack();
	}


	// initialize functions on load
	$(function() {
		_app.init();
	});

});