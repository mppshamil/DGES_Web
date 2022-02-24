<?php
include_once("db_connect.php");
?>



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
    <!-- <link href="css/vendor/odometer-theme-default.css" rel="stylesheet" /> -->
    <link href="css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style1.css">

    <link rel="stylesheet" href="bower_components/aos/dist/aos.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.3.4/dist/aos.css" rel="stylesheet">
    <script src="bower_components/aos/dist/aos.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.3.4/dist/aos.js"></script>

    <style>
        .card{
            max-height: 200px;
        }

        .card-title{
            color: #047fc7;
        }
    </style>

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
    $sql = "SELECT * FROM tbl_header_Image where pageCat='aboutus' ";
    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

    while ($record = mysqli_fetch_assoc($resultset)) {
    ?>

        <div class="intropageServices" style="background-image: url('<?php echo $record['imagepath'];  ?>');">
        <?php } ?>
    <div data-aos="fade-up" class="container">
        <h1 style="color: orange; width: 50%;">ABOUT US</h1>
        <h5 class="text-light">We are 40 years old and what is depicted in these pages will amply illustrate that we have been very busy.</h5>
    </div>
    </div>

<div class="intropageDirectors">
    <div data-aos="fade-up"  class="container">
        <h1 class="text-center pb-3" style="color: black;">WHO WE ARE?</h1>
        <h5 class="text-dark text-center">We are 40 years old and what is depicted in these pages will amply illustrate that we have been very busy.</h5>
        <h5 class="text-dark text-center">During this journey we have been tasked with some of the largest and most complex assignments in South Asian Heavy Engineering endeavours and technical sales, and we are proud to state that we have delivered our services and products beyond the expectations of our clients. Furthermore, and we have accomplished the objectives with distinction leaving unmistakable DGES quality stamp on all our accomplishments.</h5>
    </div>
</div>

<!-- vision mission -->
<section id="visionmission" style="background-color: rgb(230, 230, 230);">
    <div class="wrapper">
        <div class="">
            <div class="row">
                <div class="col-md-4" style="padding-left: 0px; color: rgba(0, 0, 0, 0.432);">
                    <img src="assets/img/dges_img/visionmision.jpg" alt="" />
                </div>
                <div data-aos="fade-up"  class="col-md-8">
                    <h2  class="pt-5 text-warning">VISION</h2>
                    <p class="text-justify" >To be the Premier Heavy Engineering Service Provider in South Asia.</p>

                    <h2 class="pt-4 text-warning">MISSION</h2>
                    <p class="text-justify" >Be the finest total engineering service provider in South Asia through design, fabrication, installation and maintenance in the mechanical, civic and electrical engineering sectors. We are committed to deliver the highest quality products and services, assuring value for money and timely completion surpassing customer expectations. We believe in competencies, commitments and spirit of our team to achieve sustainable growth in our business.We, as a responsible corporate citizen of global industrial community, strive to engage environmentally sound methods, while being socially responsible and fair in sharing benefits among all our stakeholders.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- awards & certifications -->
<section id="awards" class="our-history-about container pt-4 pb-4" style="background-color: rgb(14, 13, 13);">
    <div>
        <h2 class="text-center container font-weight-bold">AWARDS & CERTIFICATES</h2>
        <br>
        <h4 style="color: rgb(255, 208, 0);">ISO. TECHNO and CIDA</h4>
        <h4 style="color: rgb(255, 208, 0);">Member of National Chamber of Commerce (NCC) and Engineers Federation (EFC)</h4>
    </div>
</section>

<!-- history -->
<section id="history" class="our-history-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>OUR HISTORY</h2>
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
                                <br>Company!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- <section class="our-history" id="history">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="assets/img/dges_img/dges.1.jpg" alt=""/>
            </div>
            <div class="col-md-7">
                <h2>Our History</h2>
                <p> We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course. 
                    We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.</p>
                <a href="#" class="button">View Portfolio</a>
            </div>
        </div>
    </div>
