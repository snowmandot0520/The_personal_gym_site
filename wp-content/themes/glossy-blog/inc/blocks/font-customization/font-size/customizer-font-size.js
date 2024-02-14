jQuery( function( $ ) {

	wp.customize('font_size',function ( value ) {
		value.bind(function ( to ) {
		        $( 'body,html' ).css( 'font-size', to+'px' );
		    }
		);
	} );

} );