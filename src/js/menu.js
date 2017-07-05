//require vendor
require('./vendor/TweenLite.min.js')
require('script-loader!./vendor/ScrollToPlugin.min.js')

jQuery(document).ready(function(){

  // console.log("test0")
  // TweenLite.to(jQuery(".img-frame"), 10, {rotation: 360})
  // console.log(jQuery(".img-frame"))

  var $menu = jQuery('#site-navigation')
  var $window = jQuery(window)

  $menu.on("click", "div", function() {
    var $this = jQuery(this),
        href = $this.attr("rel"),
        topY = jQuery(href).offset().top;

    // TweenLite.to(jQuery("p"),1, {scale: 2, color: "blue"})
    TweenLite.to(window, 1,{scrollTo:{y:topY, offsetY: 100}, ease:Power2.easeOut})
    console.log(href)
    console.log(topY)
  })

});
