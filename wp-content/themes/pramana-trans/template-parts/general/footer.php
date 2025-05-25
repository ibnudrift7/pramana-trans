<?php
  /**
   * Check if any trusted partner section 
   */
  function any_tp_section() {
    $post = get_post(); 

    if (has_blocks($post->post_content)) {
      $blocks = parse_blocks($post->post_content);

      foreach ($blocks as $block) {
        if ( $block['blockName'] == 'acf/trusted-partner' ) {
          return true;
        }
      }
    }

    return false;
  }

  $extra_class = any_tp_section() ? 'bg-custom-black' : '';
?>


<footer id="footer" class="footer text-light py-4 <?php echo $extra_class; ?>">
  <div class="container footer-top">
    <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
      <?php 
        $footer_about = get_field("left_footer", 'option');
        $footer_socials = get_field("right_footer", 'option');
      ?>
      <?php echo $footer_about; ?>
      <div class="col-lg-4 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <?php
        wp_nav_menu(
          [
            'theme_location' => 'footer-menu',
            'container' => false,
            'link_before' => '<i class="bi bi-chevron-right"></i> ',
          ]
        );
        ?>
      </div>
      <?php echo $footer_socials; ?>
    </div>
  </div>

  <div class="container copyright text-center mt-4  text-dark">
    <p>&copy; <span>Copyright</span> <strong class="px-1 sitename">PramanaTrans</strong> <span>All Rights
        Reserved</span></p>
  </div>
</footer>

<!-- WhatsApp Float Button -->
<?php
  $wa_text = get_field("pramana_telephone", 'option');
  $wa_link = str_replace( '-', '', $wa_text);
?>
<a href="https://wa.me/<?php echo $wa_link; ?>" data-wa="<?php echo $wa_link; ?>" id="whatsapp-number" class="whatsapp-float" target="_blank">
  <i class="bi bi-whatsapp"></i>
</a>

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center active">
  <i class="bi bi-arrow-up-short"></i>
</a>