<?php
/**
 * Pramana Trans
 *
 */

register_nav_menus(
	array(
		'header-menu' => __( 'Header' ),
		'footer-menu' => __( 'Footer' )
	)
);


add_action( 'after_setup_theme', 'pramana_supports' );
function pramana_supports() {
	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );
}

add_action( 'wp_enqueue_scripts', 'pramana_styles' );
function pramana_styles() {
	// Enqueue theme stylesheet.

	$styles = [
		'roboto-font' => 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
		'bootstrap-min' => '/assets/vendor/bootstrap/css/bootstrap.min.css',
		'bootstrap-icons' => '/assets/vendor/bootstrap-icons/bootstrap-icons.css',
		'aos' => '/assets/vendor/aos/aos.css',
		'glightbox' => '/assets/vendor/glightbox/css/glightbox.min.css',
		'swiper-bundle-min' => '/assets/vendor/swiper/swiper-bundle.min.css',
		'pramana-main-style' => '/assets/css/main.css',
		'pramana-custom-style' => '/assets/css/custom.css',
	];
	
	foreach ($styles as $key => $dir) {
		$external_src = [
			'roboto-font',
		];

		wp_enqueue_style(
			$key,
			in_array($key, $external_src) ? $dir : get_template_directory_uri() . $dir,
			[],
			time(),
		);
	}
}

add_action('wp_enqueue_scripts', 'pramana_scripts');
function pramana_scripts() {
	$scripts = [
		'bootstrap-bundle-js' => '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
		'validate-js' => '/assets/vendor/php-email-form/validate.js',
		'aos-js' => '/assets/vendor/aos/aos.js',
		'glightbox-js' => '/assets/vendor/glightbox/js/glightbox.min.js',
		'waypoints-js' => '/assets/vendor/waypoints/noframework.waypoints.js',
		'pure-counter-js' => '/assets/vendor/purecounter/purecounter_vanilla.js',
		'swiper-bundle-js' => '/assets/vendor/swiper/swiper-bundle.min.js',
		'images-loaded-js' => '/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js',
		'isotope-js' => '/assets/vendor/isotope-layout/isotope.pkgd.min.js',
		'pramana-js' => '/assets/js/main.js',
		'pramana-custom-js' => '/assets/js/custom.js',
	];
	
	foreach ($scripts as $key => $dir) {
		$external_src = [];
		wp_enqueue_script(
			$key,
			in_array($key, $external_src) ? $dir : get_template_directory_uri() . $dir,
			[],
			time(),
			true
		);
	}

	wp_localize_script('pramana-custom-js', 'ajax_vars', [
		'ajax_url' => admin_url('admin-ajax.php')
	]);
}


add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
	$blocks = [
		'home-banner',
		'subpage-banner',
		'about',
		'why-choose-us',
		'trusted-partner',
		'car-rent',
		'tour-packages',
		'more-services',
		// 'bus-rent',
		// 'tour-package-home',
	];

	foreach ($blocks as $folder) {
		register_block_type( __DIR__ . '/template-parts/blocks/' . $folder );
	}
}

// Remove Admin Menu
add_action( 'admin_menu', 'remove_admin_menu' );
function remove_admin_menu() {

	$user = wp_get_current_user();
	if (in_array( 'editor', (array) $user->roles)) {
		remove_menu_page( 'edit-comments.php' );
		remove_menu_page( 'tools.php' );
	}
}

// Remove Admin Bar Render
add_action( 'wp_before_admin_bar_render', 'admin_bar_render' );
function admin_bar_render() {
	global $wp_admin_bar;

	$user = wp_get_current_user();
	if (in_array( 'editor', (array) $user->roles)) {
		$wp_admin_bar->remove_menu('comments');
	}
}

add_action( 'wp_ajax_nopriv_get_car_details', 'get_car_details_ajax' );
add_action( 'wp_ajax_get_car_details', 'get_car_details_ajax' );
function get_car_details_ajax() {
	$post_id = isset( $_REQUEST["post_id"] ) ? intval( $_REQUEST["post_id"] ) : '';
	$row_index = isset( $_REQUEST["row_index"] ) ? intval( $_REQUEST["row_index"] ) : '';
	$target_field = isset( $_REQUEST["target_field"] ) ? $_REQUEST["target_field"] : '-';
	$title = ucfirst($target_field);
	$language = get_locale();

	if ($language == 'id_ID') {
		switch ($title) {
			case 'Facility':
				$title = 'Fasilitas';
				break;
		}
	}

	if (!$post_id || !$row_index ) {
		$response = json_encode( 
			[
				'status' => 404, 
				'message' => 'No data found',
			]
		);
	} 
	else {
		$car_items = get_field('car_items', $post_id);
		
		if ($car_items) {
			$car_item = $car_items[$row_index - 1];
			$car_include = $car_item['car_include'];
			$car_exclude = $car_item['car_exclude'];
			$car_facilities = $car_item['car_facilities'];

			$response = json_encode( 
			[
				'status' => 200,
				'message' => 'Data found',
				'data' => [
					'modal_title' => $title,
					'modal_include' => $car_include,
					'modal_exclude' => $car_exclude,
					'modal_facility' => $car_facilities,
				],
			]
		);
		}
	}

	echo $response;
	wp_die();
}


/**
 * Lowers the metabox priority to 'core' for Yoast SEO's metabox.
 *
 * @param string $priority The current priority.
 *
 * @return string $priority The potentially altered priority.
 */

add_filter( 'wpseo_metabox_prio', 'lower_yoast_metabox_priority' );
function lower_yoast_metabox_priority( $priority ) {
  return 'core';
}