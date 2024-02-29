<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
    </head>
    <body id="blog" <?php body_class(); ?>>
		<?php wp_body_open(); ?>
      <div class="page-wrap">
        <?php do_action('altr_top_bar'); ?>
        <div class="site-header title-header container-fluid">
  				<div class="container" >
  					<div class="heading-row row" >
  						<?php do_action( 'altr_header' ); ?>
  					</div>
  				</div>
  			</div>
  			<div class="site-menu menu-header container-fluid">
  				<div class="<?php echo esc_attr( get_theme_mod( 'header_content_width', 'container' ) ); ?>" >
  					<div class="heading-row row" >
  						<?php do_action( 'entr_header' ); ?>
  					</div>
  				</div>
  			</div>
              <div id="site-content" class="container main-container" role="main">
                  <div class="page-area">       
