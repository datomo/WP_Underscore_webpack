//require vendor
require('./vendor/TweenLite.min.js')
require('script-loader!./vendor/ScrollToPlugin.min.js')

jQuery(document).ready(function(){

  // console.log("test0")
  // TweenLite.to(jQuery(".img-frame"), 10, {rotation: 360})
  // console.log(jQuery(".img-frame"))

  var $menu = jQuery('.menu')
  var $window = jQuery(window)

  $menu.on("click", "a", function(e) {
    e.preventDefault();
    var $this = jQuery(this),
        href = $this.attr("href"),
        topY = jQuery(href).offset().top;

    // TweenLite.to(jQuery("p"),1, {scale: 2, color: "blue"})
    TweenLite.to(window, 1,{scrollTo:{y:topY, offsetY: 50}, ease:Power2.easeOut})
  })


  //hamburger animation

  var $burger = jQuery('.toggle-container'),
      $buttons = jQuery('.button'),
      $first = jQuery('.button:nth-child(1)'),
      $second = jQuery('.button:nth-child(2)'),
      $third = jQuery('.button:nth-child(3)'),
      $forth = jQuery('.button:nth-child(4)')

  var tl = new TimelineLite({paused: true})
  // tl.set($second, {autoAlpha: 0})
  tl.to($buttons, 0.2, {width: "20px", top: "20px", transformOrigin: "center center"})
  tl.set($buttons, {transformOrigin: "right center"})
  // tl.staggerTo($buttons, 0.2,{rotation: "+=45"})
  tl.to($first, 0.2, {rotation: 45}, 'rotate')
  tl.to($second, 0.2, {rotation: 135}, 'rotate')
  tl.to($third, 0.2, {rotation: 225}, 'rotate')
  tl.to($forth, 0.2, {rotation: 315}, 'rotate')
  tl.set($burger, {className:"+=open"})

  $burger.on('click', function() {
    if ($burger.hasClass('open')) {
      tl.reverse()
    }else {
      tl.play()
    }
  })



});
