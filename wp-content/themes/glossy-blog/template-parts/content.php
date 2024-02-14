<?php
/**
 * Template part for displaying posts.
 *
 * @package glossy-blog
 */
?>


<?php
    $show_hide_image = get_theme_mod( 'post_snippet_hide_show_featured_image', glossy_blog_get_default_post_snippet_featured_image() );
    $show_hide_date = get_theme_mod( 'post_snippet_hide_show_date', glossy_blog_get_default_post_snippet_date() );
    $show_hide_author = get_theme_mod( 'post_snippet_hide_show_author', glossy_blog_get_default_post_snippet_author() );
    $show_hide_comment = get_theme_mod( 'post_snippet_hide_show_comment', glossy_blog_get_default_post_snippet_comment() );
    $show_hide_categories = get_theme_mod( 'post_snippet_hide_show_category', glossy_blog_get_default_post_snippet_category() );
    $show_hide_tags = get_theme_mod( 'post_snippet_hide_show_tag', glossy_blog_get_default_post_snippet_tag() );
    $show_hide_social_share = get_theme_mod( 'post_snippet_hide_show_social_share', glossy_blog_get_default_post_snippet_social_share() );
    $social_share = get_theme_mod( 'post_snippet_social_share_options', glossy_blog_get_default_post_snippet_social_share_options() );
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="news-snippet">
        <?php if ( $show_hide_image && has_post_thumbnail() ) : ?>
        <?php $thumbnail_size = get_theme_mod( 'post_snippet_featured_image_size', glossy_blog_get_default_post_snippet_featured_image_size() ); ?>
        <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" class="featured-image">
            <?php the_post_thumbnail( $thumbnail_size ); ?>
        </a>
        <?php endif; ?>
        <div class="summary">
            <?php if( $show_hide_categories ) { ?>

            <?php $categories = get_the_category();
                    if( ! empty( $categories ) ) : ?>
            <div class="category">
                <?php foreach ( $categories as $category ) { ?>
                <a
                    href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><?php echo esc_html( $category->name ); ?></a>
                <?php } ?>
            </div>
            <?php endif; ?>

            <?php } ?>

            <h3 class="news-title"><a href="<?php echo esc_url( get_permalink() ); ?>"
                    rel="bookmark"><?php the_title(); ?></a></h3>

            <div class="ihead info">
                <ul class="list-inline">
                    <?php if( $show_hide_date ) { ?>

                    <?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day = get_the_time('d'); ?>
                    <li><a
                            href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) ); ?>"><?php echo get_the_date(); ?></a>
                    </li>
                    <?php } ?>



                    <?php 
                        if( $show_hide_author ) { ?>
                    <li class="post-author">
                        <a class="url fn n"
                            href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                            <?php $avatar = get_avatar( get_the_author_meta( 'ID' ), $size = 60 ); ?>
                            <?php if( $avatar ) : ?>
                            <div class="author-image">
                                <?php echo esc_url($avatar); ?>
                            </div>
                            <?php endif; ?>
                            <?php echo esc_html( get_the_author() ); ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>

                <?php if( $show_hide_comment ) { ?>
                <span class="comments">
                    <svg width="20px" height="20px" viewBox="0 0 24 24" id="magicoon-Regular"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="comment-Regular">
                            <path id="comment-Regular-2" data-name="comment-Regular" class="cls-1"
                                d="M17,3.25H7A4.756,4.756,0,0,0,2.25,8V21a.75.75,0,0,0,1.28.53l2.414-2.414a1.246,1.246,0,0,1,.885-.366H17A4.756,4.756,0,0,0,21.75,14V8A4.756,4.756,0,0,0,17,3.25ZM20.25,14A3.254,3.254,0,0,1,17,17.25H6.829a2.73,2.73,0,0,0-1.945.806L3.75,19.189V8A3.254,3.254,0,0,1,7,4.75H17A3.254,3.254,0,0,1,20.25,8Z" />
                        </g>
                    </svg>
                    <?php comments_popup_link( __( '0', 'glossy-blog' ), __( '1', 'glossy-blog' ), __( '%', 'glossy-blog' ) ); ?>
                </span>
                <?php } ?>

            </div>

            <div class="excerpt">
                <?php $excerpt_length = get_theme_mod( 'post_snippet_excerpt_size', glossy_blog_get_default_post_snippet_excerpt_size() ); ?>

                <?php echo wp_trim_words( get_the_excerpt(), $excerpt_length ); ?>
            </div>



            <?php $readmore_show_hide = get_theme_mod( 'post_snippet_hide_show_readmore', glossy_blog_get_default_post_snippet_show_hide_read_more() ); ?>
            <?php $readmore_text = get_theme_mod( 'post_snippet_readmore_text', glossy_blog_get_default_post_snippet_read_more_text() ); ?>


            <div class="ifoot info">

                <?php if( $readmore_show_hide ) { ?>
                <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" title=""
                    class="readmore"><?php echo esc_html( $readmore_text ); ?></a>
                <?php } ?>

                <?php if( $show_hide_social_share && $social_share ) { ?>
                <div class="social-share">
                    <?php get_template_part( 'inc/blocks/includes/template', 'social-share', $social_share ); ?>
                </div>
                <?php } ?>

            </div>


            <?php if( $show_hide_tags ) { ?>
            <div class="tags">
                <?php $tags = get_the_tags(); ?>
                <?php if( ! empty( $tags ) ) : ?>
                <?php foreach ( $tags as $post_tag ) { ?>
                <a
                    href="<?php echo esc_url( get_category_link( $post_tag->term_id ) ); ?>"><?php echo esc_html( $post_tag->name ); ?></a>
                <?php } ?>
                <?php endif; ?>
            </div>

            <?php } ?>


        </div>
    </div>
</div>