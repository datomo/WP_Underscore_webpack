(function ($) {
    $(document).ready(function ($) {
        $('input[data-input-type]').on('input change', function () {
            var val = $(this).val();
            $(this).prev('.cs-range-value').html(val);
            $(this).val(val);
        });


        console.log(wp.customize.control('slide-type-' + '1').setting._value)
        if(wp.customize.control('slide-type-' + '1').setting._value == 4) {
          $('#customize-control-image_100_1').show()
        }else {
          console.log(wp.customize.control('image_100_1'))
          $('#customize-control-image_100_1').hide()
        }

        wp.customize.bind( 'ready', function() {

          var customize = this; // Customize object alias.
          customize( 'slide-type-1', function( setting ) {
            alert(test)
          } );

      	} );

    })
})(jQuery);
