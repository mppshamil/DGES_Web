<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
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
    
    
   <div class="completed_pro">
       <div class="container">
           <h1>COMPLETED PROJECTS</h1>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
       </div>
   </div>

    <div class="wrapper">
        <section class="recent-works">
            <div class="container">
                <h2>Completed Projects</h2>
                <span class="dot-dash dark">.</span>
                <div class="recent-works--nav">
                    <ul>
                        <li class="active" data-filter="*">Heavy Construction</li>
                        <li data-filter=".print">Design</li>
                        <!-- <li data-filter=".animation">Animation</li>
                        <li data-filter=".art">Art</li>
                        <li data-filter=".web">Web Design</li>
                        <li data-filter=".photo">Photography</li>
                        <li data-filter=".video">Video</li> -->
                    </ul>
                </div>
            </div>
            <div class="recent-works--items">
                <div class="recent-works--items__item web">
                    <a href="single-portfolio.html">
                        <img class="projectsImg" src="assets/img/services/1/watertankspiping.jpg" alt="">
                        <div class="inner-item">
                            <div>
                                <h4>T-Shirt Design</h4>
                                <p>art / t-shirt</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="recent-works--items__item print">
                    <a href="single-portfolio.html">
                        <img src="assets/img/4.jpg" alt="">
                        <div class="inner-item">
                            <div>
                                <h4>T-Shirt Design</h4>
                                <p>art / t-shirt</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="recent-works--items__item art">
                    <a href="single-portfolio.html">
                        <img src="assets/img/3.jpg" alt="">
                        <div class="inner-item">
                            <div>
                                <h4>T-Shirt Design</h4>
                                <p>art / t-shirt</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="recent-works--items__item web">
                    <a href="single-portfolio.html">
                        <img src="assets/img/4.jpg" alt="">
                        <div class="inner-item">
                            <div>
                                <h4>T-Shirt Design</h4>
                                <p>art / t-shirt</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="recent-works--items__item print">
                    <a href="single-portfolio.html">
                        <img src="assets/img/4.jpg" alt="">
                        <div class="inner-item">
                            <div>
                                <h4>T-Shirt Design</h4>
                                <p>art / t-shirt</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="recent-works--items__item web">
                    <a href="single-portfolio.html">
                        <img src="assets/img/3.jpg" alt="">
                        <div class="inner-item">
                            <div>
                                <h4>T-Shirt Design</h4>
                                <p>art / t-shirt</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="recent-works--items__item web">
                    <a href="single-portfolio.html">
                        <img src="assets/img/4.jpg" alt="">
                        <div class="inner-item">
                            <div>
                                <h4>T-Shirt Design</h4>
                                <p>art / t-shirt</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="recent-works--items__item art">
                    <a href="single-portfolio.html">
                        <img src="assets/img/3.jpg" alt="">
                        <div class="inner-item">
                            <div>
                                <h4>T-Shirt Design</h4>
                                <p>art / t-shirt</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

    <!-- footer -->
    <?php 
            include('components/footer.php');
    ?>

    <script src="js/vendor/jquery-3.1.0.min.js"></script>
    <script src="js/vendor/jquery.easing.min.js"></script>
    <script src="js/vendor/tether.js"></script>
    <script src="js/vendor/bootstrap.js"></script>
    <script src="js/vendor/slick.js"></script>
    <script src="js/vendor/isotope.pkgd.min.js"></script>
    <script src="js/main.js"></script>
    <script  src="js/index1.js"></script>
</body>
</html>
