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
					// get id index.
					$index = get_row_index();
					$car_name = get_sub_field('car_name');
					$car_specs = get_sub_field('car_specs');
					$car_include = get_sub_field('car_include');
					$car_exclude = get_sub_field('car_exclude');
					$wa = get_field("pramana_whatsapp", 'option');
					$phone = get_field("pramana_telephone", 'option');
					$car_image = get_sub_field('car_image') ?? [];
					$car_image_url = $car_image['url'];
					$start_price = get_sub_field('car_rent_type')[0]['car_rent_price'] ?? '';
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
											<?php endif; ?>
										</div>
										<div class="col-md-6">
											<div class="py-4"></div>
											<h5 class="fw-bold mb-3">Harga Mulai <span class="price-highlight"><?php echo $start_price; ?></span></h5>

											<div class="d-flex justify-content-between mt-3 btn-group-sm">
												<button data-detail="Lorem Ipsum Dolor" class="btn btn-outline-primary showIncludes" data-bs-toggle="modal" data-bs-target="#exampleModal_<?= $index ?>">Include</button>
												<button data-detail="Lorem Ipsum Dolor" class="btn btn-outline-primary showExcludes" data-bs-toggle="modal" data-bs-target="#exampleModal2_<?= $index ?>">Exclude</button>
											</div>
											<div class="py-2"></div>
											<div class="d-flex justify-content-end mt-3 btn-group-sm">
												<button data-car="<?php echo $car_name; ?>" class="btn btn-outline-primary book_car_btn"><i class="fab fa-whatsapp me-1"></i> Booking/Pesan</button>
												<!-- <a href="tel:<?php echo $phone; ?>" class="btn btn-outline-primary"><i class="fas fa-phone me-1"></i> TELEPON</a> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal_<?= $index ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content text-dark">
								<div class="modal-header">
									<h1 class="modal-title text-dark fs-5" id="exampleModalLabel">Includes Car</h1>
									<button type="button" class="btn-close close-modal1" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body fs-6">
									<?php echo  $car_include; ?>
								</div>
							</div>
						</div>
					</div>


					<!-- Modal -->
					<div class="modal fade" id="exampleModal2_<?= $index ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content text-dark">
								<div class="modal-header">
									<h1 class="modal-title text-dark fs-5" id="exampleModalLabel">Excludes Car</h1>
									<button type="button" class="btn-close close-modal2" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<?php echo  $car_exclude; ?>
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