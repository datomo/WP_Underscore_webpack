

jQuery(document).ready(function(){
  var open_button = jQuery('#link-plan')
  var close_button = jQuery('.close')
  var overlay_container = jQuery('.overlay')

  console.log(close_button)

  // write a function to add an overlay
  function openOverlay() {

  }

  open_button.on("click", function() {
    TweenMax.to(overlay_container, 0.2, { autoAlpha: 1})
    overlay_container.removeClass('hidden')
  })

  close_button.on("click", function() {
    TweenMax.to(overlay_container, 0.2, { autoAlpha: 0})
    overlay_container.addClass('hidden')
  })


})
