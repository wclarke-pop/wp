<?php
function the_dist_path( $path ) {
	echo esc_url( get_dist_path( $path ) );
}
function get_dist_path( $path ) {
	return get_template_directory_uri() . '/dist/' . $path;
}

if ( ! function_exists( 'will_enqueue_scripts' ) ) {
	/**
	 * Enqueue Scripts/Styles
	 */
	function will_enqueue_scripts() {
		$theme_version = wp_get_theme()->get( 'Version' );

		wp_enqueue_style( 'app', get_dist_path('css/app.css'), array(), $theme_version );
		wp_enqueue_style( 'AOS_animate', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), $theme_version );
		wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css', array(), $theme_version );
                
        wp_enqueue_script( 'tailwind', 'https://cdn.tailwindcss.com', array(), $theme_version, true );
		wp_enqueue_script( 'AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), $theme_version, true );
		wp_enqueue_script( 'app', get_dist_path('js/app.js'), array(), $theme_version, true );
	}

	add_action( 'wp_enqueue_scripts', 'will_enqueue_scripts' );
}

register_nav_menus (
    array(
        'main_nav' => 'Main Navigation',
        'footer_nav' => 'Footer Navigation' 
    )
    );