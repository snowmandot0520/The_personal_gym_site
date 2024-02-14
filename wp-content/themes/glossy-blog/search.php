<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package glossy-blog
 */

get_header();
?>
<div class="container">
    <div class="main-wrapper">
        <main id="primary" class="site-main">

            <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <h1 class="page-title">
                    <?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'glossy-blog' ), '<span>' . get_search_query() . '</span>' );
					?>
                </h1>
            </header><!-- .page-header -->

            <div class="custom-grid-view">
                <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;
			?>
            </div>

            <?php glossy_blog_numeric_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

        </main><!-- #main -->
        <div class="sidebar"><?php get_sidebar();?></div>
    </div>
</div>

<?php
get_footer();