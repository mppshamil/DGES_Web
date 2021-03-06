<?php
include_once("db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>DGES Web</title>
    <meta charset="utf-8" />
    <link rel="icon" href="favicon.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/vendor/bootstrap.css" rel="stylesheet" />
    <link href="css/vendor/font-awesome.css" rel="stylesheet" />
    <link href="css/vendor/slick.css" rel="stylesheet" />
    <link href="css/vendor/slick-theme.css" rel="stylesheet" />
    <link href="css/vendor/odometer-theme-default.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="bower_components/aos/dist/aos.css">
    <link rel="stylesheet" href="assets/flaticon/font/flaticon.css" >

    <script src="bower_components/aos/dist/aos.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.3.4/dist/aos.js"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.3.4/dist/aos.css" rel="stylesheet">


    <style>
        .carousel .media {
            position: relative;
            padding: 0 0 0 20px;
        }

        .carousel .media img {
            width: 75px;
            height: 75px;
            display: block;
            border-radius: 50%;
        }

        .carousel .testimonial-wrapper {
            padding: 0 10px;
        }

        .carousel .testimonial {
            color: #808080;
            position: relative;
            padding: 15px;
            background: #f1f1f1;
            border: 1px solid #efefef;
            border-radius: 3px;
            margin-bottom: 15px;
        }

        .carousel .testimonial::after {
            content: "";
            width: 15px;
            height: 15px;
            display: block;
            background: #f1f1f1;
            border: 1px solid #efefef;
            border-width: 0 0 1px 1px;
            position: absolute;
            bottom: -8px;
            left: 46px;
            transform: rotateZ(-46deg);
        }

        .carousel .star-rating li {
            padding: 0 2px;
        }

        .carousel .star-rating i {
            font-size: 16px;
            color: #ffdc12;
        }

        .carousel .overview {
            padding: 3px 0 0 15px;
        }

        .carousel .overview .details {
            padding: 5px 0 8px;
        }

        .carousel .overview b {
            text-transform: uppercase;
            color: #bca41a;
        }

        .carousel .carousel-indicators {
            bottom: -70px;
        }

        .carousel-indicators li,
        .carousel-indicators li.active {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin: 1px 2px;
            box-sizing: border-box;
        }

        .carousel-indicators li {
            background: #e2e2e2;
            border: 4px solid #fff;
        }

        .carousel-indicators li.active {
            color: #fff;
            background: #1abc9c;
            border: 5px double;
        }


        /* stats */
        .fact {
            position: relative;
            width: 100%;
            /* padding: 45px 0; */
        }

        .fact .col-6 {
            display: flex;
            align-items: flex-start;
        }

        .fact .fact-icon {
            position: relative;
            margin: 7px 15px 0 15px;
            width: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fact .fact-icon [class^="flaticon-"]::before {
            margin: 0;
            font-size: 60px;
            line-height: 60px;
            background-image: linear-gradient(#ffffff, #fdbe33);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .fact .fact-right .fact-icon [class^="flaticon-"]::before {
            background-image: linear-gradient(#ffffff, #030f27);
        }

        .fact .fact-left,
        .fact .fact-right {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .fact .fact-text h2 {
            font-size: 35px;
            font-weight: 700;
        }

        .fact .fact-text p {
            margin: 0;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .fact .fact-left {
            color: #fdbe33;
            background: #000000;
        }

        .fact .fact-right {
            color: #030f27;
            background: #fdba28;
        }

        .fact .fact-left h2 {
            color: #fdbe33;
        }

    </style>

    <!-- navbar ----------------->

    <!--Bootstrap CSS-->
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'> -->
    <!-- navbar end........... -->

</head>

<body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">

    <script>
        AOS.init();
    </script>

    <div class="navigation-wrap bg-light start-header start-style" style="background-color: rgba(3, 3, 3, 0.712);">
        <?php
        include('components/navbar.php');
        ?>
    </div>

    <?php
    // $sql = "SELECT * FROM tbl_home_page  ";
    // $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));

    // while( $record = mysqli_fetch_assoc($resultset)) {
    ?>

    <?php
    $sql = "SELECT * FROM tbl_home_page  ";
    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

    while ($record = mysqli_fetch_assoc($resultset)) {
    ?>


        <div class="home-slider">
            <div class="home-slider--wrapper">
                <div>
                    <!-- <div class="home-slider--wrapper__inner" style="background-image: url('assets/img/dges_img/home1.jpg') ;float: left;width: 100%;"> -->
                    <div class="home-slider--wrapper__inner" style="background-image: url('<?php echo $record['slide1'];  ?>') ;float: left;width: 100%;">

                        <div class="container" >
                            <h3></h3>
                            <h2 data-aos="fade-up">Welcome To Dockyard General Engineering Services</h2>
                            <span class="dot-dash">.</span>
                            <p data-aos="fade-up">We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.</p>
                            <div class="slider-buttons">
                                <!-- <a href="#" class="button">Services</a> -->
                                <a href="#" class="button button-w">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="home-slider--wrapper__inner" style="background-image: url('<?php echo $record['slide2'];  ?>');">

                        <!-- <div class="home-slider--wrapper__inner" style="background-image: url('assets/img/dges_img/home2.jpg');"> -->

                        <div class="container">
                            <h3>Our clients are our first priority</h3>
                            <h2>Welcome To Dockyard General Engineering Services</h2>
                            <span class="dot-dash">.</span>
                            <p>We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course.</p>
                            <div class="slider-buttons">
                                <a href="#" class="button button-w">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <!-- <div class="home-slider--wrapper__inner" style="background-image: url('assets/img/dges_img/home3.jpg');"> -->
                    <div class="home-slider--wrapper__inner" style="background-image: url('<?php echo $record['slide3'];  ?>');">

                        <div class="container">
                            <h3>Our clients are our first priority</h3>
                            <h2>Welcome To Dockyard General Engineering Services</h2>
                            <span class="dot-dash">.</span>
                            <p>We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course.</p>
                            <div class="slider-buttons">
                                <!-- <a href="#" class="button">Get Started Now</a> -->
                                <a href="#" class="button button-w">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-slider--nav">
                <div class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                <div class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            </div>
            <div class="home-slider--anchor">
                <span><i class="" aria-hidden="true"><img src="assets/img/dges_img/dgeslogoonly.png"/></i></span>
            </div>
        </div>
        
        <br>

        <div data-aos="fade-left">
        </div>

        <section class="our-history">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12" data-aos="fade-right">
                        <img src="assets/img/dges_img/news-1-CA-2.jpg" alt="" />
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="300">
                        <h3 style="font-weight: bolder;">25 Years Experienced</h3>
                        <p class="text-justify">We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course.
                            We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.
                        </p>
                        <a href="aboutus.php" class="button">More Info</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- stats Start -->
        <div class="fact">
            <div class="">
                <div class="row counters">
                    <div class="col-md-6 fact-left wow slideInLeft" data-aos="fade-right">
                        <div class="row">
                            <div class="col-6">
                                <div class="fact-icon">
                                    <i class="flaticon-worker"></i>
                                </div>
                                <div class="fact-text">
                                    <h2 data-toggle="counter-up">550</h2>
                                    <p>Expert Workers</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fact-icon">
                                    <i class="flaticon-building"></i>
                                </div>
                                <div class="fact-text">
                                    <h2 data-toggle="counter-up">140</h2>
                                    <p>Happy Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 fact-right wow slideInRight" data-aos="fade-left">
                        <div class="row">
                            <div class="col-6">
                                <div class="fact-icon">
                                    <i class="flaticon-address"></i>
                                </div>
                                <div class="fact-text">
                                    <h2 data-toggle="counter-up">159</h2>
                                    <p>Completed Projects</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fact-icon">
                                    <i class="flaticon-crane"></i>
                                </div>
                                <div class="fact-text">
                                    <h2 data-toggle="counter-up">12</h2>
                                    <p>Running Projects</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->

        <!-- projects -->
        <section class="our-blog">
            <div class="container">
                <h2>We Provide Services</h2>
                <span class="dot-dash dark">.</span>
            </div>
            <div class="our-blog--container">
                <div class="our-blog--item"  data-aos="fade-left">
                    <div class="our-blog--item__image">
                        <a href="single.html">
                            <img src="assets/img/MechanicalProjects/completed/Ansell Lanka Latext Tank/IMG_20170531_142003.jpg" alt="">
                        </a>
                    </div>
                    <div class="our-blog--item__text left">
                        <h3>General Infrastructure</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's standard dummy text ever since the 1500s, an unknown printer took a galley of type a scrambled it to make a type specimen book.</p>
                        <a href="single.html">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="our-blog--item" data-aos="fade-right">
                    <div class="our-blog--item__image">
                        <a href="single.html">
                            <img src="assets/img/Project Photos - completed/02/IMG_20190406_100343.jpg" alt="">
                        </a>
                    </div>
                    <div class="our-blog--item__text left">
                        <h3>Irrigation</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's standard dummy text ever since the 1500s, an unknown printer took a galley of type a scrambled it to make a type specimen book.</p>
                        <a href="single.html">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="our-blog--item" data-aos="fade-left">
                    <div class="our-blog--item__text right">
                        <h3>Petrochemical</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's standard dummy text ever since the 1500s, an unknown printer took a galley of type a scrambled it to make a type specimen book.</p>
                        <a href="single.html">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="our-blog--item__image">
                        <a href="single.html">
                            <img src="assets/img/MechanicalProjects/completed/Ceylon Oxygen/DSC_0320.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="our-blog--item" data-aos="fade-right">
                    <div class="our-blog--item__text right">
                        <h3>Power and Energy</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's standard dummy text ever since the 1500s, an unknown printer took a galley of type a scrambled it to make a type specimen book.</p>
                        <a href="single.html">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="our-blog--item__image">
                        <a href="single.html">
                            <img src="assets/img/Project Photos - completed/04/IMG_20181031_120823(1).jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- partners -->
        <!-- <section class="partners">
            <div class="container">
                <h2>Partners</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <span class="dot-dash dark">.</span>
                <div class="partners--container">
                    <div class="partners--item">
                        <div class="partners--item__image">
                            <img src="assets/img/partner1.png" alt="">
                        </div>
                    </div>
                    <div class="partners--item">
                        <div class="partners--item__image">
                            <img src="assets/img/partner1.png" alt="">
                        </div>
                    </div>
                    <div class="partners--item">
                        <div class="partners--item__image">
                            <img src="assets/img/partner1.png" alt="">
                        </div>
                    </div>
                    <div class="partners--item">
                        <div class="partners--item__image">
                            <img src="assets/img/partner1.png" alt="">
                        </div>
                    </div>
                    <div class="partners--item">
                        <div class="partners--item__image">
                            <img src="assets/img/partner1.png" alt="">
                        </div>
                    </div>
                    <div class="partners--item">
                        <div class="partners--item__image">
                            <img src="assets/img/partner1.png" alt="">
                        </div>
                    </div>
                    <div class="partners--item">
                        <div class="partners--item__image">
                            <img src="assets/img/partner1.png" alt="">
                        </div>
                    </div>
                    <div class="partners--item">
                        <div class="partners--item__image">
                            <img src="assets/img/partner1.png" alt="">
                        </div>
                    </div>
                    <div class="partners--item">
                        <div class="partners--item__image">
                            <img src="assets/img/partner1.png" alt="">
                        </div>
                    </div>
                    <div class="partners--item">
                        <div class="partners--item__image">
                            <img src="assets/img/partner1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="case-study">
            <div class="container" data-aos="fade-right">
                <h2>Our Products</h2>
                <p class="text-light">Dockyard General Engineering Services (Pvt) Ltd comprises of Sales / Technical Marketing division which has been established to provide high quality Material and Equipment solutions for Engineering & Industrial sector in line with company’s business scope.
                    We provide Engineering & Industrial Product Solutions with world renowned brands of products including but not limited to: PPG / SIGMA corrosion control & asset protection coating solutions, GRACO Airless Sprayers & high performance coating application systems, ECOQUIP Vapor Abrasive (blasting) surface cleaning & preparation systems, KEMPPI inverter welding solutions of all forms.</p>
                <p class="text-light">We are not just a material or equipment supplier but a solution provider matching with industry standard and meeting exact need of our customers. We always concern about high quality, long term durability and after sales service of what we offer.</p>
                <!-- <span class="dot-dash dark">.</span> -->
            </div>
            <div class="container">
                <div class="case-study--sliders">
                    <div class="case-study--left" data-aos="fade-right" data-aos-delay="400">
                        <div class="case-study--left__textslider">
                            <div>
                                <!-- <div class="case-study--left__textslider__image"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></div> -->
                                <h3 class="text-center"><?php echo $record['productName1'];  ?></h3>
                                <p class="text-dark"><?php echo $record['productDes1'];  ?></p>
                            </div>
                            <div>
                                <!-- <div class="case-study--left__textslider__image"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></div> -->
                                <h3 class="text-center"><?php echo $record['productName2'];  ?></h3>
                                <p class="text-dark"><?php echo $record['productDes2'];  ?></p>
                            </div>
                            <div>
                                <!-- <div class="case-study--left__textslider__image"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></div> -->
                                <h3 class="text-center"><?php echo $record['productName3'];  ?></h3>
                                <p class="text-dark"><?php echo $record['productDes3'];  ?></p>
                            </div>
                        </div>
                        <div class="case-study--left__dots"></div>
                    </div>
                    <div class="case-study--right" data-aos="fade-left" data-aos-delay="400">
                        <div class="case-study--right__imageslider">
                            <div>
                                <img src="<?php echo $record['productImg1'];  ?>" alt="" />
                            </div>
                            <div>
                                <img src="<?php echo $record['productImg2'];  ?>" alt="" />
                            </div>
                            <div>
                                <img src="<?php echo $record['productImg3'];  ?>" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="statistics">
            <div class="container-fluid">
                <div class="statistics--item">
                    <div class="statistics--item__image"><i class="fa fa-users"></i></div>
                    <h3 class="odometer first1"><?php echo $record['employeeCount'];  ?></h3>
                    <h5>Employees</h5>
                </div>
                <div class="statistics--item">
                    <div class="statistics--item__image"><i class="fa fa-building"></i></div>
                    <h3 class="odometer second1"><?php echo $record['projectsCompleted'];  ?></h3>
                    <h5>Completed Projects</h5>
                </div>
                <div class="statistics--item">
                    <div class="statistics--item__image"><i class="fa fa-building"></i></div>
                    <h3 class="odometer third1"><?php echo $record['OngoingProjects'];  ?></h3>
                    <h5>Ongoing Projects</h5>
                </div>
                <div class="statistics--item">
                    <div class="statistics--item__image"><i class="fa fa-trophy"></i></div>
                    <h3 class="odometer fourth1"><?php echo $record['Awards'];  ?></h3>
                    <h5>Awards</h5>
                </div>
                <div class="statistics--item">
                    <div class="statistics--item__image"><i class="fa fa-info"></i></div>
                    <h3 class="odometer fifth1"><?php echo $record['Products'];  ?></h3>
                    <h5>Services</h5>
                </div>
            </div>
        </section> -->
    <?php } ?>


    <!-- <section class="get-started">
        <div class="container">
            <h2>Let's Get Started Now. It's FREE!</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a href="contact.html" class="button">Start Free Trial</a>
        </div>
    </section>  -->

    </div>
    <?php //}  
    ?>

    <!-- testimonials -->
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center pb-4">See What <b>Our Customers</b> Say About Us</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>


                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">

                                <?php

                                $sql = "SELECT * FROM tbl_testimonial  ";
                                $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
                                $count = mysqli_num_rows($resultset);

                                if ($count == 0) {
                                    echo "<br><br><center><h4>There are no Testimonials.</h4></center><br>";
                                } else {



                                    $k = 0;
                                    while ($record = mysqli_fetch_assoc($resultset)) {
                                        if ($k == 0) {
                                            // echo "<h1>No vacancies</h1>";
                                        }
                                        if ($k % 2 == 0) {
                                ?>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                            <?php

                                        }
                                        $k++;
                            ?>
                            <!-- Wrapper for carousel items -->

                            <div class="col-sm-6">
                                <div class="testimonial-wrapper">
                                    <div class="testimonial"><?php echo $record['Feedback'];  ?></div>
                                    <div class="media">
                                        <img src="<?php echo $record['Profile'];  ?>" class="mr-3" alt="">
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b><?php echo $record['Name'];  ?></b></div>
                                                <div class="details"><?php echo $record['Designation'];  ?></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php }
                                    if ($k % 2 != 0) {

                                    }
                                } ?>

                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <br><br>

    <!-- footer -->
    <?php
    include('components/footer.php');
    ?>




    <!-- <script type="text/javascript">
        window.odometerOptions = {
            format: '(,ddd)',
        };
    </script> -->
    <script src="js/vendor/jquery-3.1.0.min.js"></script>
    <script src="js/vendor/jquery.easing.min.js"></script>
    <script src="js/vendor/tether.js"></script>
    <script src="js/vendor/bootstrap.js"></script>
    <script src="js/vendor/slick.js"></script>
    <script src="js/vendor/isotope.pkgd.min.js"></script>
    <script src="js/vendor/odometer.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/index1.js"></script>

    <!--Bootstrap Js-->
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <!--jQuery-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script>
        // jQuery counterUp Statistics
        $('[data-toggle="counter-up"]').counterUp({
            delay: 10,
            time: 2000
        });
    </script>

</body>

</html>