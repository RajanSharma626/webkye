<?php
include ("includes/conn.php");
if (isset($_GET['url']) && $_GET['url']) {

    $url = $_GET['url'];

    $blog = mysqli_query($conn, "SELECT * FROM `blogs` WHERE `seo_url` = '$url'");

    if (mysqli_num_rows($blog) > 0) {
        $row = mysqli_fetch_assoc($blog);
    } else {
        header("Location: /blogs");
        exit;
    }
} else {
    header("Location: /blogs");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $row['title'] ?> | Webkye</title>
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
                    <div class="col-sm-10">
                        <h1 class="font-600 font-30px wow fadeTop" data-wow-delay="0.1s"><?php echo $row['title'] ?>
                        </h1>
                        <h5 class="wow fadeTop " data-wow-delay="0.1s">
                            <?php
                            $dateString = $row['timestamp'];
                            $timestamp = strtotime($dateString);
                            $formattedDate = date("F j, Y", $timestamp);

                            echo $formattedDate;
                            ?>
                        </h5>
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="blog-cover">
                        <img class="img-responsive"
                            src="assets/images/post/<?php echo $row['banner'] ?>"
                            alt="<?php echo $row['banner_alt_text'] ?>">
                        <h5 style="text-align: End;">Post By <b><a href="webkye.in" target="_blank"
                                    class="dark-color">Webkye</a> </b>
                        </h5>
                    </div>
                </div>
                <div class="row mt-30">
                    <?php
                    echo $row['blog'];
                    ?>
                </div>

                <div class="row mt-50">
                    <div class="col-sm-12 ">
                        <h3 class="wow fadeTop font-600 josefin-font text-uppercase mb-30" data-wow-delay="0.1s">
                            Recommended For You</h3>
                        <div id="blogMasonry">
                            <?php
                            $blogs = mysqli_query($conn, "SELECT * FROM `blogs` ORDER BY `id` LIMIT 3");
                            while ($row = mysqli_fetch_assoc($blogs)) {
                                ?>
                                <div class="col-xs-12 col-sm-6 col-md-4 blog-masonry-item">
                                    <div class="post">
                                        <div class="post-img"> <img class="img-responsive"
                                                src="assets/images/post/<?php echo $row['cover'] ?>" alt="<?php echo $row['cover_alt_text'] ?>" /> </div>
                                        <div class="post-info">
                                            <h3><a href="blog-grid.html"><?php echo $row['title'] ?></a></h3>
                                            <h6><?php
                                            $dateString = $row['timestamp'];
                                            $timestamp = strtotime($dateString);
                                            $formattedDate = date("F j, Y", $timestamp);

                                            echo $formattedDate;
                                            ?></h6>
                                            <p><?php echo $row['short_desc'] ?></p>
                                            <a class="readmore light-color"
                                                href="blog/<?php echo $row['seo_url'] ?>"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--=== Post End ===-->
                            <?php } ?>

                        </div>
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

</html>