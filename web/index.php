<?php

    require_once(dirname(__DIR__) . "/config/init.php");

?>

<!DOCTYPE html>
<html lang="en">

<!-- ======= Head ======= -->
<?php include('inc/head.php') ?>

<body>

  <!-- ======= Header ======= -->
  <?php include('inc/header.php') ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1><?php echo toolsLang::tool_get_text("studyup_hero1"); ?></h1>
      <h2><?php echo toolsLang::tool_get_text("studyup_hero2"); ?></h2>
      <a href="#"  class="btn-get-started scrollto"><?php echo toolsLang::tool_get_text("studyup_hero3"); ?></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2><?php echo toolsLang::tool_get_text("studyup_hero1"); ?></h2>
            <h3><?php echo toolsLang::tool_get_text("studyup_about1"); ?></h3>
            <!--<p class="text-center h1"><i class="bx bx-bulb bx-dice-4x"></i></p>-->
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
                <?php echo toolsLang::tool_get_text("studyup_about3"); ?>
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> <?php echo toolsLang::tool_get_text("studyup_about4"); ?></li>
              <li><i class="ri-check-double-line"></i> <?php echo toolsLang::tool_get_text("studyup_about5"); ?></li>
              <li><i class="ri-check-double-line"></i> <?php echo toolsLang::tool_get_text("studyup_about6"); ?></li>
              <li><i class="ri-check-double-line"></i> <?php echo toolsLang::tool_get_text("studyup_about7"); ?></li>
            </ul>
            <p class="fst-italic">
                <?php echo toolsLang::tool_get_text("studyup_about8"); ?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo toolsLang::tool_get_text("studyup_counts1"); ?></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo toolsLang::tool_get_text("studyup_counts2"); ?></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo toolsLang::tool_get_text("studyup_counts3"); ?></p>
          </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                <p><?php echo toolsLang::tool_get_text("studyup_counts4"); ?></p>
            </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
          <div class="container">
              <div class="section-title " data-aos="fade-right">
                  <h2><?php echo toolsLang::tool_get_text("studyup_header3"); ?></h2>
                  <p><?php echo toolsLang::tool_get_text("studyup_service1"); ?></p>
              </div>

              <div class="row">
                  <div class="col-md-4 d-flex align-items-stretch">
                      <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                          <div class="icon"><i class="bx bx-bulb"></i></div>
                          <h4><a><?php echo toolsLang::tool_get_text("studyup_service2"); ?></a></h4>
                          <p><?php echo toolsLang::tool_get_text("studyup_service3"); ?></p>
                      </div>
                  </div>
                  <div class="col-md-4 d-flex align-items-stretch">
                      <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                          <div class="icon"><i class="bx bx-folder"></i></div>
                          <h4><a><?php echo toolsLang::tool_get_text("studyup_service4"); ?></a></h4>
                          <p><?php echo toolsLang::tool_get_text("studyup_service5"); ?></p>
                      </div>
                  </div>
                  <div class="col-md-4 d-flex align-items-stretch">
                      <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                          <div class="icon"><i class="bx bx-user-voice"></i></div>
                          <h4><a><?php echo toolsLang::tool_get_text("studyup_service6"); ?></a></h4>
                          <p><?php echo toolsLang::tool_get_text("studyup_service7"); ?></p>
                      </div>
                  </div>
                  <div class="col-md-4 d-flex align-items-stretch mt-4">
                      <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                          <div class="icon"><i class="bx bxs-school"></i></div>
                          <h4><a><?php echo toolsLang::tool_get_text("studyup_service8"); ?></a></h4>
                          <p><?php echo toolsLang::tool_get_text("studyup_service9"); ?></p>
                      </div>
                  </div>
                  <div class="col-md-4 d-flex align-items-stretch mt-4">
                      <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                          <div class="icon"><i class="bx bx-card"></i></div>
                          <h4><a><?php echo toolsLang::tool_get_text("studyup_service10"); ?></a></h4>
                          <p><?php echo toolsLang::tool_get_text("studyup_service11"); ?></p>
                      </div>
                  </div>
                  <div class="col-md-4 d-flex align-items-stretch mt-4">
                      <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                          <div class="icon"><i class="bx bx-bus-school"></i></div>
                          <h4><a><?php echo toolsLang::tool_get_text("studyup_service12"); ?></a></h4>
                          <p><?php echo toolsLang::tool_get_text("studyup_service13"); ?></p>
                      </div>
                  </div>

              </div>

          </div>
      </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3><?php echo toolsLang::tool_get_text("studyup_why_us1"); ?></h3>
              <p>
                  <?php echo toolsLang::tool_get_text("studyup_why_us2"); ?>
              </p>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4><?php echo toolsLang::tool_get_text("studyup_why_us3"); ?></h4>
                    <p><?php echo toolsLang::tool_get_text("studyup_why_us4"); ?></p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4><?php echo toolsLang::tool_get_text("studyup_why_us5"); ?></h4>
                    <p><?php echo toolsLang::tool_get_text("studyup_why_us6"); ?></p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-bulb"></i>
                    <h4><?php echo toolsLang::tool_get_text("studyup_why_us7"); ?></h4>
                    <p><?php echo toolsLang::tool_get_text("studyup_why_us8"); ?></p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Cta Section ======= -->
    <!--<section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section>--><!-- End Cta Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">
          <div class="section-title" data-aos="fade-right">
              <h2><?php echo toolsLang::tool_get_text("studyup_testimonials1"); ?></h2>
              <p><?php echo toolsLang::tool_get_text("studyup_testimonials2"); ?></p>
          </div>
        <div class="row">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        <?php echo toolsLang::tool_get_text("studyup_testimonials3"); ?>
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3><?php echo toolsLang::tool_get_text("studyup_testimonials4"); ?></h3>
                    <h4><?php echo toolsLang::tool_get_text("studyup_testimonials5"); ?></h4>
                  </div>
                </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                      <div class="testimonial-item">
                          <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              <?php echo toolsLang::tool_get_text("studyup_testimonials6"); ?>
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                          <h3><?php echo toolsLang::tool_get_text("studyup_testimonials7"); ?></h3>
                          <h4><?php echo toolsLang::tool_get_text("studyup_testimonials8"); ?></h4>
                      </div>
                  </div><!-- End testimonial item -->


                  <div class="swiper-slide">
                      <div class="testimonial-item">
                          <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              <?php echo toolsLang::tool_get_text("studyup_testimonials9"); ?>
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                          <h3><?php echo toolsLang::tool_get_text("studyup_testimonials10"); ?></h3>
                          <h4><?php echo toolsLang::tool_get_text("studyup_testimonials11"); ?></h4>
                      </div>
                  </div><!-- End testimonial item -->


                  <div class="swiper-slide">
                      <div class="testimonial-item">
                          <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              <?php echo toolsLang::tool_get_text("studyup_testimonials12"); ?>
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                          <h3><?php echo toolsLang::tool_get_text("studyup_testimonials13"); ?></h3>
                          <h4><?php echo toolsLang::tool_get_text("studyup_testimonials14"); ?></h4>
                      </div>
                  </div><!-- End testimonial item -->


                  <div class="swiper-slide">
                      <div class="testimonial-item">
                          <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              <?php echo toolsLang::tool_get_text("studyup_testimonials15"); ?>
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                          <h3><?php echo toolsLang::tool_get_text("studyup_testimonials16"); ?></h3>
                          <h4><?php echo toolsLang::tool_get_text("studyup_testimonials17"); ?></h4>
                      </div>
                  </div><!-- End testimonial item -->


                  <div class="swiper-slide">
                      <div class="testimonial-item">
                          <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              <?php echo toolsLang::tool_get_text("studyup_testimonials18"); ?>
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                          <h3><?php echo toolsLang::tool_get_text("studyup_testimonials19"); ?></h3>
                          <h4><?php echo toolsLang::tool_get_text("studyup_testimonials20"); ?></h4>
                      </div>
                  </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
          <div class="container">

              <div class="section-title" data-aos="fade-left">
                  <h2><?php echo toolsLang::tool_get_text("studyup_portfolio1"); ?></h2>
              </div>

              <div class="row" data-aos="fade-up" data-aos-delay="100">
                  <div class="col-lg-12 d-flex justify-content-center">
                      <ul id="portfolio-flters">
                          <li data-filter="*" class="filter-active"><?php echo toolsLang::tool_get_text("studyup_portfolio2"); ?></li>
                          <li data-filter=".filter-app"><?php echo toolsLang::tool_get_text("studyup_portfolio3"); ?></li>
                          <li data-filter=".filter-card"><?php echo toolsLang::tool_get_text("studyup_portfolio4"); ?></li>
                          <li data-filter=".filter-web"><?php echo toolsLang::tool_get_text("studyup_portfolio5"); ?></li>
                      </ul>
                  </div>
              </div>

              <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                          <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <!--<h4>App 1</h4>
                              <p>App</p>-->
                              <div class="portfolio-links">
                                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-camera"></i></a>
                                  <!--<a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>-->
                                  <!--<a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>-->
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                      <div class="portfolio-wrap">
                          <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <div class="portfolio-links">
                                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-camera"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                          <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <div class="portfolio-links">
                                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-camera"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                      <div class="portfolio-wrap">
                          <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <div class="portfolio-links">
                                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-camera"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                      <div class="portfolio-wrap">
                          <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <div class="portfolio-links">
                                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-camera"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                          <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <div class="portfolio-links">
                                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-camera"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>

          </div>
      </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="row">
          <div class="section-title" data-aos="fade-right">
             <h2><?php echo toolsLang::tool_get_text("studyup_equipe1"); ?></h2>
             <p><?php echo toolsLang::tool_get_text("studyup_equipe2"); ?></p>
          </div>
          <div class="col-lg-12">
            <div class="row">

              <div class="col-lg-4">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4><?php echo toolsLang::tool_get_text("studyup_equipe3"); ?></h4>
                    <span><?php echo toolsLang::tool_get_text("studyup_equipe4"); ?></span>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 ">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                  <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4><?php echo toolsLang::tool_get_text("studyup_equipe5"); ?></h4>
                    <span><?php echo toolsLang::tool_get_text("studyup_equipe6"); ?></span>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 ">
                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                  <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4><?php echo toolsLang::tool_get_text("studyup_equipe7"); ?></h4>
                    <span><?php echo toolsLang::tool_get_text("studyup_equipe8"); ?></span>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
          <div class="section-title">
              <h2><?php echo toolsLang::tool_get_text("studyup_contact1"); ?></h2>
              <p><?php echo toolsLang::tool_get_text("studyup_contact2"); ?></p>
          </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12">
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15573.98525169903!2d-7.96642488005113!3d12.61541239720434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe51cd8a6710e059%3A0x89bf9dabb0d7c4db!2sMagnambougou%2C%20Bamako!5e0!3m2!1sfr!2sml!4v1645461921649!5m2!1sfr!2sml" frameborder="0" allowfullscreen></iframe>
                <!--<iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>-->
            </div>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="info">
                        <i class="bi bi-geo-alt"></i>
                        <h4><?php echo toolsLang::tool_get_text("studyup_contact3"); ?></h4>
                        <p><?php echo toolsLang::tool_get_text("studyup_contact4"); ?></p>
                    </div>
                </div>
              <div class="col-lg-4 mt-4">
                <div class="info">
                  <i class="bi bi-envelope"></i>
                  <h4><?php echo toolsLang::tool_get_text("studyup_contact5"); ?></h4>
                  <p><a href="mailto:<?php echo toolsLang::tool_get_text("studyup_contact6"); ?>" style="color: black"><?php echo toolsLang::tool_get_text("studyup_contact6"); ?></a></p>
                </div>
              </div>
              <div class="col-lg-4 mt-4">
                <div class="info">
                  <i class="bi bi-phone"></i>
                  <h4><?php echo toolsLang::tool_get_text("studyup_contact7"); ?></h4>
                  <p><?php echo toolsLang::tool_get_text("studyup_contact8"); ?></p>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="<?php echo toolsLang::tool_get_text("studyup_contact9"); ?>" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo toolsLang::tool_get_text("studyup_contact10"); ?>" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="<?php echo toolsLang::tool_get_text("studyup_contact11"); ?>" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="<?php echo toolsLang::tool_get_text("studyup_contact12"); ?>" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading"><?php echo toolsLang::tool_get_text("studyup_contact13"); ?></div>
                        <div class="error-message"></div>
                        <div class="sent-message"><?php echo toolsLang::tool_get_text("studyup_contact14"); ?></div>
                    </div>
                    <div class="text-center"><button type="submit"><?php echo toolsLang::tool_get_text("studyup_contact15"); ?></button></div>
                </form>
            </div>



      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
          <div class="container">

              <div class="row">

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                      <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
                      <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="300">
                      <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="400">
                      <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="500">
                      <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
                      <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                  </div>

              </div>

          </div>
      </section><!-- End Clients Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('inc/footer.php') ?>

  <!-- ======= Modals ======= -->
  <?php include('inc/modals.php') ?>

  <!-- ======= Script ======= -->
  <?php include('inc/script.php') ?>

</body>

</html>
