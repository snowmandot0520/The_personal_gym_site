<?php

// register Glossy_Blog_Recent_Post widget
function glossy_blog_register_recent_post_widget() {
    register_widget( 'Glossy_Blog_Recent_Post' );
}
add_action( 'widgets_init', 'glossy_blog_register_recent_post_widget' );
 
 /**
 * Adds Glossy_Blog_Recent_Post widget.
 */
class Glossy_Blog_Recent_Post extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'glossy_blog_widget_recent_post', // Base ID
            __( 'Graphthemes: Recent Post', 'glossy-blog' ), // Name
            array( 'description' => __( 'A Recent Post Widget', 'glossy-blog' ), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        $title      = ! empty( $instance['title'] ) ?  $instance['title'] : __( 'Recent Posts', 'glossy-blog' );
        $num_post   = ! empty( $instance['num_post'] ) ? $instance['num_post'] : 3 ;
        $show_thumb = ! empty( $instance['show_thumbnail'] ) ? $instance['show_thumbnail'] : '';
        $show_date  = ! empty( $instance['show_postdate'] ) ? $instance['show_postdate'] : '';
        $cats[]     = '';
        $cat        = apply_filters( 'glossy_blog_pro_exclude_categories', $cats );
        $style      = ! empty( $instance['style'] ) ? $instance['style'] : 'style-one';

        $target = 'target="_self"';
        if( isset($instance['target']) && $instance['target']!='' ){
            $target = 'target="_blank"';
        }

        $obj = new Graphthemes_Widget_Functions;

        $glossy_blog_recent_post_size = apply_filters('glossy_blog_recent_post_size', 'thumbnail');
        $qry = new WP_Query( array(
            'post_type'             => 'post',
            'post_status'           => 'publish',
            'posts_per_page'        => $num_post,
            'ignore_sticky_posts'   => true,
            'category__not_in'      => $cat
        ) );
        if( $qry->have_posts() ){
            echo $args['before_widget'];
            ob_start();
            if( $title ) echo $args['before_title'] . apply_filters( 'widget_title', $title, $instance, $this->id_base ) . $args['after_title'];
            ?>
            <ul>
                <?php 
                while( $qry->have_posts() ){
                    $qry->the_post();
                ?>
                    <li>
                        <?php 
                        if( $show_thumb ){ ?>
                            <a <?php echo $target; ?> href="<?php the_permalink();?>" class="post-thumbnail">
                                <?php 
                                    if( has_post_thumbnail() && $show_thumb ){ 
                                        the_post_thumbnail( $glossy_blog_recent_post_size, array( 'itemprop' => 'image' ) );
                                    }
                                ?>
                            </a>
                        <?php }
                        ?>
                        <div class="entry-header">
                            <h6 class="entry-title"><a <?php echo $target; ?> href="<?php the_permalink(); ?>"><?php the_title();?></a></h6>

                            <?php if( $show_date  ){ ?>
                                <div class="entry-meta info">
                                    <?php
                                        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
                                        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
                                            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
                                        }

                                        $time_string = sprintf(
                                            $time_string,
                                            esc_attr( get_the_date( DATE_W3C ) ),
                                            esc_html( get_the_date() ),
                                            esc_attr( get_the_modified_date( DATE_W3C ) ),
                                            esc_html( get_the_modified_date() )
                                        );
                                    ?>
                                    <?php echo $time_string; ?>
                                </div>
                            <?php } ?>
                        </div>                        
                    </li>        
                <?php    
                }
                wp_reset_postdata();  
            ?>
            </ul>
            <?php
            $html = ob_get_clean();
            echo apply_filters( 'glossy_blog_recent_post_widget_filter', $html, $args, $instance );
            echo $args['after_widget'];   
        }
    }

    
    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        
        $title          = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Recent Posts', 'glossy-blog' );      
        $num_post       = ! empty( $instance['num_post'] ) ? $instance['num_post'] : 3 ;
        $show_thumbnail = ! empty( $instance['show_thumbnail'] ) ? $instance['show_thumbnail'] : '';
        $show_postdate  = ! empty( $instance['show_postdate'] ) ? $instance['show_postdate'] : '';
        $style          = ! empty( $instance['style'] ) ? $instance['style'] : 'style-one';
        $target         = ! empty( $instance['target'] ) ? $instance['target'] : '';
        ?>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'glossy-blog' ); ?></label> 
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'num_post' ) ); ?>"><?php esc_html_e( 'Number of Posts', 'glossy-blog' ); ?></label> 
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'num_post' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'num_post' ) ); ?>" type="number" step="1" min="1" value="<?php echo esc_attr( $num_post ); ?>" />
        </p>
        
        <p>
            <input id="<?php echo esc_attr( $this->get_field_id( 'show_thumbnail' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'show_thumbnail' ) ); ?>" type="checkbox" value="1" <?php checked( '1', $show_thumbnail ); ?>/>
            <label for="<?php echo esc_attr( $this->get_field_id( 'show_thumbnail' ) ); ?>"><?php esc_html_e( 'Show Post Thumbnail', 'glossy-blog' ); ?></label>
        </p>
        
        <p>
            <input id="<?php echo esc_attr( $this->get_field_id( 'show_postdate' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'show_postdate' ) ); ?>" type="checkbox" value="1" <?php checked( '1', $show_postdate ); ?>/>
            <label for="<?php echo esc_attr( $this->get_field_id( 'show_postdate' ) ); ?>"><?php esc_html_e( 'Show Post Date', 'glossy-blog' ); ?></label>
        </p>

        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'target' ) ); ?>">
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'target' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'target' ) ); ?>" type="checkbox" value="1" <?php echo checked($target,1);?> /><?php esc_html_e( 'Open in New Tab', 'glossy-blog' ); ?> </label>
        </p>
        <?php 
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        
        $instance = array();
        
        $instance['title']          = ! empty( $new_instance['title'] ) ? sanitize_text_field( $new_instance['title'] ) : __( 'Recent Posts', 'glossy-blog' );
        $instance['num_post']       = ! empty( $new_instance['num_post'] ) ? absint( $new_instance['num_post'] ) : 3 ;        
        $instance['show_thumbnail'] = ! empty( $new_instance['show_thumbnail'] ) ? absint( $new_instance['show_thumbnail'] ) : '';
        $instance['show_postdate']  = ! empty( $new_instance['show_postdate'] ) ? absint( $new_instance['show_postdate'] ) : '';
        $instance['style']          = ! empty( $new_instance['style'] ) ? esc_attr( $new_instance['style'] ) : 'style-one';

        $instance['target']         = ! empty( $new_instance['target'] ) ? esc_attr( $new_instance['target'] ) : '';

        return $instance;
        
    }

}