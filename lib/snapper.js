// Snap to Scroll for Selectors.

;(function(window, $) {
    var $w = $(window),
        tops = {},
        timeout,
        defaultOptions = {
            reset: false
        },
        Snapper = {
            minimumTolerance: 10,
            tolerance: function(element)
            {
                return Math.max(Snapper.minimumTolerance, Math.round($(element).outerHeight(true) / 2));
            },
            init: function(selector, options)
            {
                options = $.extend({}, defaultOptions, options);

                if(options.reset) {
                    Snapper.reset();
                }

                $(selector).each(function()
                {
                    var $t = $(this),
                        top = Math.round($t.offset().top);

                    if(!tops[top]) {
                        tops[top] = [];
                    }

                    tops[top].push(this);
                });

                $w.unbind('scroll.snapper', Snapper.scrollEvent)
                    .bind('scroll.snapper', Snapper.scrollEvent);
            },
            reset: function()
            {
                tops = {};
            },
            scrollEvent: function()
            {
                window.clearTimeout(timeout);
                timeout = window.setTimeout(function()
                {
                    var top = $w.scrollTop(),
                        elementOffset,
                        tolerance;

                    for(var j in tops) {
                        elementOffset = parseInt(j, 10);
                        tolerance = Snapper.tolerance(tops[j]);

                        if(elementOffset - tolerance <= top && top <= elementOffset + tolerance) {
                            // this line triggers another scroll event.
                            $w.scrollTop(elementOffset);
                            $(document).trigger('snapperSnappedTo', elementOffset);
                            break;
                        }
                    }
                }, 200);
            }
        };

    window.Snapper = Snapper.init;
})(this, jQuery);
