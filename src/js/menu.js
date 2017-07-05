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


  var $burger = jQuery('#burger')
  var $menu = jQuery('#masthead-mobile')

  var tl = new TimelineMax({paused: true})
  .set('#menu', {className:"-=closed"})
  .set('#menu', {className:"+=open"})
  // tl.set(".cross-top",{rotation:45})
  // tl.set(".cross-bottom",{rotation:-45})
  tl.staggerTo($burger.children(".text"), 0.1, {scaleX: 0}, 0.1)
  tl.to(".cross", 0.2,{ display:"block"})


  $burger.click(function(){
    if($menu.hasClass("closed")){
      TweenMax.set($menu, {className:"-=closed"})
      tl.play()
      console.log("closed")
    }else {
      TweenMax.set($menu, {className:"+=closed"})
      tl.reverse()
      console.log("open")
    }
  })

});
