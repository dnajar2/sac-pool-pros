/*
* Project Page Actions JS - Stone Multipurpose
* Copyright 2014, Ararazu
* www.ararazu.com
*/


/* Table of Contents
==================================================
	
	#Stone Project Page Actions
	# */
	

/* Stone Project Page Actions
================================================== */

	(function(){
		"use strict";
		
		// Variables
		var transitionTime	= 1200;
		var topSpace				= $('#top-space');
		var topContainer		= $('#top');
		var topHeight				= topContainer.height();
		var topMenu					= $('#top-menu');
		var toTop						= $('#to-top');
		var vW							= $(window).width();
		var vH							= $(window).height();
		
		// Resizing Viewport
		$(window).on('resize', function(){
			// reset width and height
			vW = $(window).width();
			vH = $(window).height();
			
			// reset height of mobile menu
			menuList.css('max-height', ''+(vH-topHeight)+'px');

			// closing mobile menu if width >= 768
			if (vW >= '768') {
				$(this).removeClass('active');
				menuList.slideUp('fast');
				MobileNavClosed = '1';
			}
		});

		// Mobile Menu
		// Loading content
		var mainMenu	= $('#top-menu').html();
		var menuList	= $('#menu-list');
		menuList.find('#menu-content').html(mainMenu);
		menuList.css('max-height', ''+(vH-topHeight)+'px');
		// Click on Mobile Nav Icon
		var MobileNavClosed = '1';
		$('a.mobile-nav-button').on('click', function() {
			if (MobileNavClosed == '1') {
				$(this).addClass('active');
				menuList.slideDown('fast');
				MobileNavClosed = '0';
			} else {
				$(this).removeClass('active');
				menuList.slideUp('fast');
				MobileNavClosed = '1';
			}
		});
		// Click on Menu Item
		$('#menu-list a:not(.menu)').on('click', function(event) {
			if ($(this).parent().hasClass('menu')) {
				$(this).find('i').toggleClass('fa-angle-down').toggleClass('fa-angle-up');
				$(this).parent().find('ul.sub-menu').toggle();
			} else {
				$('a.mobile-nav-button').removeClass('active');
				menuList.slideUp('fast');
				MobileNavClosed = '1';
				var idSection = $(this).attr('href');
				if (idSection == '#top') {
					var offset    = $(idSection).offset().top;
				} else {
					var offset    = $(idSection).offset().top - 20;
				}
				event.stopPropagation();
				goToSection(offset);
			}
		});
		
		// <a href="#"... click return false
		$('a[href="#"]').on('click', function() {
			return false;
		});

		// Owl Slider - Project Photos
		$("#owl-slider").owlCarousel({
     	autoPlay :					2500,
			stopOnHover :				true,
			// navigation :				true, // Show next and prev buttons
			slideSpeed :				300,
			paginationSpeed :		400,
			goToFirstSpeed :		2000,
			singleItem:					true,
			autoHeight :				true
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
		// $("#owl-slider").owlCarousel({
		// 	autoPlay :					1000,
		// 	stopOnHover :				true,
		// 	navigation :				true, // Show next and prev buttons
		// 	slideSpeed :				300,
		// 	paginationSpeed :		1000,
		// 	goToFirstSpeed :		2000,
		// 	singleItem:					true,
		// 	autoHeight :				true,
		// 	transitionStyle:		"fade"
		// });

		// Scrolling Page
		$(window).scroll(function() {
			// Menu Behavior
			// Affix menu
			if ( $(window).scrollTop() >= 1 )	{
				if ( !(topContainer.hasClass('affix')) ) { topContainer.addClass('affix'); }
			} else {
				if ( topContainer.hasClass('affix') ) { topContainer.removeClass('affix'); }
			}

			// "Go to top" Button
			if ( $(window).scrollTop() >= vH ) { toTop.addClass('show'); } else { toTop.removeClass('show'); }
		});

		$( window ).load(function() {
			$('html, body').animate({ scrollTop: 0 }, 1);
			$('.loading').fadeOut(600);
		});

	})();