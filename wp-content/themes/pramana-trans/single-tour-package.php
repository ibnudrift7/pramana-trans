<?php
	get_header();
?>

<main class="main">
	<?php the_content(); ?>

	<?php if (has_category('tour-city')) : ?>
		<section  class="py-5">
			<div class="container py-5">
				<h2 class="section-title">PAKET WISATA <?php echo strtoupper(get_the_title()); ?></h2>
				<div class="row g-4">
					<?php
						// $tour_city_cat_id = get_term_by('slug', 'tour-city', 'category')->term_id;
						$args = array(
							'post_type' => 'tour-package',
							'post_parent' => get_the_ID(),
							'posts_per_page' => -1,
						);
						
						$tour_query = new WP_Query( $args );
						
						if ( $tour_query->have_posts() ) {
							while ( $tour_query->have_posts() ) {
								$tour_query->the_post(); 

								$tour_title = get_the_title();
								$tour_excerpt = get_the_excerpt();
								$tour_link = get_permalink();
								$tour_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
					?>
								<div class="col-md-6 col-lg-3">
									<div class="card">
										<div class="card-img-container">
											<img src="<?php echo $tour_img_url; ?>" alt="<?php echo $tour_title; ?>">
										</div>
										<div class="card-body">
											<h5 class="card-title"><?php echo $tour_title; ?></h5>
											<p class="card-text text-muted text-light"><?php echo $tour_excerpt; ?></p>
											<a href="<?php echo $tour_link; ?>" class="btn btn-primary btn-sm">Pesan</a>
										</div>
									</div>
								</div>
					<?php
							}
						}
						wp_reset_postdata();
					?>
				</div>
			</div>
		</section>

		<?php get_template_part('template-parts/general/booking-form'); ?>
		<?php get_template_part('template-parts/general/locations'); ?>
	<?php endif; ?>
</main>

<?php
	get_footer();
?>