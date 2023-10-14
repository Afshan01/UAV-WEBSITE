<?php

// hero.php

$current_session = "2023-2024";

$principal_name = "Prof. M. M. Sufyan Beg";
$chairman_name = "Prof. Mohammad Muzammil";
$faculty_name_1 = "Dr. Syed Fahad Anwer";
$faculty_name_2 = "Dr. Rashid Ali";

// path
$staff_01_path = "./staff/staff-01.php";
$staff_02_path = "./staff/staff-02.php";
$staff_03_path = "./staff/staff-03.php";
$staff_04_path = "./staff/staff-04.php";

?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">Unmanned Aerial Vehicle <br><span>ZHCET</span> AMU Aligarh</h1>
      <p class="mb-4 pb-0">Discover New Horizon with Us.</p>
      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
      <a href="about.php" class="about-btn scrollto">Our Vision</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container position-relative" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
            <h2>About Us</h2>
            <p>
              A student run group at ZHCET whick seeks to provide necessary hands-on engineering skills involved in building aerial vehicles from hardware to software.
            </p>
          </div>
          <div class="col-lg-3">
            <h3>Our Mission</h3>
            <p>Our mission is to develop and deliver the highest quality, most inspiring, intentive drone and virtual reality technology experiences to the next generation vissionaries.</p>
          </div>
          <div class="col-lg-3">
            <h3>Our Vision</h3>
            <p>To design UAV's by implementing autonomous system with advance material. We are currently developing cyclocopter and ornithopter.</p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Principal Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Principal</h2>
          <p><?php echo "$current_session"?></p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-3"></div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/staff/Principal.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="<?php echo"$staff_01_path"?>"><?php echo"$principal_name" ?></a></h3>
                <p>Professor</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-3"></div>          
        </div>
      </div>

    </section><!-- End Principal Section -->

    <!-- ======= Chairman Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Chairman</h2>
          <p><?php echo "$current_session"?></p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-3"></div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/staff/chairman.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="<?php echo"$staff_02_path"?>"><?php echo"$chairman_name"?></a></h3>
                <p>Chairman</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-3"></div>
        </div>
      </div>

    </section><!-- End Chairman Section -->

    <!-- ======= Faculty Advisers Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Faculty Advisers</h2>
          <p><?php echo "$current_session"?></p>
        </div>

        <div class="row">
          <div class="col-lg-2 col-md-2"></div>
          <div class="col-lg-4 col-md-4">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/staff/faculty01.JPG" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="<?php echo"$staff_03_path"?>"><?php echo"$faculty_name_1" ?></a></h3>
                <p>Quas alias incidunt</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/staff/faculty02.JPG" alt="Speaker 2" class="img-fluid">
              <div class="details">
              <h3><a href="<?php echo"$staff_04_path"?>"><?php echo"$faculty_name_2" ?></a></h3>
                <p>Consequuntur odio aut</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-2"></div>
        </div>
      </div>

    </section><!-- End Faculty Advisers Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a href="assets/img/gallery/1.jpg" class="gallery-lightbox"><img src="assets/img/gallery/1.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/2.jpg" class="gallery-lightbox"><img src="assets/img/gallery/2.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/3.jpg" class="gallery-lightbox"><img src="assets/img/gallery/3.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/4.jpg" class="gallery-lightbox"><img src="assets/img/gallery/4.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/5.jpg" class="gallery-lightbox"><img src="assets/img/gallery/5.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/6.jpg" class="gallery-lightbox"><img src="assets/img/gallery/6.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/7.jpg" class="gallery-lightbox"><img src="assets/img/gallery/7.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="assets/img/gallery/8.jpg" class="gallery-lightbox"><img src="assets/img/gallery/8.jpg" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </section>
    <!-- End Gallery Section -->

    <!-- ======= Subscribe Section ======= -->
    <section id="subscribe">
      <div class="container" data-aos="zoom-in">
        <div class="section-header">
          <h2>Newsletter</h2>
          <p>Rerum numquam illum recusandae quia mollitia consequatur.</p>
        </div>

        <form method="POST" action="#">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 d-flex">
              <input type="text" class="form-control" placeholder="Enter your Email">
              <button type="submit" class="ms-2">Subscribe</button>
            </div>
          </div>
        </form>

      </div>
    </section><!-- End Subscribe Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Nihil officia ut sint molestiae tenetur.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
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
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
