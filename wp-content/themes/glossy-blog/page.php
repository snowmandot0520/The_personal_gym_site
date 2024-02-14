<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package glossy-blog
 */

get_header();
?>
<div id="primary" class="inside-page content-area">
    <div class="container">
        <div class="main-wrapper">
            <section class="page-section">
                <div class="detail-content">

                    <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

                </div>
            </section>
            <div class="sidebar"><?php get_sidebar();?></div>
        </div>
    </div>
</div>

<?php
get_footer();