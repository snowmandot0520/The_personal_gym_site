<?php

if( ! defined( 'GLOSSY_BLOG_BLOCKS_DIR_PATH' ) ) {

    define( 'GLOSSY_BLOG_BLOCKS_DIR_PATH', dirname( __FILE__ ) );
}



require dirname( __FILE__ ) . '/includes/sanitize.php';

require dirname( __FILE__ ) . '/includes/register-controls.php';

require dirname( __FILE__ ) . '/customizer-info/customizer-info.php';

require dirname( __FILE__ ) . '/site-identity/site-identity.php';

require dirname( __FILE__ ) . '/colors/colors.php';

require dirname( __FILE__ ) . '/font-family/font-family.php';

require dirname( __FILE__ ) . '/font-customization/font-customization.php';

require dirname( __FILE__ ) . '/general/general.php';

require dirname( __FILE__ ) . '/post-snippet/post-snippet.php';

require dirname( __FILE__ ) . '/post-detail/post-detail.php';

require dirname( __FILE__ ) . '/footer-copyright/footer-copyright.php';