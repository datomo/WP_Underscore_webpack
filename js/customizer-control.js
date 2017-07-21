(function ($) {
    $(document).ready(function ($) {
        //change when slider gets moved
        $('input[data-input-type]').on('input change', function () {
            var val = $(this).val();
            $(this).prev('.cs-range-value').attr('value', val);
            $(this).val(val);
        });
    })
})(jQuery);
