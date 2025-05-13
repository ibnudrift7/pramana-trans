<?php 
	$wa = get_field("pramana_whatsapp", 'option');
	$fb = get_field("pramana_facebook", 'option');
	$ig = get_field("pramana_instagram", 'option');
	$phone = get_field("pramana_telephone", 'option');
	$email = get_field("pramana_email", 'option');
?>
<header id="header" class="header sticky-top">
	<div class="topbar d-flex align-items-center">
		<div class="container d-flex justify-content-center justify-content-md-between">
			<div class="contact-info d-flex align-items-center">
				<i class="bi bi-envelope d-flex align-items-center"><a
						href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></i>
				<i class="bi bi-phone d-flex align-items-center ms-4"><a href="tel:<?php echo $phone; ?>"><span><?php echo $phone; ?></span></a></i>
			</div>
			<div class="social-links d-none d-md-flex align-items-center">
				<a href="<?php echo $fb; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
				<a href="<?php echo $ig; ?>" class="instagram"><i class="bi bi-instagram"></i></a>
				<div class="space px-2"></div>
				<a href="/id/" class="language-id"><span>ID</span></a>
				<a href="/en/" class="language-en ms-2"><span>EN</span></a>
			</div>
		</div>
	</div><!-- End Top Bar -->

	<div class="branding d-flex align-items-cente">
		<div class="container position-relative d-flex align-items-center justify-content-between">
			<a href="<?php echo home_url(); ?>" class="logo d-flex align-items-center">
				<?php 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				?>
				<img src="<?php echo $logo[0]; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
				<h1 class="sitename"><?php echo get_bloginfo( 'name' ); ?></h1>
			</a>
			<nav id="navmenu" class="navmenu">
				<?php 
					wp_nav_menu(
						[
							'theme_location' => 'header-menu', 
							'container' => false,
						]
					);
				?>
				<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
			</nav>
		</div>
	</div>
</header>