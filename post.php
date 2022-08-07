<?php require("configs/connection.php"); 

$post = $_GET["read"];

$query = mysqli_query($connection,"SELECT * FROM posts WHERE post_id ='$post'")or die(mysqli_error($connection));
$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php print $data["post_title"]; ?></title>
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
                        <h2 class="breadcrumb-title text-white"><?php print $data["post_title"]; ?></h2>
                        <!-- breadcrumb-list start -->
                       
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->


    <div id="main-wrapper">
        <div class="site-wrapper-reveal">

            <!--====================  Blog Area Start ====================-->
            <div class="blog-pages-wrapper section-space--ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <!-- Post Feature Start -->
                            <div class="post-feature blog-thumbnail  wow move-up">
                                <img class="img-fluid" src="<?php print $data["post_image"]; ?>" width="100%" alt="Blog Images">
                            </div>
                            <!-- Post Feature End -->
                        </div>
                        <div class="col-lg-8 m-auto">
                            <div class="main-blog-wrap">
                                <!--======= Single Blog Item Start ========-->
                                <div class="single-blog-item  wow move-up">

                                    <!-- Post info Start -->
                                    <div class="post-info lg-blog-post-info">
                                        <div class="post-categories text-center">
                                            <!-- <a href="#"> Success Story, Tips </a> -->
                                        </div>

                                        <h3 class="post-title text-center">
                                            <a href="#">  <?php print $data["post_title"]; ?></a>
                                        </h3>

                                        <div class="post-meta mt-20 justify-content-center">
                                            <div class="post-author">
                                                <a href="#">
                                                    By <?php print $data["author"]; ?>
                                                </a>
                                            </div>
                                            <div class="post-date">
                                                <span class="far fa-calendar meta-icon"></span>
                                                <?php print $data["post_date"]; ?>
                                            </div>
                                            <div class="post-view">
                                                <span class="meta-icon far fa-eye"></span>
                                                0 views
                                            </div>
                                          
                                        </div>
                                        <style>
                                            .post-excerpt img{
                                                width: 100% !important;
                                                height: auto !important;
                                            }
                                        </style>
                                        <div class="post-excerpt mt-15">
                                            <p> <?php print htmlspecialchars_decode($data["post_details"]); ?></p>
                                        
                                        </div>
                                    </div>
                                    <!-- Post info End -->
                                </div>
                                <!--===== Single Blog Item End =========-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Blog Area End  ====================-->



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