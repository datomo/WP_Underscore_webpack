/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {
	//bind background-color to html
	wp.customize( 'background-color', function( value ) {
		value.bind( function( newval ) {
        $('html').css("background-color", newval);
		} );
	} );

	//bind background-color to header
	wp.customize( 'menu-color', function( value ) {
		value.bind( function( newval ) {
        $('header').css("background-color", newval);
		} );
	} );

} )( jQuery );
