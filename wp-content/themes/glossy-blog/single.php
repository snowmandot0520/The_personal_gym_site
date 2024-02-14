<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package glossy-blog
 */

get_header();
?>
<?php $show_hide_related_posts = get_theme_mod( 'post_detail_hide_show_related_articles', glossy_blog_get_default_post_detail_related_articles() ); ?>


<div id="primary" class="inside-page content-area">
    <div class="container">
        <div class="main-wrapper">
            <section class="page-section">
                <div class="detail-content">

                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content', 'single' ); ?>
                    <?php endwhile; // End of the loop. ?>
                    <?php the_post_navigation(); ?>
                    <?php comments_template(); ?>

                </div><!-- /.end of deatil-content -->

                <?php
                        if( $show_hide_related_posts ) {
                            get_template_part('template-parts/related', 'articles');
                        }
                    ?>
            </section> <!-- /.end of section -->

            <div class="sidebar"><?php get_sidebar();?></div>

        </div>
    </div>
</div>

<?php
    get_footer();