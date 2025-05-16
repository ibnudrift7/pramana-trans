<?php

/**
 * About Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */


$anchor = 'id="about"';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'about section silver-background3';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}

$header = get_field('ab_header');
$desc = get_field('ab_desc');
$image = get_field('ab_image');
$image_url = $image['url'];
?>

<section <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="container py-3">
    <div class="py-2"></div>
    <div class="row gy-3 text-dark">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="<?php echo $image_url; ?>" alt="About" class="img-fluid">
      </div>

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="about-content default-content-black text-dark ps-0 ps-lg-3">
          <h3><?php echo $header; ?></h3>
          <?php echo $desc; ?>
        </div>
      </div>
    </div>
    <div class="py-3"></div>
    <div class="row">
      <div class="col-md-12 about-content default-content-black text-dark ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="200">
        <?php if (have_rows('ab_benefits')): ?>
          <ul class="list-unstyled d-flex flex-row align-items-end mobile_list">
            <?php
            while (have_rows('ab_benefits')): the_row();
              $icon = get_sub_field('ab_benefit_icon');
              $header = get_sub_field('ab_benefit_header');
              $desc = get_sub_field('ab_benefit_desc');
            ?>
              <li>
                <i class="bi <?php echo 'bi-' . $icon; ?>"></i>
                <div>
                  <h4><?php echo $header; ?></h4>
                  <?php echo $desc; ?>
                </div>
              </li>
            <?php
            endwhile;
            ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>