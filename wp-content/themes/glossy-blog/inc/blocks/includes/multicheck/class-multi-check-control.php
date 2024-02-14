<?php
/**
 * Customizer Control: multi-check
 *
 */


// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Graphthemes_Multi_Check_Control' ) ) {

	/**
	 * Adds a multicheck control.
	 */
	class Graphthemes_Multi_Check_Control extends Wp_Customize_Control {

		/**
		 * The control type.
		 *
		 * @access public
		 * @var string
		 */
		public $type = 'multi-check';

		public $tooltip = '';
        
		public function to_json() {
			parent::to_json();
			
            if ( isset( $this->default ) ) {
				$this->json['default'] = $this->default;
			} else {
				$this->json['default'] = $this->setting->default;
			}
			
            $this->json['value']   = $this->value();
			$this->json['choices'] = $this->choices;
			$this->json['link']    = $this->get_link();
            $this->json['id']      = $this->id;
            $this->json['tooltip'] = $this->tooltip;
						
            $this->json['inputAttrs'] = '';
			foreach ( $this->input_attrs as $attr => $value ) {
				$this->json['inputAttrs'] .= $attr . '="' . esc_attr( $value ) . '" ';
			}
		}
        
        public function enqueue() {            
            wp_enqueue_script( 'graphthemes-multi-check', get_template_directory_uri() . '/inc/blocks/includes/multicheck/multi-check.js', array( 'jquery' ), false, true );
        }


		protected function content_template() {
			?>

			<# if ( ! data.choices ) { return; } #>

			<# if ( data.tooltip ) { #>
				<a href="#" class="tooltip hint--left" data-hint="{{ data.tooltip }}"><span class='dashicons dashicons-info'></span></a>
			<# } #>

			<# if ( data.label ) { #>
				<span class="customize-control-title">{{ data.label }}</span>
			<# } #>

			<# if ( data.description ) { #>
				<span class="description customize-control-description">{{{ data.description }}}</span>
			<# } #>

			<ul>
				<# for ( key in data.choices ) { #>
					<li>
						<label>
							<input type="checkbox" value="{{ key }}"<# if ( _.contains( data.value, key ) ) { #> checked<# } #> />
							{{ data.choices[ key ] }}
						</label>
					</li>
				<# } #>
			</ul>
			<?php
		}
	}
}
