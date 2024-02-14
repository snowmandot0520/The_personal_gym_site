jQuery( function( $ ) {

	wp.customize('logo_size',function ( value ) {
		value.bind(function ( to ) {
		        document.body.style.setProperty('--logo-size', to+'px');
		    }
		);
	} );

} );