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
  $class_name = 'hero section dark-background';
  if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
  }

  $header = get_field('hb_header');
  $background = get_field('hb_background');
  $background_url = $background['url'];

  $custom_bg = '';
  if (!empty($background_url)) {
    $custom_bg = ' style="background-image: url(' . $background_url . ') top left;" ';
  }
?>

<section <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>" <?php echo $custom_bg ?>>
  <div class="container">
    <div class="row gy-4">
      <div class="py-5"></div>
      <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
        <h2 class="section-title text-yellow"><?php echo $header ?></h2>
      </div>
    </div>
  </div>
</section>