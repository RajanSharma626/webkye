<?php
include ("includes/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Services - WebKye</title>
  <?php include ("includes/head.php") ?>
</head>

<body>

  <!--=== Loader Start ======-->
  <div id="loader-overlay">
    <div class="loader-wrapper">
      <div class="scoda-pulse"></div>
    </div>
  </div>
  <!--=== Loader End ======-->

  <!--=== Wrapper Start ======-->
  <div class="wrapper">

    <!--=== Header Start ======-->
    <?php include ("includes/navbar.php") ?>
    <!--=== Header End ======-->

  <!--=== Our Services Start ======-->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 section-heading">
          <h2 class="text-uppercase wow fadeTop" data-wow-delay="0.1s">Our Services</h2>
          <h4 class="text-uppercase wow fadeTop" data-wow-delay="0.2s">- Design your presence -</h4>
        </div>
      </div>
      <div class="row mt-50 service-style-one">

        <?php
        $services = mysqli_query($conn, "SELECT * FROM `services`");
        while ($row = mysqli_fetch_assoc($services)) {
          ?>
          <div class="col-md-4 text-center wow fadeTop mb-10" data-wow-delay="0.1s">
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
  <!--=== Our Services End ======-->
  

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
  <section class="contact-us">
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

  <!--=== Call to Action Start ======-->
  <section class="pt-50 pb-50 dark-bg cta-block">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="cta-heading-left">
            <p class="subtitle mt-20">Let's Talk</p>
            <h3>Start a Project</h3>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6">
          <div class="cta-heading-right">
            <p class="mt-30 pull-right"><a href="contact-us" class="btn btn-circle btn-outline">Contact Us</a></p>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="cta-heading-right">
            <p class="mt-20 content-text">We don't just tell our story, we co-author it with you. Partnering with us
              means having a seat at <br> the table where your voice is valued and heard.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=== Call to Action Start ======-->

  <!-- ========== Form Submition Message ========== -->
  <div class="toast-container"></div>


  <!--=== Footer Start ======-->
  <?php include ("includes/footer.php") ?>
  <!--=== Footer End ======-->

  <!--=== GO TO TOP  ===-->
  <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
  <!--=== GO TO TOP End ===-->
  <!--=== Wrapper End ======-->

  <!--=== Javascript Plugins ======-->
  <script src="assets/js/jquery.min.js"></script>
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

</body>

</html>