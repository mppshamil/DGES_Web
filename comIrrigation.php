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
    <link href="css/vendor/odometer-theme-default.css" rel="stylesheet" />
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

  <!-- navigation -->
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
            <h1 style="color: white;">COMPLETED PROJECTS</h1>
            <!-- <p style="color: gold;">Ongoing Projects</p> -->
            <!-- <p>This is the Test Navigation Page</p> -->
        </div>
    </div>

    <?php

    //$sql = "SELECT * FROM tbl_projects where ProjectStatus='Completed' ";
    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
    $count = mysqli_num_rows($resultset);

    if ($count == 0) {
        echo "<br><br><br><br><br><br><br><br><center><h4>There are no completed projects.</h4></center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    } else {

        $k = 0;
        while ($record = mysqli_fetch_assoc($resultset)) {
            if ($k == 0) {
                // echo "<h1>No vacancies</h1>";
            }
            if ($k % 1 == 0) {
                // echo "</div>";
                echo "<br>";
                // echo "<div class='row'>";

            }
            $k++;
    ?>

    <div class="wrapper">

            <div class="">
                <!-- 22 -->
                <div class="row">
                    <div class="col">
                        <div class="single-portfolio">

                            <div class="row container pt-3" style="align-items: center;">
                                <div class="col-md-12">
                                    <h2 class="text-center">Construction Of Fushing Gate</h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/22/IMG_7074.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/22/IMG_7081.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/22/IMG_7140.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/22/IMG_7245.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/22/IMG_7263.JPG" alt="">
                                        </div>
                                    </div>
                                
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>Construction Of Fushing Gate</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: Ministry of Megapolis & Western Development Project.</span></h6>
                                        <!-- <?php echo $record['subDescription1'];?> -->
                                        </li>
                                        <li>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Year: 2020 - 2021
                                            </span>
                                        </h6>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Location: Colombo
                                            </span>
                                        </h6>
                                        
                                        <!-- <?php echo $record['subDescription2'];?> -->
                                        </li>
                                    </ul>
                                    <!-- <a href="#" class="button">Read More</a> -->
                                </div>
                            </div>
                            
                            <!-- Minipe Left Bank-->
                            <div class="row container pt-3" style="align-items: center;">
                                <div class="col-md-12">
                                    <h2 class="text-center">Minipe Left Bank</h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/MInipe Left Bank/WhatsApp Image 2022-02-14 at 11.24.22 AM.jpeg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/MInipe Left Bank/WhatsApp Image 2022-02-14 at 11.24.23 AM.jpeg" alt="">
                                        </div>
                                    </div>
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>EHABILITATION AND ELECTRIFICATION OF RADIAL GATES STRUCTURES AT 8 LOCATIONS AND IMPROVEMENTS TO CROSS REGULATOR STRUCTURES AT 3 LOCATIONS OF MLBC</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: MAHAWELI WATER SECURITY INVESTMENT PROGRAMME</span></h6>
                                        <!-- <?php echo $record['subDescription1'];?> -->
                                        </li>
                                        <li>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Year: 2018-2021
                                            </span>
                                        </h6>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Location:
                                            </span>
                                        </h6>
                                        <!-- <?php echo $record['subDescription2'];?> -->
                                        </li>
                                    </ul>
                                    <!-- <a href="#" class="button">Read More</a> -->
                                </div>
                            </div>
                            <hr>

                            <!-- Rajanganaya -->
                            <div class="row container pt-3" style="align-items: center;">
                                <div class="col-md-12">
                                    <h2 class="text-center">Rajanganaya</h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/Rajanganaya/DSC_7643.jpg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/Rajanganaya/DSC_7645.jpg" alt="">
                                        </div>
                                    </div>
                                
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>FABRICATION AND ERECTION OF 15 NOS RADIAL GATES AND STOP LOGS</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: IRRIGATION DEPARTMENT</span></h6>
                                        <!-- <?php echo $record['subDescription1'];?> -->
                                        </li>
                                        <li>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Year: 2016-2017
                                            </span>
                                        </h6>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Location: 
                                            </span>
                                        </h6>
                                        
                                        <!-- <?php echo $record['subDescription2'];?> -->
                                        </li>
                                    </ul>
                                    <!-- <a href="#" class="button">Read More</a> -->
                                </div>
                            </div>
                            <hr>

                        </div>
                    </div>
                </div>
               
                <hr>
                <!-- 11 -->
                <div class="row">
                    <div class="col">
                        <div class="single-portfolio">
                            <div class="row container pt-3" style="align-items: center;">
                                <div class="col-md-12">
                                    <h2 class="text-center">Construction Of Drainage Under Crossing In Left Bank Main Canal Of Kaluganga Reservoir</h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/11/IMG_0208.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/11/IMG_0210.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/11/IMG_0499.JPG" alt="">
                                        </div>
                                    </div>
                                
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>Construction Of Drainage Under Crossing In Left Bank Main Canal Of Kaluganga Reservoir From 8+200 To 10+200 under Moragahakanda Kaluganga Development Project.</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: Mahaweli Authority of Sri Lanka</span></h6>
                                        <!-- <?php echo $record['subDescription1'];?> -->
                                        </li>
                                        <li>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Year: 2018 - 2019
                                            </span>
                                        </h6>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Location: Moragahakanda
                                            </span>
                                        </h6>
                                        
                                        <!-- <?php echo $record['subDescription2'];?> -->
                                        </li>
                                    </ul>
                                    <!-- <a href="#" class="button">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- 13 -->
                <div class="row">
                    <div class="col">
                        <div class="single-portfolio">
                            <div class="row container pt-3" style="align-items: center;">
                                <div class="col-md-12">
                                    <h2 class="text-center">Improvement of Canals LBMC in Minipe Scheme in kandy</h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/13/40439208_2054104491266202_631723731428835328_n.jpg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/13/40515582_2131946473482743_399314392388206592_n.jpg" alt="">
                                        </div>
                                    </div>
                                
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>Improvement of  D5, D9, D18, D1, D4, D34, D27A, D25, D31 & D30 Canals LBMC in Minipe Scheme in kandy - NCB 82</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: Irrigation Department </span></h6>
                                        <!-- <?php echo $record['subDescription1'];?> -->
                                        </li>
                                        <li>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Year: 2018 - 2019
                                            </span>
                                        </h6>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Location: Minipe
                                            </span>
                                        </h6>
                                        
                                        <!-- <?php echo $record['subDescription2'];?> -->
                                        </li>
                                    </ul>
                                    <!-- <a href="#" class="button">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- 14 -->
                <div class="row">
                    <div class="col">
                        <div class="single-portfolio">
                            <div class="row container pt-3" style="align-items: center;">
                                <div class="col-md-12">
                                    <h2 class="text-center">Drought Mitigation of canals</h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/14/45093803_348093665947777_3939891156954906624_n.jpg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/14/45099830_559200897872626_1992420468027555840_n.jpg" alt="">
                                        </div>
                                    </div>
                                
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>Drought Mitigation of D1, D2, D3, D4 canals in tr 1 of Muruthawela Scheme, Hambantota Region - NCB 38</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: Irrigation Department </span></h6>
                                        <!-- <?php echo $record['subDescription1'];?> -->
                                        </li>
                                        <li>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Year: 2018 - 2019
                                            </span>
                                        </h6>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Location: Muruthawela
                                            </span>
                                        </h6>
                                        
                                        <!-- <?php echo $record['subDescription2'];?> -->
                                        </li>
                                    </ul>
                                    <!-- <a href="#" class="button">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- 15 -->
                <div class="row">
                    <div class="col">
                        <div class="single-portfolio">
                            <div class="row container pt-3" style="align-items: center;">
                                <div class="col-md-12">
                                    <h2 class="text-center">Improvement to Canals in Padaviya Division, Anuradhapura Range</h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/15/33186787_10215860196885519_3285439751380795392_n.jpg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/15/40371425_1824004844322002_7969440894380146688_n.jpg" alt="">
                                        </div>
                                    </div>
                                
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>Improvement to D7 Canal LB 08 of D07 Canal (0m to 583m) RB 02 of  D08 Canal and RB 1D 9 Canal UMC Padaviya Division, Anuradhapura Range  - NCB 24</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: Mahaweli Authority of Sri Lanka</span></h6>
                                        <!-- <?php echo $record['subDescription1'];?> -->
                                        </li>
                                        <li>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Year: 2018 - 2019
                                            </span>
                                        </h6>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Location: Moragahakanda
                                            </span>
                                        </h6>
                                        
                                        <!-- <?php echo $record['subDescription2'];?> -->
                                        </li>
                                    </ul>
                                    <!-- <a href="#" class="button">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- 16 -->
                <div class="row">
                    <div class="col">
                        <div class="single-portfolio">
                            <div class="row container pt-3" style="align-items: center;">
                                <div class="col-md-12">
                                    <h2 class="text-center">Remedial Work of Victoria Dam</h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/16/DSC09545.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/16/Remidial work of Victoria Dam and Gates after 30 years of construction Completed within Two years 2.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/16/Remidial work of Victoria Dam and Gates after 30 years of construction Completed within Two years 4.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/16/Remidial work of Victoria Dam and Gates after 30 years of construction Completed within Two years 3.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/16/Slope Stabilaisation 2.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/16/Slope Stabilasation 1.JPG" alt="">
                                        </div>
                                    </div>
                                
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span></span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: Mahaweli Authority of Sri Lanka</span></h6>
                                        <!-- <?php echo $record['subDescription1'];?> -->
                                        </li>
                                        <li>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Year: 2017 - 2018
                                            </span>
                                        </h6>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Location: Moragahakanda
                                            </span>
                                        </h6>
                                        
                                        <!-- <?php echo $record['subDescription2'];?> -->
                                        </li>
                                    </ul>
                                    <!-- <a href="#" class="button">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>   
                <!-- 12 -->
                <div class="row">
                    <div class="col">
                        <div class="single-portfolio">
                            <div class="row container pt-3" style="align-items: center;">
                                <div class="col-md-12">
                                    <h2 class="text-center">Rehabilitation of Kandiyapita Scheme and Hambegamuwa</h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/12/IMG_1124.jpg" alt="">
                                        </div>
                                    </div>
                                
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>Rehabilitation of Kandiyapita Scheme and Hambegamuwa Schemein Welioya Division, Monaragala Region. CRIPAF/WORKS/ID-MON/NCB/66</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: Irrigation Department </span></h6>
                                        <!-- <?php echo $record['subDescription1'];?> -->
                                        </li>
                                        <li>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Year: 2018 - 2019
                                            </span>
                                        </h6>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Location: Monaragala 
                                            </span>
                                        </h6>
                                        
                                        <!-- <?php echo $record['subDescription2'];?> -->
                                        </li>
                                    </ul>
                                    <!-- <a href="#" class="button">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
    </div>


    <?php }

        if ($k % 1 != 0) {

            echo "<br>";
        }
    } ?>


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
    <script  src="js/index1.js"></script>

    <!--Bootstrap Js-->
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <!--jQuery-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

</body>
</html>