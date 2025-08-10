<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Wereldbouw
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses wereldbouw_header_style()
 */
function wereldbouw_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'wereldbouw_custom_header_args',
			array(
				'default-image'      => '',
				'default-text-color' => '000000',
				'width'              => 1920,
				'height'             => 1080,
				'flex-height'        => true,
				'wp-head-callback'   => 'wereldbouw_header_style',
				'video'              => true,
			)
		)
	);
}
add_action( 'after_setup_theme', 'wereldbouw_custom_header_setup' );

if ( ! function_exists( 'wereldbouw_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see wereldbouw_custom_header_setup().
	 */
	function wereldbouw_header_style() {
		$header_background_color = get_theme_mod( 'wereldbouw_header_background_color', "#ffffff");
		$header_text_color = get_theme_mod( 'header_textcolor', "000000");
		$description_text_color = get_theme_mod( 'wereldbouw_header_description_color', "#ffffff");

		?>
		<style type="text/css">
			.site-header {
				background-color: <?php echo esc_attr( $header_background_color ); ?>;
			}
			.site-description, .site-header-widget-area {
				color: <?php echo esc_attr( $description_text_color ); ?>;
			}
			.site-title a,
			.main-navigation a {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		</style>
		<?php
	}
endif;
