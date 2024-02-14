jQuery( function( $ ) {

	wp.customize('light_color',function ( value ) {
		value.bind(function ( to ) {
				document.body.style.setProperty('--light-color', to);
			}
		);
	} );

} );