<?php
include_once("db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
    <meta charset="utf-8" />
    <link rel="icon" href="favicon.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/vendor/bootstrap.css" rel="stylesheet" />
    <link href="css/vendor/font-awesome.css" rel="stylesheet" />
    <link href="css/vendor/slick.css" rel="stylesheet" />
    <link href="css/vendor/slick-theme.css" rel="stylesheet" />
    <!-- <link href="css/vendor/odometer-theme-default.css" rel="stylesheet" /> -->
    <link href="css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style1.css">
	
    <!-- navbar ----------------->
    
    <!--Bootstrap CSS-->
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'> -->

    <!-- navbar end........... -->

</head>
<body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">

<script>AOS.init();
</script>


<div class="navigation-wrap bg-light start-header start-style" style="background-color: rgba(3, 3, 3, 0.712);">

    <?php 
        include('components/navbar.php');
    ?>

</div>
<?php
    $sql = "SELECT * FROM tbl_header_image where pageCat='services' ";
    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

    while ($record = mysqli_fetch_assoc($resultset)) {
    ?>

        <div class="intro-page" style="background-image: url('<?php echo $record['imagepath'];  ?>');">
        <?php } ?>
       <div class="container">
           <h1 style="color: white;">About Us</h1>
           <p>This is the Test Navigation Page</p>
       </div>
   </div>

    <div class="wrapper" >
        <section class="our-history">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="assets/img/dges_img/dges.1.jpg" alt="" />
                    </div>
                    <div class="col-md-7">
                        <h2>Our History</h2>
                        <p> We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. 
                            We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.</p>
                        <a href="#" class="button">View Portfolio</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-team">
            <div class="container">
                <h2>Our Team</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <span class="dot-dash dark">.</span>
                <div class="our-team--container">
                    <div class="our-team--item">
                        <div class="our-team--item__image">
                            <img src="assets/img/user.png" alt="" />
                        </div>
                        <div class="our-team--item__info">
                            <h3>S.D.Perera</h3>
                            <h5>UI/UX Designer</h5>
                        </div>
                    </div>
                    <div class="our-team--item">
                        <div class="our-team--item__image">
                            <img src="assets/img/user.png" alt="" />
                        </div>
                        <div class="our-team--item__info">
                            <h3>S.D.Perera</h3>
                            <h5>UI/UX Designer</h5>
                        </div>
                    </div>
                    <div class="our-team--item">
                        <div class="our-team--item__image">
                            <img src="assets/img/user.png" alt="" />
                        </div>
                        <div class="our-team--item__info">
                            <h3>S.D.Perera</h3>
                            <h5>UI/UX Designer</h5>
                        </div>
                    </div>
                    <div class="our-team--item">
                        <div class="our-team--item__image">
                            <img src="assets/img/user.png" alt="" />
                        </div>
                        <div class="our-team--item__info">
                            <h3>S.D.Perera</h3>
                            <h5>UI/UX Designer</h5>
                        </div>
                    </div>
                    <div class="our-team--item">
                        <div class="our-team--item__image">
                            <img src="assets/img/user.png" alt="" />
                        </div>
                        <div class="our-team--item__info">
                            <h3>S.D.Perera</h3>
                            <h5>UI/UX Designer</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-history-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Test Navigation</h2>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="assets/img/about1.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>2009-2011</h4>
                                        <h4 class="subheading">Test Navigation</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="assets/img/about2.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>March 2011</h4>
                                        <h4 class="subheading">Test Navigation</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="assets/img/about3.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>December 2012</h4>
                                        <h4 class="subheading">Test Navigation</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="assets/img/about4.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>July 2014</h4>
                                        <h4 class="subheading">Test Navigation</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <h4>Be Part
                                        <br>Of Our
                                        <br>Story!</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

      
    </div>


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
    <script  src="js/index1.js"></script>

    <!--Bootstrap Js-->
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <!--jQuery-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

</body>
</html>
