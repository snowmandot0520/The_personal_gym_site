jQuery( function( $ ) {

	wp.customize('line_height',function ( value ) {
		value.bind(function ( to ) {
		        document.body.style.setProperty('--line-height', to);
		    }
		);
	} );

} );