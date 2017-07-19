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

	wp.customize( 'highlight-widgets', function( value ) {
		value.bind( function( newval ) {
			if (newval) {
				$('section').css("border", "solid 1px red");
			}else {
        $('section').css("border", "solid 0px red");
			}
		} );
	} );

	wp.customize( 'widget-color', function( value ) {
		value.bind( function( newval ) {
			console.log(newval);
			$('.background').css("background-color", newval);
		} );
	} );

//not working but why...
	wp.customize( 'slide-radius', function( value ) {
		value.bind( function( newval ) {
			$('.background').css("border-radius", newval.toString() + "px");
		} );
	} );

	wp.customize( 'slide-padding', function( value ) {
		value.bind( function( newval ) {
			$('.background').css("padding", newval.toString() + "px");
		} );
	} );

	wp.customize( 'shadow-color', 'shadow-hvalue', function( color, hvalue ) {
		color.bind( function( newcolor ) {
			$('.background').css("box-shadow", hvalue + "px " + "20px 20px" + " " + newcolor  );
		} );
		hvalue.bind( function( newhvalue ) {
			$('.background').css("box-shadow", newhvalue + "px " + "20px 20px" + " " + color  );
		} );
	} );

	// wp.customize( 'shadow-hvalue', function( value ) {
	// 	value.bind( function( newval ) {
	// 		var temp = $('.background').css('box-shadow').split(" ");
	// 		$('.background').css("box-shadow", temp[4] + " " + temp[3] + " " + temp[2] + " " + temp [1] + " " + newval);
	// 	} );
	// } );


	wp.customize( 'text-color', function( value ) {
		value.bind( function( newval ) {
			$('p').css("color", newval);
		} );
	} );

	wp.customize( 'heading-color', function( value ) {
		value.bind( function( newval ) {
			$('h1, h2, h3, h4, h5, h6').css("color", newval);
		} );
	} );

} )( jQuery );
