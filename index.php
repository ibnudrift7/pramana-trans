<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Pramana Trans</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

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
      <div class="container py-3">
        <div class="py-2"></div>
        <div class="row gy-3 text-dark">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/banner-1.jpg" alt="" class="img-fluid">
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
            </div>
          </div>
        </div>
        <div class="py-3"></div>
        <div class="row">
          <div class="col-md-12 about-content default-content-black text-dark ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="200">
            <ul class="list-unstyled d-flex flex-row align-items-end">
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
      <div class="container py-5">
        <div class="text-center block_titles mb-5" data-aos="fade-up" data-aos-delay="200">
          <h2 class="section-title">Sewa Mobil</h2>
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
      <div class="container py-5">
        <div class="text-center block_titles mb-5">
          <h2 class="section-title text-dark" data-aos="fade-up" data-aos-delay="200">Paket Tour</h2>
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

    <?php include './parts/_part_whyus.php' ?>

    <?php include './parts/_part_client.php' ?>

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