<?php

if ( !function_exists( 'entr_main_content_width_columns' ) ) {
  /**
   * Set the content width based on enabled sidebar
   */
  function entr_main_content_width_columns() {
  
  	$columns		 = '12';
  	$hide_sidebar	 = get_post_meta( get_the_ID(), 'envo_hide_sidebar', true );
  	if ( is_active_sidebar( 'entr-right-sidebar' ) && is_singular() && $hide_sidebar == 'on' ) {
  		$columns = '12';
  	} elseif ( is_active_sidebar( 'entr-right-sidebar' ) ) {
  		$columns = $columns - 3;
  	}
  
  	echo absint( $columns );
  }

}

if ( !function_exists( 'entr_single_generate_content' ) ) :

	/**
	 * Generate single content
	 */
	add_action( 'entr_single_content_area', 'entr_single_generate_content' );

	function entr_single_generate_content() {
		?>
		<div class="row single-post">      
			<article class="col-md-<?php entr_main_content_width_columns(); ?>">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>                         
						<div <?php post_class( 'single-post-content' ); ?>>
							<?php
							$contents = get_theme_mod('single_layout', array('image', 'title', 'meta', 'content', 'cats_tags', 'nav', 'comments'));
							
							// Loop parts.
							foreach ( $contents as $content ) {
								do_action( 'entr_single_' . $content );
							}
							?>
						</div>
					<?php endwhile; ?>        
				<?php else : ?>            
					<?php get_template_part( 'content', 'none' ); ?>        
				<?php endif; ?>    
			</article> 
			<?php do_action( 'entr_sidebar' ); ?>
		</div>
		<?php
	}

endif;

if ( !function_exists( 'entr_page_generate_content' ) ) :

	/**
	 * Generate single content
	 */
	add_action( 'entr_page_content_area', 'entr_page_generate_content' );

	function entr_page_generate_content() {
		?>
		<div class="row single-page">
			<article class="col-md-<?php entr_main_content_width_columns(); ?>">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>                          
						<div <?php post_class(); ?>>
							<?php do_action( 'entr_page_content' ); ?>
						</div>
					<?php endwhile; ?>        
				<?php else : ?>            
					<?php get_template_part( 'content', 'none' ); ?>        
				<?php endif; ?>    
			</article>       
			<?php do_action( 'entr_sidebar' ); ?>
		</div>
		<?php
	}

endif;

if ( !function_exists( 'entr_archive_generate_content' ) ) :

	/**
	 * Generate single content
	 */
	add_action( 'entr_archive_content_area', 'entr_archive_generate_content' );

	function entr_archive_generate_content() {
		?>
		<div class="row">
			<div class="col-md-<?php entr_main_content_width_columns(); ?>">
				<?php if ( have_posts() ) : ?>
					<header class="archive-page-header text-center">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header>
					<?php
				endif;
				do_action( 'entr_generate_the_content' );
				?>
			</div>
			<?php get_sidebar( 'right' ); ?>
		</div>
		<?php
	}

endif;

if ( !function_exists( 'entr_featured_image' ) ) :

	/**
	 * Generate featured image.
	 */
	add_action( 'entr_single_image', 'entr_featured_image', 10 );
	add_action( 'entr_archive_image', 'entr_featured_image', 10 );
	add_action( 'entr_page_content', 'entr_featured_image', 10 );

	function entr_featured_image() {
		if ( is_singular() ) {
			entr_thumb_img( 'entr-img', '', false, true );
		} else {
			entr_thumb_img( 'entr-img' );
		}
	}

endif;

