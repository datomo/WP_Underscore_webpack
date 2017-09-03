

jQuery(document).ready(function(){
  var open_button = jQuery('.open_plan')
  var close_button = jQuery('.close')
  var download_button = jQuery('.download')
  var overlay_container = jQuery('.overlay')

  var stand_button = jQuery('.show_stand')

  // console.log(close_button)

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

  stand_button.on("click", function () {
    jQuery('.map-holder .img_map_overlay').toggle()
    stand_button.text(function (i, text) {
      return text === "Stände anzeigen" ? " Stände ausblenden" : "Stände anzeigen"
    })

  })

  // download_button.on("click", function() {
  //
  //    window.location = 'http://localhost/wordpress/wp-content/uploads/2017/09/Ablauf_Acts_2017.pdf';
  // })

})
