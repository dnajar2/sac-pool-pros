/*
* Stone OnePage Actions JS - Stone Multipurpose
* Copyright 2014, Ararazu
* www.ararazu.com
*/


/* Table of Contents
==================================================
	
	#Stone OnePage Actions
	# */
	

/* Stone OnePage Actions
================================================== */

	(function(){
		"use strict";
		
		// Variables
		var transitionTime	= 1200;
		var hash						= window.location.hash;
		var topSpace				= $('#top-space');
		var topContainer		= $('#top');
		var topHeight				= topContainer.height();
		var firstSection		= $('.first-section');
		var topMenu					= $('#top-menu');
		var toTop						= $('#to-top');
		var about						= $('#about');
		var services				= $('#services');
		var portfolio				= $('#portfolio');
		var testimonials		= $('#testimonials');
		var contact					= $('#contact');
		var vW							= $(window).width();
		var vH							= $(window).height();
		var carousel				= $('.carousel');
		var carouselInner		= carousel.find('.wrapper-inner');
		var wLi							= '940'; // initial value, change when resize
		
		// Menu Functions
		function menuActive(actMenu){
			topMenu.find('a').each(function(event){
				$(this).removeClass('active');
				if ( $(this).attr('href') == ''+actMenu+'') {
					$(this).addClass('active');
				}
			});
			return false;
		}

		// Counters Functions
		function counterNow(element, number, max, time) {
			var counterloop = setInterval( function(){
				number = (parseInt(number)+1);
				if (number==max) { clearInterval(counterloop); }
				$('#'+element+'').html(number);
			}, time);
		}

		// Carousel Functions
		var carouselInterval			= "";
		var timeCarousel					= 6000;
		var numberOfTestimonials	= testimonials.find('ul.testimonial li').size();
		function setCarousel() {
			// Testimonials
			testimonials.find('.container').each(function(){
				wLi = $(this).width();
			});
			carousel.find('li').css('width', wLi);
		}
		setCarousel();
		function goCarousel(number) {
			testimonials.find('.bullet').removeClass('active');
			testimonials.find('#bullet-'+number+'').addClass('active');
			setCarousel();
			var number = parseInt(number);
			var positionCarousel = (number - 1)*wLi;
			if (positionCarousel > 0) {
				positionCarousel = -(positionCarousel);
			}
			carouselInner.stop().animate({ marginLeft: positionCarousel }, 600, 'easeOutQuad');
		}
		function autoPlayCarousel(numberBulletClicked) {
			if ( !numberBulletClicked ) { numberBulletClicked = 2; }
			carouselInterval = setInterval(function(){
				goCarousel(numberBulletClicked);
				if (numberBulletClicked >= numberOfTestimonials) {
					numberBulletClicked = 1;
				} else {
					numberBulletClicked++;
				}
			}, timeCarousel);
		}
		autoPlayCarousel();
		function resetIntervalCarousel(numberBulletClicked) {
			clearInterval(carouselInterval);
			autoPlayCarousel(numberBulletClicked);
		}

		// Resizing Viewport
		// Slider File:  js/arara-slider.js
		var sldshow = $('#slideshow');
		sldshow.css('height', vH);
		var goCrsl = 1;
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

			// reset slideshow height
			if ( $(window).scrollTop() <= vH ) {
				sldshow.css('height', vH);
			}

			// reset testimonials carousel
			goCrsl = testimonials.find('.bullets > .active').attr('id');
			goCrsl = goCrsl.split('-'); goCrsl = goCrsl[1];
			goCarousel(goCrsl);
		});

		// Menu Click - Going To Sections
		function goToSection(offset) {
			$('html, body').animate({ scrollTop: offset }, transitionTime, 'easeInOutExpo');
			return false;
		}
		// On any a.goto or a.menu is clicked
		$('a.goto, a.menu').on('click', function(event) {
			var idSection = $(this).attr('href');
			var offset    = $(idSection).offset().top;
			if ( !(idSection == '#top') ) { offset = offset - topHeight; }

			event.stopPropagation();
			goToSection(offset);
			return false;
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

		// Open Modal
		var topScrolled	= 0;
		var persons			= $('.personModal').length;
		$('.open-modal').on('click', function(){
			topScrolled = $(document).scrollTop();
			var idContentModal = $(this).attr('href');
			$('body').css('position', 'fixed').css('width', '100%');
			$('#back-modal').show(); $('#modal').show();
			$(''+idContentModal+'').addClass('active').fadeIn((transitionTime/3));
			return false;
		});
		
		// Close Modal
		$('.modal-close').on('click', function(){
			$('.contentModal').removeClass('active').fadeOut((transitionTime/3), function(){
				$('body').css('position', 'relative').css('width', 'auto');
				$('#back-modal').fadeOut((transitionTime/3)); $('#modal').fadeOut((transitionTime/3));
			});
			$('html, body').animate({ scrollTop: topScrolled }, 1);
		});

		// Next Modal (Person of team)
		$('.modal-next').on('click', function(){
			var idPersonActive	= $('.contentModal.personModal.active').attr('id');
			var numberPersonId	= parseInt( idPersonActive.split('-')[1] );
			if ( numberPersonId == persons ) { numberPersonId = 0; } numberPersonId = numberPersonId+1;			
			$('.contentModal').removeClass('active').fadeOut((transitionTime/3));
			setTimeout( function(){
				$('#person-'+numberPersonId+'').addClass('active').fadeIn((transitionTime/3));
			}, ((transitionTime/3) + 100) );
		});
		// Previous Modal (Person of team)
		$('.modal-previous').on('click', function(){
			var idPersonActive	= $('.contentModal.personModal.active').attr('id');
			var numberPersonId	= parseInt( idPersonActive.split('-')[1] );
			if ( numberPersonId == 1 ) { numberPersonId = (persons+1); } numberPersonId = numberPersonId-1;			
			$('.contentModal').removeClass('active').fadeOut((transitionTime/3));
			setTimeout( function(){
				$('#person-'+numberPersonId+'').addClass('active').fadeIn((transitionTime/3));
			}, ((transitionTime/3) + 100) );
		});

		// Basic jQuery Slider - About
		$('#image-rotator').bjqs({
			// w + h to enforce consistency
			width:						460,		// image width
			height:						280,		// image height
			// transition valuess
			animtype:					'fade',	// accepts 'fade' or 'slide'
			animduration:			500,		// length of transition
			animspeed:				3000,		// delay between transitions
			automatic:				true,		// enable/disable automatic slide rotation
			// control and marker configuration
			showcontrols:			true,		// enable/disable next + previous UI elements
			centercontrols:		true,		// vertically center controls
			nexttext:					'<i class="fa fa-angle-right"></i>',	// text/html inside next UI element
			prevtext:					'<i class="fa fa-angle-left"></i>',		// text/html inside previous UI element
			showmarkers:			true,		// enable/disable individual slide UI markers
			centermarkers:		true,		// horizontally center markers
			// interaction values
			keyboardnav:			true,		// enable/disable keyboard navigation
			hoverpause:				true,		// enable/disable pause slides on hover
			// presentational options
			usecaptions:			true,		// enable/disable captions using img title attribute
			randomstart:			false,	// start from a random slide
			responsive:				true		// enable responsive behaviour
		});

		// Accordion Click - Open Description
		$('.accordion > li > a').on('click', function() {
			if ( $(this).hasClass('active') ) {
				$(this).removeClass('active');
				$(this).find('i').removeClass('fa-minus').addClass('fa-plus');
				$(this).parent().find('p.description').slideUp(600);
			} else {
				$('.accordion > li > a').removeClass('active');
				$('.accordion > li > a > i').removeClass('fa-minus').addClass('fa-plus');
				$('.accordion > li p').slideUp(600);
				$(this).addClass('active');
				$(this).find('i').removeClass('fa-plus').addClass('fa-minus');
				$(this).parent().find('p.description').slideDown(600);
			}
			return false;
		});

		// Testimonials (Carousel)
		testimonials.find('.bullet').on('click', function() {
			var idBullet = $(this).attr('id');
			var splitIdBullet = idBullet.split('-');
			var numberBullet = splitIdBullet[1];
			var nextBullet = (parseInt(numberBullet)+1);
			if (numberBullet >= numberOfTestimonials) { nextBullet = 1; }
			goCarousel(numberBullet);
			resetIntervalCarousel(nextBullet);
		});
		testimonials.find('.arrow').on('click', function() {
			var activeBullet = testimonials.find('.bullets .active');
			var idActBullet = activeBullet.attr('id');
			var splitIdActBullet = idActBullet.split('-');
			var numberActBullet = splitIdActBullet[1];
			if ( $(this).hasClass('arrow-left') )		{
				// Left Arrow
				numberActBullet = (parseInt(numberActBullet)-1);
				var nextActBullet = (parseInt(numberActBullet)+1);
				if (numberActBullet <= 0) {
					numberActBullet = numberOfTestimonials;
					nextActBullet = 1;
				}				
			}
			if ( $(this).hasClass('arrow-right') )	{
				// Right Arrow
				numberActBullet = (parseInt(numberActBullet)+1);
				var nextActBullet = (parseInt(numberActBullet)+1);
				if (numberActBullet > numberOfTestimonials) {
					numberActBullet = 1;
					nextActBullet = 2;
				}
			}
			goCarousel(numberActBullet);
			resetIntervalCarousel(nextActBullet);
		});
		
		// Portfolio Lightbox
		$('.gallery a.lightbox').lightbox();

		// Featured Clients - Owl Slider
		$("#owl-clients").owlCarousel({
			autoPlay:						2000, //Set AutoPlay to 2 seconds
			items :							4,
			itemsDesktop :			[1199,	3],
      itemsDesktopSmall :	[979, 	3],
      itemsTablet:				[767, 	2],
      itemsMobile :				[477, 	1],
		});

		// Contact Form - jQuery Validate
		$("#contactForm").validate({
			rules: {
				'contact-name': {
					required:					true,
					minlength:				3
				},
				'contact-email': {
					required:					true,
					email:						true
				},	
				'contact-subject':	"required",
				'contact-message':	"required"
			},
			messages: {
				'contact-name': {
					required:					"Please enter your name",
					minlength:				"Please enter 3 or more characters"
				},
				'contact-email':		"Please enter a valid email address",
				'contact-subject':	"Please enter a valid subject",
				'contact-message':	"Please enter your message"
			},
			submitHandler: function (form) {
				$('#returnContact').fadeIn(1500);
				$.ajax({
					type:	"POST",
					url:	"form/send-contact.php",
					data:	$(form).serialize(),
					success: function (data) {
						$('#returnContact').fadeOut(300).removeClass('wait');
						setTimeout(function(){
							$('#returnContact').html(data).fadeIn(600);
						}, 300);
					},
					error: function () {
						$('#returnContact').fadeOut(300).removeClass('wait');
						setTimeout(function(){
							$('#returnContact').html('Sorry...Your browser can\'t called this function!').fadeIn(600);
						}, 300);
					}
				});
				return false; // required to block normal submit since you used ajax
			}
		});

		// Setting variables
		// About Section
		var timesAbout				= 0;
		var timesCounters			= 0;
		var timesTeam					= 0;
		var timesJobs					= 0;
		var timesWhyChoose		= 0;
		var timesWeDoBetter		= 0;

		// Services Section
		var timesService			= 0;

		// Portfolio Section
		var timesPortfolio		= 0;

		// Parallax Settings
		var prlxTeamX					= 0;
		var prlxTeamY					= 0;
		var prlxTeamH					= 0;
		var prlxTeamV					= 2;

		var prlxTestimonialX	= 0;
		var prlxTestimonialY	= 0;
		var prlxTestimonialH	= 15;
		var prlxTestimonialV	= 0;

		var lastScrollTop			= 0;

		// Scrolling Page
		$(window).scroll(function() {
			
			// Parallax settings
			prlxTestimonialH	= ( ((vH - $('#testimonials').height()) / vH) * 4);
			var st = $(this).scrollTop();
			if (st > lastScrollTop){
				// downscroll code
				prlxTeamX					= '-='+prlxTeamV+'px';
				prlxTeamY					= '-='+prlxTeamH+'px';
				prlxTestimonialX	= '-='+prlxTestimonialV+'px';
				prlxTestimonialY	= '-='+prlxTestimonialH+'px';
			} else {
				// upscroll code
				prlxTeamX					= '+='+prlxTeamV+'px';
				prlxTeamY					= '+='+prlxTeamH+'px';
				prlxTestimonialX	= '+='+prlxTestimonialV+'px';
				prlxTestimonialY	= '+='+prlxTestimonialH+'px';
			}
			lastScrollTop = st;
		
			// Menu Behavior
			// Affix menu
			if ( $(window).scrollTop() >= vH )	{
				if ( !(topContainer.hasClass('affix')) ) { topContainer.addClass('affix'); }
			} else {
				if ( topContainer.hasClass('affix') ) { topContainer.removeClass('affix'); }
			}

			// "Go to top" Button
			if ( $(window).scrollTop() >= (vH*2) ) { toTop.addClass('show'); } else { toTop.removeClass('show'); }
			
			// Counters
			if ( timesCounters==0 ) {
				if ( $(window).scrollTop() >= ($('#counters').offset().top - (vH-topHeight)) ) { 
					$('.counter').addClass('go');
					$('.counter .number').each(function(){
						var counter_from		= $(this).attr('data-counter-from');
						var counter_to			= $(this).attr('data-counter-to');
						var counter_seconds	= $(this).attr('data-counter-seconds');
						var counter_diff		= (counter_to - counter_from);
						var time_counter		= ((counter_seconds/counter_diff) * 1000);
						counterNow($(this).attr('id'), counter_from, counter_to, time_counter);
					});
					timesCounters++;
				}
			}
			// Meet Our Team!
			if ( timesTeam==0 ) {
				if ( $(window).scrollTop() >= ($('#team').offset().top - (vH-topHeight)) ) { 
					setTimeout(function(){
						$('#about .person').each( function() {
							$(this).addClass('go');
						});
					}, 100);
					timesTeam++;
				}
			}
			// jobs
			if ( timesJobs==0 ) {
				if ( $(window).scrollTop() >= ($('#jobs').offset().top - (vH-topHeight)) ) {
					$('.icons i').each(function(){
						$(this).addClass('go');
					});
					timesJobs++;
				}
			}
			// Why choose us?
			if ( timesWhyChoose==0 ) {
				if ( $(window).scrollTop() >= ($('#why-choose').offset().top - (vH-topHeight)) ) {
					$('#about .accordion > li > a').each( function() { $(this).addClass('go'); });
					timesWhyChoose++;
				}
			}
			// Here we do better...
			if ( timesWeDoBetter==0 ) {
				if ( $(window).scrollTop() >= ($('#we-do-better').offset().top - (vH-topHeight)) ) {
					$('#about .skills > li > span.wait').each( function() {
						var skillPercentage = $(this).attr('data-value');     
						$(this).css('width', ''+skillPercentage+'%');
						$(this).removeClass('wait');
					});
					timesWeDoBetter++;
				}
			}

			// Each Service
			if ( timesService==0 ) {
				if ( $(window).scrollTop() >= ($('#service').offset().top - (vH-topHeight)) ) {
					$('.service').each(function() {
						$(this).addClass('go');
					});
					timesService++;
				}
			}

			// Show Portfolio Images
			if ( timesPortfolio==0 ) {
				if ( $(window).scrollTop() >= ($('#work-gallery').offset().top - (vH-topHeight)) ) {
					$('#work-gallery .work').each( function() {
						$(this).addClass('go');
					});
					timesPortfolio++;
				}
			}
			
			// Section "Start"
			// ==================================================
			if ( $(window).scrollTop() < (about.offset().top - (topHeight*2)) ) { 
				menuActive('#start');				
			}

			// Section "About"
			// ==================================================
			if ( $(window).scrollTop() >= (about.offset().top - (topHeight*2)) ) {
				menuActive('#about');
				// Parallax Background (Team)
				$('#team').stop().animate({'background-position-x': prlxTeamX, 'background-position-y': prlxTeamY }, 50, 'easeOutQuad');
			}

			// Section "Services"
			// ==================================================
			if ( $(window).scrollTop() >= (services.offset().top - (topHeight*2)) ) {
				menuActive('#services');
				// Parallax Background (Testimonials)
				if ( ($(window).scrollTop() >= ($('#testimonials').offset().top - (vH))) && ($(window).scrollTop() < ($('#testimonials').offset().top + $('#testimonials').height())) ) {
					$('#testimonials').animate({'background-position-x': prlxTestimonialX, 'background-position-y': prlxTestimonialY }, 1, 'easeOutQuad');
				}
			}

			// Section "Portfolio"
			// ==================================================
			if ( $(window).scrollTop() >= (portfolio.offset().top - (topHeight*2)) ) {
				menuActive('#portfolio');
			}

			// Section "Contact"
			// ==================================================
			if ( $(window).scrollTop() >= (contact.offset().top - (topHeight*2)) ) {
				menuActive('#contact');
			}
		});

		$( window ).load(function() {
			$('html, body').animate({ scrollTop: 0 }, 1);
			$('.loading').fadeOut(600);
			$('#show-all').click();
			araraSlider();
			araraAutoplay();

			// Isotope Plugin
			var $container = $('#container');
			$container.isotope({
				masonry: {
					columnWidth:			1
				}
			});
			var $optionSets = $('#options .option-set'),
			$optionLinks = $optionSets.find('a');
			$optionLinks.click(function(){
				var $this = $(this);
				// don't proceed if already selected
				if ( $this.hasClass('selected') ) {
					return false;
				}
				var $optionSet = $this.parents('.option-set');
				$optionSet.find('.selected').removeClass('selected');
				$this.addClass('selected');
				// make option object dynamically, i.e. { filter: '.my-filter-class' }
				var options = {},
				key = $optionSet.attr('data-option-key'),
				value = $this.attr('data-option-value');
				// parse 'false' as false boolean
				value = value === 'false' ? false : value;
				options[ key ] = value;
				if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
					// changes in layout modes need extra logic
					changeLayoutMode( $this, options )
				} else {
					// otherwise, apply new options
					$container.isotope( options );
				}
				return false;
			});
			// Sites using Isotope markup
			var $sites = $('#sites'),
					$sitesTitle = $('<h2 class="loading"><img src="http://i.imgur.com/qkKy8.gif" />Loading sites using Isotope</h2>'),
					$sitesList = $('<ul class="clearfix"></ul>');
			$sites.append( $sitesTitle ).append( $sitesList );
			$sitesList.isotope({
				layoutMode: 'cellsByRow',
				cellsByRow: { columnWidth: 290, rowHeight: 400 }
			});
			var ajaxError = function(){
				$sitesTitle.removeClass('loading').addClass('error').text('Could not load sites using Isotope :(');
			};
			// Portfolio - Isotope Gallery
			$(window).on('resize', function(){
				setTimeout(function(){ $container.isotope('reLayout'); }, 1200);
			});

			var initialOffset = 0;
			if ( hash ) {
				initialOffset = ( $(hash).offset().top - topHeight );
				$('html, body').animate({ scrollTop: ''+initialOffset+'px' }, transitionTime);
			}
			
		});

	})();