<?php
/**
 *
 * Template name: No Sidebar
 * 
 */
get_header(); ?>
<div class="row single-page no-sidebar">
    <article class="col-md-12">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>                          
                <div <?php post_class(); ?>>
                    <?php do_action('entr_page_content'); ?>
                </div>
            <?php endwhile; ?>        
        <?php else : ?>            
            <?php get_template_part('content', 'none'); ?>        
        <?php endif; ?>    
    </article>
</div>
<?php 
get_footer();