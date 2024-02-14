<?php
/**
 * Widget Popular Post
 *
 * @package Graphthemes_Widget
 */
 
// register Graphthemes_Widget_Popular_Post widget
function glossy_blog_register_popular_post_widget() {
    register_widget( 'Graphthemes_Widget_Popular_Post' );
}
add_action( 'widgets_init', 'glossy_blog_register_popular_post_widget' );

if( ! class_exists( 'Graphthemes_Widget_Popular_Post' ) ) : 
 /**
 * Adds Graphthemes_Widget_Popular_Post widget.
 */
class Graphthemes_Widget_Popular_Post extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct(){
        if( ! is_customize_preview() ) add_action('wp', array( $this, 'glossy_blog_set_views' ) );
        
        parent::__construct(
            'glossy_blog_widget_popular_post', // Base ID
            esc_html__( 'Graphthemes: Popular Post', 'glossy-blog' ), // Name
            array( 'description' => esc_html__( 'A Popular Post Widget', 'glossy-blog' ), ) // Args
        );
    }
    
    /**
     * Function to add the post view count 
     */
    function glossy_blog_set_views( $post_id ) {
        if ( in_the_loop() ) {
            $post_id = get_the_ID();
          } 
        else {
            global $wp_query;
            $post_id = $wp_query->get_queried_object_id();
        }
        if( is_singular( 'post' ) )
        {
            $count_key = '_glossy_blog_view_count';
            $count = get_post_meta( $post_id, $count_key, true );
            if( $count == '' ){
                $count = 0;
                delete_post_meta( $post_id, $count_key );
                add_post_meta( $post_id, $count_key, '1' );
            }else{
                $count++;
                update_post_meta( $post_id, $count_key, $count );
            }
        }
    }
    /**
     * Function to get the post view count 
     */
    function glossy_blog_get_views( $post_id ){
        $count_key = '_glossy_blog_view_count';
        $count = get_post_meta( $post_id, $count_key, true );
        if( $count == '' ){        
            return __( "0 View", 'glossy-blog' );
        }elseif($count<=1){
            return $count. __(' View', 'glossy-blog' );
        }else{
            return $count. __(' Views', 'glossy-blog' );    
        }    
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
       
        $title          = ! empty( $instance['title'] ) ?  $instance['title'] : __( 'Popular Posts', 'glossy-blog' );
        $num_post       = ! empty( $instance['num_post'] ) ? $instance['num_post'] : 3 ;
        $show_thumbnail = ! empty( $instance['show_thumbnail'] ) ? $instance['show_thumbnail'] : '';
        $show_date      = ! empty( $instance['show_postdate'] ) ? $instance['show_postdate'] : '';
        $based_on       = ! empty( $instance['based_on'] ) ? $instance['based_on'] : 'views';
        $comment_num    = ! empty( $instance['comment_num'] ) ? $instance['comment_num'] : '';
        $view_count     = ! empty( $instance['view_count'] ) ? $instance['view_count'] : '';
        $style          = ! empty( $instance['style'] ) ? $instance['style'] : 'style-one';
        
        $cat = get_theme_mod( 'exclude_categories' );
        if( $cat ) $cat = array_diff( array_unique( $cat ), array('') );
        
        $arg = array(
            'post_type'             => 'post',
            'post_status'           => 'publish',
            'posts_per_page'        => $num_post,
            'ignore_sticky_posts'   => true,
            'category__not_in'      => $cat
        );
        
        if( $based_on == 'views' ){
            $arg['orderby'] = 'meta_value_num';
            $arg['meta_key'] = '_glossy_blog_view_count';
        }elseif( $based_on == 'comments' ){
            $arg['orderby'] = 'comment_count';
        }

        $obj = new Graphthemes_Widget_Functions;
        
        $glossy_blog_widget_popular_post_size = apply_filters('glossy_blog_widget_popular_post_size', 'thumbnail');
        $qry = new WP_Query( $arg );
        
        if( $qry->have_posts() ){

            echo $args['before_widget'];
            ob_start();

            if( $title ) echo $args['before_title'] . apply_filters( 'widget_title', $title, $instance, $this->id_base ) . $args['after_title'];

            $target = 'target="_self"';
            if( isset($instance['target']) && $instance['target']!='' )
            {
                $target = 'target="_blank"';
            }
            ?>
            <ul>
                <?php
                while( $qry->have_posts() ){
                    $qry->the_post();
                ?>
                    <li>
                        <?php 
                        if( $show_thumbnail ){ ?>
                            <a <?php echo $target;?> href="<?php the_permalink();?>" class="post-thumbnail">
                                <?php 
                                    if( has_post_thumbnail() && $show_thumbnail ){ 
                                        the_post_thumbnail( $glossy_blog_widget_popular_post_size, array( 'itemprop' => 'image' ) );
                                    }
                                ?>
                            </a>
                        <?php }
                        ?>
                        <div class="entry-header">
                            <h6 class="entry-title"><a <?php echo $target;?> href="<?php the_permalink(); ?>"><?php the_title();?></a></h6>

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

                        
                            <?php if( $based_on == 'views' && $view_count ){ ?>
                                <span class="view-count"><?php echo esc_html( $this->glossy_blog_get_views( get_the_ID() ) );?></span>
                            <?php }
                            elseif( $based_on == 'comments' && $comment_num ){ ?>
                                <span class="comment-count"><i class="fa fa-comment" aria-hidden="true"></i><?php echo absint( get_comments_number() ); ?></span>
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
            echo apply_filters( 'glossy_blog_widget_popular_post_widget_filter', $html, $args, $instance );
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
        
        $title          = ! empty( $instance['title'] ) ?  $instance['title'] : __( 'Popular Posts', 'glossy-blog' );
        $num_post       = ! empty( $instance['num_post'] ) ? $instance['num_post'] : 3 ;
        $show_thumbnail = ! empty( $instance['show_thumbnail'] ) ? $instance['show_thumbnail'] : '';
        $show_postdate  = ! empty( $instance['show_postdate'] ) ? $instance['show_postdate'] : '';
        $based_on       = ! empty( $instance['based_on'] ) ? $instance['based_on'] : 'views';
        $comment_num    = ! empty( $instance['comment_num'] ) ? $instance['comment_num'] : '';
        $view_count     = ! empty( $instance['view_count'] ) ? $instance['view_count'] : '';
        $style          = ! empty( $instance['style'] ) ? $instance['style'] : 'style-one';
        $target         = ! empty( $instance['target'] ) ? $instance['target'] : '';
        ?>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'glossy-blog' ); ?></label> 
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) );  ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'num_post' ) ); ?>"><?php esc_html_e( 'Number of Posts', 'glossy-blog' ); ?></label> 
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'num_post' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'num_post' ) ); ?>" type="number" step="1" min="1" value="<?php echo esc_attr( $num_post ); ?>" />
        </p>
        
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'based_on' ) ); ?>"><?php esc_html_e( 'Popular based on:', 'glossy-blog' ); ?></label>
            <select id="<?php echo esc_attr( $this->get_field_id( 'based_on' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'based_on' ) ); ?>" class="based-on">
                <option value="views" <?php selected( $based_on, 'views' ); ?>><?php esc_html_e( 'Post Views', 'glossy-blog' ); ?></option>
                <option value="comments" <?php selected( $based_on, 'comments' ); ?>><?php esc_html_e( 'Comment Count', 'glossy-blog' ); ?></option>
            </select>
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
        $instance['based_on']       = ! empty( $new_instance['based_on'] ) ? esc_attr( $new_instance['based_on'] ) : 'views';
        $instance['comment_num']    = ! empty( $new_instance['comment_num'] ) ? absint( $new_instance['comment_num'] ) : '';
        $instance['view_count']     = ! empty( $new_instance['view_count'] ) ? absint( $new_instance['view_count'] ) : '';
        $instance['style']          = ! empty( $new_instance['style'] ) ? esc_attr( $new_instance['style'] ) : 'style-one';
        $instance['target']         = ! empty( $new_instance['target'] ) ? esc_attr( $new_instance['target'] ) : '';
        
        return $instance;
                
    }

} // class Graphthemes_Widget_Popular_Post 
endif;