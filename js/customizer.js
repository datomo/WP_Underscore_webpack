/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {
  // Update if slide 1 is displayed in real time...
	wp.customize( 'slide_1', function( value ) {
		value.bind( function( newval ) {
      if(newval){
        $( '#slide-1' ).css("display", "block");
      }else {
        $( '#slide-1' ).css("display", "none");
      }
		} );
	} );

	//bind background-color to html
	wp.customize( 'background-color', function( value ) {
		value.bind( function( newval ) {
        $('html').css("background-color", newval);
		} );
	} );

} )( jQuery );
