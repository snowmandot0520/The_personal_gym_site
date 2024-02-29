<?php
/**
 * Entr admin notify
 *
 */
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

if ( !class_exists( 'Entr_Notify_Admin' ) ) :

	/**
	 * The Entr admin notify
	 */
	class Entr_Notify_Admin {

		/**
		 * Setup class.
		 *
		 */
		public function __construct() {

			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
			add_action( 'admin_notices', array( $this, 'admin_notices' ), 99 );
			add_action( 'wp_ajax_entr_dismiss_notice', array( $this, 'dismiss_nux' ) );
			add_action( 'admin_menu', array( $this, 'add_menu' ), 5 );
		}

		/**
		 * Enqueue scripts.
		 *
		 */
		public function enqueue_scripts() {
			global $wp_customize;

			if ( isset( $wp_customize ) || entr_envo_extra_is_activated() ) {
				return;
			}

			wp_enqueue_style( 'entr-admin', get_template_directory_uri() . '/assets/css/admin/admin.css', '', '1' );

			wp_enqueue_script( 'entr-admin', get_template_directory_uri() . '/assets/js/admin/admin.js', array( 'jquery', 'updates' ), '1', 'all' );

			$entr_notify = array(
				'nonce' => wp_create_nonce( 'entr_notice_dismiss' )
			);

			wp_localize_script( 'entr-admin', 'entr_ux', $entr_notify );
		}

		/**
		 * Output admin notices.
		 *
		 */
		public function admin_notices() {
			global $pagenow;
			$theme_data = wp_get_theme();
			if ( ( 'themes.php' === $pagenow ) && isset( $_GET[ 'page' ] ) && ( 'entr' === $_GET[ 'page' ] ) || true === (bool) get_option( 'entr_notify_dismissed' ) || entr_envo_extra_is_activated() ) {
				return;
			}
			$theme_data = wp_get_theme();
			$theme_name = $theme_data->Name;
			?>

			<div class="notice notice-info entr-notice is-dismissible">
				<div class="entr-row">
					<div class="entr-col">
						<div class="notice-content">
							<?php if ( !entr_envo_extra_is_activated() && current_user_can( 'install_plugins' ) && current_user_can( 'activate_plugins' ) ) : ?>
								<h2>
									<?php
									/* translators: %s: Theme name */
									printf( esc_html__( 'Thank you for installing %s.', 'entr' ), '<strong>' . $theme_name . '</strong>' );
									?>
								</h2>
								<p class="entr-description">
									<?php
									/* translators: %s: Plugin name string */
									printf( esc_html__( 'To take full advantage of all the features this theme has to offer, please install and activate the %s plugin.', 'entr' ), '<strong>Envo Extra</strong>' );
									?>
								</p>
								<p>
									<?php Entr_Plugin_Install::install_plugin_button( 'envo-extra', 'envo-extra.php', 'Envo Extra', array( 'entr-nux-button' ), __( 'Activated', 'entr' ), __( 'Activate', 'entr' ), __( 'Install', 'entr' ) ); ?>
									<a href="<?php echo esc_url( admin_url( 'themes.php?page=entr' ) ); ?>" class="button button-primary button-hero">
										<?php
										/* translators: %s: Theme name */
										printf( esc_html__( 'Get started with %s', 'entr' ), $theme_data->Name );
										?>
									</a>
								</p>

							<?php endif; ?>
						</div>
					</div>
					<div class="entr-col entr-col-right">
						<div class="image-container">
							<?php echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/' . strtolower( str_replace( ' ', '-', $theme_name ) ) . '-banner.png"/>'; ?>
						</div>
					</div>
				</div>
			</div>
			<?php
		}

		public function add_menu() {
			if ( isset( $wp_customize ) || entr_envo_extra_is_activated() ) {
				return;
			}
			$theme_data = wp_get_theme();

			add_theme_page(
			$theme_data->Name, $theme_data->Name, 'edit_theme_options', 'entr', array( $this, 'admin_page' )
			);
		}

		public function admin_page() {
			if ( entr_envo_extra_is_activated() ) {
				return;
			}
			$theme_data = wp_get_theme();
			?>

			<div class="notice notice-info entr-notice-nux">

				<div class="notice-content">
					<?php if ( !entr_envo_extra_is_activated() && current_user_can( 'install_plugins' ) && current_user_can( 'activate_plugins' ) ) : ?>
						<h2>
							<?php
							/* translators: %s: Theme name */
							printf( esc_html__( 'Thank you for installing %s.', 'entr' ), '<strong>' . $theme_data->Name . '</strong>' );
							?>
						</h2>
						<p>
							<?php
							/* translators: %s: Plugin name string */
							printf( esc_html__( 'To take full advantage of all the features this theme has to offer, please install and activate the %s plugin.', 'entr' ), '<strong>Envo Extra</strong>' );
							?>
						</p>
						<p><?php Entr_Plugin_Install::install_plugin_button( 'envo-extra', 'envo-extra.php', 'Envo Extra', array( 'entr-nux-button' ), __( 'Activated', 'entr' ), __( 'Activate', 'entr' ), __( 'Install', 'entr' ) ); ?></p>
					<?php endif; ?>


				</div>
			</div>
			<?php
		}

		/**
		 * AJAX dismiss notice.
		 *
		 * @since 2.2.0
		 */
		public function dismiss_nux() {
			$nonce = !empty( $_POST[ 'nonce' ] ) ? sanitize_text_field( wp_unslash( $_POST[ 'nonce' ] ) ) : false;

			if ( !$nonce || !wp_verify_nonce( $nonce, 'entr_notice_dismiss' ) || !current_user_can( 'manage_options' ) ) {
				die();
			}

			update_option( 'entr_notify_dismissed', true );
		}

	}

	endif;

return new Entr_Notify_Admin();
