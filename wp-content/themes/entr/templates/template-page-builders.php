<?php
/**
 *
 * Template name: Page Builders
 * 
 */
get_header('builders');
?>
<div id="site-content" class="page-builders" role="main">
    <div class="page-builders-content-area">   
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div <?php post_class(); ?>>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>        
        <?php else : ?>            
            <?php get_template_part('content', 'none'); ?>        
        <?php endif; ?>    
        <?php
        get_footer();
        