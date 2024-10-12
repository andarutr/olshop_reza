<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CV. Bintang Makmur Sejahtera</title>
  <link href="<?= base_url() ?>assets/landing_page/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>assets/landing_page/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="<?= base_url() ?>assets/landing_page/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/landing_page/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/landing_page/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/landing_page/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/landing_page/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/landing_page/css/main.css" rel="stylesheet">
</head>
<body class="index-page">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="<?= base_url() ?>" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">CV BMS</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#products">Produk</a></li>
          <li><a href="#pricing">Harga</a></li>
          <!-- <li><a href="#contact">Kontak</a></li> -->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="<?= base_url() ?>pelanggan/register">Get Started</a>
    </div>
  </header>

  <main class="main">
    <section id="hero" class="hero section dark-background">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Solusi Segar untuk Bisnis Sayuran Anda</h1>
            <p>CV Bintang Makmur Sejahtera menyediakan sayur-sayuran berkualitas tinggi, segar, dan terjamin, siap mendukung kebutuhan bisnis Anda.</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Mulai Sekarang</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="<?= base_url() ?>assets/landing_page/img/hero_bms3.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
    </section>

    <section id="clients" class="clients section light-background">
      <div class="container" data-aos="zoom-in">
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
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="<?= base_url() ?>assets/landing_page/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>assets/landing_page/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>assets/landing_page/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>assets/landing_page/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>assets/landing_page/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>assets/landing_page/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>assets/landing_page/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>assets/landing_page/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="about" class="about section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Tentang Kami</h2>
        </div>
        <div class="container">
            <div class="row gy-4">
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <h3>Visi</h3>
                <p>
                Menjadi penyedia sayur-sayuran terkemuka yang berkomitmen untuk menyuplai produk segar dan berkualitas tinggi, serta memberikan kontribusi positif bagi kesehatan masyarakat.
                </p>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3>Misi</h3>
                <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>Menjamin kualitas dan kesegaran sayur-sayuran yang kami tawarkan kepada pelanggan.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Mendukung petani lokal dengan menyediakan pasar yang adil untuk produk mereka.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Memberikan layanan pelanggan yang terbaik untuk memastikan kepuasan pelanggan.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Berkomitmen untuk praktik bisnis berkelanjutan dan ramah lingkungan.</span></li>
                </ul>
            </div>
            </div>
        </div>
    </section>
    
    <section id="services" class="services section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Layanan Kami</h2>
            <p>Kami menyediakan berbagai layanan untuk memenuhi kebutuhan sayur-sayuran Anda dengan kualitas terbaik.</p>
        </div>

        <div class="container">
            <div class="row gy-4">
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-box icon"></i></div>
                <h4><a href="" class="stretched-link">Penyediaan Sayuran Segar</a></h4>
                <p>Kami menyediakan sayur-sayuran segar langsung dari petani lokal dengan kualitas terbaik.</p>
                </div>
            </div>
            
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-truck icon"></i></div>
                <h4><a href="" class="stretched-link">Pengantaran Cepat</a></h4>
                <p>Layanan pengantaran cepat untuk memastikan sayuran sampai dalam kondisi segar.</p>
                </div>
            </div>
            
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-shield-check icon"></i></div>
                <h4><a href="" class="stretched-link">Kualitas Terjamin</a></h4>
                <p>Setiap produk kami melewati proses pemeriksaan ketat untuk menjamin kualitas.</p>
                </div>
            </div>
            
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-headset icon"></i></div>
                <h4><a href="" class="stretched-link">Layanan Pelanggan</a></h4>
                <p>Kami siap membantu Anda dengan layanan pelanggan yang responsif dan profesional.</p>
                </div>
            </div>
            </div>
        </div>
    </section>
    
    <section id="call-to-action" class="call-to-action section dark-background">
        <img src="<?= base_url() ?>assets/landing_page/img/cta-bg.jpg" alt="Background CTA">
        <div class="container">
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-9 text-center text-xl-start">
                <h3>Segera Dapatkan Sayuran Segar!</h3>
                <p>Kami menyediakan sayur-sayuran berkualitas tinggi, segar, dan siap antar ke pintu Anda. Bergabunglah dengan kami untuk memastikan kesehatan keluarga Anda dengan pilihan sayuran terbaik!</p>
            </div>
            <div class="col-xl-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="#">Pesan Sekarang</a>
            </div>
            </div>
        </div>
    </section>
    
    <section id="products" class="products section light-background">
      <div class="container section-title" data-aos="fade-up">
          <h2>Produk Terbaik Kami</h2>
          <p>Pilih dari berbagai sayur-sayuran segar pilihan kami yang siap memenuhi kebutuhan Anda.</p>
      </div>

      <div class="container">
          <div class="row gy-4">

              <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                  <div class="product-item">
                      <h3>Sayur Segar Organik</h3>
                      <p>Sayuran segar yang dipanen langsung dari kebun kami. Pilihan terbaik untuk kesehatan keluarga.</p>
                      <h4>Harga: 100K<span> / kg</span></h4>
                      <ul>
                          <li><i class="bi bi-check"></i> <span>100% organik</span></li>
                          <li><i class="bi bi-check"></i> <span>Tanpa pestisida</span></li>
                          <li><i class="bi bi-check"></i> <span>Rasa yang lebih segar</span></li>
                      </ul>
                      <a href="#" class="buy-btn">Pesan Sekarang</a>
                  </div>
              </div>

              <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                  <div class="product-item">
                      <h3>Paket Sayur Campur</h3>
                      <p>Paket praktis berisi campuran sayur segar untuk kebutuhan sehari-hari Anda.</p>
                      <h4>Harga: 150K<span> / paket</span></h4>
                      <ul>
                          <li><i class="bi bi-check"></i> <span>Beragam sayur segar</span></li>
                          <li><i class="bi bi-check"></i> <span>Pengantaran gratis</span></li>
                          <li><i class="bi bi-check"></i> <span>Diskon 10% untuk pemesanan pertama</span></li>
                      </ul>
                      <a href="#" class="buy-btn">Pesan Sekarang</a>
                  </div>
              </div>

              <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                  <div class="product-item">
                      <h3>Sayur Bayam Segar</h3>
                      <p>Bayam segar yang kaya nutrisi dan cocok untuk berbagai hidangan.</p>
                      <h4>Harga: 80K<span> / kg</span></h4>
                      <ul>
                          <li><i class="bi bi-check"></i> <span>Kaya vitamin dan mineral</span></li>
                          <li><i class="bi bi-check"></i> <span>Lezat untuk dijadikan salad</span></li>
                          <li><i class="bi bi-check"></i> <span>Segar dan renyah</span></li>
                      </ul>
                      <a href="#" class="buy-btn">Pesan Sekarang</a>
                  </div>
              </div>

          </div>
      </div>
    </section>

    <section id="pricing" class="pricing section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Harga</h2>
            <p>Paket harga untuk sayur-sayuran segar kami yang siap memenuhi kebutuhan Anda.</p>
        </div>

        <div class="container">
            <div class="row gy-4">
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-item">
                <h3>Paket Hemat</h3>
                <h4>300K<span> / bulan</span></h4>
                <ul>
                    <li><i class="bi bi-check"></i> <span>5 kg sayur segar pilihan</span></li>
                    <li><i class="bi bi-check"></i> <span>Pengantaran gratis</span></li>
                    <li><i class="bi bi-check"></i> <span>Diskon 10% untuk pembelian berikutnya</span></li>
                    <li class="na"><i class="bi bi-x"></i> <span>Tidak termasuk buah</span></li>
                    <li class="na"><i class="bi bi-x"></i> <span>Paket tidak dapat dibatalkan</span></li>
                </ul>
                <a href="#" class="buy-btn">Pesan Sekarang</a>
                </div>
            </div>

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="pricing-item featured">
                <h3>Paket Keluarga</h3>
                <h4>600K<span> / bulan</span></h4>
                <ul>
                    <li><i class="bi bi-check"></i> <span>10 kg sayur segar pilihan</span></li>
                    <li><i class="bi bi-check"></i> <span>Pengantaran gratis setiap minggu</span></li>
                    <li><i class="bi bi-check"></i> <span>Diskon 15% untuk pembelian berikutnya</span></li>
                    <li><i class="bi bi-check"></i> <span>Produk organik</span></li>
                    <li class="na"><i class="bi bi-x"></i> <span>Paket tidak dapat dibatalkan</span></li>
                </ul>
                <a href="#" class="buy-btn">Pesan Sekarang</a>
                </div>
            </div>

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="pricing-item">
                <h3>Paket Premium</h3>
                <h4>900K<span> / bulan</span></h4>
                <ul>
                    <li><i class="bi bi-check"></i> <span>15 kg sayur segar pilihan</span></li>
                    <li><i class="bi bi-check"></i> <span>Pengantaran gratis setiap hari</span></li>
                    <li><i class="bi bi-check"></i> <span>Diskon 20% untuk pembelian berikutnya</span></li>
                    <li><i class="bi bi-check"></i> <span>Produk organik dan lokal</span></li>
                    <li><i class="bi bi-check"></i> <span>Konsultasi gratis dengan ahli gizi</span></li>
                </ul>
                <a href="#" class="buy-btn">Pesan Sekarang</a>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimoni Pelanggan</h2>
            <p>Kami selalu berusaha memberikan yang terbaik untuk pelanggan kami. Berikut adalah beberapa testimoni dari mereka.</p>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
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
                }
                }
            </script>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="<?= base_url() ?>assets/landing_page/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Rina Sari</h3>
                    <h4>Pemilik Toko Sayuran</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>“Sayuran dari CV Bintang Makmur Sejahtera selalu segar dan berkualitas. Pelayanan pengantaran juga sangat cepat dan ramah!”</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="<?= base_url() ?>assets/landing_page/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Andi Setiawan</h3>
                    <h4>Konsumen Setia</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>“Saya sangat puas dengan kualitas sayuran yang saya beli. Sangat segar dan tahan lama! Tidak akan berpindah ke penyedia lain.”</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="<?= base_url() ?>assets/landing_page/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Diana Kurnia</h3>
                    <h4>Ibu Rumah Tangga</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>“Saya selalu membeli sayuran dari sini. Mereka selalu segar dan harganya sangat bersaing. Sangat merekomendasikan!”</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="<?= base_url() ?>assets/landing_page/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Joko Prasetyo</h3>
                    <h4>Pemilik Restoran</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>“Saya sangat puas dengan layanan mereka. Sayuran yang saya terima selalu dalam kondisi terbaik dan pengiriman tepat waktu.”</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="<?= base_url() ?>assets/landing_page/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Fina Melati</h3>
                    <h4>Penggemar Masakan Sehat</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>“Saya selalu mendapatkan sayur-sayuran berkualitas dari Bintang Makmur. Mereka sangat memperhatikan kepuasan pelanggan!”</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    <section id="faq-2" class="faq-2 section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
            <p>Kami memahami bahwa Anda mungkin memiliki beberapa pertanyaan. <br>Berikut adalah jawaban atas pertanyaan yang sering diajukan oleh pelanggan kami.</p>
        </div>

        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="faq-container">
                <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>Bagaimana cara memesan sayuran?</h3>
                    <div class="faq-content">
                    <p>Anda dapat memesan sayuran melalui website kami atau menghubungi nomor yang tertera di kontak. Pastikan Anda menyebutkan jenis sayuran dan jumlah yang diinginkan.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                </div>

                <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>Apakah sayuran yang dijual segar?</h3>
                    <div class="faq-content">
                    <p>Ya, kami menjamin bahwa semua sayuran yang kami jual adalah segar dan berkualitas tinggi. Kami berkomitmen untuk memberikan produk terbaik kepada pelanggan kami.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                </div>

                <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>Apakah ada layanan pengantaran?</h3>
                    <div class="faq-content">
                    <p>Ya, kami menyediakan layanan pengantaran untuk semua pesanan. Kami akan mengantarkan sayuran segar langsung ke pintu Anda.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                </div>

                <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>Apakah ada diskon untuk pembelian dalam jumlah besar?</h3>
                    <div class="faq-content">
                    <p>Ya, kami memberikan diskon khusus untuk pembelian dalam jumlah besar. Silakan hubungi kami untuk informasi lebih lanjut.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                </div>

                <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>Bagaimana cara menjaga kesegaran sayuran setelah pembelian?</h3>
                    <div class="faq-content">
                    <p>Kami sarankan untuk menyimpan sayuran di dalam kulkas dan menghindari kelembapan berlebih. Pastikan juga untuk tidak menempatkan sayuran di dekat buah-buahan yang bisa mempengaruhi kesegaran.</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-5 mx-auto">
            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Alamat</h3>
                  <p>Gd.Graha Krama Yudha Lt 4 Unit B Jalan warung Jati Barat No.04</p>
                </div>
              </div>

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>telephone</h3>
                  <p>021-7945301</p>
                  <p>0821-2730-3931</p>
                </div>
              </div>

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>cvbms@gmail.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
  </main>

  <footer id="footer" class="footer">
  <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="<?= base_url() ?>" class="d-flex align-items-center">
            <span class="sitename">CV BMS</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Gd.Graha Krama Yudha Lt 4 Unit B</p>
            <p>Jalan warung Jati Barat No.04</p>
            <p class="mt-3"><strong>Phone:</strong> <span>021-7945301</span></p>
            <p class="mt-3"><strong>Whatsapp:</strong> <span>0821-2730-3931</span></p>
            <p><strong>Email:</strong> <span>cvbms@gmail.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#hero">Beranda</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#about">Tentang</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Layanan</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#products">Produk</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#pricing">Harga</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url() ?>home">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url() ?>pelanggan/login">Login</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url() ?>pelanggan/register">Register</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>Copyright © <span>2024</span> <strong class="px-1 sitename">CV. Bintang Makmur Sejahtera</strong> <span>All Rights Reserved</span></p>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/landing_page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/landing_page/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>assets/landing_page/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>assets/landing_page/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>assets/landing_page/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/landing_page/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url() ?>assets/landing_page/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?= base_url() ?>assets/landing_page/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="<?= base_url() ?>assets/landing_page/js/main.js"></script>

</body>

</html>