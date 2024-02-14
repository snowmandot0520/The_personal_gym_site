jQuery( function( $ ) {

	wp.customize('primary_color',function ( value ) {
		value.bind(function ( to ) {
		        document.body.style.setProperty('--primary-color', to);
		    }
		);
	} );

} );