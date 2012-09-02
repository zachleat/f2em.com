(function()
{
		var MAX_TIMEOUT = 5000,
				DELAY = 100,
				TEST_STRING = 'AxmTYklsjo190QW',

				// From webfontloader
				// https://github.com/typekit/webfontloader/blob/master/src/core/fontwatchrunner.js
				SANS_SERIF_FONTS = 'Arial, sans-serif',
				SERIF_FONTS = 'Georgia, serif',

				options = {
						position: 'absolute',
						fontSize: 48,
						left: -999,
						top: 0
				},
				$clone = $(document.createElement('div')).css(options).html(TEST_STRING),
				$sansSerif = $clone.clone().css({fontFamily: SANS_SERIF_FONTS}).appendTo(document.body),
				$serif = $clone.clone().css({fontFamily: SERIF_FONTS}).appendTo(document.body),
				dimensions = {
						sansSerif: {
								width: $sansSerif.width(),
								height: $sansSerif.height()
						},
						serif: {
								width: $serif.width(),
								height: $serif.height()
						}
				};

		// intentional global
		FontFaceLoad = function(fontFamily)
		{
				var deferred = $.Deferred(),
						startTime = new Date();

				$sansSerif.add($serif).css({
						fontFamily: fontFamily
				});

				(function checkDimensions()
				{
						if(dimensions.sansSerif.width != $sansSerif.width() ||
								dimensions.sansSerif.height != $sansSerif.height() ||
								dimensions.serif.width != $serif.width() ||
								dimensions.serif.height != $serif.height()) {

								// get rid of this shit
								if($.browser.webkit) {
									setTimeout(function()
									{
											deferred.resolve();
									}, DELAY);
								} else {
									deferred.resolve();
								}
						} else if((new Date()).getTime() - startTime.getTime() + MAX_TIMEOUT < 0) {
								deferred.reject();
						} else {
								setTimeout(function()
								{
										checkDimensions();
								}, DELAY);
						}
				})();

				return deferred.promise();
		};
})();