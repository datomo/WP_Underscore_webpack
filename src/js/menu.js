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
      $forth = jQuery('.button:nth-child(4)'),
      $menu = jQuery('.menu')

  var tl = new TimelineLite({paused: true, onComplete: addClass, onReverseComplete: removeClass})
  // tl.set($second, {autoAlpha: 0})
  tl.set(".menu", {className:"+=animating"})
  tl.to($buttons, 0.2, {width: "20px", top: "25px", transformOrigin: "center center"})
  tl.set($buttons, {transformOrigin: "right center"})
  // tl.staggerTo($buttons, 0.2,{rotation: "+=45"})
  tl.to($first, 0.2, {rotation: 45}, 'rotate')
  tl.to($second, 0.2, {rotation: 135}, 'rotate')
  tl.to($third, 0.2, {rotation: 225}, 'rotate')
  tl.to($forth, 0.2, {rotation: 315}, 'rotate')
  tl.set(".menu-item", {display: "inline-block"})
  tl.set(".menu",{position: "absolute", top: "0px", left:"0px", width: "100vw", zIndex: -1})
  tl.staggerFrom(".menu-item", 0.1, {top: "0", position: "absolute"},"0.1")
  tl.set(".menu",{className:"-=animating"})

  $burger.on('click', function() {
    if ($burger.hasClass('animating')) {
      return false;
    }else {
      if($menu.hasClass('open')){
        tl.reverse()
      }else {
        tl.play()
      }
    }
  })


});

function addClass() {
  TweenMax.set('.menu',{className:'+=open'})

}

function removeClass() {
  TweenMax.set('.menu',{className:'-=open'})

}
