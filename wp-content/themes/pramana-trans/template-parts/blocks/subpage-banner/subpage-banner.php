<?php
  /**
   * Subpage Banner Block Template.
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
  $class_name = 'hero-section';
  if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
  }

  $header = get_field('sb_header');
  $desc = get_field('sb_desc');
  $link = get_field('sb_link');
  $background = get_field('sb_background');
  $background_url = $background['url'];

  $custom_bg = '';
  if (!empty($background_url)) {
    $custom_bg = ' style="background-image: url(' . $background_url . ') top left;" ';
  }
?>

<section <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>" <?php echo $custom_bg ?>>
  <div class="container">
    <div class="hero-content">
      <h1 class="hero-title"><?php echo $header ?></h1>
      <?php echo $desc; ?>

      <?php if ($link) : ?>
        <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-primary"><?php echo $link['title']; ?> <i class="bi bi-arrow-right"></i></a>
      <?php endif ?>
    </div>
  </div>
</section>