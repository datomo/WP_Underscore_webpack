(function ($) {
    $(document).ready(function ($) {
        $('input[data-input-type]').on('input change', function () {
            var val = $(this).val();
            $(this).prev('.cs-range-value').html(val);
            $(this).val(val);
        });
    })

    /**
     * Run function when customizer is ready.
     */
    wp.customize.bind('ready', function () {
      alert("ready")
      wp.customize.control('slide-type-1', function (control) {
        /**
         * Run function on setting change of control.
         */
        control.setting.bind(function (value) {
          if (value == "4") {
            wp.customize.control('image_100_1').activate();
            // $('#customize-control-image_100_1').show();
          }else {
            wp.customize.control('image_100_1').deactivate();
            // $('#customize-control-image_100_1').hide()
          }
        });

      });

    });

})(jQuery);
