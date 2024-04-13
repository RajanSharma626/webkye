<?php
include ("includes/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Faq - Webkye Digital Marketing Agency</title>
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

    <!--=== page-title-section start ===-->
    <!-- <section class="title-hero-bg widget-cover-bg" data-stellar-background-ratio="0.2">
      <div class="container">
        <div class="page-title text-center">
          <h1>FAQs</h1>
        </div>
      </div>
    </section> -->
    <!--=== page-title-section end ===-->

    <!--=== Accordions Start ======-->
    <section>
      <div class="container">
        <div class="row mb-40">
          <div class="col-sm-12 section-heading">
            <h2 class="text-uppercase wow fadeTop" data-wow-delay="0.1s">Frequently Asked Questions</h2>
            <h4 class="text-uppercase wow fadeTop" data-wow-delay="0.2s">- Get Your Questions Answered Here -</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8">
            <div class="panel-group accordion-color" id="accordion-color">

              <?php
              $faq = mysqli_query($conn, "SELECT * FROM `faq`");
              $no = 1;
              while ($row = mysqli_fetch_assoc($faq)) {
                ?>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-color"
                        href="#collapse<?php echo $no ?>">
                        <?php echo $row['question'] ?> </a></h3>
                  </div>
                  <div id="collapse<?php echo $no ?>"
                    class="panel-collapse collapse <?php if ($no == 1)
                      echo 'in';
                    else
                      echo ''; ?>">
                    <div class="panel-body"> <?php echo $row['answer'] ?> </div>
                  </div>
                </div>
                <?php $no++;
              } ?>

            </div>
          </div>
          <div class="col-sm-4">
            <form class="search-form" method="get">
              <input type="text" name="name" class="form-control search-field" id="search"
                placeholder="Type what it's your mind...">
              <button type="submit" class="icofont icofont-search-1 search-submit"></button>
            </form>
            <div class="banner-box help-bg mt-30">
              <div class="red-overlay-bg"></div>
              <div class="relative white-color text-center">
                <h4 class="text-uppercase">We're Here to Help!</h4>
                <p>We're friendly and available to chat. Reach out to us anytime and we'll happily answer your
                  questions.</p>
                <a href="contact-us" class="btn btn-outline-white btn-square mt-10">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=== Accordions End ======-->

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
  <script src="assets/js/validator.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/master.js"></script>
  <script src="assets/js/bootsnav.js"></script>
  <!--=== Javascript Plugins End ======-->

</body>

<!-- Mirrored from www.incognitothemes.com/scoda/faqs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Mar 2024 05:34:22 GMT -->

</html>