if ( !function_exists( 'entr_title' ) ) :

	/**
	 * Generate title.
	 */
	add_action( 'entr_single_title', 'entr_title', 20 );
	add_action( 'entr_archive_title', 'entr_title', 20 );
	add_action( 'entr_page_content', 'entr_title', 20 );

	function entr_title() {
		$title = get_post_meta( get_the_ID(), 'envo_hide_title', true );
		if ( $title != 'on' ) {
			?>
			<div class="single-head">
				<?php
				if ( is_singular() ) {
					the_title( '<h1 class="single-title">', '</h1>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}
				?> 
				<time class="posted-on published" datetime="<?php the_time( 'Y-m-d' ); ?>"></time>
			</div>
			<?php
		}
	}

endif;

if ( !function_exists( 'entr_meta_before' ) ) :

	/**
	 * Div for meta
	 */
	add_action( 'entr_single_meta', 'entr_meta_before', 25 );
	add_action( 'entr_archive_meta', 'entr_meta_before', 25 );

	function entr_meta_before() {
		?>
		<div class="article-meta">
			<?php
		}

	endif;
	if ( !function_exists( 'entr_meta_after' ) ) :

		/**
		 * Div for meta
		 */
		add_action( 'entr_single_meta', 'entr_meta_after', 55 );
		add_action( 'entr_archive_meta', 'entr_meta_after', 55 );

		function entr_meta_after() {
			?>
		</div>
		<?php
	}

endif;

if ( !function_exists( 'entr_date' ) ) :

	/**
	 * Returns date.
	 */
	add_action( 'entr_single_meta', 'entr_date', 30 );
	add_action( 'entr_archive_meta', 'entr_date', 30 );

	function entr_date() {
		?>
		<span class="posted-date">
			<?php echo esc_html( get_the_date() ); ?>
		</span>
		<?php
	}

endif;

if ( !function_exists( 'entr_author_meta' ) ) :

	/**
	 * Post author meta funciton
	 */
	add_action( 'entr_single_meta', 'entr_author_meta', 40 );
	add_action( 'entr_archive_meta', 'entr_author_meta', 40 );

	function entr_author_meta() {
		?>
		<span class="author-meta">
			<span class="author-meta-by"><?php esc_html_e( 'By', 'entr' ); ?></span>
			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>">
				<?php the_author(); ?>
			</a>
		</span>
		<?php
	}

endif;

if ( !function_exists( 'entr_comments' ) ) :

	/**
	 * Returns comments.
	 */
	add_action( 'entr_single_meta', 'entr_comments', 50 );
	add_action( 'entr_archive_meta', 'entr_comments', 50 );

	function entr_comments() {
		?>
		<span class="comments-meta">
			<?php
			if ( !comments_open() ) {
				esc_html_e( 'Off', 'entr' );
			} else {
				?>
				<a href="<?php the_permalink(); ?>#comments" rel="nofollow" title="<?php esc_attr_e( 'Comment on ', 'entr' ) . the_title_attribute(); ?>">
					<?php echo absint( get_comments_number() ); ?>
				</a>
			<?php } ?>
			<i class="la la-comments-o"></i>
		</span>
		<?php
	}

endif;

if ( !function_exists( 'entr_post_author' ) ) :

	/**
	 * Returns post author
	 */
	add_action( 'entr_construct_post_author', 'entr_post_author' );

	function entr_post_author() {
		?>
		<div class="postauthor-container">			  
			<div class="postauthor-title">
				<h4 class="about">
					<?php esc_html_e( 'About The Author', 'entr' ); ?>
				</h4>
				<div class="">
					<span class="fn">
						<?php the_author_posts_link(); ?>
					</span>
				</div> 				
			</div>        	
			<div class="postauthor-content">	             						           
				<p>
					<?php the_author_meta( 'description' ) ?>
				</p>					
			</div>	 		
		</div>
		<?php
	}

endif;

if ( !function_exists( 'entr_content' ) ) :

	/**
	 * Generate content.
	 */
	add_action( 'entr_single_content', 'entr_content', 60 );
	add_action( 'entr_page_content', 'entr_content', 60 );

	function entr_content() {
		?>
		<div class="single-content">
			<div class="single-entry-summary">
				<?php do_action( 'entr_before_content' ); ?> 
				<?php the_content(); ?>
				<?php do_action( 'entr_after_content' ); ?> 
			</div>
			<?php wp_link_pages(); ?>
		</div>
		<?php
		if ( get_edit_post_link() ) {
			edit_post_link();
		}
	}

endif;

if ( !function_exists( 'entr_excerpt' ) ) :

	/**
	 * Generate content.
	 */
	add_action( 'entr_archive_excerpt', 'entr_excerpt', 60 );

	function entr_excerpt() {
		?>
		<div class="post-excerpt">
			<?php the_excerpt(); ?>
		</div>
		<?php
	}

endif;

if ( !function_exists( 'entr_top_bar' ) ) :

	/**
	 * Returns top bar
	 */
	add_action( 'entr_construct_top_bar', 'entr_top_bar' );

	function entr_top_bar() {
		if ( is_active_sidebar( 'entr-top-bar-area' ) ) {
			?>
			<div class="top-bar-section container-fluid">
				<div class="<?php echo esc_attr( get_theme_mod( 'top_bar_content_width', 'container' ) ); ?>">
					<div class="row">
						<?php dynamic_sidebar( 'entr-top-bar-area' ); ?>
					</div>
				</div>
			</div>
			<?php
		}
	}

endif;

if ( !function_exists( 'entr_generate_construct_the_content' ) ) :
	/**
	 * Build footer widgets
	 */
	add_action( 'entr_generate_the_content', 'entr_generate_construct_the_content' );

	function entr_generate_construct_the_content() {
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;
			the_posts_pagination();
		else :
			get_template_part( 'content', 'none' );
		endif;
	}

endif;

if ( !function_exists( 'entr_prev_next_links' ) ) :

	/**
	 * Single previous next links
	 */
	add_action( 'entr_single_nav', 'entr_prev_next_links', 70 );

	function entr_prev_next_links() {
		the_post_navigation(
		array(
			'prev_text'	 => '<span class="screen-reader-text">' . __( 'Previous Post', 'entr' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'entr' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper"><i class="la la-angle-double-left" aria-hidden="true"></i></span>%title</span>',
			'next_text'	 => '<span class="screen-reader-text">' . __( 'Next Post', 'entr' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'entr' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper"><i class="la la-angle-double-right" aria-hidden="true"></i></span></span>',
		)
		);
	}

endif;

if ( !function_exists( 'entr_generate_construct_author_comments' ) ) :
	/**
	 * Build author and comments area
	 */
	add_action( 'entr_single_comments', 'entr_generate_construct_author_comments', 80 );
	
	function entr_generate_construct_author_comments() {
		$authordesc = get_the_author_meta( 'description' );
		if ( !empty( $authordesc ) ) {
			?>
			<div class="single-footer row">
				<div class="col-md-4">
					<?php do_action( 'entr_construct_post_author' ); ?> 
				</div>
				<div class="col-md-8">
					<?php comments_template(); ?> 
				</div>
			</div>
		<?php } else { ?>
			<div class="single-footer">
				<?php comments_template(); ?> 
			</div>
			<?php
		}
	}

endif;

if ( !function_exists( 'entr_generate_sidebar' ) ) :
	/**
	 * Build author and comments area
	 */
	add_action( 'entr_sidebar', 'entr_generate_sidebar' );

	function entr_generate_sidebar() {
		$hide_sidebar = get_post_meta( get_the_ID(), 'envo_hide_sidebar', true );
		if ( $hide_sidebar != 'on' ) {
			get_sidebar( 'right' );
		}
	}

endif;

if ( !function_exists( 'entr_excerpt_more' ) ) :

	/**
	 * Excerpt more.
	 */
	function entr_excerpt_more( $more ) {
		return '&hellip;';
	}

	add_filter( 'excerpt_more', 'entr_excerpt_more' );

endif;

if ( !function_exists( 'entr_thumb_img' ) ) :

	/**
	 * Returns featured image.
	 */
	function entr_thumb_img( $img = 'full', $col = '', $link = true, $single = false ) {
		if ( ( has_post_thumbnail() && $link == true ) ) {
			?>
			<div class="news-thumb <?php echo esc_attr( $col ); ?>">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail( $img ); ?>
				</a>
			</div><!-- .news-thumb -->
		<?php } elseif ( has_post_thumbnail() ) { ?>
			<div class="news-thumb <?php echo esc_attr( $col ); ?>">
				<?php the_post_thumbnail( $img ); ?>
			</div><!-- .news-thumb -->	
			<?php
		}
	}

endif;

if ( !function_exists( 'entr_entry_footer' ) ) :

	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	add_action( 'entr_single_cats_tags', 'entr_entry_footer' );

	function entr_entry_footer() {

		// Get Categories for posts.
		$categories_list = get_the_category_list( ' ' );

		// Get Tags for posts.
		$tags_list = get_the_tag_list( '', ' ' );

		// We don't want to output .entry-footer if it will be empty, so make sure its not.
		if ( $categories_list || $tags_list ) {

			echo '<div class="entry-footer">';

			if ( 'post' === get_post_type() ) {
				if ( $categories_list || $tags_list ) {

					// Make sure there's more than one category before displaying.
					if ( $categories_list ) {
						echo '<div class="cat-links"><span class="space-right">' . esc_html__( 'Category', 'entr' ) . '</span>' . wp_kses_data( $categories_list ) . '</div>';
					}

					if ( $tags_list ) {
						echo '<div class="tags-links"><span class="space-right">' . esc_html__( 'Tags', 'entr' ) . '</span>' . wp_kses_data( $tags_list ) . '</div>';
					}
				}
			}

			echo '</div>';
		}
	}

endif;

if ( !function_exists( 'entr_generate_construct_footer_widgets' ) ) :
	/**
	 * Build footer widgets
	 */
	add_action( 'entr_generate_footer', 'entr_generate_construct_footer_widgets', 10 );

	function entr_generate_construct_footer_widgets() {
		if ( is_active_sidebar( 'entr-footer-area' ) ) {
			?>  				
			<div id="content-footer-section" class="container-fluid clearfix">
				<div class="container">
					<?php dynamic_sidebar( 'entr-footer-area' ); ?>
				</div>	
			</div>		
			<?php
		}
	}

endif;

if ( !function_exists( 'entr_generate_construct_footer' ) ) :
	/**
	 * Build footer
	 */
	add_action( 'entr_generate_footer', 'entr_generate_construct_footer', 20 );

	function entr_generate_construct_footer() {
		?>
		<footer id="colophon" class="footer-credits container-fluid">
			<div class="container">    
				<div class="footer-credits-text text-center list-unstyled">
					<?php
					/* translators: %1$s: Entr theme author (do not translate) with envothemes.com URL */
					printf( esc_html__( 'Theme by %1$s', 'entr' ), '<a href="' . esc_url( 'https://envothemes.com/' ) . '">' . esc_html_x( 'EnvoThemes', 'Theme author', 'entr' ) . '</a>' );
					?>
				</div>
			</div>	
		</footer>
		<?php
	}

endif;
