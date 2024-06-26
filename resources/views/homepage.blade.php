<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SchoolSM - Portfolio PAS WEB</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landingpage/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('landingpage/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">smktelkompurwokerto@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>(021) 8989 8989</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section><!-- End Top Bar-->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div id="logo">
                <h1><a href="index.html">School<span>SM</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active p-3" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto p-4" href="#about">About</a></li>
                    <li><a class="nav-link scrollto p-2" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto p-4" href="#contact">Contact</a></li>
                    <a class="btn btn-primary nav-link scrollto" href="/login"
                        style="background-color: #50d8af; color: white; padding: 10px 20px; border-radius: 5px;">Login</a>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= hero Section ======= -->
    <section id="hero">

        <div class="hero-content" data-aos="fade-up">
            <h2>Menyulap <span>Ide Kreatifmu</span><br>Menjadi Nyata!</h2>
            <div>
                <a href="#" class="btn-get-started scrollto">Get Started</a>
                <a href="#about" class="btn-projects scrollto">About Us</a>
            </div>
        </div>

        <div class="hero-slider swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('landingpage/assets/img/hero-carousel/1.jpg');">
                </div>
                <div class="swiper-slide" style="background-image: url('landingpage/assets/img/hero-carousel/2.jpg');">
                </div>
                <div class="swiper-slide" style="background-image: url('landingpage/assets/img/hero-carousel/3.jpg');">
                </div>
                <div class="swiper-slide" style="background-image: url('landingpage/assets/img/hero-carousel/4.jpg');">
                </div>
                <div class="swiper-slide" style="background-image: url('landingpage/assets/img/hero-carousel/5.jpg');">
                </div>
            </div>
        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 about-img">
                        <img src="landingpage/assets/img/school-db.png" alt="Fasilitas Sekolah">
                    </div>

                    <div class="col-lg-6 content">
                        <h2>Selamat Datang di SchoolSM</h2>
                        <h3>SchoolSM adalah sebuah platform pembelajaran yang dikembangkan oleh para penggembang aktif
                            di bidang
                            pembelajaran.</h3>

                        <ul>
                            <li><i class="bi bi-check-circle"></i>Konten-konten pembelajaran yang berkualitas tinggi dan
                                sesuai dengan
                                kebutuhan dan keinginan siswa-siswa.</li>
                            <li><i class="bi bi-check-circle"></i>Materi pembelajaran yang disesuaikan dengan kebutuhan
                                dan aspirasi
                                para pelajar.</li>
                            <li><i class="bi bi-check-circle"></i>Konten pembelajaran yang dirancang secara eksklusif
                                untuk aspirasi
                                pelajar.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Services</h2>
                    <p>Selain mengikuti konten-konten pembelajaran yang berkualitas tinggi, SchoolSM juga menyediakan
                        berbagai
                        macam
                        layanan-layanan yang berkaitan dengan pembelajaran, seperti layanan konsultasi, layanan
                        pembelajaran
                        interaktif, dan layanan pembelajaran yang lainnya.</p>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <div class="icon"><i class="bi bi-briefcase"></i></div>
                            <h4 class="title"><a href="">Layanan Konsultasi</a></h4>
                            <p class="description">Selain mengikuti konten-konten pembelajaran yang berkualitas tinggi,
                                SchoolSM juga
                                menyediakan berbagai macam layanan-layanan yang berkaitan dengan pembelajaran, seperti
                                layanan
                                konsultasi,
                                layanan pembelajaran interaktif, dan layanan pembelajaran yang lainnya.</p>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                            <h4 class="title"><a href="">Layanan Pembelajaran Interaktif</a></h4>
                            <p class="description">Selain mengikuti konten-konten pembelajaran yang berkualitas tinggi,
                                SchoolSM juga
                                menyediakan berbagai macam layanan-layanan yang berkaitan dengan pembelajaran, seperti
                                layanan
                                konsultasi,
                                layanan pembelajaran interaktif, dan layanan pembelajaran yang lainnya.</p>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <div class="icon"><i class="bi bi-bar-chart"></i></div>
                            <h4 class="title"><a href="">Layanan Pembelajaran yang Lainnya</a></h4>
                            <p class="description">Selain mengikuti konten-konten pembelajaran yang berkualitas tinggi,
                                SchoolSM juga
                                menyediakan berbagai macam layanan-layanan yang berkaitan dengan pembelajaran, seperti
                                layanan
                                konsultasi,
                                layanan pembelajaran interaktif, dan layanan pembelajaran yang lainnya.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <div class="icon"><i class="bi bi-binoculars"></i></div>
                            <h4 class="title"><a href="">Layanan Pengembangan Diri</a></h4>
                            <p class="description">SchoolSM juga menawarkan program pengembangan diri yang dirancang
                                untuk membantu
                                siswa mengasah keterampilan pribadi dan profesional mereka, meliputi pelatihan
                                kepemimpinan, manajemen
                                waktu, dan keterampilan komunikasi.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Contact Us</h2>
                    <p>Hubungi kami untuk mengeksplorasi berbagai layanan pembelajaran yang kami tawarkan, termasuk
                        konsultasi,
                        pembelajaran interaktif, dan banyak lagi. Kami siap membantu Anda mencapai potensi penuh Anda.
                    </p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <address>Jl. DI Panjaitan No.128, Purwokerto, Jawa Tengah, Indonesia</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+602224242424">(021) 8989 8989</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="">smktelkompurwokerto@gmail.com</a></p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container mb-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.120699074088!2d109.23490931477688!3d-7.424598394670863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e656e4b2d5801d9%3A0x301576d14feb5e0!2sSMK%20Telkom%20Purwokerto!5e0!3m2!1sid!2sid!4v1661781234567"
                    width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="container">
                <div class="form">
                    <form action="" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>

                        <div class="my-3">

                        </div>

                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>SchoolSM</strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://www.instagram.com/smktelkompurwokerto/">Kelompok 6 WEB PAS</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landingpage/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('landingpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('landingpage/assets/js/main.js') }}"></script>

</body>

</html>
