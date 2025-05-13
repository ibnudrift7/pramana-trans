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
      $class_name = 'featured-services section py-5 silver-background2';
      break;
    default:
      $class_name = 'py-5';
      break;
  }

  if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
  }
?>

<?php if ($template == 'home') : ?>
  <section <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>">
    <div class="container py-5">
      <div class="text-center block_titles mb-5">
        <h2 class="section-title text-dark" data-aos="fade-up" data-aos-delay="200">Paket Tour</h2>
      </div>
      <div class="row gy-4">
        <?php if (have_rows('tpac_items')): ?>
          <?php
            while (have_rows('tpac_items')): the_row();
              $post_id = get_sub_field('tpac_post');
              $tour_start_price = get_field('tour_start_price', $post_id);
              $tpac_title = get_the_title($post_id);
              $tpac_img_url = get_the_post_thumbnail_url($post_id, 'full');
              $tpac_link = get_permalink($post_id);
          ?>
              <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative py-4 bg-white">
                  <div class="img pb-3">
                    <img src="<?php echo $tpac_img_url; ?>" alt="<?php echo $tpac_title; ?>" class="img-fluid">
                  </div>
                  <h5>
                    <a href="<?php echo $tpac_link; ?>" class="stretched-link"><small>Tour</small>
                      <?php echo $tpac_title; ?></a>
                    <p class="m-0 text-white pt-3">Lihat Detail</p>
                  </h5>
                </div>
              </div>
          <?php 
            endwhile; 
          ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php else: ?>
  <section <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>">
    <div class="container py-5">
      <h2 class="section-title pb-5"><?php echo $header; ?></h2>
      <div class="row">
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
                <a href="<?php echo $tpac_link ?>">
                  <div class="destination-card">
                      <img src="<?php echo $tpac_img_url; ?>" alt="<?php echo $tpac_title; ?>">
                      <div class="card-overlay">
                          <h5>PAKET WISATA <?php echo $tpac_title; ?></h5>
                          <span class="price-tag"><?php echo $tour_start_price ?></span>
                      </div>
                  </div>
                </a>
              </div>
          <?php 
            endwhile; 
          ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>