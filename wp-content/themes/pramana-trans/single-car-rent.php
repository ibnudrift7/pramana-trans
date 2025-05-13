<?php
	get_header();
?>

<main class="main">
	<?php the_content(); ?>

	<section class="py-5">
		<!-- Car Listings -->
		<div class="container py-5">
			<?php if (have_rows('car_items')): ?>
        <?php
          while (have_rows('car_items')): the_row();
						$car_name = get_sub_field('car_name');
						$car_specs = get_sub_field('car_specs');
						$whatsapp = get_sub_field('car_wa');
						$tel = get_sub_field('car_tel');
						$car_image = get_sub_field('car_image') ?? [];
  					$car_image_url = $car_image['url'];
						$start_price = get_sub_field( 'car_rent_type')[0]['car_rent_price'] ?? '';  
        ?>
            <div class="card card-list-car mb-5">
							<div class="row g-0">
								<div class="col-md-4">
									<div class="car-card-header text-center">
										<h5 class="fw-bold mb-2">Sewa <?php echo $car_name . ' ' . get_the_title(); ?></h5>
									</div>
									<div class="car-img-container">
										<img src="<?php echo $car_image_url; ?>" alt="" class="car-img img-fluid rounded-start"
											style="max-height: 420px">
									</div>
								</div>
								<div class="col-md-8">
									<div class="card-body d-flex flex-column justify-content-center h-100">
										<div class="row">
											<div class="col-md-6">
												<h6 class="text-secondary text-white text-bold mb-2">HARGA SEWA</h6>
												<?php if (have_rows('car_rent_type')): ?>
													<table class="price-table">
														<?php
															while (have_rows('car_rent_type')): the_row();
																$duration = get_sub_field('car_rent_duration'); 
																$price = get_sub_field('car_rent_price');

														?>
																<tr>
																	<td><?php echo $duration; ?></td>
																	<td class="text-end"><?php echo $price; ?></td>
																</tr>
														<?php 
															endwhile; 
														?>
													</table>
													<button class="btn btn-primary mt-3 w-100">PESAN</button>

												<?php endif; ?>
											</div>
											<div class="col-md-6">
												<div class="py-4"></div>
												<h5 class="fw-bold mb-3">Harga Mulai <span class="price-highlight"><?php  echo $start_price; ?></span></h5>
												<div class="d-flex justify-content-between mt-3 btn-group-sm">
													<button href="<?php echo $whatsapp; ?>" class="btn btn-outline-primary"><i class="fab fa-whatsapp me-1"></i> WHATSAPP</button>
													<button href="<?php echo $tel; ?>" class="btn btn-outline-primary"><i class="fas fa-phone me-1"></i> TELEPON</button>
												</div>
												<button class="btn btn-primary w-100 mt-3"><i class="fas fa-calendar-check me-1"></i> BOOKING</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
        <?php 
          endwhile; 
        ?>
      <?php endif; ?>

		</div>
	</section>

	<?php get_template_part('template-parts/general/booking-form'); ?>
	<?php get_template_part('template-parts/general/locations'); ?>
</main>

<?php
	get_footer();
?>