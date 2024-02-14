jQuery( function( $ ) {

	wp.customize('site_identity_font_size',function ( value ) {
		value.bind(function ( to ) {
		        document.body.style.setProperty('--site-identity-font-size', to+'px');
		    }
		);
	} );

} );