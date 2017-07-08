
//Require SASS
require('../sass/main.sass')

// //Require CSS
// require('../style.css')

//Require scripts
require('./script')

//require vendor
require('./vendor/TweenLite.min.js')
require('script-loader!./vendor/ScrollToPlugin.min.js')


//require menu
require('./menu')

//require menu
require('./acts')

function openTab(evt, tabName) {
  var i, tabcontent, tablinks

  tabcontent = document.getElementsByClassName("tabcontent")
  for (i = 0; i < tabcontent.length; i ++){
    tabcontent[i].style.display = "none"
  }

  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  jQuery(tabName).style.display = block
  evt.currentTarget.className += " active";
}
