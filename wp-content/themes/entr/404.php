<?php get_header(); ?>
<div class="row">
	<div class="col-md-<?php entr_main_content_width_columns(); ?>">
		<div class="error-template text-center">
			<h1><?php esc_html_e( 'Nothing here', 'entr' ); ?></h1>
			<p class="error-details">
				<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'entr' ); ?>
			</p>
			<?php get_search_form(); ?>    
		</div>
	</div>
	<?php get_sidebar( 'right' ); ?>
</div>
<?php
get_footer();
