jQuery( function( $ ) {

	wp.customize('main_font_family',function ( value ) {
		value.bind(function ( to ) {
			$("head").append("<link href='https://fonts.googleapis.com/css?family=" + to + ":200,300,400,500,600,700,800,900|' rel='stylesheet' type='text/css'>");
				document.body.style.setProperty('--primary-font', to);
			}
		);
	} );

} );