<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package glossy-blog
 */
?>



<footer id="colophon" class="site-footer" style="display:none;">

    <div class="container">

        <div class="footer-wrapper">
            <?php 
get_template_part( 'template-parts/social', 'links' );
?>

            <div class="site-info">
                <?php 
?>
                <a href="<?php 
echo  esc_url( 'https://wordpress.org/' ) ;
?>">
                    <?php 
/* translators: %s: CMS name, i.e. WordPress. */
printf( esc_html__( 'Proudly powered by %s', 'glossy-blog' ), '<b>' . esc_html__( "WordPress", 'glossy-blog' ) . '</b>' );
?>
                </a>
                <span class="sep"> | </span>
                <?php 
/* translators: 1: Theme name, 2: Theme author. */
printf( esc_html__( 'Theme: %1$s by %2$s.', 'glossy-blog' ), esc_html__( 'Glossy Blog', 'glossy-blog' ), '<a href=' . esc_url( "https://graphthemes.com", 'glossy-blog' ) . ' class="footer-brand"><b>' . esc_html__( "GraphThemes", 'glossy-blog' ) . '</b></a>' );
?>
                <?php 
?>
                <div class="copyright"><?php 
echo  wp_kses_post( $copyright ) ;
?></div>
            </div><!-- .site-info -->
        </div>
    </div>
</footer><!-- #colophon -->


<a class="scroll-to-top" href="javascript:void(0)">
    <svg id="Layer_1" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
        <g>
            <g id="Icon-Chevron-Left" transform="translate(237.000000, 335.000000)">
                <polyline class="st0" id="Fill-35"
                    points="-191.3,-296.9 -193.3,-294.9 -205,-306.6 -216.7,-294.9 -218.7,-296.9 -205,-310.6      -191.3,-296.9    " />
            </g>
        </g>
    </svg>
</a>

<?php 
wp_footer();
?>
</div>
</body>

</html>