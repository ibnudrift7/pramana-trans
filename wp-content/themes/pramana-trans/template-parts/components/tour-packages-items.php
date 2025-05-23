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

                <div class="mb-4 text-white">
                  <ul class="nav nav-tabs" id="tourTab<?php echo get_row_index(); ?>" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="active bg-gold text-black border-0 px-4 py-2 mx-1 elegant-tab-btn"
                        id="sub1-tab-<?php echo get_row_index(); ?>"
                        data-bs-toggle="tab"
                        data-bs-target="#sub1-<?php echo get_row_index(); ?>"
                        type="button"
                        role="tab"
                        aria-controls="sub1-<?php echo get_row_index(); ?>"
                        aria-selected="true">
                        Destinasi
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="bg-gold text-black border-0 px-4 py-2 mx-1 elegant-tab-btn"
                        id="sub2-tab-<?php echo get_row_index(); ?>"
                        data-bs-toggle="tab"
                        data-bs-target="#sub2-<?php echo get_row_index(); ?>"
                        type="button"
                        role="tab"
                        aria-controls="sub2-<?php echo get_row_index(); ?>"
                        aria-selected="false">
                        Harga
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="bg-gold text-black border-0 px-4 py-2 mx-1 elegant-tab-btn"
                        id="sub3-tab-<?php echo get_row_index(); ?>"
                        data-bs-toggle="tab"
                        data-bs-target="#sub3-<?php echo get_row_index(); ?>"
                        type="button"
                        role="tab"
                        aria-controls="sub3-<?php echo get_row_index(); ?>"
                        aria-selected="false">
                        Iltinerary
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="bg-gold text-black border-0 px-4 py-2 mx-1 elegant-tab-btn"
                        id="sub4-tab-<?php echo get_row_index(); ?>"
                        data-bs-toggle="tab"
                        data-bs-target="#sub4-<?php echo get_row_index(); ?>"
                        type="button"
                        role="tab"
                        aria-controls="sub4-<?php echo get_row_index(); ?>"
                        aria-selected="false">
                        Fasilitas
                      </button>
                    </li>
                  </ul>
                  <div class="tab-content p-3 border border-top-0 rounded-bottom bg-dark" id="tourTabContent<?php echo get_row_index(); ?>">
                    <div class="tab-pane fade show active text-white" id="sub1-<?php echo get_row_index(); ?>" role="tabpanel" aria-labelledby="sub1-tab-<?php echo get_row_index(); ?>">
                      <div class="package-details">
                        <div class="row">
                          <?php if (have_rows('tpi_destinations')): ?>
                            <?php
                            while (have_rows('tpi_destinations')): the_row();
                              $tour_dest = get_sub_field('tpi_destination');
                            ?>
                              <?php if (get_row_index() % 4 == 1) : ?>
                                <div class="col-6">
                                  <ul class="list-unstyled">
                                  <?php endif; ?>
                                  <li class="text-white mb-2">✓ <?php echo $tour_dest; ?></li>
                                  <?php if (get_row_index() % 4 == 0) : ?>
                                  </ul>
                                </div>
                              <?php endif; ?>
                            <?php
                            endwhile;
                            ?>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade text-white" id="sub2-<?php echo get_row_index(); ?>" role="tabpanel" aria-labelledby="sub2-tab-<?php echo get_row_index(); ?>">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo fugit, laborum repellat aliquid placeat distinctio, veniam quas laudantium dicta animi dolor soluta, quam obcaecati neque quia. Fugit exercitationem labore recusandae.</p>
                    </div>
                  </div>
                </div>

                <div class="text-center">
                  <button data-tour="<?php echo $tour_name; ?>" class="btn btn-gold px-4 book_tour_btn">Book Now</button>
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

<style>
  .elegant-tab-btn.bg-gold {
    background: #FFD700 !important;
    color: #222 !important;
    font-weight: 500;
    transition: background 0.2s, color 0.2s, box-shadow 0.2s;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.07);
  }

  .elegant-tab-btn {
    padding: 10px 20px;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease-in-out;

    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }

  .elegant-tab-btn.bg-gold:hover,
  .elegant-tab-btn.bg-gold:focus {
    background:rgb(249, 47, 67) !important;
    color: #fff !important;
    box-shadow: 0 4px 16px rgba(200, 35, 51, 0.15);
  }

  .elegant-tab-btn.active {
    box-shadow: 0 4px 16px rgba(255, 215, 0, 0.18);
  }
</style>