jQuery( function( $ ) {

	wp.customize('grey_color',function ( value ) {
		value.bind(function ( to ) {
				document.body.style.setProperty('--grey-color', to);
			}
		);
	} );

} );