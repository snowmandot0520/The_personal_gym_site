<?php
/**
* Widget Author Profile
*/
 
// register Author Profile Widget
function glossy_blog_register_author_profile_widget() {
    register_widget( 'Graphthemes_Author_Profile' );
}
add_action( 'widgets_init', 'glossy_blog_register_author_profile_widget' );

if( ! class_exists( 'Graphthemes_Author_Profile' ) ) : 
     /**
     * Adds Graphthemes_Author_Profile widget.
     */
    class Graphthemes_Author_Profile extends WP_Widget {

        /**
         * Register widget with WordPress.
         */
        function __construct() {
            parent::__construct(
                'glossy_blog_widget_author_profile', // Base ID
                __( 'Graphthemes: Author Profile', 'glossy-blog' ), // Name
                array( 'description' => __( 'An Author Profile Widget', 'glossy-blog' ), ) // Args
            );
        }

        public function widget( $args, $instance ) {

            $title            = ! empty( $instance['title'] ) ? $instance['title'] : '';
            $name             = ! empty( $instance['name'] ) ? $instance['name'] : '';
            $email            = ! empty( $instance['email'] ) ? $instance['email'] : '';        
            $content          = ! empty( $instance['content'] ) ? $instance['content'] : '';
            $image            = ! empty( $instance['image'] ) ? $instance['image'] : '';
            $author_image     = ! empty( $instance['author-image'] ) ? $instance['author-image'] : '';
            $label            = ! empty( $instance['label'] ) ? $instance['label'] : '';
            $link             = ! empty( $instance['link'] ) ? $instance['link'] : '';
            $target             = ! empty( $instance['target'] ) ? $instance['target'] : '';
            $attachment_id    = $image;
            $social_facebook = ! empty( $instance['social-facebook'] ) ? $instance['social-facebook'] : '';
            $social_linkedin = ! empty( $instance['social-linkedin'] ) ? $instance['social-linkedin'] : '';
            $social_twitter = ! empty( $instance['social-twitter'] ) ? $instance['social-twitter'] : '';
            $social_instagram = ! empty( $instance['social-instagram'] ) ? $instance['social-instagram'] : '';

            if ( !filter_var( $image, FILTER_VALIDATE_URL ) === false ) {
                $attachment_id = $obj->glossy_blog_widget_get_attachment_id( $image );
            }

            $option = ! empty( $instance['author-image-option'] ) ? $instance['author-image-option'] : 'gravatar';

            if( $attachment_id ){
            $author_bio_img_size = apply_filters('author_bio_img_size','thumbnail');
            }

                    
            echo $args['before_widget'];
            ob_start();

            if( $title ) {
                echo $args['before_title'] . apply_filters( 'widget_title', $title, $instance, $this->id_base ) . $args['after_title'];
            }
            ?>

            <div class="graphthemes-widget-author-bio-holder">
                <div class="image-holder">
                    <?php 
                    if( $option == 'gravatar' ){ 
                        echo get_avatar( $email, 300 ); 
                    }
                    elseif( $option == 'photo' && $author_image ) { ?>
                        <img src="<?php echo esc_url( $author_image ); ?>">
                    <?php                        
                    }
                    ?>
                </div> 
                <div class="text-holder">
                    <H5 class="title-holder"><?php echo esc_html( $name ); ?></H5> 
                    <div class="author-bio-content">
                        <?php echo wpautop( wp_kses_post( $content ) ); ?>
                    </div>
                                    
                    <?php if( $link && $label ){ ?>
                        <a <?php if( isset( $instance['target'] ) && $instance['target']=='1' ){ echo "target=_blank"; } ?> href="<?php echo esc_url( $link ); ?>" class="btn-readmore"><?php echo esc_html( $label );?></a>
                    <?php } ?>

                    <div class="author-bio-socicons social-share">
                        <ul class="list-group list-group-horizontal list-inline">
                            <?php if( isset( $instance['social-facebook'] ) && $instance['social-facebook'] ){ ?>
                            
                                <li class="social-share-list list-group-item facebook-svg">
                                <a target="_blank" href="<?php echo esc_url( $instance['social-facebook'] );?>">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                                    </a>
                                </li>
                            
                        <?php } ?>


                        <?php if( isset( $instance['social-linkedin'] ) && $instance['social-linkedin'] ){ ?>

                            
                                <li class="social-share-list list-group-item linkedin-svg">
                                <a target="_blank" href="<?php echo esc_url( $instance['social-linkedin'] );?>">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
                                    </a>
                                </li>
                            
                        <?php } ?>

                        <?php if( isset( $instance['social-twitter'] ) && $instance['social-twitter'] ){ ?>

                            
                                <li class="social-share-list list-group-item twitter-svg">
                                <a target="_blank" href="<?php echo esc_url( $instance['social-twitter'] );?>">
                                    <svg version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M492,109.5c-17.4,7.7-36,12.9-55.6,15.3c20-12,35.4-31,42.6-53.6c-18.7,11.1-39.4,19.2-61.5,23.5  C399.8,75.8,374.6,64,346.8,64c-53.5,0-96.8,43.4-96.8,96.9c0,7.6,0.8,15,2.5,22.1C172,179,100.6,140.4,52.9,81.7  c-8.3,14.3-13.1,31-13.1,48.7c0,33.6,17.1,63.3,43.1,80.7C67,210.7,52,206.3,39,199c0,0.4,0,0.8,0,1.2c0,47,33.4,86.1,77.7,95  c-8.1,2.2-16.7,3.4-25.5,3.4c-6.2,0-12.3-0.6-18.2-1.8c12.3,38.5,48.1,66.5,90.5,67.3c-33.1,26-74.9,41.5-120.3,41.5  c-7.8,0-15.5-0.5-23.1-1.4C62.9,432,113.8,448,168.4,448C346.6,448,444,300.3,444,172.2c0-4.2-0.1-8.4-0.3-12.5  C462.6,146,479,128.9,492,109.5z"/></svg>
                                    </a>
                                </li>
                            

                        <?php } ?>

                        <?php if( isset( $instance['social-instagram'] ) && $instance['social-instagram'] ){ ?>

                            
                                <li class="social-share-list list-group-item instagram-svg">
                                <a target="_blank" href="<?php echo esc_url( $instance['social-instagram'] );?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/> </svg>
                                    </a>
                                </li>
                           

                        <?php } ?>

                        </ul>

                    </div>
                </div>
            </div>

            <?php    
                $html = ob_get_clean();
                echo apply_filters( 'glossy_blog_widget_author_profile_widget_filter', $html, $args, $instance );
                echo $args['after_widget'];  

        }




        public function form( $instance ) {
            $obj = new Graphthemes_Widget_Functions();

            $email            = get_option('admin_email');
            $title            = ! empty( $instance['title'] ) ? $instance['title'] : '';
            $name             = ! empty( $instance['name'] ) ? $instance['name'] : '';
            $email            = ! empty( $instance['email'] ) ? $instance['email'] : sanitize_email( $email );
            $content          = ! empty( $instance['content'] ) ? $instance['content'] : '';
            $image            = ! empty( $instance['image'] ) ? $instance['image'] : '';
            $author_image     = ! empty( $instance['author-image'] ) ? $instance['author-image'] : '';
            $label            = ! empty( $instance['label'] ) ? $instance['label'] : '';
            $link             = ! empty( $instance['link'] ) ? $instance['link'] : '';
            $target             = ! empty( $instance['target'] ) ? $instance['target'] : 0;
            $socicon       = ! empty( $instance['socicon'] ) ? $instance['socicon'] : ''; 
            $option           = ! empty( $instance['author-image-option'] ) ? $instance['author-image-option'] : 'gravatar';
            $social_facebook = ! empty( $instance['social-facebook'] ) ? $instance['social-facebook'] : '';
            $social_linkedin = ! empty( $instance['social-linkedin'] ) ? $instance['social-linkedin'] : '';
            $social_twitter = ! empty( $instance['social-twitter'] ) ? $instance['social-twitter'] : '';
            $social_instagram = ! empty( $instance['social-instagram'] ) ? $instance['social-instagram'] : '';
            ?>
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'glossy-blog' ); ?></label> 
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'name' ) ); ?>"><?php esc_html_e( 'Author Name', 'glossy-blog' ); ?></label> 
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'name' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'name' ) ); ?>" type="text" value="<?php echo esc_attr( $name ); ?>" />
            </p>
            
            <p>
                <label><?php esc_html_e('Display photo from:','glossy-blog'); ?></label>

                <input class="author-image" type="radio" name="<?php echo esc_attr( $this->get_field_name( 'author-image-option' ) );?>" id="<?php echo esc_attr( $this->get_field_id( 'author-image-option' . '-gravatar' ) );?>" value="gravatar" <?php if( $option == 'gravatar' ) echo 'checked'; ?> />

                <label for="<?php echo esc_attr( $this->get_field_id( 'author-image-option' . '-gravatar' ) );?>" class="radio-btn-wrap"><?php esc_html_e('Gravatar', 'glossy-blog');?></label>

                <input class="author-image" type="radio" name="<?php echo esc_attr( $this->get_field_name( 'author-image-option' ) );?>" id="<?php echo esc_attr( $this->get_field_id( 'author-image-option' . '-photo' ) );?>" value="photo" <?php if( $option == 'photo' ) echo 'checked'; ?> />

                <label for="<?php echo esc_attr( $this->get_field_id( 'author-image-option' . '-photo' ) );?>" class="radio-btn-wrap"><?php esc_html_e('Uploaded Photo','glossy-blog');?></label>
            </p>
            
            <p>
                <input class="widefat author_image_url" id="<?php echo $this->get_field_id( 'author-image' ); ?>" name="<?php echo $this->get_field_name( 'author-image' ); ?>" type="text" value="<?php echo esc_url( $author_image ); ?>" />
                <button class="upload_image_button button button-primary"><?php esc_html_e( "Select Image", 'glossy-blog' ); ?></button>
            </p>
            
            <p class="author-email">
                <label for="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>"><?php esc_html_e( 'Author Email', 'glossy-blog' ); ?></label> 
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'email' ) ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
            </p>
            <div class="widget-side-note" class="example-text"><?php $grav_link = '<a href=' . esc_url( get_avatar_url( $email ) ) . ' target="_blank">' . esc_html__( "Gravatar", 'glossy-blog' ) . '</a>'; echo sprintf( __( 'You can show your %1$s image instead of manually uploading your photo. Just add your gravatar registered email address here.','glossy-blog'), $grav_link );?></div>
            
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>"><?php esc_html_e( 'Description', 'glossy-blog' ); ?></label>
                <textarea name="<?php echo esc_attr( $this->get_field_name( 'content' ) ); ?>" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>"><?php echo wp_kses_post( $content ); ?></textarea>
            </p>


            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'label' ) ); ?>"><?php esc_html_e( 'Button Label', 'glossy-blog' ); ?></label> 
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'label' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'label' ) ); ?>" type="text" value="<?php echo esc_attr( $label ); ?>" />
            </p>
            
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>"><?php esc_html_e( 'Button Link', 'glossy-blog' ); ?></label>
                <input id="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'link' ) ); ?>" type="text" value="<?php echo esc_url( $link ); ?>" />
                
            </p>

            <p>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'target' ) ); ?>" <?php $j='0'; if( isset( $instance['target'] ) ){ $j='1'; } ?> value="1" <?php checked( $j, true ); ?> name="<?php echo esc_attr( $this->get_field_name( 'target' ) ); ?>" type="checkbox" />
                <label for="<?php echo esc_attr( $this->get_field_id( 'target' ) ); ?>"><?php esc_html_e( 'Open in New Tab', 'glossy-blog' ); ?></label>
            </p>
            

            <div class="widget-social-profile">
                <label><h3><?php esc_html_e( "Social Profile", 'glossy-blog' ); ?></h3></label>
                
                <label for="<?php echo esc_attr( $this->get_field_id( 'social-facebook' ) ); ?>"><?php esc_html_e( 'Facebook Profile', 'glossy-blog' ); ?></label> 
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'social-facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'social-facebook' ) ); ?>" type="text" value="<?php echo esc_attr( $social_facebook ); ?>" />

                <label for="<?php echo esc_attr( $this->get_field_id( 'social-linkedin' ) ); ?>"><?php esc_html_e( 'LinkedIn Profile', 'glossy-blog' ); ?></label> 
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'social-linkedin' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'social-linkedin' ) ); ?>" type="text" value="<?php echo esc_attr( $social_linkedin ); ?>" />

                <label for="<?php echo esc_attr( $this->get_field_id( 'social-twitter' ) ); ?>"><?php esc_html_e( 'Twitter Profile', 'glossy-blog' ); ?></label> 
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'social-twitter' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'social-twitter' ) ); ?>" type="text" value="<?php echo esc_attr( $social_twitter ); ?>" />

                <label for="<?php echo esc_attr( $this->get_field_id( 'social-instagram' ) ); ?>"><?php esc_html_e( 'Instagram Profile', 'glossy-blog' ); ?></label> 
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'social-instagram' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'social-instagram' ) ); ?>" type="text" value="<?php echo esc_attr( $social_instagram ); ?>" />
            </div>
            
            
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
            $email            = get_option('admin_email');
            
            $instance['title']          = ! empty( $new_instance['title'] ) ? sanitize_text_field( $new_instance['title'] ) : "";
            $instance['name']       = ! empty( $new_instance['name'] ) ? sanitize_text_field( $new_instance['name'] ) : "" ;        
            $instance['email'] = ! empty( $new_instance['email'] ) ? sanitize_email( $new_instance['email'] ) : $email;
            $instance['content']  = ! empty( $new_instance['content'] ) ? wp_kses_post( $new_instance['content'] ) : '';
            $instance['image']          = ! empty( $new_instance['image'] ) ? esc_url( $new_instance['image'] ) : '';
            $instance['author-image']         = ! empty( $new_instance['author-image'] ) ? esc_url( $new_instance['author-image'] ) : '';
            $instance['label']         = ! empty( $new_instance['label'] ) ? wp_kses_post( $new_instance['label'] ) : '';
            $instance['link']         = ! empty( $new_instance['link'] ) ? esc_url( $new_instance['link'] ) : '';
            $instance['target']         = ! empty( $new_instance['target'] ) ? absint( $new_instance['target'] ) : 0;
            $instance['socicon']         = ! empty( $new_instance['socicon'] ) ? wp_kses_post( $new_instance['socicon'] ) : '';
            $instance['author-image-option']         = ! empty( $new_instance['author-image-option'] ) ? wp_kses_post( $new_instance['author-image-option'] ) : '';
            $instance['social-facebook']         = ! empty( $new_instance['social-facebook'] ) ? esc_url( $new_instance['social-facebook'] ) : '';
            $instance['social-linkedin']         = ! empty( $new_instance['social-linkedin'] ) ? esc_url( $new_instance['social-linkedin'] ) : '';
            $instance['social-twitter']         = ! empty( $new_instance['social-twitter'] ) ? esc_url( $new_instance['social-twitter'] ) : '';
            $instance['social-instagram']         = ! empty( $new_instance['social-instagram'] ) ? wp_kses_post( $new_instance['social-instagram'] ) : '';


            return $instance;
            
        }

    }

endif;