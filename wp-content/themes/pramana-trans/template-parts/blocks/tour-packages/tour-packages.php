<?php

  /**
   * Tour Packages Block Template.
   *
   * @param   array $block The block settings and attributes.
   * @param   string $content The block inner HTML (empty).
   * @param   bool $is_preview True during backend preview render.
   * @param   int $post_id The post ID the block is rendering content against.
   *          This is either the post ID currently being displayed inside a query loop,
   *          or the post ID of the post hosting this block.
   * @param   array $context The context provided to the block by the post or it's parent block.
   */


  $anchor = '';
  if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
  }

  $header = get_field('tpac_header');
  $template = get_field('tpac_template');

  // Create class attribute allowing for custom "className" and "align" values.
  $class_name = 'py-5';

  switch ($template) {
    case 'home':
      // silver-background2
      $class_name = 'featured-services section py-5 bg-dark';
      break;
    default:
      $class_name = 'py-5 tour-packages-section';
      break;
  }

  if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
  }
?>

<?php if ($template == 'home') : ?>
  <section <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>">
    <div class="container py-5">
      <h2 class="section-title text-gold mb-4"><?php echo $header; ?></h2>
      <div class="row g-4">
        <?php if (have_rows('tpac_items')): ?>
          <?php
            while (have_rows('tpac_items')): the_row();
              $post_id = get_sub_field('tpac_post');
              $tour_start_price = get_field('tour_start_price', $post_id);
              $tpac_title = get_the_title($post_id);
              $tpac_img_url = get_the_post_thumbnail_url($post_id, 'full');
              $tpac_link = get_permalink($post_id);
          ?>
              <div class="col-md-6 col-lg-3">
                <div class="card">
                  <div class="card-img-container">
                    <img src="<?php echo $tpac_img_url; ?>" alt="<?php echo $tpac_title; ?>">
                    <div class="location-badge"><?php echo strtoupper($tpac_title); ?></div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Paket Wisata <?php echo $tpac_title; ?></h5>
                    <p class="card-text text-muted text-light">Mulai dari <?php echo $tour_start_price; ?></p>
                    <a href="<?php echo $tpac_link; ?>" class="btn btn-primary btn-sm">Detail</a>
                  </div>
                </div>
              </div>
          <?php 
            endwhile; 
          ?>
        <?php endif; ?>
      </div>
      <div class="row d-lg-none mt-4">
        <div class="col-12 text-center">
          <a class="btn btn-gold btn-sm" href="<?php echo get_permalink(147); ?>">Show All</a>
        </div>
      </div>
    </div>
  </section>
<?php else : ?>
  <section <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>">
    <div class="container py-5">
      <h2 class="section-title pb-5"><?php echo $header; ?></h2>
      <div class="row tours-row">
        <?php if (have_rows('tpac_items')): ?>
          <?php
            while (have_rows('tpac_items')): the_row();
              $post_id = get_sub_field('tpac_post');
              $tour_start_price = get_field('tour_start_price', $post_id);
              $tpac_title = get_the_title($post_id);
              $tpac_img_url = get_the_post_thumbnail_url($post_id, 'full');
              $tpac_link = get_permalink($post_id);
          ?>
              <div class="col-md-4 col-sm-6">
                <div class="destination-card">
                  <img src="<?php echo $tpac_img_url; ?>" alt="<?php echo $tpac_title; ?>">
                  <div class="card-overlay">
                    <h5>Paket Wisata <?php echo $tpac_title; ?></h5>
                    <div class="d-flex justify-content-between align-items-end">
                      <div class="cont">
                        <span class="start">Start from:</span> <br>
                        <span class="price-tag"><?php echo $tour_start_price ?></span>
                      </div>
                      <div class="btn-group">
                        <a href="<?php echo $tpac_link ?>" class="btn-group btn-group-sm btn btn-warning"><small>Lihat</small></a>
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
      <div class="row d-lg-none mt-4">
        <div class="col-12 text-center">
          <a class="collapse-mobile-items-btn btn btn-gold btn-sm" href="javascript:;">Show All</a>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>