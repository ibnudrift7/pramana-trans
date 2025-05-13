<footer id="footer" class="footer text-light py-4">
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
<a href="https://wa.me/<?php echo get_field("pramana_telephone", 'option'); ?>" data-wa="<?php echo get_field("pramana_telephone", 'option'); ?>" id="whatsapp-number" class="whatsapp-float" target="_blank">
  <i class="bi bi-whatsapp"></i>
</a>

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center active">
  <i class="bi bi-arrow-up-short"></i>
</a>