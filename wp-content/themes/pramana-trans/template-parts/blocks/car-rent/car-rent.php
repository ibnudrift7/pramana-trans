<?php
  /**
   * Car Rent Block Template.
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

  // Create class attribute allowing for custom "className" and "align" values.
  $class_name = 'py-5';
  if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
  }

  $header = get_field('crent_header');
?>

<section <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="container py-5">
    <h2 class="section-title"><?php echo $header; ?></h2>
    <div class="row g-4">
      <?php if (have_rows('crent_items')): ?>
        <?php
          while (have_rows('crent_items')): the_row();
            $post_id = get_sub_field('crent_post');
            $car_rent_title = get_the_title($post_id);
            $car_rent_img_url = get_the_post_thumbnail_url($post_id, 'full');
            $car_rent_excerpt = get_the_excerpt($post_id);
            $car_rent_link = get_permalink($post_id);
        ?>
            <div class="col-md-6 col-lg-3">
              <div class="card">
                <div class="card-img-container">
                  <img src="<?php echo $car_rent_img_url; ?>" alt="<?php echo $car_rent_title; ?>">
                  <div class="location-badge"><?php echo strtoupper($car_rent_title); ?></div>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Sewa Mobil <?php echo $car_rent_title; ?></h5>
                  <p class="card-text text-muted text-light"><?php echo $car_rent_excerpt; ?></p>
                  <a href="<?php echo $car_rent_link; ?>" class="btn btn-primary btn-sm">Pesan</a>
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