<?php


/* Sanitize Google Fonts */
function glossy_blog_sanitize_google_fonts( $input, $setting ) {

  // Get list of choices from the control associated with the setting.
  $choices = $setting->manager->get_control( $setting->id )->choices;
  
  // If the input is a valid key, return it; otherwise, return the default.
  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

}


function glossy_blog_sanitize_float( $input ) {
  return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}



//checkbox sanitization function
function glossy_blog_sanitize_checkbox( $input ) {
  //returns true if checkbox is checked
  return ( ( isset( $input ) && true == $input ) ? true : false );
}


function glossy_blog_sanitize_select( $input, $setting ) {
  
  // Ensure input is a slug.
  $input = sanitize_key( $input );
  
  // Get list of choices from the control associated with the setting.
  $choices = $setting->manager->get_control( $setting->id )->choices;
  
  // If the input is a valid key, return it; otherwise, return the default.
  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}


function glossy_blog_sanitize_array( $value ){    
    if ( is_array( $value ) ) {
      foreach ( $value as $key => $subvalue ) {
        $value[ $key ] = esc_attr( $subvalue );
      }
      return $value;
    }
  return esc_attr( $value );    
}