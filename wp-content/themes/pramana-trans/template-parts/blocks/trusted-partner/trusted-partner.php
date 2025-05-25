<?php
  /**
   * Trusted Partner Block Template.
   *
   * @param   array $block The block settings and attributes.
   * @param   string $content The block inner HTML (empty).
   * @param   bool $is_preview True during backend preview render.
   * @param   int $post_id The post ID the block is rendering content against.
   *          This is either the post ID currently being displayed inside a query loop,
   *          or the post ID of the post hosting this block.
   * @param   array $context The context provided to the block by the post or it's parent block.
   */


  $anchor = 'id="clients"';
  if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $class_name = 'clients section bg-client-trusted bg-custom_abu2';
  if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
  }

  $header = get_field('tp_header');
?>

<section <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="container py-5">
    <div class="text-center" data-aos="fade-up" data-aos-delay="200">
        <h2 class="section-title"><?php echo $header; ?></h2>
        <div class="py-2"></div>
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                    "slidesPerView": 2,
                    "spaceBetween": 40
                },
                "480": {
                    "slidesPerView": 3,
                    "spaceBetween": 60
                },
                "640": {
                    "slidesPerView": 4,
                    "spaceBetween": 80
                },
                "992": {
                    "slidesPerView": 6,
                    "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <?php if (have_rows('tp_logos')): ?>
              <?php
                while (have_rows('tp_logos')): the_row();
                  $image = get_sub_field('tp_logo_image');
                  $image_url = $image['url'];
              ?>
                  <div class="swiper-slide"><img src="<?php echo $image_url; ?>" class="img-fluid" alt=""></div>
              <?php 
                endwhile; 
              ?>
            <?php endif; ?>
          </div>
        </div>
    </div>
  </div>
</section>