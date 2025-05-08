<?php
  /**
   * Car Rent Home Block Template.
   *
   * @param   array $block The block settings and attributes.
   * @param   string $content The block inner HTML (empty).
   * @param   bool $is_preview True during backend preview render.
   * @param   int $post_id The post ID the block is rendering content against.
   *          This is either the post ID currently being displayed inside a query loop,
   *          or the post ID of the post hosting this block.
   * @param   array $context The context provided to the block by the post or it's parent block.
   */


  $anchor = 'id="featured-services"';
  if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $class_name = 'featured-services section py-5';
  if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
  }

  $header = get_field('crenth_header');
?>

<section <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="container py-5">
    <div class="text-center block_titles mb-5" data-aos="fade-up" data-aos-delay="200">
      <h2 class="section-title"><?php echo $header; ?></h2>
    </div>

    <div class="row gy-4">
      <?php if (have_rows('crenth_items')): ?>
        <?php
          while (have_rows('crenth_items')): the_row();
            $post_id = get_sub_field('crenth_post');
            $car_rent_title = get_the_title($post_id);
            $car_rent_img_url = get_the_post_thumbnail_url($post_id, 'full');
            $car_rent_excerpt = get_the_excerpt($post_id);
            $car_rent_link = get_permalink($post_id);
        ?>
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item position-relative py-4">
                <div class="img pb-3">
                  <img src="<?php echo $car_rent_img_url; ?>" alt="<?php echo $car_rent_title; ?>" class="img-fluid">
                </div>
                <h5>
                  <a href="<?php echo $car_rent_link; ?>" class="stretched-link"><small><?php echo strtoupper($car_rent_title); ?></small>
                    <?php $car_rent_title; ?></a>
                </h5>
                <p class="m-0"><span class="text-black text-bold"><?php echo $car_rent_excerpt; ?></span></p>
              </div>
            </div>
        <?php 
          endwhile; 
        ?>
      <?php endif; ?>
    </div>
  </div>
</section>