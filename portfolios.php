<?php
include ("includes/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Portfolio - Webkye</title>
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
          <div class="col-sm-8 section-heading">
            <h2 class="text-uppercase wow fadeTop" data-wow-delay="0.1s">Our Portfolio</h2>
            <h4 class="text-uppercase wow fadeTop" data-wow-delay="0.2s">- our recent works -</h4>
          </div>
        </div>
        <div class="row mt-30">
          <div class="portfolio-container text-center">
            <ul id="portfolio-filter" class="list-inline filter-transparent">
              <li class="active" data-group="all">All</li>
              <li data-group="website">Websites</li>
              <li data-group="graphic">Graphics</li>
              <li data-group="Videos">Videos</li>
              <li data-group="UI/UX">UI/UX</li>
            </ul>
            <ul id="portfolio-grid" class="three-column hover-two">
              <?php
              $sql = mysqli_query($conn, "SELECT * FROM `project` ORDER BY `id` DESC");
              while ($row = mysqli_fetch_assoc($sql)) {

                $class = ($row['cat'] == "Videos") ? "popup-youtube" : "alpha-lightbox";

                $path = ($row['cat'] == "Videos") ? $row['url'] : "assets/images/portfolio/" . $row['cover'];
                ?>
                <li class="portfolio-item gutter-space" data-groups='["all", "<?php echo $row['cat'] ?>"]'>
                  <div class="portfolio">
                    <div class="dark-overlay"></div>
                    <img src="assets/images/portfolio/<?php echo $row['cover'] ?>" alt="<?php echo $row['alt_text'] ?>">
                    <div class="portfolio-wrap">
                      <div class="portfolio-description">
                        <h3 class="portfolio-title"><?php echo $row['title'] ?></h3>
                        <a href="portfolio-detail?id=<?php echo $row['id'] ?>"
                          class="links"><?php echo $row['subtitle'] ?></a>
                      </div>
                      <!--=== /.project-info ===-->
                      <ul class="portfolio-details">
                        <li><a class="<?php echo $class ?> btn btn-success btn-sm font-18px" href="<?php echo $path ?>">
                            <i class="icofont-eye-alt"></i>
                          </a></li>
                        <li><a href="portfolio/<?php echo $row['seo_url'] ?>" class="btn btn-primary btn-sm"><i
                              class="icofont icofont-link-alt"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <!--=== /.portfolio ===-->
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="row mt-100">
          <p class="text-center"><a href="contact-us" class="btn btn-color btn-circle">Start a Project</a></p>
        </div>
      </div>
    </section>
    <!--=== Portfolio End ======-->

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
  <!-- <script src="assets/js/validator.js"></script> -->
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/master.js"></script>
  <script src="assets/js/bootsnav.js"></script>
  <!--=== Javascript Plugins End ======-->

</body>

</html>