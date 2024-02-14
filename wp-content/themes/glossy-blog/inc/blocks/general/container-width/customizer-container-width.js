jQuery( function( $ ) {

	wp.customize('container_width',function ( value ) {
		value.bind(function ( to ) {
		        document.body.style.setProperty('--container-width', to+"px");
		    }
		);
	} );

} );