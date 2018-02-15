/**
* jquery.arara-slider.js v1.0.0
* http://www.ararazu.com
*
* Licensed under the MIT license.
* http://www.opensource.org/licenses/mit-license.php
* 
* Copyright 2014, Ararazu
* http://www.ararazu.com
*/

// Caching
var arara = $('#slideshow');

// Prev and Next Buttons
arara.find('.prev').on('click', function(p){
	p.preventDefault();
	resetInterval();
	araraSlider('prev');
});
arara.find('.next').on('click', function(n){
	n.preventDefault();
	resetInterval();
	araraSlider('next');
});

// Autoplay
var intervalSlide;
function araraAutoplay() {	
	var interval      = 8000;
	intervalSlide = setInterval( function(){ araraSlider(); }, interval);
}

function resetInterval() {
	clearInterval(intervalSlide);
	araraAutoplay();
}

// Slideshow Animations
var sliderRotate = 0;
function araraSlider(direction) {
	sliderRotate++;
	if (sliderRotate == 1) {
		var control = '<input name="araraControl" id="araraControl" type="hidden" value="0" style="visibility:hidden; display: none;" />';
		$('body').append(control);
	}

	var slides = $('.arara-slider .arara-slide').length;
	var x = $('#araraControl');
	var y = 0;

	if (direction=='next' || (!direction) ) {
		var xval = ( parseInt(x.val()) + 1);
	} else {
		var xval = ( parseInt(x.val()) - 1);
		if (xval <= 0) { xval = slides; }
	}
	if (xval > slides) { xval = 1; }
	
	var currentSlide = $('.arara-slider #slide-'+(xval)+'');
	var elements = currentSlide.find('.animation').length;
	var toXY, toX, toY, newX, newY, offsetX, offsetY, type, time, delay, currentElem = '';
	
	// Hide elements from all slides
	var timeFade		= 800;
	var allBgImgs		= $('.arara-slider .arara-slide .bg-img');
	var allElements	= $('.arara-slider .arara-slide .animation');
	var slideColPat	= $('.arara-slider #slide-'+(xval)+' .over-color, .arara-slider #slide-'+(xval)+' .over-pattern');

	var otherSlides	= $('.arara-slider .arara-slide:not(#slide-'+(xval)+')');
	var otherBgImgs	= $('.arara-slider .arara-slide:not(#slide-'+(xval)+') .bg-img');
	var otherColPat	= $('.arara-slider .arara-slide:not(#slide-'+(xval)+') .over-color, .arara-slider .arara-slide:not(#slide-'+(xval)+') .over-pattern');
	
	currentSlide.css('visibility', 'visible').css('z-index', 3).animate({opacity: 1}, timeFade, function() {
		otherSlides.css('visibility', 'hidden').animate({opacity: 0}, timeFade, function(){			
			otherSlides.css('z-index', 2);
			otherBgImgs.css('visibility', 'hidden').animate({opacity: 0}, 10);
			otherColPat.css('visibility', 'hidden');//.animate({opacity: 0}, 10);
		});
		allBgImgs.css('visibility', 'visible').animate({opacity: 1}, timeFade);
	});
	allElements.css('visibility', 'hidden').animate({opacity: 0}, timeFade);
	slideColPat.css('visibility', 'visible');

	// Show elements from current slide
	while (y < elements) {
		currentElem	= currentSlide.find('.elem-'+(y+1)+'');
		toXY			= currentElem.data('xy');
		var dataSplitXY = toXY.split(',');
		offsetX	= currentElem.offset().top;
		offsetY	= currentElem.offset().left;
		toX			= parseInt(dataSplitXY[0].replace(" ",""));
		newX		= toX + offsetX;
		toY			= parseInt(dataSplitXY[1].replace(" ",""));
		newY		= toY + offsetY;
		type		= currentElem.data('type');
		time		= currentElem.data('time');
		delay		= currentElem.data('delay') + timeFade;

		currentElem.css('visibility', 'hidden').animate({ opacity: 0 }, 1);
		if ( currentElem.hasClass('top') )			{ currentElem.css('top', toX);		}
		if ( currentElem.hasClass('bottom') )		{ currentElem.css('bottom', toX);	}
		if ( currentElem.hasClass('right') )		{ currentElem.css('right', toY);	}
		if ( currentElem.hasClass('left') )			{ currentElem.css('left', toY);		}
		if ( currentElem.hasClass('hcenter') )	{ currentElem.css('left', newY);	}
		if ( currentElem.hasClass('vcenter') )	{ currentElem.css('top', newX);		}
		if ( currentElem.hasClass('ccenter') )	{ currentElem.css('left', newY); currentElem.css('top', newX);	}
		
		if ( currentElem.hasClass('bottom') ) {
			if ( currentElem.hasClass('right') ) {
				currentElem.delay(delay).css('visibility', 'visible').animate({ bottom: 0, right: 0, opacity: 1 }, time, ''+type+'');
			} else {
				currentElem.delay(delay).css('visibility', 'visible').animate({ bottom: 0, left: 0, opacity: 1 }, time, ''+type+'');
			}
		} else {
			if ( currentElem.hasClass('right') ) {
				currentElem.delay(delay).css('visibility', 'visible').animate({ top: 0, right: 0, opacity: 1 }, time, ''+type+'');
			} else {
				currentElem.delay(delay).css('visibility', 'visible').animate({ top: 0, left: 0, opacity: 1 }, time, ''+type+'');
			}
		}
		y++;
	}

	x.val( xval );
}