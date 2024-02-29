<?php

get_header();

if ( is_single() ) {
	do_action( 'entr_single_content_area' );
} elseif ( is_page() ) {
	do_action( 'entr_page_content_area' );
}

get_footer();
