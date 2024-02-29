<?php get_header(); ?>
<div class="row">
    <div class="col-md-<?php entr_main_content_width_columns(); ?>">
        <?php do_action('entr_generate_the_content'); ?>
    </div>
    <?php get_sidebar('right'); ?>		
</div>
<?php 
get_footer();
