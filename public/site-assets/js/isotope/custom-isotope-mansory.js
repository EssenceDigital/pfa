$(window).load(function() {

    (function($) {
        var $container = $('#mansory-effect'),

            colWidth = function() {
                var w = $container.width(),
                    columnNum = 1,
                    columnWidth = 0;
                if (w > 1200) {
                    columnNum = 5;
                } else if (w > 900) {
                    columnNum = 4;
                }

                columnWidth = Math.floor(w / columnNum);
                $container.find('.item').each(function() {
                    $(this).css({
                        width: columnWidth -5,
                        marginTop: 5
                    });
                });
                return columnWidth;
            },
            isotope = function() {
                $container.isotope({
                    resizable: true,
                    itemSelector: '.item',
                    masonry: {
                        columnWidth: colWidth(),
                        gutterWidth: 0
                    }
                });
            };
        isotope();
        $(window).smartresize(isotope);
    }(jQuery));


    var $container = $('#mansory-effect');

    var $optionSets = $('#options .option-set'),
        $optionLinks = $optionSets.find('a');

    $optionLinks.click(function() {
        var $this = $(this);
        // don't proceed if already selected
        if ($this.hasClass('selected')) {
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
        options[key] = value;
        if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
            // changes in layout modes need extra logic
            changeLayoutMode($this, options)
        } else {
            // otherwise, apply new options
            $container.isotope(options);
        }

        return false;
    });

});