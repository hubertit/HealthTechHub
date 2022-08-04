<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HealthTech Hub</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link href="assets/css/video-js.css" rel="stylesheet" />

    <style>
        .vjs-default-skin .vjs-big-play-button {
            left: 40% !important;
            top: 40% !important;
            width: 20% !important;
            height: 20% !important;
        }
    </style>

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        #introVideo {
            right: 0;
            top: -200;
            min-width: 100%;
            min-height: 100%;
        }

        #fade {
            display: none;
            position: fixed;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 100%;
            background-color: black;
            z-index: 1001;
            -moz-opacity: 0.8;
            opacity: .80;
            filter: alpha(opacity=80);
        }

        #light {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            max-width: 600px;
            max-height: 360px;
            margin-left: -300px;
            margin-top: -180px;
            border: 2px solid #FFF;
            background: #FFF;
            z-index: 1002;
            overflow: visible;
        }

        #boxclose {
            float: right;
            cursor: pointer;
            color: #fff;
            border: 1px solid #AEAEAE;
            border-radius: 3px;
            background: #222222;
            font-size: 31px;
            font-weight: bold;
            display: inline-block;
            line-height: 0px;
            padding: 11px 3px;
            position: absolute;
            right: 2px;
            top: 2px;
            z-index: 1002;
            opacity: 0.9;
        }

        .boxclose:before {
            content: "×";
        }

        #fade:hover~#boxclose {
            display: none;
        }

        .test:hover~.test2 {
            display: none;
        }
    </style>
</head>

