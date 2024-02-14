<?php
/**
 * Handles adding to the footer the @font-face CSS for locally-hosted google-fonts.
 * Solves privacy concerns with Google's CDN and their sometimes less-than-transparent policies.
 * 
 * @package glossy-blog
*/

/**
 * Manages the way Google Fonts are enqueued.
 */
final class Glossy_Blog_Webfonts_Local{

	/**
	 * @access protected
	 */
	protected $googlefonts;

	/**
	 * Constructor.
	 *
	 * @access public
	 */
	public function __construct( $googlefonts ) {
		$this->googlefonts = $googlefonts;

		add_action( 'wp_footer', array( $this, 'add_styles' ) );
		add_action( 'admin_footer', array( $this, 'add_styles' ) );
	}

	/**
	 * Webfont Loader for Google Fonts.
	 *
	 * @access public
	 */
	public function add_styles() {

		$hosted_fonts = $this->googlefonts; 

		// Early exit if we don't need to add any fonts.
		if ( empty( $hosted_fonts ) ) {
			return;
		}

		// Make sure we only do this once per font-family.
		$hosted_fonts = array_unique( $hosted_fonts );

		// Start CSS.
		$css = '';
		foreach( $hosted_fonts as $family ){
			// Add the @font-face CSS for this font-family.
			$css .= Glossy_Blog_Google_Local::init( $family )->get_css();
		}

		// If we've got CSS, add to the footer.
		if ( $css ) {
			echo '<style id="glossy-blog-local-webfonts">' . $css . '</style>'; // WPCS: XSS ok.
		}
	}
}