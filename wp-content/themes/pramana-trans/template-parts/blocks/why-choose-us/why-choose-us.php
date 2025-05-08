<?php
  /**
   * Why Choose Us Block Template.
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

  $header = get_field('wcu_header');
?>

<section <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="container py-5" data-aos="fade-up" data-aos-delay="200">
    <h2 class="section-title"><?php echo $header; ?></h2>
    <div class="row g-4">
      <?php if (have_rows('wcu_items')): ?>
        <?php
          while (have_rows('wcu_items')): the_row();
            $icon = get_sub_field('wcu_icon'); 
            $header = get_sub_field('wcu_header');
            $desc = get_sub_field('wcu_desc');
        ?>
            <div class="col-md-6 col-lg-3">
              <div class="feature-card text-center">
                  <div class="feature-icon">
                      <i class="bi bi-<?php echo $icon; ?>"></i>
                  </div>
                  <h3 class="feature-title"><?php echo $header; ?></h3>
                  <p class="text-muted text-light"><?php echo $desc ?></p>
              </div>
          </div>
        <?php 
          endwhile; 
        ?>
      <?php endif; ?>
    </div>
  </div>
</section>