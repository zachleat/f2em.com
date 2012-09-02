// ----------------------------------------------------------
// A short snippet for detecting versions of IE in JavaScript
// without resorting to user-agent sniffing
// ----------------------------------------------------------
// If you're not in IE (or IE version is less than 5) then:
//     ie === undefined
// If you're in IE (>=5) then you can determine which version:
//     ie === 7; // IE7
// Thus, to detect IE:
//     if (ie) {}
// And to detect the version:
//     ie === 6 // IE6
//     ie > 7 // IE8, IE9 ...
//     ie < 9 // Anything less than IE9
// ----------------------------------------------------------

// UPDATE: Now using Live NodeList idea from @jdalton

var ie = (function(){

	var undef,
		v = 3,
		div = document.createElement('div'),
		all = div.getElementsByTagName('i');
	
	while (
		div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->',
		all[0]
	);

	return v > 4 ? v : undef;
}());

jQuery.fn.findSelf = function(selector)
{
	return this.find(selector).andSelf().filter(selector);
};

// F2EM Code Starts

// Seastyle plugin for dynamic stylesheets
(function($) {
	var ids = {};

	$.seastyle = function(selector, prop, value)
	{
		var appendTo = document.head || document.getElementsByTagName('head')[0] || document.body,
			id = ids[selector];

		if(id) {
			$('#' + id).remove();
		} else {
			ids[selector] = id = 'seastyle-' + parseInt(Math.random()*1e9, 10);
		}
	
		return $('<style>' + selector + ' { ' + prop + ': ' + value + ' }</style>')
			.attr('id', id)
			.appendTo(appendTo);
	};
})(jQuery);

jQuery.fn.manifestoBigtext = function()
{
	return this.bigtext({
		childSelector: '> div, > span'
	});
};

jQuery.fn.manifestoSlideInit = function()
{
	var loadedClass = 'manifesto-slide-initialized';
	return this.filter('.manifesto-slide').not('.' + loadedClass).addClass(loadedClass).findSelf('.manifesto-bigtext').manifestoBigtext();
};

Manifesto = {
	init: function()
	{
		$('.manifesto-slide').slice(0,1).manifestoSlideInit();
	},
	scrollTo: function()
	{
		var hash = window.location.hash,
			$hash = $(hash),
			index;

		if(!!hash && $hash.length) {
			index = $('.manifesto-slide').index($hash);
			$('div.sausage').eq(index).trigger('click');
			Manifesto.initializeSlide(index);
		}
	},
	previousSlide: function()
	{
		var $sausage = $('div.sausage-current');
		$sausage.prev().trigger('click');
		Manifesto.initializeSlide($sausage.index()-1);
	},
	nextSlide: function()
	{
		var $sausage = $('div.sausage-current');
		$sausage.next().trigger('click');
		Manifesto.initializeSlide($sausage.index()+1);
	},
	initializeSlide: function(index, forceInit)
	{
		var loadedKey = 'manifesto-loaded';
		if(!ie || ie >= 8) {
			var $slides = $('.manifesto-slide');
			$slides.slice(Math.max(index - 1, 0), index + 1).manifestoSlideInit();
			ManifestoDemo.refreshSausage();
		}
	}
};

ManifestoDemo = {
	init: function()
	{
		$(document)
			.unbind('keypress.manifesto-demo')
			.bind('keypress.manifesto-demo', ManifestoDemo.keypressHandler);

		$('button').button();
	},
	refresh: function()
	{
		$.seastyle('.manifesto-slide', 'min-height', ($(window).height() - 40) + 'px');

		if(typeof Snapper != 'undefined') {
			Snapper('.manifesto-slide');
		}

		ManifestoDemo.refreshSausage();
	},
	refreshSausage: function()
	{
		$(window).sausage({
			page: '.manifesto-slide',
			update: function(event)
			{
				var $sausage = $('div.sausage-current');
				Manifesto.initializeSlide($sausage.index() + 1);
			}
		});
	},
	keypressHandler: function(event)
	{
		var J = 106,
			K = 107,
			UP_ARROW = 38,
			DOWN_ARROW = 40,
			LEFT_ARROW = 37,
			RIGHT_ARROW = 39,
			subslideActiveClass = 'manifesto-subslide-active';

		var $sausage = $('div.sausage-current'),
			which = event.which || event.keyCode || event.charCode;

		switch(which) {
		case J:
		case UP_ARROW:
			Manifesto.previousSlide();
			// TODO reset previous subslides to default
			return false;
		case K:
		case DOWN_ARROW:
			Manifesto.nextSlide();
			// TODO reset previous subslides to default
			return false;
		case RIGHT_ARROW:
		case LEFT_ARROW:
			var $slide = $('.manifesto-slide').eq($sausage.index()),
				$subslide = $slide.find('.' + subslideActiveClass);
				$nextsubslide = $subslide[which == RIGHT_ARROW ? 'next' : 'prev']();

			if($nextsubslide.length) {
				// only animate when going to the right.
				if(which == RIGHT_ARROW) {
					$subslide.fadeOut(function() {
						$(this).removeClass(subslideActiveClass);

						$nextsubslide.fadeIn(function() {
							$(this).addClass(subslideActiveClass);
						});
					});
				} else {
					$subslide.hide().removeClass(subslideActiveClass);
					$nextsubslide.show().addClass(subslideActiveClass);
				}
			}
			return false;
		}
	}
};

$(function() {
	document.documentElement.className += ' f2em-js';

	FontFaceLoad('LeagueGothicRegular').done(function()
	{
		Manifesto.init();
		ManifestoDemo.init();
		ManifestoDemo.refresh();
		Manifesto.scrollTo();
	});
});

$(window).bind('resize', $.throttle(200, function()
{
	ManifestoDemo.refresh();
	// bigtext resize is built into the plugin.
}));