</section> -->

<!-- Quality policy -->
<section id="qualityPolicy" style="background-color: rgb(250, 234, 234);">
    <div class="wrapper pt-4 pb-4">
        <div class="">
            <h2 class="text-center container font-weight-bold pb-4">POLICIES</h2>
                <div data-aos="fade-up"  class="col-md-12 container-fluid" >
                    <ul style="list-style-type: square;">
                        <li>We usually work with uncontrollable elements and circumstances. But, shall not allow such challenges to deter us from our course.</li>
                        <li>We offer heavy engineering together with an myriad of world – class ‘offshoot’ services to facilitate Sri Lankan engineering fraternity to bring their imaginations to life. Also we offer finest tools and material from global industry leaders, which we use in our very own projects and indubitably, our assortment of services and products will empower you to achieve the desired results.</li>
                        <li>The DGES’s strategy is based on innovation and adherence to the highest quality standards to every minute aspect of our business. Our engineering teams continually focus on introducing latest technological advances and explore avenues to provide ‘cutting – edge’ solutions and service excellence to our stakeholders.</li>
                        <li>We are not an ubiquitous hardware dealer. We work with you to customize the ideal solution with the finest industry standard tools and equipment to assist you to achieve your best.</li>
                        <li>We expect the demand for marine grade paints in addition to our sale of high – tech engineering products and advices for correct professional use, to grow strong with double digit growth in the coming years.</li>
                        <li>For us, doing the job well is not good enough. To succeed in today’s competitive market place, we have to be smart and also fast. While we maintain top engineering standards we have to think ‘outside the box’ and walk the extra mile to make the job monumental.</li>
                        <li>For that we have the imagination, commitment and the professional discipline, together with qualified and experienced engineers, technicians and ancillary staff to maintain the quality standards and the supply chain that stretch to the very limit.</li>
                        <li>Our work, when completed maintains perfect eco – balance and adds aesthetics to the natural ambiance.</li>
                        <li class="font-weight-bold text">Our dedication to perfection and uncompromising commitment is to deliver highest achievable quality and value for money in a timely and safe manner for engineering projects of any scale regardless of the complexity of the job or environment.</li>
                    </ul>
                </div>
                <br>
                <div class="row" style="align-items: center;">
                    <div class="col-md-6" style="color: rgba(0, 0, 0, 0.432); float: left;">
                        <img src="assets/img/dges_img/quality-policy.jpg" alt="" />
                    </div>
                    <div class="col-md-6" style="color: rgba(0, 0, 0, 0.432); float: right;">
                        <img src="assets/img/dges_img/ISO-full-2.jpg" alt="" />
                    </div>
                </div>
        </div>
    </div>
</section>


<!-- directors team -->
<section id="directors" style="background-color: rgb(216, 216, 216);">
    <div>
        <div class="pt-5 ">
            <h2 class="text-center font-weight-bold">BOARD OF DIRECTORS</h2> <hr class="container">
        </div>
        <h3 class="text-center " data-aos="fade-in"></h3>
        <div class="pt-5"></div>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/directors/DVA-new.jpg" alt="" />
                        <h3 class="text-center text-bold pt-2">D.V. Abeysinghe</h3>
                        <p class="text-center">Chairman</p>
                    </div>
                    <div data-aos="fade-up"  class="col-md-8">
                        <p class="text-justify" >During this journey we have been tasked with some of the largest and most complex assignments in South Asian Heavy Engineering endeavours and technical sales, and we are proud to state that we have delivered our services and products beyond the expectations of our clients.
                            <br><br> Submit your details and attach your CV by clicking the below button.
                            Thank you for taking the time to complete our online employment application. Please fill out the application below as completely as possible.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/directors/NMKBNayakaratne2.jpg" alt="" />
                        <h3 class="text-center text-bold pt-2">N. M. K. B. Nayakaratne</h3>
                        <p class="text-center">CEO/Managing Director</p>
                    </div>
                    <div data-aos="fade-up"  class="col-md-8">
                        <p class="text-justify" >During this journey we have been tasked with some of the largest and most complex assignments in South Asian Heavy Engineering endeavours and technical sales, and we are proud to state that we have delivered our services and products beyond the expectations of our clients.
                            <br><br> Submit your details and attach your CV by clicking the below button.
                            Thank you for taking the time to complete our online employment application. Please fill out the application below as completely as possible.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="wrapper pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/directors/MR.-H.-TANAKA-CHAIRMAN-web.jpg" alt="" />
                        <h3 class="text-center text-bold pt-2">Hideaki Tanaka</h3>
                        <p class="text-center">Director</p>
                    </div>
                    <div data-aos="fade-up"  class="col-md-8">
                        <p class="text-justify" >During this journey we have been tasked with some of the largest and most complex assignments in South Asian Heavy Engineering endeavours and technical sales, and we are proud to state that we have delivered our services and products beyond the expectations of our clients.
                            <br><br> Submit your details and attach your CV by clicking the below button.
                            Thank you for taking the time to complete our online employment application. Please fill out the application below as completely as possible.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- management team -->
