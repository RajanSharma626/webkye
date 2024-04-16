<?php
include ("includes/conn.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>WebKye - Best Digital Marketing Agency in India</title>
  <?php include ("includes/head.php") ?>

</head>

<body>

  <!--=== Loader Start ======-->
  <div id="loader-overlay">
    <div class="loader-wrapper">
      <div class="WebKye-pulse"></div>
    </div>
  </div>
  <!--=== Loader End ======-->

  <!--=== Wrapper Start ======-->
  <div class="wrapper">

    <!--=== Header Start ======-->
    <?php include ("includes/navbar.php") ?>
    <!--=== Header End ======-->

    <!--== Hero Slider Start ==-->
    <section class="pt-0 pb-0" id="home">
      <div class="full-screen-bg hero-banner">
        <div class="hero-text-wrap">
          <div class="hero-text hero-text-sm">
            <div class="container text-left">
              <div class="row">
                <div class="pt-120 pb-100 pb-sm-50 pb-md-50 col-sm-12 col-md-6">
                  <h2 class="wow fadeInUp font-200" data-wow-delay="0.1s">Grow Your Business Digitally. <span
                      class="font-600">Reach, Engage, Succeed!</span></h2>
                  <p class="mt-30 wow fadeInUp lead" data-wow-delay="0.3s">Unlock the Power of Digital Marketing to
                    Reach Your Audience Like Never Before!</p>
                  <p class="text-left mt-30 wow fadeInUp app-btns" data-wow-delay="0.4s"><a href="contact-us"
                      class="btn btn-dark btn-circle">Let's Start!</a></p>
                </div>
                <div class="col-md-6 mt-80 mt-sm-0 mt-md-0 col-sm-12">
                  <div class="banner-img">
                    <img class="img-responsive" src="assets/images/home-bg-35.jpg" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!--== Hero Slider End ==-->

    <!--=== Who We Are Start ======-->
    <section class="first-ico-box">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 section-heading">
            <h2 class="wow fadeTop text-uppercase" data-wow-delay="0.1s">Services <span class="font-100">We Offer</span>
            </h2>
            <h4 class="text-uppercase source-font wow fadeTop" data-wow-delay="0.2s">Services Provided by <span
                class="text-dark">WebKye</span></h4>
          </div>
        </div>
        <div class="row row-flex mt-50 service-style-one">

          <?php
          $services = mysqli_query($conn, "SELECT * FROM `services`");
          while ($row = mysqli_fetch_assoc($services)) {
            ?>
            <div class="col-md-4 text-center mb-10" data-wow-delay="0.1s">
              <div class="feature-box">
                <i class="<?php echo $row['icon'] ?> font-50px gradient-color"></i>
                <h3>
                  <?php echo $row['heading'] ?>
                </h3>
                <p>
                  <?php echo $row['description'] ?>
                </p>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
    </section>
    <!--=== Who We Are End ======-->

    <!--=== About Us Start ======-->
    <section class="white-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section-heading text-left">
              <h2 class="wow fadeTop text-uppercase mb-0" data-wow-delay="0.1s">About <span
                  class="font-200">WebKye</span>
              </h2>
              <h4 class="text-uppercase source-font wow fadeTop" data-wow-delay="0.2s">Boost Your Business and Increase
                Sales with Us
              </h4>
            </div>
            <div class="info-desc wow fadeTop" data-wow-delay="0.4s">
              <p>Welcome to <b>Webkye</b>, where we turn digital dreams into reality! With clients worldwide and a range
                of
                services including <b>web development, graphic design, video editing, UI/UX design, email marketing,
                  SEO,
                  content writing, social media marketing, and optimization,</b> we're your go-to team for online
                success.</p>
              <p>
                What makes us stand out? We're a crew of creative teens who are obsessed with pushing boundaries and
                crushing it online. We're all about fresh ideas and killer results. Wanna join forces and skyrocket your
                brand in the digital world? We got this!
              </p>
            </div>

            <div class="row">
              <div class="col-md-12">
                <a href="about-us" class="btn btn-color btn-circle wow fadeTop" data-wow-delay="0.3s">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-img">
              <a class="popup-youtube" href="assets/images/video/about.mp4">
                <img class="img-responsive" src="assets/images/about-us.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=== About Us End ======-->

    <!--=== Portfolio Start ======-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-8">
                <div class="section-heading text-left">
                  <h2 class="wow fadeTop josefin-font text-uppercase" data-wow-delay="0.1s">Featured <span
                      class="font-100">Works</span></h2>
                </div>
              </div>
              <div class="col-md-4">
                <div class="WebKye-swiper pagination-style-01">
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="portfolio-style-two">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <?php
                  $portfolio = mysqli_query($conn, "SELECT * FROM `project` ORDER BY `id` DESC");
                  while ($row = mysqli_fetch_assoc($portfolio)) {
                    ?>
                    <div class="swiper-slide">
                      <div class="work-item-wrap">
                        <div class="work-item-thumbnail">
                          <a href="portfolio/<?php echo $row['seo_url'] ?>">
                            <img src="assets/images/portfolio/<?php echo $row['cover'] ?>" alt="25" />
                          </a>
                        </div>
                        <div class="work-item-info">
                          <h3 class="josefin-font"><?php echo $row['title'] ?></h3>
                          <p><?php echo $row['short_desc'] ?></p>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=== Portfolio End ======-->

    <!--=== Our Team Start ===-->
    <section class="white-bg team-style-02">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 section-heading">
            <h2 class="text-uppercase wow fadeTop" data-wow-delay="0.1s">Meet <span class="font-100">Our Team</span>
            </h2>
            <h4 class="text-uppercase source-font wow fadeTop" data-wow-delay="0.2s">- We Are Stronger -</h4>
          </div>
        </div>
        <div class="row mt-50">
          <?php
          $team = mysqli_query($conn, "SELECT * FROM `team` ORDER BY `rank` ASC");
          while ($row = mysqli_fetch_assoc($team)) {
            ?>
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeTop mb-10" data-wow-delay="0.1s">
              <div class="team-member-container gallery-image-hover border-radius-10"> <img
                  src="assets/images/team/<?php echo $row['profile'] ?>" class="img-responsive" alt="team-01">
                <div class="member-caption">
                  <div class="member-description text-center">
                    <div class="member-description-wrap">
                      <h4 class="member-title"><?php echo $row['name'] ?></h4>
                      <p class="member-subtitle"><?php echo $row['designation'] ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          <!--=== Member End ===-->
        </div>
      </div>
    </section>
    <!--=== Our Team End ===-->



    <!--=== Testimonails Start ===-->
    <section class="testimonial-style-02">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 section-heading">
            <h2 class="wow fadeTop josefin-font text-uppercase" data-wow-delay="0.1s">Our <span
                class="font-100">Testimonials</span></h2>
            <h4 class="text-uppercase source-font wow fadeTop" data-wow-delay="0.2s">- Happy Client Reviews -</h4>
          </div>
        </div>
        <div class="row">

          <div class="slick testimonial-carousel testimonial-style-01">

            <?php
            $testimonial = mysqli_query($conn, "SELECT * FROM `testimonials` ORDER BY `timestamp` DESC");

            while ($row = mysqli_fetch_assoc($testimonial)) {
              ?>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <!--=== Slide ===-->
                <div class="testimonial-item">
                  <div class="testimonial-content">
                    <div class="content-wrap">
                      <div class="info">
                        <div class="image" style="position:relative;">
                          <img class="img-responsive img-circle" src="assets/images/review/<?php echo $row['profile'] ?>"
                            alt="avatar-1" />
                          <img src="assets/images/review/<?php echo $row['country'] ?>" alt="country_flag"
                            style="position: absolute; bottom: -30px;right: 0; width: 30px;">
                        </div>
                        <div class="cite">
                          <h6 class="name">
                            <?php echo $row['name'] ?>
                          </h6>
                          <span class="position">
                            <?php echo $row['designation'] ?>
                          </span>
                        </div>
                      </div>
                      <div class="content">
                        <div class="text">
                          <i class="icofont icofont-quote-left font-20px default-color mt-20 mr-10"></i><span>
                            <?php echo $row['comment'] ?>
                          </span>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>

        </div>
      </div>
    </section>
    <!--=== Testimonails End ===-->

    <!--=== Contact Us Start ======-->
    <section class="contact-us" id="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-8 section-heading">
            <h2 class="text-uppercase">Contact Us</h2>
            <p><b>Elevate your digital marketing!</b> We'll craft a plan to reach your goals. Contact us to discuss
              website
              traffic, brand awareness, or conversions. Let's grow your business together!</p>
          </div>
        </div>
        <div class=" text-center font-30px pb-20">
          <a href="https://api.whatsapp.com/send?phone=8468027626" target="_blank" class="mr-10 ml-10"><i
              class="icofont-brand-whatsapp"></i></a>
          <a href="https://www.linkedin.com/company/webkye/" target="_blank" class="mr-10 ml-10"><i
              class="icofont-linkedin"></i></a>
          <a href="mailto:info.webkye@gmail.com" target="_blank" class="mr-10 ml-10"><i class="bi bi-envelope"></i></a>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <form id="contact-form" name="contact-form">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label class="sr-only" for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label class="sr-only" for="phone">Phone No.</label>
                    <input type="tel" name="phone" class="form-control" id="phone" placeholder="Your Phone Number"
                      required>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label class="sr-only" for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="form-group">
                    <label class="sr-only" for="subject">I'm Looking for...</label>
                    <select name="subject" class="form-control" id="subject" required>
                      <option value="" disabled selected>I'm Looking for...</option>
                      <option value="Web development">Web development</option>
                      <option value="UI/UX">UI/UX</option>
                      <option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)</option>
                      <option value="Graphic Designing">Graphic Designing</option>
                      <option value="Video Editing">Video Editing</option>
                      <option value="Content Writing">Content Writing</option>
                      <option value="Email Marketing">Email Marketing</option>
                      <option value="Social Media Marketing">Social Media Marketing</option>
                      <option value="Social Media Optimization">Social Media Optimization</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="sr-only" for="message">Message</label>
                <textarea name="message" class="form-control" id="message" rows="7" placeholder="Your Message"
                  required></textarea>
                <div class="help-block with-errors mt-20"></div>
              </div>
              <div class="text-center">
                <button type="submit" name="submit" class="btn btn-color btn-circle btn-animate"><span>Send Message <i
                      class="icofont icofont-simple-right"></i></span></button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>
    <!--=== Contact Us End ======-->

    <!--=== Clients Start ======-->
    <section class="pt-50 pb-50 white-bg">
      <div class="container">
        <div class="row">
          <div id="client-slider" class="owl-carousel">
            <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/1.png" alt="01" /> </div>
            <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/2.png" alt="02" /> </div>
            <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/3.png" alt="03" /> </div>
            <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/4.png" alt="04" /> </div>
            <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/5.png" alt="05" /> </div>
            <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/6.png" alt="06" /> </div>
            <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/7.png" alt="07" /> </div>
            <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/8.png" alt="08" /> </div>
            <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/9.png" alt="09" /> </div>
            <div class="client-logo"> <img class="img-responsive" src="assets/images/clients/10.png" alt="10" /> </div>
          </div>
        </div>
      </div>
    </section>
    <!--=== Clients End ======-->

    <!--=== Footer Start ======-->
    <?php include ("includes/footer.php") ?>
    <!--=== Footer End ======-->

    <!--=== GO TO TOP  ===-->
    <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
    <!--=== GO TO TOP End ===-->

  </div>
  <!--=== Wrapper End ======-->

  <!--=== Javascript Plugins ======-->
  <script src="assets/js/jquery.min.js"></script>
  <!--=== Javascript Plugins ======-->
  <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
  <script>
    $(document).ready(function () {
      $('#contact-form').submit(function (e) {
        e.preventDefault();
        var formData = $(this).serialize();

        // Send form data to PHP script for database insertion
        $.ajax({
          type: 'POST',
          url: 'ajax/process_form.php', // Specify the PHP file for form processing
          data: formData,
          success: function (response) {
            if (response == 'success') {
              // Show success message with SweetAlert2
              Swal.fire({
                icon: 'success',
                title: 'Thank you for reaching out to us!🌟',
                text: "We'll be in touch shortly!.",
              });
              $('#contact-form')[0].reset(); // Reset form after successful submission
            } else {
              // Show error message with SweetAlert2
              Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'Form submission failed. Please try again.',
              });
            }
          },
          error: function (xhr, status, error) {
            console.error(xhr.responseText);
            // Show error message with SweetAlert2
            Swal.fire({
              icon: 'error',
              title: 'Error!',
              text: 'An error occurred while processing your request. Please try again later.',
            });
          }
        });
      });
    });


  </script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/master.js"></script>
  <script src="assets/js/bootsnav.js"></script>
  <!--=== Javascript Plugins End ======-->

  <!-- Revolution js Files -->
  <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script src="revolution/js/revolution.extension.actions.min.js"></script>
  <script src="revolution/js/revolution.extension.carousel.min.js"></script>
  <script src="revolution/js/revolution.extension.kenburn.min.js"></script>
  <script src="revolution/js/revolution.extension.layeranimation.min.js"></script>
  <script src="revolution/js/revolution.extension.migration.min.js"></script>
  <script src="revolution/js/revolution.extension.navigation.min.js"></script>
  <script src="revolution/js/revolution.extension.parallax.min.js"></script>
  <script src="revolution/js/revolution.extension.slideanims.min.js"></script>
  <script src="revolution/js/revolution.extension.video.min.js"></script>
  <!--== Javascript Plugins End ==-->

  <script>
    var revapi1078,
      tpj = jQuery;

    tpj(document).ready(function () {
      /* ===== REVOLUTION SLIDER MAIN DEMO ===== */

      if (tpj("#rev_slider_landing_custom").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_landing_custom");
      } else {
        $("#rev_slider_landing_custom").show().revolution({
          sliderType: "standard",
          jsFileLocation: "revolution/js/",
          sliderLayout: "fullscreen",
          dottedOverlay: "none",
          delay: 9000,
          navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            mouseScrollReverse: "default",
            onHoverStop: "off",
            touch: {
              touchenabled: "on",
              swipe_threshold: 75,
              swipe_min_touches: 1,
              swipe_direction: "horizontal",
              drag_block_vertical: false
            }
            ,
            arrows: {
              style: "hades",
              enable: false,
              hide_onmobile: true,
              hide_under: 600,
              hide_onleave: true,
              hide_delay: 200,
              hide_delay_mobile: 1200,
              tmp: '<div class="tp-arr-allwrapper"><div class="tp-arr-imgholder"></div></div>',
              left: {
                h_align: "left",
                v_align: "center",
                h_offset: 30,
                v_offset: 0
              },
              right: {
                h_align: "right",
                v_align: "center",
                h_offset: 30,
                v_offset: 0
              }
            }
            ,
            bullets: {
              enable: false,
              hide_onmobile: false,
              hide_under: 600,
              style: "uranus",
              hide_onleave: true,
              hide_delay: 200,
              hide_delay_mobile: 1200,
              direction: "horizontal",
              h_align: "center",
              v_align: "bottom",
              h_offset: 0,
              v_offset: 30,
              space: 20,
              tmp: '<span class="tp-bullet-inner"></span>'
            }
          },
          viewPort: {
            enable: false,
            outof: "pause",
            visible_area: "80%",
            presize: false
          },
          responsiveLevels: [1240, 1024, 778, 480],
          visibilityLevels: [1240, 1024, 778, 480],
          gridwidth: [1240, 1024, 778, 480],
          gridheight: [600, 600, 500, 400],
          lazyType: "none",
          parallax: {
            type: "mouse",
            origo: "slidercenter",
            speed: 2000,
            levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
          },
          shadow: 0,
          spinner: "off",
          stopLoop: "off",
          stopAfterLoops: -1,
          stopAtSlide: -1,
          shuffle: "off",
          autoHeight: "off",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
          }
        });
      }

    });
  </script>

</body>

</html>