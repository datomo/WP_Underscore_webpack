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
      console.log("ready")

      // console.log(wp.customize.control('slide_amount').setting._value)
      var amount = wp.customize.control('slide_amount').setting._value;
      console.log(amount)
      for (i = 0; i < amount - 1; i++) {


      //variables for jquery and wp
      var slideType = 'slide-type-' + (i + 1).toString()
      var customImage = '#customize-control-image_100_' + (i + 1).toString()
      var img100 = 'image_100_' + (i + 1).toString()


        //needed after reload
      if(wp.customize.control(slideType).setting._value != "4") {
        console.log("hide it pre")

        $(customImage).hide()
      }

      // console.log(slideType)
      wp.customize.control(slideType, function (control) {
        // console.log("wut")
        /**
         * Run function on setting change of control.
         */
        console.log(control.setting._value)
        control.setting.bind(function (value) {
          console.log("in it")
          if (value == "4") {
            wp.customize.control(img100).activate();
            console.log("show it")
            $(customImage).show();
          }else {
            // wp.customize.control('image_100_1').deactivate();
            console.log("hide it")
            $(customImage).hide()
          }
        });

      });

    }

    });

})(jQuery);
