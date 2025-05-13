<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Blog - Pramana Trans</title>
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
    <!-- Header -->
    <?php include './includes/_header.php' ?>

    <!-- start content -->
    <main>
        <div class="hero_mobil_detail p_blog py-5">
            <div class="container mt-4">
                <div class="header-section p-3">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="descs-hero">
                                <h1 class="fw-bold">Blog</h1>
                                <p class="text-secondary text-white">
                                    Sewa mobil murah online nagantour dengan sopir harga murah. rental mobil terdekat untuk kebutuhan harian untuk wilayah Jogja, Malang, Bali, Jakarta, Bandung, dll.. Selengkapnya
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Content -->
        <section class="blog-content py-5">
            <div class="container py-4">
                <div class="row">
                    <!-- Blog Posts - 3 columns per row -->
                    <div class="col-lg-9">
                        <div class="row">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <!-- Blog Post 1 -->
                                <div class="col-md-4 mb-4">
                                    <div class="card blog-card text-light bg-dark mb-2">
                                        <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Blog Post">
                                        <div class="card-body">
                                            <div class="blog-meta pb-2">
                                                <span><i class="far fa-calendar"></i> May 12, 2025</span>
                                                <span><i class="far fa-user"></i> Admin</span>
                                            </div>
                                            <h5 class="card-title pb-2">10 Tips for Safe Driving on Long Trips</h5>
                                            <a href="#" class="btn btn-read-more btn-light">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Blog Post 2 -->
                            <?php endfor; ?>

                        </div>

                        <!-- Pagination -->
                        <nav aria-label="Page navigation" class="mt-4">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-3">
                        <div class="sidebar">
                            <!-- Search Form -->
                            <div class="search-form mb-4">
                                <input type="text" class="form-control" placeholder="Search...">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>

                            <!-- Categories -->
                            <div class="categories mb-5">
                                <h4>Categories</h4>
                                <ul class="pl-0 ml-0">
                                    <li><a href="#">Travel Tips <span class="badge">14</span></a></li>
                                    <li><a href="#">Car Rental <span class="badge">23</span></a></li>
                                    <li><a href="#">Road Trips <span class="badge">9</span></a></li>
                                    <li><a href="#">Family Vacations <span class="badge">18</span></a></li>
                                    <li><a href="#">Car Maintenance <span class="badge">7</span></a></li>
                                    <li><a href="#">Travel Destinations <span class="badge">12</span></a></li>
                                    <li><a href="#">Budget Travel <span class="badge">5</span></a></li>
                                </ul>
                            </div>

                            <!-- Recent Posts -->
                            <div class="recent-posts mb-4">
                                <h4>Recent Posts</h4>
                                <ul>
                                    <li><a href="#">10 Tips for Safe Driving on Long Trips</a></li>
                                    <li><a href="#">Best Family Vacation Destinations for 2025</a></li>
                                    <li><a href="#">How to Choose the Right Car for Your Needs</a></li>
                                    <li><a href="#">5 Hidden Gems for Your Next Road Trip</a></li>
                                    <li><a href="#">The Ultimate Guide to Car Maintenance</a></li>
                                </ul>
                            </div>

                            <!-- Tags -->
                            <div class="tags">
                                <h4>Tags</h4>
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="#" class="badge bg-light text-dark p-2">Travel</a>
                                    <a href="#" class="badge bg-light text-dark p-2">Car Rental</a>
                                    <a href="#" class="badge bg-light text-dark p-2">Road Trip</a>
                                    <a href="#" class="badge bg-light text-dark p-2">Family</a>
                                    <a href="#" class="badge bg-light text-dark p-2">Vacation</a>
                                    <a href="#" class="badge bg-light text-dark p-2">Budget</a>
                                    <a href="#" class="badge bg-light text-dark p-2">Tips</a>
                                    <a href="#" class="badge bg-light text-dark p-2">Maintenance</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Sidebar -->

                </div>
            </div>
        </section>
        <!-- end Blog -->

    </main>
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