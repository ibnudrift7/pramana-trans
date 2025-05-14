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

  $header = get_field('sb_header');
  $desc = get_field('sb_desc');
  $link = get_field('sb_link');
  $style = get_field('sb_style');
  $background = get_field('sb_background');
  $background_url = $background['url'];

  // Create class attribute allowing for custom "className" and "align" values.
  switch ($style) {
    case 'car-detail':
      $class_name = 'hero_mobil_detail py-5';
      break;
    case 'tour-detail':
      $class_name = 'hero-section text-center py-5 pg_tour';
      break;
    default:
      $class_name = 'hero-section';
      break;
  }

  if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
  }

  $custom_bg = '';
  if (!empty($background_url)) {
    switch ($style) {
      case 'car-detail':
        $custom_bg = ' style="background: url(' . $background_url . ') top left; 
          background-repeat: no-repeat; 
          background-position: center; 
          background-size: cover;" ';
        break;
      case 'tour-detail':
        $custom_bg = ' style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(' . $background_url . '); 
          background-repeat: no-repeat; 
          background-position: center; 
          background-size: cover;" ';
        break;
      default:
        $custom_bg = ' style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(' . $background_url . '); 
          background-repeat: no-repeat; 
          background-position: center; 
          background-size: cover;" ';
        break;
    }
    // $custom_bg = ' style="background-image: url(' . $background_url . ') top left;" ';
  }
?>

<?php if ($style == 'car-detail') : ?>
  <section <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>" <?php echo $custom_bg ?>>
    <div class="container mt-4">
        <div class="header-section p-3">
            <div class="row">
                <div class="col-lg-8">
                    <div class="descs-hero">
                        <h1 class="fw-bold"><?php echo $header ?></h1>
                        <?php echo $desc; ?>
                        <?php if ($link) : ?>
                          <button href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-warning text-white fw-bold mb-4"><?php echo $link['title']; ?></button>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
<?php elseif ($style == 'tour-detail') : ?>
  <section <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>" <?php echo $custom_bg ?>>
    <div class="container py-5">
      <h1 class="display-4 fw-bold text-gold mb-4"><?php echo $header ?></h1>
      <?php echo $desc; ?>
      <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-gold px-4 py-2"><?php echo $link['title']; ?></a>
    </div>
  </section>
<?php else: ?>
  <section <?php echo $anchor; ?> class="<?php echo esc_attr($class_name); ?>" <?php echo $custom_bg ?>>
    <div class="container">
      <div class="hero-content">
        <h1 class="display-5 fw-bold mb-4"><?php echo $header ?></h1>
        <?php echo $desc; ?>
  
        <?php if ($link) : ?>
          <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-primary"><?php echo $link['title']; ?> <i class="bi bi-arrow-right"></i></a>
        <?php endif ?>
      </div>
    </div>
  </section>
<?php endif ?>