<?php require("configs/connection.php"); ?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>News</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.png">

    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


    <!-- <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div> -->

    <?php require("templates/page-header.php"); ?>
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title text-color-white">News</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div id="main-wrapper">
        <div class="site-wrapper-reveal">

            <!--====================  Blog Area Start ====================-->
            <div class="blog-pages-wrapper section-space--pt_100 section-space--pb_70">
                <div class="container masonry-activation">
                    <div class="row clearfix masonry-wrap">

                        <?php

                        $query = mysqli_query($connection, "SELECT * FROM posts ORDER BY post_id DESC");
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <div class="col-lg-4 col-md-6 masonary-item wow move-up">
                                <!--======= Single Blog Item Start ========-->
                                <div class="single-blog-item blog-masonry">
                                    <!-- Post Feature Start -->
                                    <div class="post-feature blog-thumbnail">
                                        <a href="post?read=<?php print $data["post_id"]; ?>">
                                            <img class="img-fluid" src="<?php print $data["post_image"]; ?>" alt="Blog Images">
                                        </a>
                                    </div>
                                    <!-- Post Feature End -->

                                    <!-- Post info Start -->
                                    <div class="post-info text-center">
                                        <div class="post-meta justify-content-center">
                                            <div class="post-date">
                                                <span class="far fa-calendar meta-icon"></span>
                                                <?php print $data["post_date"]; ?>
                                            </div>
                                            <div class="post-view">
                                                <span class="meta-icon far fa-eye"></span>
                                                0 views
                                            </div>
                                        </div>


                                        <h5 class="post-title font-weight--bold" style="text-transform:capitalize;">
                                            <a href="post?read=<?php print $data["post_id"]; ?>"><?php print $data["post_title"]; ?></a>
                                        </h5>

                                        <div class="post-excerpt mb-20">
                                            <p><?php print substr(htmlspecialchars_decode($data["post_details"]), 0, 300); ?></p>
                                        </div>

                                        <div class="post-read-more">
                                            <a href="post?read=<?php print $data["post_id"]; ?>" class="btn-read-more">
                                                Read more
                                                <i class="far fa-long-arrow-right ml-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Post info End -->
                                </div>
                                <!--===== Single Blog Item End =========-->
                            </div>

                        <?php } ?>



                    </div>
                </div>
            </div>
            <!--====================  Blog Area End  ====================-->

            <!--========== Call to Action Area Start ============-->
            <?php require("templates/calltoaction.php"); ?>
            <!--========== Call to Action Area End ============-->

        </div>

        <?php require("templates/page-footer.php"); ?>

    </div>

    <?php require("templates/mobile-header.php"); ?>

    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>