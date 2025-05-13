<?php
	$branch = get_field("branch_locations", 'option');
?>

<section class="locations pb-5">
		<div class="container py-5">
				<h3 class="text-center mb-4">Cabang Kota Lainnya di Pramana Trans</h3>
				<div class="row">
					<?php if (have_rows('branch_locations', 'option')): ?>
							<?php
								while (have_rows('branch_locations', 'option')): the_row();
									$branch = get_sub_field('branch_location'); 
							?>
									<?php if ( get_row_index() % 5 == 1 ) : ?>
										<div class="col-md-4">
											<ul class="location-list">
									<?php endif; ?>

									<li><i class="fas fa-map-marker-alt"></i> Sewa Mobil <?php echo $branch; ?></li>
									
									<?php if ( get_row_index() % 5 == 0 ) : ?>
											</ul>
										</div>
									<?php endif; ?>
							<?php 
								endwhile; 
							?>
					<?php endif; ?>
				</div>
		</div>
</section>