<body>

    <?php require("templates/home-header.php"); ?>

    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <div class="machine-learning-hero machine-learning-hero-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-7">
                            <div class="machine-learning-hero-text wow move-up">

                                <div id="light">
                                    <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
                                    <video id="VisaChipCardVideo" width="600" controls>
                                        <source src="assets/video/presentation.mp4" type="video/mp4">
                                        <!--Browser does not support <video> tag -->
                                    </video>
                                </div>

                                <div id="fade" onClick="lightbox_close();"></div>


                                <h1 class="font-weight--reguler text-white mb-15"><span class="text-color-secondary">Welcome to</span> <br> HealthTech Hub</h1>
                                <p>We aim to help local authorities tackle the largest health challenges in low-income and underserved populations</p>
                                <div class="hero-button mt-30">
                                    <a href="#about" class="btn btn--secondary">Our Story</a>
                                    <div class="hero-popup-video">
                                        <a href="#" class="video-link">
                                            <div class="video-content">
                                                <div class="video-play">
                                                    <span class="video-play-icon">
                                                        <i class="fa fa-play"></i>
                                                    </span>
                                                </div>
                                                <div class="video-text" onclick="lightbox_open();"> Our Work</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- hero brand logo -->
                            <div class="hero-brand-wrap">
                                <div class="brand-logo">
                                    <a href="https://www.norrsken.org/eastafrica" target="_blank">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/partners/norrsken.png" width="150" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/partners/norrsken.png" width="150" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="brand-logo">
                                    <a href="https://www.theglobalfund.org/en/" target="_blank">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/partners/theglobal.png" width="150" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/partners/theglobal.png" width="150" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>

                                <div class="brand-logo">
                                    <a href="https://www.novartisfoundation.org/" target="_blank">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/partners/novartis.png" width="200" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/partners/novartis.png" width="200" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- hero brand logo -->
                        </div>
                    </div>
                </div>
            </div>
            <!--============ Infotechno Hero End ============-->
            <!--=========== fun fact Wrapper Start ==========-->
            <div class="fun-fact-wrapper bg-theme-three section-space--pt_40">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 wow move-up">
                            <div class="fun-fact--five text-center">
                                <div class="fun-fact__count counter">28</div>
                                <h6 class="fun-fact__text">Startups</h6>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow move-up">
                            <div class="fun-fact--five text-center">
                                <div class="fun-fact__count counter">15</div>
                                <h6 class="fun-fact__text">Partners</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 wow move-up">
                            <div class="fun-fact--five text-center">
                                <div class="fun-fact__count ">20+</div>
                                <h6 class="fun-fact__text">Experts</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 wow move-up">
                            <div class="fun-fact--five text-center">
                                <div class="fun-fact__count ">10+</div>
                                <h6 class="fun-fact__text">Mentors</h6>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 wow move-up">
                            <div class="fun-fact--five text-center">
                                <div class="fun-fact__count ">10</div>
                                <h6 class="fun-fact__text">Countries</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=========== fun fact Wrapper End ==========-->

            <!--=========== About Company Area Start ==========-->
            <div class="machine-learning-about-company-area machine-learning-about-bg section-space--ptb_120" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-left section-space--mb_30">
                                <h6 class="section-sub-title mb-20">ABOUT THE HUB</h6>
                                <h4 class="heading">The HealthTech Hub Africa is a <span class="text-color-primary">Health Tech accelerator</span> <br>

                                    based in Kigali, Rwanda. The hub, located at the and powered by
                                    <span class="text-color-primary">the Novartis Foundation</span>
                                </h4>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-5">
                            <div class="image-inner-video-section">
                                <div class="main-video-box video-popup">
                                    <video id="my-video" class="video-js" controls preload="auto" width="100%" height="auto" poster="assets/images/banners/n-popup.webp" data-setup="{}" style="width: 100% !important; height:auto !important">
                                        <source src="assets/video/opening.mp4" type="video/mp4" />
                                        <p class="vjs-no-js">
                                        </p>
                                    </video>



                                    <!-- Video -->
                                </div>
                                <div class="machine-learning-mark-text mt-30">
                                    Our location:
                                    Kigali, Rwanda

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 ms-auto mt-30">
                            <div class="machine-learning-about-content">
                                <div class="section-title mb-20">
                                    <h4>The HealthTech Hub Innovation Program</h4>
                                    <p class="dec-text mt-20">The HealthTech Hub Africa is a health tech accelerator based in Kigali, Rwanda. The hub, located at the Norrsken East Africa House and powered by the Novartis Foundation, hosts 30 startups from around Africa. For one full year, all the startups have unlimited access to the state-of-the-art space and are part of the HealthTech Hub Innovation Program, which includes capability-building opportunities, partner match-making with the public and private sectors, and mentorship and opportunities to test and validate their solutions in the public health system.
                                    </p>
                                    <div class="button-box mt-30">
                                        <a href="startups" class="ht-btn ht-btn-md">More About The Program</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=========== About Company Area End ==========-->


            <!--=========== fun fact Wrapper Start ==========-->
            <!-- <div class="fun-fact-wrapper bg-gray section-space--ptb_120">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-4 offset-lg-1">
                            <div class="modern-number-01 me-5">
                                <h2 class="heading"><span class="mark-text">38</span>Years’ Experience in IT</h2>
                                <h3 class="heading">more about our <span class="text-color-primary">Success Stories</span></h3>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 wow move-up">
                                    <div class="fun-fact--three text-center">
                                        <div class="fun-fact__count counter">1790</div>
                                        <h6 class="fun-fact__text">Account numbers</h6>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 wow move-up">
                                    <div class="fun-fact--three text-center">
                                        <div class="fun-fact__count counter">32</div>
                                        <h6 class="fun-fact__text">Finished projects</h6>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 wow move-up">
                                    <div class="fun-fact--three text-center">
                                        <div class="fun-fact__count counter">73</div>
                                        <h6 class="fun-fact__text">Happy clients</h6>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 wow move-up">
                                    <div class="fun-fact--three text-center">
                                        <div class="fun-fact__count counter">318</div>
                                        <h6 class="fun-fact__text">Blog posts</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div> -->
            <!--=========== fun fact Wrapper End ==========-->

            <!--====================  Conact us Section Start ====================-->
            <div class="contact-us-section-wrappaer processing-contact-us-bg section-space--ptb_120 mt-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-lg-6">
                            <div class="conact-us-wrap-one">
                                <h3 class="heading text-white">We aim to help local authorities tackle the largest health challenges in low-income and underserved populations.</h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-6">
                            <div class="contact-info-two text-center">
                                <div class="icon">
                                    <span class="fal fa-envelope"></span>
                                </div>
                                <h6 class="heading font-weight--reguler">Reach out now!</h6>
                                <!-- <h2 class="call-us"><a href="tel: "> </a></h2> -->
                                <div class="contact-us-button mt-20">
                                    <a href="#" class="btn btn--secondary">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Conact us Section End  ====================-->
            <!--====================  testimonial section ====================-->
            <!-- <div class="testimonial-slider-area bg-gray section-space--ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap text-center section-space--mb_40">
                                <h6 class="section-sub-title mb-20">Mentors</h6>
                                <h3 class="heading">What do mentors experience of mentoring start-ups at <span class="text-color-primary"> HealthTech Hub?</span></h3>
                            </div>
                            <div class="testimonial-slider">
                                <div class="swiper-container testimonial-slider__container">
                                    <div class="swiper-wrapper testimonial-slider__wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-slider__one wow move-up">

                                                <div class="testimonial-slider--info">
                                                    <div class="testimonial-slider__media">
                                                        <img src="assets/images/mentors/mentor.png" height="20" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="testimonial-slider__author">
                                                        <div class="testimonial-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <div class="author-info">
                                                            <h6 class="name">First Name</h6>
                                                            <span class="designation">Mentor</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-slider__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquet, libero id euismod aliquam, metus dui mattis erat, in molestie ipsum justo sit amet ligula. In hac habitasse platea dictumst.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination swiper-pagination-t01 section-space--mt_30"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--====================  End of testimonial section  ====================-->

            <!--========== Call to Action Area Start ============-->
            <!-- <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7">
                            <div class="cta-content md-text-center">
                            <h3 class="heading text-white">You need to have a conversation with us? Feel free, we are <span class="text-color-secondary"> here for you</span></h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-button-group--one text-center">
                                <a href="#" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                                <a href="#" class="btn btn--secondary  btn-two"><span class="btn-icon me-2"><i class="far fa-info-circle"></i></span> Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--========== Call to Action Area End ============-->

            <!--====================  brand logo slider area ====================-->
            <!-- <div class="brand-logo-slider-area section-space--ptb_60" style="background-color: #000000;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- brand logo slider --
                            <div class="brand-logo-slider__container-area">
                                <div class="swiper-container brand-logo-slider__container">
                                    <div class="swiper-wrapper brand-logo-slider__one">
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="assets/images/partners/norrsken.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="assets/images/partners/norrsken.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="assets/images/partners/theglobal.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="assets/images/partners/theglobal.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="assets/images/partners/novartis.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="assets/images/partners/novartis.png" class="img-fluid" alt="">
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--====================  End of brand logo slider area  ====================-->
        </div>
        <?php require("templates/home-footer.php"); ?>
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
    <script src="https://vjs.zencdn.net/7.20.1/video.min.js"></script>

    <script>
        window.document.onkeydown = function(e) {
            if (!e) {
                e = event;
            }
            if (e.keyCode == 27) {
                lightbox_close();
            }
        }

        function lightbox_open() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            window.scrollTo(0, 0);
            document.getElementById('light').style.display = 'block';
            document.getElementById('fade').style.display = 'block';
            lightBoxVideo.play();
        }

        function lightbox_close() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            document.getElementById('light').style.display = 'none';
            document.getElementById('fade').style.display = 'none';
            lightBoxVideo.pause();
        }
    </script>

</body>

</html>