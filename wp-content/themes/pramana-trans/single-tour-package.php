<?php
	get_header();
?>

<main class="main">
	<?php the_content(); ?>

	<?php if (has_category('tour-city')) : ?>
		<section  class="py-5">
			<div class="container py-5">
				<h2 class="section-title">Temukan Liburan - Paket Wisata <?php echo get_the_title(); ?></h2>
				<div class="row g-4">
					<?php
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
              					$tour_start_price = get_field('tpi_start_price', get_the_ID());
								$tour_link = get_permalink();
								$tour_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
					?>
								<div class="col-md-4 col-sm-6">
									<div class="destination-card">
											<img src="<?php echo $tour_img_url; ?>" alt="<?php echo $tour_title; ?>">
											<div class="card-overlay">
												<h5>Paket Wisata <?php echo $tour_title; ?></h5>
												<div class="d-flex justify-content-between align-items-end">
													<div class="cont">
														<span class="start">Start from:</span> <br>
														<span class="price-tag"><?php echo $tour_start_price ?></span>
													</div>
													<div class="btn-group">
														<a href="<?php echo $tour_link ?>" class="btn-group btn-group-sm btn btn-warning"><small>Lihat</small></a>
													</div>
												</div>
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
	<?php else: ?>
		<?php get_template_part('template-parts/components/tour-packages-items'); ?>
		<?php get_template_part('template-parts/general/booking-form'); ?>
	<?php endif; ?>
</main>

<?php
	get_footer();
?>