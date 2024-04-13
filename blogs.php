<?php
include ("includes/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Our Blogs - WebKye</title>
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

    <!--=== Blogs Start ======-->
    <section class="pt-100 pb-100">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 section-heading">
            <h2 class="text-uppercase wow fadeTop" data-wow-delay="0.1s">Our Blogs</h2>
            <h4 class="text-uppercase wow fadeTop" data-wow-delay="0.2s">- Checkout Latest News Updates & Articles -
            </h4>
          </div>
        </div>
        <div class="row mt-30">
          <div id="blogMasonry">
            <?php
            $blogs = mysqli_query($conn, "SELECT * FROM `blogs` ORDER BY `id`");
            while ($row = mysqli_fetch_assoc($blogs)) {
              ?>
              <div class="col-xs-12 col-sm-6 col-md-4 blog-masonry-item">
                <div class="post">
                  <div class="post-img"> <img class="img-responsive" src="assets/images/post/<?php echo $row['cover'] ?>"
                      alt="" /> </div>
                  <div class="post-info">
                    <h3><a href="blog-grid.html"><?php echo $row['title'] ?></a></h3>
                    <h6><?php
                    $dateString = $row['timestamp'];
                    $timestamp = strtotime($dateString);
                    $formattedDate = date("F j, Y", $timestamp);

                    echo $formattedDate;
                    ?></h6>
                    <p><?php  echo $row['short_desc'] ?></p>
                    <a class="readmore light-color" href="blog/<?php echo $row['seo_url'] ?>"><span>Read More</span></a>
                  </div>
                </div>
              </div>
              <!--=== Post End ===-->
            <?php } ?>

          </div>
        </div>
      </div>
    </section>
    <!--=== Blogs End ======-->

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

<!-- Mirrored from www.incognitothemes.com/scoda/blog-masonry.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Mar 2024 05:34:26 GMT -->

</html>