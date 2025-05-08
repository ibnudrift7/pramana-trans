<footer id="footer" class="footer text-light py-4">
  <div class="container footer-top">
    <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="d-flex align-items-center">
          <span class="sitename">PRAMANA TRANS</span>
        </a>
        <div class="footer-contact pt-3 text-dark">
          <p>Jl. Ring Road Utara, Ngawean, Trihanggo, Kec. Gamping</p>
          <p>, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55285</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+0818-0590-0800</span></p>
          <p><strong>Email:</strong> <span>contact@pramanatrans.com</span></p>
        </div>
      </div>
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
      <div class="col-lg-4 col-md-12  text-dark">
        <h4>Follow Us</h4>
        <p>Stay connected with us on social media for updates and offers!</p>
        <div class="social-links d-flex">
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-tiktok"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container copyright text-center mt-4  text-dark">
    <p>&copy; <span>Copyright</span> <strong class="px-1 sitename">PramanaTrans</strong> <span>All Rights
        Reserved</span></p>
  </div>
</footer>

<!-- WhatsApp Float Button -->
<a href="https://wa.me/6281234567890" class="whatsapp-float" target="_blank">
  <i class="bi bi-whatsapp"></i>
</a>

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center active">
  <i class="bi bi-arrow-up-short"></i>
</a>