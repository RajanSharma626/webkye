<!DOCTYPE html>
<html lang="en">

<head>

  <title>Portfolio Detail - Webkye</title>
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

    <!--=== Portfolio Start ======-->
    <section class="pt-100 pt-100">
      <div class="container">
        <div class="row">
          <div class="col-md-9 portfolio-left">
            <div class="portfolio-slider owl-carousel">
              <div class="item"><img class="img-responsive" src="assets/images/portfolio/single-portfolio-1.jpg"
                  alt="" /></div>
              <div class="item"><img class="img-responsive" src="assets/images/portfolio/single-portfolio-2.jpg"
                  alt="" /></div>
              <div class="item"><img class="img-responsive" src="assets/images/portfolio/single-portfolio-3.jpg"
                  alt="" /></div>
            </div>
            <h3>Project Details</h3>
            <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem risus, ullamcorper et
              cursus at, euismod fringilla nulla. Phasellus finibus vel ex quis blandit. Phasellus consequat nunc non
              laoreet sollicitudin. Praesent nec tincidunt erat. Ut lobortis interdum turpis. Mauris et pretium ex, in
              hendrerit felis. Integer vehicula ante eu mi luctus, vitae dictum ante pellentesque. Aliquam erat
              volutpat. Donec vitae turpis semper, lacinia est ut, dapibus justo.</p>
            <p class="mt-50"><a class="btn btn-color btn-rounded">Start a Project</a></p>
          </div>
          <!--=== Left Side End ===-->
          <div class="col-md-3 portfolio-right">
            <ul class="project-detail-box">
              <li><strong>Customer</strong>Alex John</li>
              <li><strong>Date</strong>18 Feb 2020</li>
              <li><strong>Website URL</strong><a href="#">www.yourdomain.com</a></li>
            </ul>
            <ul class="project-type-list">
              <li><i class="icofont icofont-diamond"></i>Design</li>
              <li><i class="icofont icofont-light-bulb"></i>Development</li>
              <li><i class="icofont icofont-layers"></i>Apps</li>
            </ul>
            <div class="post-controls">
              <div class="post-share">
                <ul>
                  <li> <a href="#"><i class="icofont icofont-facebook"></i></a> </li>
                  <li> <a href="#"><i class="icofont icofont-twitter"></i></a> </li>
                  <li> <a href="#"><i class="icofont icofont-linkedin"></i></a> </li>
                  <li> <a href="#"><i class="icofont icofont-behance"></i></a> </li>
                  <li> <a href="#"><i class="icofont icofont-pinterest"></i></a> </li>
                </ul>
              </div>
            </div>
            <p class="mt-30"> Quisque vel massa a neque fermentum aliquet. Ut vel ligula gravida, molestie mi sed,
              venenatis augue. Praesent sollicitudin sit amet ex sed ultrices.

              Curabitur lacinia non leo at dictum. Proin lacinia eros scelerisque nisi tempus, nec elementum lacus
              lacinia. Aenean quis ipsum nec purus rutrum faucibus. Quisque facilisis efficitur odio id porttitor. </p>
          </div>
          <!--=== Right Side End ===-->
        </div>
      </div>
    </section>
    <!--=== Portfolio End ======-->

    <!--=== Call to Action Start ======-->
    <section class="pt-50 pb-50 default-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="cta-heading-left">
              <p class="subtitle mt-20">careers</p>
              <h3>Let's write your story, together.</h3>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6">
            <div class="cta-heading-right">
              <p class="mt-20 content-text">We don't just tell our story, we co-author it with you. Partnering with us
                means having a seat at the table where your voice is valued and heard.</p>
              <p class="mt-50"><a href="contact-us" class="btn btn-rounded btn-white">Contact Us</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=== Call to Action End ======-->

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

</html>