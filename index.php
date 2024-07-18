<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- form  -->
  <!-- icon -->
  <!-- Google reCAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="https://www.google.com/recaptcha/api.js?render=6LeQIAEqAAAAAOmPO-298SpcJ4A_Drenp-SZDEbS"></script>


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- jQuery Validate -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- AdminLTE JS -->
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

  <!-- Popper.js (for Bootstrap 4) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>

  <!-- Toastr JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script src="validateFormContact.js"></script>

  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" href="assets/logo-tap.png" type="image/x-icon">
  <title>Tuyen Error | Photography</title>
</head>

<body>



  <header class="header" id="home">
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#">
            <img src="assets/logo-white.png" alt="logo" />
          </a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#home">HOME</a></li>
        <li><a href="#about">ABOUT US</a></li>
        <li><a href="#service">SERVICES</a></li>
        <li class="nav__logo">
          <a href="#">
            <img src="assets/logo-white.png" alt="logo" />
          </a>
        </li>
        <li><a href="#client">CLIENT</a></li>
        <li><a href="#blog">BLOG</a></li>
        <li><a href="#contact">CONTACT US</a></li>
      </ul>
    </nav>
  </header>

  <div class="section__container about__container" id="about">
    <h2 class="section__header">LET TUYEN ERROR SAVE YOUR YOUTH</h2>
    <p class="section__description">
      At Tuyen Error, specialize in freezing those fleeting moments in time that hold immense significance for you.
      With our passion for photography and keen eye for detail, I transform ordinary moments into extraordinary
      memories.
      extraordinary memories.
    </p>
    <p class="section__description">
      Whether it's a milestone event, a candid portrait, or the breathtaking beauty of nature,
      I strive to encapsulate the essence of every moment, ensuring that your cherished memories last a lifetime.
      Trust me for magic in your life's journey, one frame at a time
    </p>
    <img src="assets/logo-dark.png" alt="logo" />
  </div>

  <div class="section__container portfolio__container">
    <h2 class="section__header">~ PORTFOLIO ~</h2>
    <div class="portfolio__grid">
      <div class="portfolio__card">
        <img src="assets/portfolio-1.jpg" alt="portfolio" />
        <div class="portfolio__content">
          <a href="https://www.facebook.com/tuyenerror/posts/pfbid0V68NLETWBiLc8Le1YxS7JrG6koHgVbgzd9vGyP6oDR7YrGVXNomwBsrLFy542ZP2l" target="_blank">
            <button class="btn">VIEW PORTFOLIO</button>
          </a>
        </div>
      </div>
      <div class="portfolio__card">
        <img src="assets/portfolio-2.jpg" alt="portfolio" />
        <div class="portfolio__content">
          <a href="https://www.facebook.com/tuyenerror/posts/pfbid034fTADYbcfwPWgY2PoRJoNgWJDBGZPqm3xmG9xZAZRVHFKwiwjv78hpitzK4kD8Jml" target="_blank">
            <button class="btn">VIEW PORTFOLIO</button>
          </a>
        </div>
      </div>
      <div class="portfolio__card">
        <img src="assets/portfolio-3.jpg" alt="portfolio" />
        <div class="portfolio__content">
          <a href="https://www.facebook.com/tuyenerror/posts/pfbid05vdD51i3P95yp1MNrrrh3iApuFz4FCAJd8dPNRYVL2o921tbgModRTr4KfRonqjcl" target="_blank">
            <button class="btn">VIEW PORTFOLIO</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <section class="service" id="service">
    <div class="section__container service__container">
      <h2 class="section__header">~ SERVICES ~</h2>
      <p class="section__description">
        At Tuyen Error, we offer a range of professional photography services
        tailored to meet your unique needs. With a commitment to excellence
        and creativity, we strive to exceed your expectations, delivering
        captivating visuals that tell your story with authenticity and
        passion.
      </p>
      <div class="service__grid">
        <div class="service__card">
          <h4>Portrait Sessions</h4>
          <p>
            My portrait sessions are designed to showcase your personality and style with stunning images.
          </p>
        </div>
        <div class="service__card">
          <h4>Birthday Photo Session</h4>
          <p>
            Appreciate the beauty and magic of new life with our birthday photography sessions.
          </p>
        </div>
        <div class="service__card">
          <h4>Family Sessions</h4>
          <p>
            Cherish the bond of family with our custom-designed playful candid
            moments and portrait sessions.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Calendly inline widget begin -->
  <div class="calendly-inline-widget" data-url="https://calendly.com/tuyenerror-ks/30min" style="min-width:320px;height:700px;"></div>
  <!-- Calendly inline widget end -->
  <section class="section__container client__container" id="client">
    <h2 class="section__header">~ TESTIMONIALS ~</h2>
    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="client__card">
            <img src="assets/client-1.jpg" alt="client" />
            <p>
              Tuyen Error exceeded all our expectations! Their attention to
              detail and ability to capture the essence of our special day was
              truly remarkable. Every time we look at our wedding photos,
              we're transported back to those magical moments. Thank you for
              preserving our memories so beautifully!
            </p>
            <h4>Timmy</h4>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="client__card">
            <img src="assets/client-2.jpg" alt="client" />
            <p>
              We couldn't be happier with our family portrait session with
              Tuyen Error. They made us feel relaxed and comfortable throughout
              the entire shoot, resulting in natural and candid photos that
              perfectly reflect our family dynamic. These images will be
              cherished for years to come!
            </p>
            <h4>Hong Duyen</h4>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="client__card">
            <img src="assets/client-3.jpg" alt="client" />
            <p>
              Tuyen Error's birthday photo session captured the most precious moments of our lives with tenderness and
              care. From the joy of birthdays to sweet moments with family, each photo tells a story we will cherish
              forever. Thank you for creating beautiful memories for our family!
            </p>
            <h4>Tran Cong Doan</h4>
          </div>
        </div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <section class="section__container gallery__container">
    <h2 class="section__header">~ GALLERY ~</h2>
    <div class="gallery__grid">
      <img src="assets/image-1.jpg" alt="gallery" />
      <img src="assets/image-2.jpg" alt="gallery" />
      <img src="assets/image-3.jpg" alt="gallery" />
      <img src="assets/image-4.jpg" alt="gallery" />
      <img src="assets/image-5.jpg" alt="gallery" />
      <img src="assets/image-6.jpg" alt="gallery" />
      <img src="assets/image-7.jpg" alt="gallery" />
      <img src="assets/image-8.jpg" alt="gallery" />
      <img src="assets/image-9.jpg" alt="gallery" />
      <img src="assets/image-10.jpg" alt="gallery" />
      <img src="assets/image-11.jpg" alt="gallery" />
      <img src="assets/image-12.jpg" alt="gallery" />
    </div>
    <div class="gallery__btn">
      <a href="https://www.facebook.com/tuyenerror/photos" target="_blank">
        <button class="btn">VIEW GALLERY</button>
      </a>
    </div>
  </section>

  <section class="blog" id="blog">
    <div class="section__container blog__container ">
      <div class="blog__content mr-5">
        <h2 class="section__header">~ LATEST BLOG ~</h2>
        <h4>Capturing Emotion in Every Frame</h4>
        <p>
          This blog post delves into the importance of storytelling in
          photography and how Tuyen Error approaches capturing emotion and
          narrative in their work. Readers will discover the techniques and
          strategies used by professional photographers to evoke emotion,
          convey meaning, and create compelling visual narratives that
          resonate with viewers on a deep level.
        </p>
        <div class="blog__btn">
          <a href="https://calendly.com/tuyenerror-ks/30min" target="_blank">
            <button class="btn">BOOK A PHOTO</button>
          </a>
        </div>
      </div>
      <!-- form  -->
      <div class="blog__content mt-3">
        <div class="card card-primary">
          <div class="card-header" style=" background-color: #212529;">
            <h3 class="card-title text-center" style="float: none;">Contact us</h3>
          </div>
          <form id="myform" action="sendEmail.php" method="post" accept-charset="UTF-8">
            <div class="card-body container">
              <input type="hidden" id="token" name="token">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="username">Name <span style="color:red">(*)</span></label>
                    <div class="input-group">
                      <input type="username" name="username" class="form-control" id="username">
                    </div>
                    <label id="username-error" class="error" for="username" style="display:none"></label>
                  </div>
                </div>

                <div class="col-6">
                  <div class="form-group">
                    <label for="email">Email address <span style="color:red">(*)</span></label>
                    <div class="input-group">
                      <input type="email" name="email" class="form-control" id="email">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                      </div>
                    </div>
                    <label id="email-error" class="error" for="email" style="display:none"></label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="phone_number">Phone number <span style="color:red">(*)</span></label>
                    <div class="input-group">
                      <input type="text" name="phone_number" class="form-control">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                      </div>
                    </div>
                    <label id="phone_number-error" class="error" for="phone_number" style="display:none"></label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="email">Subject</label>
                    <div class="input-group">
                      <input type="text" name="subject" class="form-control" id="subject">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                      </div>
                    </div>
                    <label id="subject-error" class="error" for="subject" style="display:none"></label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="password">Message <span style="color:red">(*)</span></label>
                    <div class="input-group">
                      <textarea class="form-control" name="message" id="message" rows="5" autocomplete="off"></textarea>
                    </div>
                    <label id="message-error" class="error" for="message" style="display:none"></label>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              </button>
              <button type="submit" class="btn btn-primary w-100" style="   
          background-color: #212529;
          width: 100px;
          padding: 10px;
          border-radius: 5px;
          color: white;">Submit
            </div>
          </form>
        </div>
      </div>



    </div>

    </div>
  </section>

  <section class="section__container instagram__container">
    <h2 class="section__header">~ INSTAGRAM ~</h2>
    <div class="instagram__flex">
      <img src="assets/image-1.jpg" alt="instagram" />
      <img src="assets/image-2.jpg" alt="instagram" />
      <img src="assets/image-3.jpg" alt="instagram" />
      <img src="assets/image-4.jpg" alt="instagram" />
      <img src="assets/image-5.jpg" alt="instagram" />
      <img src="assets/image-6.jpg" alt="instagram" />
      <img src="assets/image-7.jpg" alt="instagram" />
      <img src="assets/image-8.jpg" alt="instagram" />
    </div>
  </section>

  <footer id="contact">
    <div class="section__container footer__container">
      <div class="footer__col">
        <img src="assets/logo-dark.png" alt="logo" />
        <div class="footer__socials">
          <a href="https://www.facebook.com/tuyenerror/" target="_blank"><i class="ri-facebook-fill"></i></a>
          <a href="https://www.instagram.com/tuyen_error/" target="_blank"><i class="ri-instagram-line"></i></a>
          <a href="#" target="_blank"><i class="ri-twitter-fill"></i></a>
          <a href="https://www.youtube.com/channel/UCiHa0-6mVASpH2vFYrJKxNw/featured" target="_blank"><i class="ri-youtube-fill"></i></a>
          <a href="https://calendly.com/tuyenerror-ks/30min" target="_blank"><i class="ri-calendar-fill"></i></a>
        </div>
      </div>
      <div class="footer__col">
        <ul class="footer__links">
          <li><a href="#home">HOME</a></li>
          <li><a href="#about">ABOUT US</a></li>
          <li><a href="#service">SERVICES</a></li>
          <li><a href="#client">CLIENT</a></li>
          <li><a href="#blog">BLOG</a></li>
          <li><a href="#contact">CONTACT US</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <h4>STAY IN TOUCH</h4>
        <p>
          Email: tuyenerror.ks@gmail.com
        </p>
        <p>
          Phone: 0964984046
        </p>
        <h4>BOOK A PHOTO SHOOT WITH TUYEN ERROR</h4>
        <p>
          <a href="https://calendly.com/tuyenerror-ks/30min" target="_blank" class="custom-link"><img src="assets/client-1.jpg" alt="client"></a>
        </p>
      </div>
    </div>
    <div class="footer__bar">
      © 2024 Tuyen Error. All rights reserved.
    </div>
  </footer>

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="main.js"></script>
  <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
</body>

</html>
<script>
  $(document).ready(function() {
    // Set toastr options
    toastr.options.timeOut = 1500; // 1.5s
    // Check if there's a success message passed from PHP
    <?php if (isset($_SESSION['send_email'])) : ?>
      toastr.success('<?php echo $_SESSION['send_email'] ?>');
      <?php unset($_SESSION['send_email']); ?>
    <?php endif; ?>
  });
</script>