<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact Us - Webkye</title>
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

    <!--=== Footer Start ======-->
    <?php include ("includes/footer.php") ?>
    <!--=== Footer End ======-->

    <!--=== GO TO TOP  ===-->
    <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
    <!--=== GO TO TOP End ===-->

  </div>
  <!--=== Wrapper End ======-->

  <!--=== Javascript Plugins ======-->
  <!--=== Javascript Plugins ======-->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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
  <script src="assets/js/validator.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/master.js"></script>
  <script src="assets/js/bootsnav.js"></script>
  <!--=== Javascript Plugins End ======-->

</body>

</html>