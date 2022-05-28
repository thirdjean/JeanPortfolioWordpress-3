<?php
/**
 * Default theme options.
 *
 * @package Soft Blog
 */

if ( ! function_exists( 'soft_blog_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function soft_blog_get_default_theme_options() {

	$defaults = array();

	// Theme Options
	$defaults['custom_theme_color'] 					= '#000';
	$defaults['show_header_image']		    			= 'header-image-enable';
	$defaults['show_page_title']		    			= 'page-title-enable';
	$defaults['layout_options_blog']					= 'left-sidebar';
	$defaults['layout_options_archive']					= 'left-sidebar';
	$defaults['layout_options_page']					= 'no-sidebar';	
	$defaults['layout_options_single']					= 'left-sidebar';	
	$defaults['excerpt_length']							= 100;
	$defaults['your_latest_posts_title']				= esc_html__('Write Your Own Blog.','soft-blog');

	//Footer section 		
	$defaults['copyright_text']							= esc_html__( 'Copyright &copy; 2022 All rights reserved.', 'soft-blog' );

	// Pass through filter.
	$defaults = apply_filters( 'soft_blog_filter_default_theme_options', $defaults );
	return $defaults;
}

endif;

/**
*  Get theme options
*/
if ( ! function_exists( 'soft_blog_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function soft_blog_get_option( $key ) {

		$default_options = soft_blog_get_default_theme_options();
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;