<section id="intropageManagementT">
    <div>
        <!-- <div class="intropageManagementT">
            <div data-aos="fade-up"  class="container">
                <h1 style="color: black; width: 50%;">MANAGEMENT TEAM</h1>
                <p class="text-light">Our highly skilled work force, led from front by supremely qualified and vastly experienced engineers are ready to challenge any type of engineering, with classic standards of precision, ingenuity and vision.</p>
            </div>
        </div> -->
        <div class="pt-5 pb-5">
            <h2 class="text-center  font-weight-bold">KEY PERSONNEL</h2> 
        </div>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/managementTeam/contact-gm.jpg" alt="" />
                        <h3 class="text-center text-bold pt-2">T G Weerasinghe</h3>
                        <p class="text-center">General Manager</p>
                    </div>
                    <div data-aos="fade-up"  class="col-md-8">
                        <p class="text-justify" >During this journey we have been tasked with some of the largest and most complex assignments in South Asian Heavy Engineering endeavours and technical sales, and we are proud to state that we have delivered our services and products beyond the expectations of our clients.
                            <br><br> Submit your details and attach your CV by clicking the below button.
                            Thank you for taking the time to complete our online employment application. Please fill out the application below as completely as possible.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/managementTeam/contact-felix.jpg" alt="" />
                        <h3 class="text-center text-bold pt-2">F J L Felix</h3>
                        <p class="text-center">Asst. General Manager(Sales)</p>
                    </div>
                    <div data-aos="fade-up"  class="col-md-8">
                        <p class="text-justify" >During this journey we have been tasked with some of the largest and most complex assignments in South Asian Heavy Engineering endeavours and technical sales, and we are proud to state that we have delivered our services and products beyond the expectations of our clients.
                            <br><br> Submit your details and attach your CV by clicking the below button.
                            Thank you for taking the time to complete our online employment application. Please fill out the application below as completely as possible.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h3 class="text-center  pt-4" data-aos="fade-in"></h3>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/managementTeam/contact-lalith." alt="" />
                        <h3 class="text-center text-bold pt-2">Lalith Kumara</h3>
                        <p class="text-center">Finance and Admjpginistration Manager</p>
                    </div>
                    <div data-aos="fade-up"  class="col-md-8">
                        <p class="text-justify" >During this journey we have been tasked with some of the largest and most complex assignments in South Asian Heavy Engineering endeavours and technical sales, and we are proud to state that we have delivered our services and products beyond the expectations of our clients.
                            <br><br> Submit your details and attach your CV by clicking the below button.
                            Thank you for taking the time to complete our online employment application. Please fill out the application below as completely as possible.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/managementTeam/contact-gihan-bandara.jpg" alt="" />
                        <h3 class="text-center text-bold pt-2">Gihan Bandara</h3>
                        <p class="text-center">Engineering Manager (MP)</p>
                    </div>
                    <div data-aos="fade-up"  class="col-md-8">
                        <p class="text-justify" >During this journey we have been tasked with some of the largest and most complex assignments in South Asian Heavy Engineering endeavours and technical sales, and we are proud to state that we have delivered our services and products beyond the expectations of our clients.
                            <br><br> Submit your details and attach your CV by clicking the below button.
                            Thank you for taking the time to complete our online employment application. Please fill out the application below as completely as possible.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div></div>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/managementTeam/contact-atapattu.jpg" alt="" />
                        <h3 class="text-center text-bold pt-2">A M D B Atapattu</h3>
                        <p class="text-center">Engineering Manager (ME)</p>
                    </div>
                    <div data-aos="fade-up"  class="col-md-8">
                        <p class="text-justify" >During this journey we have been tasked with some of the largest and most complex assignments in South Asian Heavy Engineering endeavours and technical sales, and we are proud to state that we have delivered our services and products beyond the expectations of our clients.
                            <br><br> Submit your details and attach your CV by clicking the below button.
                            Thank you for taking the time to complete our online employment application. Please fill out the application below as completely as possible.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/managementTeam/nishantha.jpg" alt="" />
                        <h3 class="text-center text-bold pt-2">Nishantha Senavirathne</h3>
                        <p class="text-center">Engineering Manager (CE)</p>
                    </div>
                    <div data-aos="fade-up"  class="col-md-8">
                        <p class="text-justify" >During this journey we have been tasked with some of the largest and most complex assignments in South Asian Heavy Engineering endeavours and technical sales, and we are proud to state that we have delivered our services and products beyond the expectations of our clients.
                            <br><br> Submit your details and attach your CV by clicking the below button.
                            Thank you for taking the time to complete our online employment application. Please fill out the application below as completely as possible.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/managementTeam/contact-kolitha.jpg" alt="" />
                        <h3 class="text-center text-bold pt-2">Kolitha Rathnapriya</h3>
                        <p class="text-center">Engineering Manager (CP)</p>
                    </div>
                    <div data-aos="fade-up"  class="col-md-8">
                        <p class="text-justify" >During this journey we have been tasked with some of the largest and most complex assignments in South Asian Heavy Engineering endeavours and technical sales, and we are proud to state that we have delivered our services and products beyond the expectations of our clients.
                            <br><br> Submit your details and attach your CV by clicking the below button.
                            Thank you for taking the time to complete our online employment application. Please fill out the application below as completely as possible.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/managementTeam/bandara.jpg" alt="" />
                        <h3 class="text-center text-bold pt-2">H M P R Bandara</h3>
                        <p class="text-center">Engineering Consultant / (QHSE) Manager (CP)</p>
                    </div>
                    <div data-aos="fade-up"  class="col-md-8">
                        <p class="text-justify" >During this journey we have been tasked with some of the largest and most complex assignments in South Asian Heavy Engineering endeavours and technical sales, and we are proud to state that we have delivered our services and products beyond the expectations of our clients.
                            <br><br> Submit your details and attach your CV by clicking the below button.
                            Thank you for taking the time to complete our online employment application. Please fill out the application below as completely as possible.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="wrapper pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/img/managementTeam/WF-e1504502067984.jpg" alt="" />
                        <h3 class="text-center text-bold pt-2">Wasantha Fernando</h3>
                        <p class="text-center">Technical Sales Manager</p>
                    </div>
                    <div data-aos="fade-up"  class="col-md-8">
                        <p class="text-justify" >During this journey we have been tasked with some of the largest and most complex assignments in South Asian Heavy Engineering endeavours and technical sales, and we are proud to state that we have delivered our services and products beyond the expectations of our clients.
                            <br><br> Submit your details and attach your CV by clicking the below button.
                            Thank you for taking the time to complete our online employment application. Please fill out the application below as completely as possible.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
    <br>
    <?php 
            include('components/footer.php');
    ?>

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
