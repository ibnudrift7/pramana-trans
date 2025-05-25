<?php
  /**
   * Home Banner Block Template.
   *
   * @param   array $block The block settings and attributes.
   * @param   string $content The block inner HTML (empty).
   * @param   bool $is_preview True during backend preview render.
   * @param   int $post_id The post ID the block is rendering content against.
   *          This is either the post ID currently being displayed inside a query loop,
   *          or the post ID of the post hosting this block.
   * @param   array $context The context provided to the block by the post or it's parent block.
   */


  $anchor = 'id="hero"';
  if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $class_name = 'hero slideHome section dark-background';
  if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
  }
?>

<section <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>" <?php echo $custom_bg ?>>
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php if (have_rows('hb_items')): ?>
        <?php
          while (have_rows('hb_items')): the_row();
            $title = get_sub_field('hb_header');
            $image = get_sub_field('hb_background');
            $image_url = $image['url'];
        ?>
            <div class="carousel-item <?php echo get_row_index() == 1 ? 'active' : ''; ?>" data-bs-interval="5000">
              <div class="ps_img">
                <img src="<?php echo $image_url; ?>" class="img-fluid" alt="Hero Image">
              </div>
              <div class="container">
                <div class="row gy-4">
                  <div class="py-5"></div>
                  <div class="d-none d-sm-block py-5"></div>
                  <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="zoom-out">
                    <h2 class="section-title text-yellow d-none hidden"><?php echo $title; ?></h2>
                  </div>
                  <div class="py-5"></div>
                  <div class="py-2"></div>
                </div>
              </div>
            </div>
        <?php 
          endwhile; 
        ?>
      <?php endif; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>