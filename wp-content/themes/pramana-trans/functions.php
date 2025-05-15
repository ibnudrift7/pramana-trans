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
		'car-rent-home',
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

// add_filter( 'body_class','custom_body_classes' );
// function custom_body_classes( $classes ) {
// 	if ( is_front_page() ) {
// 		$classes[] = 'page-home';
// 	} else if ( is_page( 'about-us' ) || is_page( 13 ) ) {
// 		$classes[] = 'page-about-us';
// 	} else if ( is_page( 'career' ) ) {
// 		$classes[] = 'page-career';
// 	} else if ( is_page( 'portfolio' ) ) {
// 		$classes[] = 'page-portfolio';
// 	} else if ( is_page( 'news' ) ) {
// 		$classes[] = 'page-news';
// 	} else if ( is_page( 'contact-us' ) ) {
// 		$classes[] = 'page-contact';
// 	} else if ( is_singular( 'portfolios' ) ) {
// 		$classes[] = 'page-portfolio-detail';
// 	} else if ( is_singular( 'news_list' ) ) {
// 		$classes[] = 'page-news-detail';
// 	} else if ( is_singular( 'careers' ) ) {
// 		$classes[] = 'page-career-detail';
// 	}
		
// 	return $classes;
// }

//Custom Theme Settings
/*
add_action('admin_menu', 'add_gcf_interface');
function add_gcf_interface() {
	add_options_page('Porta Settings', 'Porta Settings', '8', 'functions', 'globalcustomfields');
}

function globalcustomfields() {
	wp_enqueue_script('jquery');
	// This will enqueue the Media Uploader script
	wp_enqueue_media();    
?>
	<style type="text/css">
		.image_preview {
			width: 200px;
			height: auto;
			display: block;
			margin: 15px 0;
		}
		textarea {
			height: 75px;
		}
		hr {
			margin: 30px 0;
			border-width: 2px;
		}
	</style>
    <div class='wrap'>
    	<h2>Porta Settings</h2>
	    <form method="post" action="options.php">
		    <?php wp_nonce_field('update-options') ?>

		    <h2>General Options</h2>
		    <div>
			    <p><strong>Porta Black Logo</strong><br />
			    <?php if (get_option('porta_black_logo') != "") { ?>
			    	<img src="<?php echo get_option('porta_black_logo'); ?>" class="image_preview" />
			    <?php } ?>
			    <input type="text" name="porta_black_logo" id="porta_black_logo" class="regular-text" value="<?php echo get_option('porta_black_logo'); ?>">
			    <input type="button" name="upload-btn" class="upload-btn" class="button-secondary" value="Choose Image">
			</div>

			<div>
			    <p><strong>Porta White Logo</strong><br />
			    <?php if (get_option('porta_white_logo') != "") { ?>
			    	<img src="<?php echo get_option('porta_white_logo'); ?>" class="image_preview" />
			    <?php } ?>
			    <input type="text" name="porta_white_logo" id="porta_white_logo" class="regular-text" value="<?php echo get_option('porta_white_logo'); ?>">
			    <input type="button" name="upload-btn" class="upload-btn" class="button-secondary" value="Choose Image">
			</div>

		    <p><strong>Phone</strong><br />
		    <input class="regular-text" type="text" name="porta_phone" value="<?php echo get_option('porta_phone'); ?>" /></p>

		    <p><strong>Phone Text (Phone Label)</strong><br />
		    <input class="regular-text" type="text" name="porta_phone_label" value="<?php echo get_option('porta_phone_label'); ?>" /></p>

		    <p><strong>Email</strong><br />
		    <input class="regular-text" type="text" name="porta_email" value="<?php echo get_option('porta_email'); ?>" /></p>

		    <p><strong>Full Address (Show on the Contact Us Page)</strong><br />
		    <textarea class="regular-text" name="porta_full_address"><?php echo get_option('porta_full_address'); ?></textarea></p>

		    <p><strong>Instagram</strong><br />
		    <input class="regular-text" type="text" name="porta_instagram" value="<?php echo get_option('porta_instagram'); ?>" /></p>

		    <p><strong>Facebook</strong><br />
		    <input class="regular-text" type="text" name="porta_facebook" value="<?php echo get_option('porta_facebook'); ?>" /></p>

		    <p><strong>Behance</strong><br />
		    <input class="regular-text" type="text" name="porta_behance" value="<?php echo get_option('porta_behance'); ?>" /></p>

		    <p><strong>Linkedin</strong><br />
		    <input class="regular-text" type="text" name="porta_linkedin" value="<?php echo get_option('porta_linkedin'); ?>" /></p>

		    <hr>

		    <h2>Footer Options</h2>

		    <p><strong>Footer Address</strong><br />
		    <input class="regular-text" type="text" name="porta_footer_address" value="<?php echo get_option('porta_footer_address'); ?>" /></p>

		    <p><strong>Footer Big Text</strong><br />
		    <input class="regular-text" type="text" name="porta_footer_big_text" value="<?php echo get_option('porta_footer_big_text'); ?>" /></p>

		    <p><strong>Footer Copyright Text</strong><br />
		    <input class="regular-text" type="text" name="porta_footer_copyright" value="<?php echo get_option('porta_footer_copyright'); ?>" /></p>

		    <div>
			    <p><strong>Footer Logo 1</strong><br />
			    <?php if (get_option('porta_footer_logo_1') != "") { ?>
			    	<img src="<?php echo get_option('porta_footer_logo_1'); ?>" class="image_preview" />
			    <?php } ?>
			    <input type="text" name="porta_footer_logo_1" id="porta_footer_logo_1" class="regular-text" value="<?php echo get_option('porta_footer_logo_1'); ?>">
			    <input type="button" name="upload-btn" class="upload-btn" class="button-secondary" value="Choose Image">
			</div>

			<div>
			    <p><strong>Footer Logo 2</strong><br />
			    <?php if (get_option('porta_footer_logo_2') != "") { ?>
			    	<img src="<?php echo get_option('porta_footer_logo_2'); ?>" class="image_preview" />
			    <?php } ?>
			    <input type="text" name="porta_footer_logo_2" id="porta_footer_logo_2" class="regular-text" value="<?php echo get_option('porta_footer_logo_2'); ?>">
			    <input type="button" name="upload-btn" class="upload-btn" class="button-secondary" value="Choose Image">
			</div>


		    <p><input class="button button-primary" type="submit" name="Submit" value="Update Options" /></p>

		    <input type="hidden" name="action" value="update" />
		    <input type="hidden" name="page_options" value="porta_black_logo,porta_white_logo,porta_phone,porta_phone_label,porta_email,porta_full_address,porta_instagram,porta_facebook,porta_behance,porta_linkedin,porta_footer_big_text,porta_footer_copyright,porta_footer_logo_1,porta_footer_logo_2,porta_footer_address" />
	    </form>
    </div>

    <script type="text/javascript">
		jQuery(document).ready(function($){
		    $('.upload-btn').click(function(element) {
		        element.preventDefault();
		        var image = wp.media({ 
		            title: 'Upload Image',
		            // mutiple: true if you want to upload multiple files at once
		            multiple: false
		        }).open()
		        .on('select', function(e){
		            // This will return the selected image from the Media Uploader, the result is an object
		            var uploaded_image = image.state().get('selection').first();
		            
		            // We convert uploaded_image to a JSON object to make accessing it easier
		            // Output to the console uploaded_image
		            // console.log(uploaded_image);
		            
		            var image_url = uploaded_image.toJSON().url;
		            
		            // Let's assign the url value to the input field
		            if ($(element.currentTarget).parent().find('.image_preview').length == 0) {
		            	$('<img src="' + image_url + '" class="image_preview" />').
		            			insertBefore( $(element.currentTarget).parent().find('input[type="text"]') );
		            } else {
		            	$(element.currentTarget).parent().find('.image_preview').attr("src", image_url);
		            }
		            $(element.currentTarget).parent().find('input[type="text"]').val(image_url);
		        });
		    });
		});
	</script>
    <?php
}
*/