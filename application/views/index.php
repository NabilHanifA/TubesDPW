<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
      <div class="col-xl-6 col-lg-8">
        <h1>Servis Motor Kesayangan Anda di Jaya Motor<span>.</span></h1>
        <h2>Kami siap melayani dengan sepenuh hati</h2>
      </div>
    </div>

  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="<?= base_url(); ?>assets/LP/img/vietnam-servis.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
          <h3>Jaya Motor memiliki mekanik yang <br> sangat handal sampai tidak perlu <br> nengok kalo lagi servis</h3>
          <!-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
          <br>
          <ul>
            <li><i class="ri-check-double-line"></i> Mekanik handal yang tersertifikasi MUI </li>
            <li><i class="ri-check-double-line"></i> Banyak bekerja sedikit bicara asal dikasih surya </li>
            <li><i class="ri-check-double-line"></i> Baut motor Anda dijamin utuh tanpa diganti oleh cable ties</li>
          </ul>
          <p>
            Anda penasaran siapa mekanik di samping? <br>
            Makanya, datang ke Jaya Motor sekarang juga!
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="zoom-in">

      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="<?= base_url(); ?>assets/LP/img/honda-logo.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="<?= base_url(); ?>assets/LP/img/honda-logo.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="<?= base_url(); ?>assets/LP/img/honda-logo.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="<?= base_url(); ?>assets/LP/img/honda-logo.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="<?= base_url(); ?>assets/LP/img/honda-logo.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="<?= base_url(); ?>assets/LP/img/honda-logo.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="<?= base_url(); ?>assets/LP/img/honda-logo.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="<?= base_url(); ?>assets/LP/img/honda-logo.png" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Clients Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Services</h2>
        <p>CEK SERVIS KAMI</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="<?= base_url('Booking'); ?>#order">Servis Rutin</a></h4>
            <p>Servis rutin adalah servis yang dilakukan secara berkala untuk menjaga performa motor</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="<?= base_url('Booking'); ?>#order">Servis Ringan</a></h4>
            <p>Servis untuk memperbaiki kerusakan ringan tanpa harus turun mesin</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="<?= base_url('Booking'); ?>#order">Servis Berat</a></h4>
            <p>Servis untuk memperbaiki kerusakan berat akibat kecelakaan atau turun mesin</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->


  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="zoom-in">

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="<?= base_url(); ?>assets/LP/img/testimonials/max-testi.jpeg" class="testimonial-img" alt="">
              <h3>Mahmud Verstappen</h3>
              <h4>Sales Honda Mobil</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Tidak salah saya datang jauh-jauh ke sini dari Belanda untuk servis Honda bekjul saya. Sekarang motor saya terasa seperti motor Moto GP Marc Marquez.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="<?= base_url(); ?>assets/LP/img/testimonials/gordon-testi.jpeg" class="testimonial-img" alt="">
              <h3>Bang Gordon</h3>
              <h4>Owner Pecel Lele Barokah</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Bengkel ini begitu menakjubkan, bahkan Anda dapat mencium aroma oli federal dari ketiak mekaniknya. WOW! Begitulah dedikasi pekerja di sini.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="<?= base_url(); ?>assets/LP/img/testimonials/jeongyeon-testi.jpg" class="testimonial-img" alt="">
              <h3>Siti Jeongyeon</h3>
              <h4>Penjual Sayur Pasar Banjaran</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Ibu mah ga ngerti apa-apa soal motor. Cuma disuruh suami saya ke sini aja soalnya bisa kasbon.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="<?= base_url(); ?>assets/LP/img/testimonials/rossi-testi.jpeg" class="testimonial-img" alt="">
              <h3>Rossi Alkatiri</h3>
              <h4>Pensiunan BUMN</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Saya tidak percaya bahwa ada bengkel sebagus ini di tengah Laut China Selatan. Mungkin di masa depan bengkel ini bisa menerima perbaikan speedboat, kapal tongkang, bahkan tanker minyak.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="<?= base_url(); ?>assets/LP/img/testimonials/deddy-testi.jpg" class="testimonial-img" alt="">
              <h3>Dedy Korbuset</h3>
              <h4>Tukang Sulap</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Saya tau mengenai Jaya Motor karena rekomendasi teman. Setelah saya mencobanya, sangat di luar nalar. Padahal motor saya hanya Supra 125 tapi setelah servis di sini malah jadi Honda CBR1000RR-R. Wow!
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Team</h2>
        <p>Cek Tim Kami</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="<?= base_url(); ?>assets/LP/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Themy Sabri Syuhada</h4>
              <span>Owner</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="<?= base_url(); ?>assets/LP/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Nabil Hanif Achmaddiredja</h4>
              <span>Owner</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="<?= base_url(); ?>assets/LP/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Hannah Alrasyid</h4>
              <span>Manager</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="<?= base_url(); ?>assets/LP/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Mang Edi</h4>
              <span>Senior Mechanic</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Kontak Kami</p>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16040271.59525483!2d103.0006266211223!3d11.0324795807677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317e79d4f0390dcf%3A0xd347a86ae63c44c9!2sSouth%20China%20Sea!5e0!3m2!1sen!2sid!4v1686445132366!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Lokasi:</h4>
              <p>Laut China Selatan</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p><a href="mailto:jayamotor@gmail.com">jayamotor@gmail.com</a></p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Telepon:</h4>
              <p>+62 821 4311 2875</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->