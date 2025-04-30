<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Pramana Trans</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <?php include './includes/_header.php' ?>

  <main class="main">

    <?php include './parts/hero.php'; ?>

    <!-- About Section -->
    <section id="about" class="about section silver-background3">
      <!-- Section Title -->
      <div class="container section-title text-dark" data-aos="fade-up">
        <h2 class="text-dark">Tentang Kami Pramana Trans</h2>
        <p><span class="text-dark">Selamat Datang</span> <span class="description-title text-dark">di Pramana Trans</span></p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-3 text-dark">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/about.jpg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="about-content default-content-black text-dark ps-0 ps-lg-3">
              <h3>Pramana Trans Jogja adalah penyedia layanan transportasi dan tour travel murah terpercaya di Yogyakarta</h3>
              <p class="fst-italic">
                yang telah berpengalaman sejak berdiri pada tahun [tahun berdiri, isi jika ada]. Kami hadir untuk memenuhi kebutuhan perjalanan Anda—baik wisata, dinas, antar jemput bandara, hingga perjalanan pribadi—dengan pelayanan profesional, armada terawat, dan harga yang bersahabat.
              </p>
              <p>Berawal dari layanan rental mobil kecil, kami berkembang menjadi penyedia jasa transportasi terbaik di Jogja dengan cakupan destinasi populer seperti Borobudur, Prambanan, Pantai Gunung Kidul, hingga city tour Jogja. Komitmen kami adalah memberikan layanan tour dan transportasi murah tanpa mengorbankan kenyamanan dan keamanan pelanggan.</p>
              <p>
                Perjalanan nyaman dimulai dari transportasi yang tepat. Pramana Trans Jogja berkomitmen memberikan:
              </p>
              <ul>
                <li>
                  <i class="bi bi-diagram-3"></i>
                  <div>
                    <h4>Armada Bersih & Nyaman</h4>
                    <p>Armada kami selalu dalam kondisi prima, bersih, dan nyaman untuk memastikan perjalanan Anda menyenangkan.</p>
                  </div>
                </li>
                <li>
                  <i class="bi bi-fullscreen-exit"></i>
                  <div>
                    <h4>Harga transparan dan terjangkau, tanpa biaya tersembunyi</h4>
                    <p>Kami memberikan harga yang jujur dan transparan, tanpa biaya tambahan yang tidak terduga, sehingga Anda dapat merencanakan perjalanan dengan tenang.</p>
                  </div>
                </li>
                <li>
                  <i class="bi bi-fullscreen-exit"></i>
                  <div>
                    <h4>Paket wisata Jogja custom sesuai keinginan Anda</h4>
                    <p>Kami menyediakan berbagai pilihan paket wisata yang dapat disesuaikan dengan kebutuhan dan preferensi Anda, mulai dari wisata budaya, alam, hingga kuliner.</p>
                  </div>
                </li>
              </ul>
            </div>

          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Featured Services Section -->
    <?php
    $feat_sewa = [
      [
        'image' => 'sewa-mobil-kota-jogja.webp',
        'location_title' => 'Solo',
        'price_start' => '400',
      ],
      [
        'image' => 'sewa-mobil-kota-jogja.webp',
        'location_title' => 'Jogja',
        'price_start' => '400',
      ],
      [
        'image' => 'sewa-mobil-kota-jogja.webp',
        'location_title' => 'Semarang',
        'price_start' => '400',
      ],
    ]
    ?>
    <section id="featured-services" class="featured-services section py-5">
      <div class="container py-4">
        <div class="text-center block_titles mb-5">
          <h3>Sewa Mobil</h3>
        </div>

        <div class="row gy-4">
          <?php foreach ($feat_sewa as $sewa) : ?>
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item position-relative py-4">
                <div class="img pb-3">
                  <img src="./img/<?= htmlspecialchars($sewa['image']) ?>" alt="<?= htmlspecialchars($sewa['location_title']) ?>" class="img-fluid">
                </div>
                <h5>
                  <a href="#" class="stretched-link"><small>SEWA MOBIL</small>
                    <?= htmlspecialchars($sewa['location_title']) ?></a>
                </h5>
                <p class="m-0"><small>START From</small> <span class="text-black text-bold">Rp <?= htmlspecialchars($sewa['price_start']) ?>.000</span></p>
              </div>
            </div><!-- End Service Item -->
          <?php endforeach; ?>

        </div>

      </div>

    </section><!-- /Featured Services Section -->

    <!-- Featured Services Section -->
    <?php
    $feat_sewa2 = [
      [
        'image' => 'paket-wisata-dieng.webp',
        'location_title' => 'Jogja',
      ],
      [
        'image' => 'paket-wisata-dieng.webp',
        'location_title' => 'Solo',
      ],
      [
        'image' => 'paket-wisata-dieng.webp',
        'location_title' => 'Semarang',
      ],
    ]
    ?>
    <section id="featured-services" class="featured-services section py-5 silver-background2">
      <div class="container py-3">
        <div class="text-center block_titles mb-5">
          <h3>Paket Tour</h3>
        </div>
        <div class="row gy-4">
          <?php foreach ($feat_sewa2 as $sewa2) : ?>
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item position-relative py-4 bg-white">
                <div class="img pb-3">
                  <img src="./img/<?= htmlspecialchars($sewa2['image']) ?>" alt="<?= htmlspecialchars($sewa2['location_title']) ?>" class="img-fluid">
                </div>
                <h5>
                  <a href="#" class="stretched-link"><small>Tour</small>
                    <?= htmlspecialchars($sewa2['location_title']) ?></a>
                  <p class="m-0 text-white pt-3">Lihat Detail</p>
                </h5>
              </div>
            </div><!-- End Service Item -->
          <?php endforeach; ?>

        </div>

      </div>

    </section><!-- /Featured Services Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">
      <div class="container py-4">
        <div class="section-title text-center" data-aos="fade-up">
          <h2 class="text-dark">Pelanggan Pramana Trans</h2>
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
              <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
            </div>
          </div>

        </div>

    </section><!-- /Clients Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="text-white">Mengapa Memilih Kami?</h2>
        <!-- <p><span>Check Our</span> <span class="description-title">Services</span></p> -->
      </div><!-- End Section Title -->

      <?php
      $list_whys = [
        [
          'icons' => 'bi-activity',
          'title' => 'Crew Berpengalaman',
        ],
        [
          'icons' => 'bi-broadcast',
          'title' => 'Armada Terawat dan Service Rutin',
        ],
        [
          'icons' => 'bi-easel',
          'title' => 'Harga Kompetitif',
        ],
        [
          'icons' => 'bi-bounding-box-circles',
          'title' => 'Layanan 24 Jam untuk Pelanggan',
        ],
      ];
      ?>


      <div class="container">

        <div class="row gy-4 justify-content-center">

          <?php foreach ($list_whys as $why) : ?>
            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item position-relative p-5">
                <div class="icon">
                  <i class="bi <?= htmlspecialchars($why['icons']) ?>"></i>
                </div>
                <a href="#" class="stretched-link text-dark">
                  <h5 class="text-dark"><?= htmlspecialchars($why['title']) ?></h5>
                </a>
              </div>
            </div><!-- End Service Item -->
          <?php endforeach; ?>

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Contact Section -->
    <!-- <section id="contact" class="contact section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
    </div

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-5">

          <div class="info-wrap">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <div class="col-lg-7">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <label for="name-field" class="pb-2">Your Name</label>
                <input type="text" name="name" id="name-field" class="form-control" required="">
              </div>

              <div class="col-md-6">
                <label for="email-field" class="pb-2">Your Email</label>
                <input type="email" class="form-control" name="email" id="email-field" required="">
              </div>

              <div class="col-md-12">
                <label for="subject-field" class="pb-2">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject-field" required="">
              </div>

              <div class="col-md-12">
                <label for="message-field" class="pb-2">Message</label>
                <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div>

      </div>

    </div>

    </section> -->
    <!-- /Contact Section -->

  </main>

  <?php include './includes/_footer.php' ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>