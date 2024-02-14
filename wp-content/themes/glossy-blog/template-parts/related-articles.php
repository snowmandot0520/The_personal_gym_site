<?php
$page_template = get_page_template_slug( get_queried_object_id() );
$post_count = 3;
?>

<?php
    $readmore_show_hide = get_theme_mod( 'post_snippet_hide_show_readmore', glossy_blog_get_default_post_snippet_show_hide_read_more() );
    $readmore_text = get_theme_mod( 'post_snippet_readmore_text', glossy_blog_get_default_post_snippet_read_more_text() );

    $related_articles_title = get_theme_mod( 'post_detail_related_articles_title', glossy_blog_get_default_post_detail_related_articles_title() );
    $show_hide_social_share = get_theme_mod( 'post_snippet_hide_show_social_share', glossy_blog_get_default_post_snippet_social_share() );
    $social_share = get_theme_mod( 'post_snippet_social_share_options', glossy_blog_get_default_post_snippet_social_share_options() );
?>

<div class="related-posts">
    <?php
    $args = array (
        'posts_per_page' => $post_count,
        'post_type' => 'post',
        'category__in' => wp_get_post_categories($post->ID),
        'post__not_in' => array($post->ID)
    );

    
    $query = new WP_Query( $args ); 
    if( $query->have_posts() ) {
        ?>
    <h2 class="main-title"><?php echo esc_html( $related_articles_title ); ?></h2>
    <div class="post-holder">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="news-snippet">

            <?php if( get_theme_mod( 'post_snippet_hide_show_featured_image', glossy_blog_get_default_post_snippet_featured_image() ) && has_post_thumbnail() ) : ?>

            <?php $thumbnail_size = get_theme_mod( 'post_snippet_featured_image_size', glossy_blog_get_default_post_snippet_featured_image_size() ); ?>
            <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" class="featured-image">
                <?php the_post_thumbnail( $thumbnail_size ); ?>
            </a>

            <?php endif; ?>

            <div class="summary">
                <h5 class="news-title">
                    <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
                        <?php the_title(); ?>
                    </a>
                </h5>

                <div class="excerpt">
                    <?php $excerpt_length = get_theme_mod( 'post_snippet_excerpt_size', glossy_blog_get_default_post_snippet_excerpt_size() ); ?>

                    <?php echo wp_trim_words( get_the_excerpt(), $excerpt_length ); ?>
                </div>

                <?php if( $readmore_show_hide ) { ?>
                <div class="ifoot info">
                    <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" title=""
                        class="readmore"><?php echo esc_html( $readmore_text ); ?> </a>
                    <?php if( get_theme_mod( 'post_snippet_hide_show_social_share', glossy_blog_get_default_post_snippet_social_share() ) ) { ?>
                    <?php if( $show_hide_social_share && $social_share ) { ?>
                    <div class="social-share">
                        <?php get_template_part( 'inc/blocks/includes/template', 'social-share', $social_share ); ?>
                    </div>
                    <?php } ?>
                    <?php } ?>
                </div>
                <?php } ?>

            </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
    <?php } ?>
</div>