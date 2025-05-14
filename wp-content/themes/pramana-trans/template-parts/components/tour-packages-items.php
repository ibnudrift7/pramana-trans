<?php

  // Create class attribute allowing for custom "className" and "align" values.
  $class_name = 'py-5';
  $header = get_field('tpi_header');
?>

<section <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="container py-5">
    <h2 class="section-title pb-5"><?php echo $header; ?></h2>
    <div class="row">
      <?php if (have_rows('tpi_items')): ?>
        <?php
          while (have_rows('tpi_items')): the_row();
            $tour_name = get_sub_field('tpi_name');
            $tour_image = get_sub_field('tpi_image');
            $tour_price = get_sub_field('tpi_price');
        ?>
            <div class="col-md-6">
              <div class="card bg-black border border-gold h-100">
                  <div class="card-header bg-gradient-gold text-black py-3">
                      <h3 class="text-center mb-0"><?php echo $tour_name; ?></h3>
                  </div>
                  <div class="card-body">
                      <div class="image-gallery mb-4">
                          <img src="<?php echo $tour_image['url']; ?>" alt="<?php echo $tour_name; ?>" class="img-fluid rounded mb-3">
                      </div>

                      <div class="package-price text-center mb-4">
                          <span class="fs-5 text-white">Starting from</span>
                          <h4 class="text-gold"><?php echo $tour_price; ?></h4>
                      </div>

                      <div class="package-details mb-4">
                        <div class="row">
                          <?php if (have_rows('tpi_destinations')): ?>
                            <?php
                              while (have_rows('tpi_destinations')): the_row();
                                $tour_dest = get_sub_field('tpi_destination');
                            ?>
                              <?php if (get_row_index() % 4 == 1) :?>
                                <div class="col-6">
                                  <ul class="list-unstyled">
                              <?php endif;?>
                                <li class="text-white mb-2">✓ <?php echo $tour_dest; ?></li>
                              <?php if (get_row_index() % 4 == 0) :?>
                                  </ul>
                                </div>
                              <?php endif;?>
                            <?php 
                              endwhile; 
                            ?>
                          <?php endif; ?>
                        </div>
                      </div>

                      <div class="text-center">
                          <button class="btn btn-gold px-4 book_tour_btn">Book Now</button>
                      </div>
                  </div>
              </div>
          </div>
        <?php 
          endwhile; 
        ?>
      <?php endif; ?>
    </div>
  </div>
</section>