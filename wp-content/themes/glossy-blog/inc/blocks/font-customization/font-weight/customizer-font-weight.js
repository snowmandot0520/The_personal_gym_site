jQuery( function( $ ) {

	wp.customize('font_weight',function ( value ) {
		value.bind(function ( to ) {
		        document.body.style.setProperty('--font-weight', to);
		    }
		);
	} );

} );