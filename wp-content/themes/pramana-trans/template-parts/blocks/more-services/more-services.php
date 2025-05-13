<?php
  /**
   * More Services Block Template.
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
  $class_name = 'py-5 orange-section';
  if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
  }

  $header = get_field('ms_header');
?>

<section <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="container py-3">
    <h2 class="section-title text-white pb-5"><?php echo $header; ?></h2>
    <div class="row">
      <?php if (have_rows('ms_items')): ?>
        <?php
          while (have_rows('ms_items')): the_row();
            $title = get_sub_field('ms_title');
            $image = get_sub_field('ms_background');
            $image_url = $image['url'];
        ?>
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="service-card">
                  <img src="<?php echo $image_url; ?>" alt="<?php echo $title; ?>">
                  <div class="service-overlay">
                    <h3><?php echo $title; ?></h3>
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