jQuery( function( $ ) {

	wp.customize('dark_color',function ( value ) {
		value.bind(function ( to ) {
				document.body.style.setProperty('--dark-color', to);
			}
		);
	} );

} );