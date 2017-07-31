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
          // console.log("hide it pre")

          $(customImage).hide()
        }
      }

      var container = []
      for (i = 0; i < amount - 1; i++) {
        var slideType = 'slide-type-' + (i + 1).toString()
        var customImage = '#customize-control-image_100_' + (i + 1).toString()
        var img100 = 'image_100_' + (i + 1).toString()
        // console.log(slideType)
        wp.customize.control(slideType, function (control) {
          // console.log("wut")
          /**
           * Run function on setting change of control.
           */

          //on change it runs through all the controll and acvtivates/devactivates them
          control.setting.bind(function (value) {
            console.log("in it")
            for (i = 0; i < amount - 1; i++) {
              if (wp.customize.control('slide-type-' + (i + 1).toString()).setting._value == "4") {
                wp.customize.control(img100).activate();
                // console.log("show it")
                console.log("show this: " + container[i])
                container[i] = '#customize-control-image_100_' + (i + 1).toString()
                $(container[i]).show();
              }else {
                // wp.customize.control('image_100_1').deactivate();
                // console.log("hide it")

                container[i] = '#customize-control-image_100_' + (i + 1).toString()
                console.log("hide this: " + container[i])
                $(container[i]).hide()
              }
            }
          });
        });
      }

    });

})(jQuery);
