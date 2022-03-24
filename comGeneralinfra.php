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
                <!-- civil -->
                <!-- 1 -->
                <div class="row">
                    <div class="col">
                        <div class="single-portfolio">
                            <div class="row container pt-3">
                                <div class="col-md-12">
                                    <h2 class="text-center"> Proposed Office Building For Dockyard General Engineering Services (Pvt) Ltd </h2>
                                    <div class="single-portfolio--slider">
                                        
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/01/1.jpg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image2'];  ?>" alt="">  -->
                                            <img src="assets/img/Project Photos - completed/01/3.jpg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image3'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/01/5.jpg" alt="">
                                        </div>
                                    </div>
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>DGES Building</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: Dockyard General Engineering Services (Pvt) Ltd</span></h6>
                                        <!-- <?php echo $record['subDescription1'];?> -->
                                        </li>
                                        <li>
                                        <h6><span>
                                            <!-- <?php echo $record['subTopic2'];  ?> -->
                                            Year: 2018 - 2020
                                        </span></h6>
                                        
                                        <!-- <?php echo $record['subDescription2'];?> -->
                                        </li>
                                        <li>
                                            <h6><span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Location: Kandy - Bogambara
                                            </span></h6>
                                        </li>
                                    </ul>
                                    <!-- <a href="#" class="button">Read More</a> -->
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <hr>
                <!-- 2 -->
                <div class="row">
                    <div class="col">
                        <div class="single-portfolio">
                            <div class="row container pt-3" style="align-items: center;">
                                <div class="col-md-12">
                                    <h2 class="text-center">Construction of Multimodal Transportation Terminal Project at Bogambara</h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/02/IMG_20190406_100259.jpg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image2'];  ?>" alt="">  -->
                                            <img src="assets/img/Project Photos - completed/02/IMG_20190406_100343.jpg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image3'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/02/IMG_20190406_114429.jpg" alt="">
                                        </div>
                                    </div>
                                
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>Multimedia transportational terminal project</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: Ministry of  Megapolis</span></h6>
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
                                                Location: Kandy - Bogambara
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
                <!-- 3 -->
                <div class="row">
                    <div class="col">
                        <div class="single-portfolio">
                            <div class="row container pt-3" style="align-items: center;">
                                <div class="col-md-12">
                                    <h2 class="text-center">Construction of Warehouse complex at Embilipitiya in Ratnapura District.</h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/03/1.jpg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image2'];  ?>" alt="">  -->
                                            <img src="assets/img/Project Photos - completed/03/20171117_164300.jpg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image3'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/03/WP_20170703_13_25_46_Pro.jpg" alt="">
                                        </div>
                                    </div>
                                
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>Contruction of warehouse Complex</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: Ministry of Finance</span></h6>
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
                                                Location: Embilipitiya
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
                <!-- 4 -->
                <div class="row">
                    <div class="col">
                        <div class="single-portfolio">
                            <div class="row container pt-3" style="align-items: center;">
                                <div class="col-md-12">
                                    <h2 class="text-center">Construction of Grid Storage & Accommodation Building  </h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/04/ec5b9939-a859-4437-8513-db0ab0f6d734.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image2'];  ?>" alt="">  -->
                                            <img src="assets/img/Project Photos - completed/04/IMG_20181031_120823(1).jpg" alt="">
                                        </div>
                                    </div>
                                
                                    <!-- <h2> <?php echo $record['ProjectName'];?></h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>Construction of warehouse Complex</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: Colombo Dockyard PLC</span></h6>
                                        <!-- <?php echo $record['subDescription1'];?> -->
                                        </li>
                                        <li>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Year: 2019 - 2020
                                            </span>
                                        </h6>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Location: Port of Colombo 
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
                <!-- 5 -->
                <div class="row">
                    <div class="col">
                        <div class="single-portfolio">
                            <div class="row container pt-3" style="align-items: center;">
                                <div class="col-md-12">
                                    <h2 class="text-center">Proposed Building for Installing Screw Type Mechanical Compost Plant Stage 01</h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/05/DC 60 - 1.jpg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image2'];  ?>" alt="">  -->
                                            <img src="assets/img/Project Photos - completed/05/DC 60- 2.jpg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image2'];  ?>" alt="">  -->
                                            <img src="assets/img/Project Photos - completed/05/IMG-20200224-WA0022.jpg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image2'];  ?>" alt="">  -->
                                            <img src="assets/img/Project Photos - completed/05/IMG_20200903_112130_resized_20210326_093227527.jpg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image2'];  ?>" alt="">  -->
                                            <img src="assets/img/Project Photos - completed/05/IMG_20200903_112155_resized_20210326_093224506.jpg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image2'];  ?>" alt="">  -->
                                            <img src="assets/img/Project Photos - completed/05/IMG_20200904_130125_resized_20210326_093224925.jpg" alt="">
                                        </div>
                                    </div>
                                
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>Proposed Building for Installing Screw Type Mechanical Compost Plant Stage 01 for Northern Province at Jaffna</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: Colombo Dockyard PLC</span></h6>
                                        <!-- <?php echo $record['subDescription1'];?> -->
                                        </li>
                                        <li>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Year: 2019 - 2020
                                            </span>
                                        </h6>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Location: Jaffna
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
                <!-- 6 -->
                <div class="row">
                    <div class="col">
                        <div class="single-portfolio">
                            <div class="row container pt-3" style="align-items: center;">
                                <div class="col-md-12">
                                    <h2 class="text-center">Design and Build Contract for Construction of Warehouses</h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/06/IMG_0252.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image2'];  ?>" alt="">  -->
                                            <img src="assets/img/Project Photos - completed/06/IMG_0289.JPG" alt="">
                                        </div>
                                       
                                    </div>
                                
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>Design and Build Contract for Construction of Warehouses to Store HDPE PIpes at Aniyakanda Ekala & Church Hill Reservoir.Design and Build Contract for Construction of Warehouses to Store HDPE PIpes at Aniyakanda Ekala & Church Hill Reservoir.</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: National Water Supply & Drainage Board</span></h6>
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
                                                Location: Gampaha
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

                <!-- 7  -->
                <!-- bridges -->
                <div class="row">
                    <div class="col">
                        <div class="single-portfolio">
                            <div class="row container pt-3" style="align-items: center;">
                                <div class="col-md-12">
                                    <h2 class="text-center">Construction of Water and Sewer pipe supporting truss bridge at Kathaluwa</h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/07/DSC00024.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image2'];  ?>" alt="">  -->
                                            <img src="assets/img/Project Photos - completed/07/DSC_0705.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image2'];  ?>" alt="">  -->
                                            <img src="assets/img/Project Photos - completed/07/DSC_0725.JPG" alt="">
                                        </div>
                                    </div>
                                
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>Construction of Water and Sewer pipe supporting.</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: Wakachiku   Co Ltd</span></h6>
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
                                                Location: Kathaluwa
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