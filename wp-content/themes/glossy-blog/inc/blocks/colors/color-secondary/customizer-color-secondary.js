jQuery( function( $ ) {

	wp.customize('secondary_color',function ( value ) {
		value.bind(function ( to ) {
				document.body.style.setProperty('--secondary-color', to);
			}
		);
	} );

} );