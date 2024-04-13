<?php
include ("includes/conn.php");

if (isset($_GET['url']) && $_GET['url']) {

  $url = $_GET['url'];

  $Portfolio = mysqli_query($conn, "SELECT * FROM `project` WHERE `seo_url` = '$url'");

  if (mysqli_num_rows($Portfolio) > 0) {
    $row = mysqli_fetch_assoc($Portfolio);
  } else {
    header("Location: /portfolios");
    exit;
  }
} else {
  header("Location: /portfolios");
  exit;
}
?>
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

              <div class="item"><img class="img-responsive" src="assets/images/portfolio/<?php echo $row['cover'] ?>"
                  alt="<?php echo $row['alt_text'] ?>" /></div>

              <?php
              $projectID = $row['id'];

              $moreimages = mysqli_query($conn, "SELECT * FROM `project_images` WHERE `project_id` = '$projectID'");
              while ($row2 = mysqli_fetch_assoc($moreimages)) {
                ?>
                <div class="item"><img class="img-responsive" src="assets/images/portfolio/<?php echo $row2['img'] ?>"
                    alt="<?php echo $row2['alt_text'] ?>" /></div>
              <?php } ?>
            </div>

            <h2><?php echo $row['title'] ?></h2>

            <p class="mt-20"><?php echo $row['long_desc'] ?></p>


            <?php
            $testimonial = mysqli_query($conn, "SELECT * FROM `testimonials` WHERE `project` = '$projectID'");
            if (mysqli_num_rows($testimonial) > 0) {
              $testimonialRow = mysqli_fetch_assoc($testimonial); ?>
              <div class="row-flex flex-center box-shadow pl-10 pr-10 pt-10 pb-10">
                <div class="col-2 " style="width: 100%;" >
                  <img class="img-circle" src="assets/images/review/<?php echo $testimonialRow['profile'] ?>"
                    alt="<?php echo $testimonialRow['name'] ?>" width="50" />
                </div>
                <div class="col-10" style="width: 90%;" >
                  <div class="text">
                    <?php echo $testimonialRow['comment'] ?> fggdfhd dhhdhdhhdgd gd Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ipsam perferendis aperiam non sit reiciendis accusantium ullam saepe repellat obcaecati expedita sint est cum dignissimos, dolorum qui quis velit. Fugit, amet. Id natus tempore ipsam libero quisquam, eveniet nobis mollitia magnam. Modi delectus error veniam, eveniet alias quos fugiat nemo?
                    </span>
                  </div>
                </div>
              </div>

            <?php } ?>


            <p class="mt-50"><a class="btn btn-color btn-rounded">Start a Project</a></p>

          </div>
          <!--=== Left Side End ===-->
          <div class="col-md-3 portfolio-right">
            <h3>Project Details</h3>
            <p> <?php echo $row['short_desc'] ?></p>
            <ul class="project-detail-box mt-20">
              <li><strong>Client :</strong><?php echo $row['client']; ?></li>
              <li><strong>Date :</strong>
                <?php
                $dateString = $row['date'];
                $timestamp = strtotime($dateString);
                $formattedDate = date("d M Y", $timestamp);

                echo $formattedDate;
                ?>
              </li>
              <li><strong>Service :</strong>
                <?php
                if ($row['cat'] == 'UI/UX') {
                  echo "UI/UX";
                } elseif ($row['cat'] == 'website') {
                  echo "Website Design & Development";
                } elseif ($row['cat'] == 'graphic') {
                  echo "Graphic Designing";
                } elseif ($row['cat'] == 'Videos') {
                  echo "Video Editing";
                }
                ?>
              </li>
              <?php if ($row['url'] != '') { ?>
                <li style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;">
                  <strong>Project URL</strong><a href="<?php echo $row['url']; ?>"><?php echo $row['url']; ?></a>
                </li>
              <?php } ?>


            </ul>
            <!-- <ul class="project-type-list">
              <li><i class="icofont icofont-diamond"></i>Design</li>
              <li><i class="icofont icofont-light-bulb"></i>Development</li>
              <li><i class="icofont icofont-layers"></i>Apps</li>
            </ul> -->

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