<!-- Hero Section -->
<section id="hero" class="hero slideHome section dark-background">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <div class="ps_img">
                    <img src="assets/img/slide-1.jpg" class="img-fluid" alt="Hero Image">
                </div>
                <div class="container">
                    <div class="row gy-4">
                        <div class="py-5"></div>
                        <div class="d-none d-sm-block py-5"></div>
                        <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="zoom-out">
                            <h2 class="section-title text-yellow">Selamat Datang di Pramana Trans</h2>
                        </div>
                        <div class="py-5"></div>
                        <div class="py-2"></div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ps_img">
                    <img src="assets/img/slide-1.jpg" class="img-fluid" alt="Hero Image">
                </div>
                <div class="container">
                    <div class="row gy-4">
                        <div class="py-5"></div>
                        <div class="d-none d-sm-block py-5"></div>
                        <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="zoom-out">
                            <h2 class="section-title text-yellow">Layanan Transportasi Terbaik</h2>
                        </div>
                        <div class="py-5"></div>
                        <div class="py-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<!-- /Hero Section -->


<style>
    .hero.slideHome {
        background: none !important;
        padding: 0 !important;
        display: block !important;
    }

    .hero.slideHome .ps_img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    .hero.slideHome .ps_img img {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

    .hero.slideHome {
        height: 57vh;
        overflow: hidden;
    }

    .hero.slideHome .carousel-item,
    #heroCarousel {
        height: 100%;
    }
</style>