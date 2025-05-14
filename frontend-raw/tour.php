<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tour - Pramana Trans</title>
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
    <link href="assets/css/additional.css" rel="stylesheet">
</head>

<body class="index-page">
    <!-- Header -->
    <?php include './includes/_header.php' ?>

    <!-- start content -->
    <!-- Hero Section -->
    <section class="hero-section pg_tour">
        <div class="container">
            <div class="hero-content">
                <h1 class="display-5 fw-bold mb-4">Paket Wisata Terbaik</h1>
                <p class="lead mb-4">Nikmati liburan terbaik bersama keluarga dengan paket wisata terlengkap. Dengan tour operator terbaik di Indonesia, kami siap mengantarkan Anda ke tempat-tempat indah dengan pelayanan terbaik dengan harga terjangkau.</p>
                <a href="#" class="btn btn-primary btn-lg">Lihat Selengkapnya</a>
            </div>
        </div>
    </section>

    <?php
    $listPackage = [
        [
            'title' => 'Paket Wisata Jogja 1 Hari',
            'kode' => 'PWJ1',
            'price' => 'Rp 500.000',
            'image' => 'https://images.unsplash.com/photo-1584810359583-96fc3448beaa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80'
        ],
        [
            'title' => 'Paket Wisata Jogja 2 Hari',
            'kode' => 'PWJ2',
            'price' => 'Rp 1.000.000',
            'image' => 'https://images.unsplash.com/photo-1584810359583-96fc3448beaa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80'
        ],
        // Add more packages as needed
    ]
    ?>

    <!-- Destination Section -->
    <section class="py-5">
        <div class="container py-5">
            <h2 class="section-title pb-5">Temukan Liburan - Paket Wisata Jogja</h2>
            <div class="row">
                <!-- Destination 1 -->
                <?php
                for ($i = 0; $i < 3; $i++):
                    foreach ($listPackage as $package): ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="destination-card">
                                <img src="<?= htmlspecialchars($package['image']) ?>" alt="<?= htmlspecialchars($package['title']) ?>">
                                <div class="card-overlay">
                                    <h5><?= htmlspecialchars($package['title']) ?></h5>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="cont">
                                            <span class="start">Start from:</span> <br>
                                            <span class="price-tag"><?= htmlspecialchars($package['price']) ?></span>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="btn-group btn-group-sm btn btn-warning"><small>Lihat</small></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endforeach;
                endfor; ?>
                <!-- Destination 2 -->
            </div>
        </div>
    </section>
    <!-- end content -->

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