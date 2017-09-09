function openTab(evt, tabName) {
  var i, tabcontent, tablinks
  //
  // console.log(tabName)

  tabcontent = document.getElementsByClassName("tabcontent")
  for (i = 0; i < tabcontent.length; i ++){
    tabcontent[i].style.display = "none"
  }

  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  document.getElementById(tabName).style.display = "block"
  evt.currentTarget.className += " active";
}

jQuery(document).ready(function() {
  jQuery("#link-acts").on("click", function(event) {
    openTab(event, "acts")
  })
  jQuery("#link-tanz").on("click", function(event) {
    openTab(event, "tanz")
  })
  jQuery("#link-slam").on("click", function(event) {
    openTab(event, "slam")
  })
})
