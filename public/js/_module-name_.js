(function($) {
    window._ModuleName_ = window._ModuleName_ || {
        datepickerOptions: {
            lang: 'de',
            // @todo format nicht hartcodieren sondern aus der locale bestimmen/
            // vom controller übergeben lassen
            format: 'd.m.Y',
            dayOfWeekStart: 1,
            timepicker: false
        },

        datetimepickerOptions: {
            lang: 'de',
            // @todo format nicht hartcodieren sondern aus der locale bestimmen/
            // vom controller übergeben lassen
            format: 'd.m.Y H:00',
            dayOfWeekStart: 1,
            step: 60,
            //minTime: '06:00',
            //maxTime: '21:00',
            scrollTime: true,
            allowTimes: []
        }
    };

    // initialize on page load, the ajax reloads are handled via callbacks
    $(document).ready(function() {
        // @todo localize
        $.datetimepicker.setLocale('de');

        // on non-touch devices allow dropdown not only onclick but on hover
        if (!("ontouchstart" in window) && !navigator.msMaxTouchPoints) {
            $('body').on('mouseover', '.dropdown', function(e){
                $(e.currentTarget).addClass('open');
            });
            $('body').on('mouseout', '.dropdown', function(e){
                $(e.currentTarget).removeClass('open');
            });
        }

        // enable tooltips on all pages
        $('[data-toggle="tooltip"]').tooltip();

    });
}(jQuery));
