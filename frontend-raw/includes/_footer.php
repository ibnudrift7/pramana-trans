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
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Sewa Mobil</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Paket Tour</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">About Us</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Blog</a></li>
                </ul>
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
        <p>&copy; <span>Copyright</span> <strong class="px-1 sitename">PramanaTrans</strong> <span>All Rights Reserved</span></p>
    </div>
</footer>

<!-- WhatsApp Float Button -->
<a href="https://wa.me/6281234567890" class="whatsapp-float" target="_blank">
    <i class="bi bi-whatsapp"></i>
</a>

<style>
    :root {
        --primary-color: #f8c300;
        --secondary-color: #333;
        --text-light: #f8f9fa;
    }

    body {
        background-color: #000;
        color: var(--text-light);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
        background-color: rgba(0, 0, 0, 0.8) !important;
        backdrop-filter: blur(10px);
        padding: 15px 0;
    }

    .navbar-brand {
        font-weight: 700;
        font-size: 1.8rem;
        color: var(--primary-color) !important;
    }

    .nav-link {
        color: var(--text-light) !important;
        font-weight: 500;
        margin: 0 10px;
        transition: all 0.3s ease;
    }

    .nav-link:hover {
        color: var(--primary-color) !important;
    }

    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
        background-size: cover;
        background-position: center;
        height: 80vh;
        display: flex;
        align-items: center;
        position: relative;
    }

    .hero-content {
        max-width: 700px;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: var(--text-light);
    }

    .hero-text {
        font-size: 1.2rem;
        margin-bottom: 30px;
        color: #ddd;
    }

    .btn-primary {
        background-color: var(--primary-color);
        border: none;
        color: #000;
        font-weight: 600;
        padding: 12px 30px;
        border-radius: 50px;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #e0b000;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(248, 195, 0, 0.2);
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        /* margin-bottom: 50px; */
        text-align: center;
        color: var(--primary-color);
    }

    .card {
        background-color: #111;
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        margin-bottom: 30px;
        height: 100%;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(248, 195, 0, 0.1);
    }

    .card-img-container {
        height: 200px;
        overflow: hidden;
        position: relative;
    }

    .card-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .card:hover .card-img-container img {
        transform: scale(1.1);
    }

    .location-badge {
        position: absolute;
        bottom: 15px;
        left: 15px;
        background-color: rgba(0, 0, 0, 0.7);
        color: var(--text-light);
        padding: 5px 15px;
        border-radius: 50px;
        font-weight: 600;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 15px;
        color: var(--primary-color);
    }

    .feature-card {
        background-color: #111;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 30px;
        transition: all 0.3s ease;
        height: 100%;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(248, 195, 0, 0.1);
    }

    .feature-icon {
        font-size: 3rem;
        color: var(--primary-color);
        margin-bottom: 20px;
    }

    .feature-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 15px;
        color: var(--text-light);
    }

    .testimonial-card {
        background-color: #111;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 30px;
        height: 100%;
    }

    .testimonial-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .testimonial-avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        margin-right: 15px;
        object-fit: cover;
    }

    .testimonial-name {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 5px;
        color: var(--text-light);
    }

    .testimonial-rating {
        color: var(--primary-color);
        font-size: 1.2rem;
        margin-bottom: 5px;
    }

    .partner-logo {
        height: 50px;
        object-fit: contain;
        filter: grayscale(100%) brightness(1.5);
        transition: all 0.3s ease;
        margin: 20px;
    }

    .partner-logo:hover {
        filter: grayscale(0%);
    }

    .social-icon {
        color: #aaa;
        font-size: 1.5rem;
        margin-right: 15px;
        transition: all 0.3s ease;
    }

    .social-icon:hover {
        color: var(--primary-color);
        transform: translateY(-5px);
    }

    .footer {
        background-color: #474747;
    }

    .whatsapp-float {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background-color: #25d366;
        color: white;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        text-align: center;
        font-size: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        z-index: 100;
        transition: all 0.3s ease;
    }

    .whatsapp-float:hover {
        transform: scale(1.1);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
    }

    .hero-section.pg_tour {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 150px 0;
        position: relative;
    }

    .destination-card {
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        margin-bottom: 25px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .destination-card:hover {
        transform: translateY(-5px);
    }

    .destination-card img {
        height: 200px;
        object-fit: cover;
        width: 100%;
    }

    .card-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 15px;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
        color: white;
    }

    .card-overlay h5 {
        margin-bottom: 5px;
        font-weight: 700;
    }

    .price-tag {
        background-color: var(--primary-color);
        color: white;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        display: inline-block;
    }

    .feature-section {
        background-color: var(--light-color);
    }

    .feature-card {
        text-align: center;
        padding: 30px 20px;
        border-radius: 10px;
        background-color: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        height: 100%;
        transition: transform 0.3s;
    }

    .feature-card:hover {
        transform: translateY(-5px);
    }

    .feature-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 20px;
    }

    .service-card {
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        margin-bottom: 25px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        height: 200px;
    }

    .service-card img {
        height: 100%;
        object-fit: cover;
        width: 100%;
    }

    .service-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 700;
        font-size: 1.5rem;
    }

    .rental-card {
        background-color: #b35900;
        color: white;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        transition: all 0.3s;
    }

    .rental-card:hover {
        background-color: #994d00;
        transform: translateY(-5px);
    }

    .rental-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
    }

    .testimonial-card {
        background-color: white;
        border-radius: 10px;
        padding: 25px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 20px;
        position: relative;
    }

    .testimonial-card:before {
        content: '\201C';
        font-size: 60px;
        position: absolute;
        top: 10px;
        left: 15px;
        color: rgba(255, 136, 0, 0.1);
    }

    .testimonial-rating {
        color: #FFD700;
        margin-bottom: 10px;
    }

    .testimonial-user {
        display: flex;
        align-items: center;
        margin-top: 15px;
    }

    .testimonial-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 15px;
        object-fit: cover;
    }

    .partner-logo {
        height: 50px;
        object-fit: contain;
        filter: grayscale(100%);
        opacity: 0.7;
        transition: all 0.3s;
    }

    .partner-logo:hover {
        filter: grayscale(0%);
        opacity: 1;
    }

    .orange-section {
        background-color: var(--primary-color);
        color: white;
    }
</style>