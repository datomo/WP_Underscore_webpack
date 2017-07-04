//require vendor
require('./vendor/TweenLite.min.js')
require('script-loader!./vendor/ScrollToPlugin.min.js')

jQuery(document).ready(function( jQuery ) {

  console.log("test")

  var slide1 = jQuery('#link-slide-1')
  var slide2 = jQuery('#link-slide-2')
  var slide3 = jQuery('#link-slide-3')
  var slide4 = jQuery('#link-slide-4')

  slide1.click(function() {
    TweenLite.to(window, 0.2,{scrollTo:{y:"#slide-1", offsetY:70}, autoKill: true})
  })

  slide2.click(function() {
    TweenLite.to(window, 0.2,{scrollTo:{y:"#slide-2", offsetY:70}, autoKill: true})
  })

  slide3.click(function() {
    TweenLite.to(window, 0.2,{scrollTo:{y:"#slide-3", offsetY:70}, autoKill: true})
  })

  slide4.click(function() {
    TweenLite.to(window, 0.2,{scrollTo:{y:"#slide-4", offsetY:70}, autoKill: true})
  })


  jQuery("#test").html("jQuery says Hello World");
});
