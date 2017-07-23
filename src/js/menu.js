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
      $before = jQuery('.button:nth-child(1)'),
      $middle = jQuery('.button:nth-child(2)'),
      $after = jQuery('.button:nth-child(3)')

  var tl = new TimelineLite({paused: true})
  tl.to($before, 0.1, {y: 14}, 'start')
  tl.to($after, 0.1, {y: -14}, 'start')
  tl.set($middle, {autoAlpha: 0})
  tl.to($before, 0.2, {rotation: 45, transformOrigin: "center center"}, 'rotate')
  tl.to($after, 0.2, {rotation: -45, transformOrigin: "center center"}, 'rotate')
  tl.set($burger, {className:"+=open"})

  $burger.on('click', function() {
    if ($burger.hasClass('open')) {
      tl.reverse()
    }else {
      tl.play()
    }
  })



});
