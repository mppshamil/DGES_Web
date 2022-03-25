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
                
                <div class="row">
                    <div class="col">
                        <div class="single-portfolio">

                            <!-- Ceylon Oxygen -->
                            <div class="row container pt-3">
                                <div class="col-md-12">
                                    <h2 class="text-center">Ceylon Oxygen</h2>
                                    <div class="single-portfolio--slider">
                                        
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/Ceylon Oxygen/ceylonOxygen.jpg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image2'];  ?>" alt="">  -->
                                            <img src="" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image3'];  ?>" alt=""> -->
                                            <img src="" alt="">
                                        </div>
                                        
                                    </div>
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>Project Construction of New Plant</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: Ceylon Oxygen Ltd</span></h6>
                                        <!-- <?php echo $record['subDescription1'];?> -->
                                        </li>
                                        <li>
                                        <h6><span>
                                            <!-- <?php echo $record['subTopic2'];  ?> -->
                                            Year: 
                                        </span></h6>
                                        
                                        <!-- <?php echo $record['subDescription2'];?> -->
                                        </li>
                                        <li>
                                            <h6><span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Location: 
                                            </span></h6>
                                        </li>
                                    </ul>
                                    <!-- <a href="#" class="button">Read More</a> -->
                                </div>
                            </div>
                            <hr>

                            <!-- CIC Silo Ekala -->
                            <div class="row container pt-3">
                                <div class="col-md-12">
                                    <h2 class="text-center">CIC Silo Ekala</h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/CIC Silo Ekala/CICSilo.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image2'];  ?>" alt="">  -->
                                            <img src="" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image3'];  ?>" alt=""> -->
                                            <img src="" alt="">
                                        </div>
                                        
                                    </div>
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>Removing and Re-Installation of Silos</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: CIC FEEDS (PVT) LTD</span></h6>
                                        <!-- <?php echo $record['subDescription1'];?> -->
                                        </li>
                                        <li>
                                        <h6><span>
                                            <!-- <?php echo $record['subTopic2'];  ?> -->
                                            Year: 2016
                                        </span></h6>
                                        
                                        <!-- <?php echo $record['subDescription2'];?> -->
                                        </li>
                                        <li>
                                            <h6><span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Location: 
                                            </span></h6>
                                        </li>
                                    </ul>
                                    <!-- <a href="#" class="button">Read More</a> -->
                                </div>
                            </div>

                            <!-- Loading Arms  CPC -->
                            <div class="row container pt-3">
                                <div class="col-md-12">
                                    <h2 class="text-center">Loading Arms  CPC</h2>
                                    <div class="single-portfolio--slider">
                                        
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/Loading Arms CPC/loadingArms.jpeg" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image2'];  ?>" alt="">  -->
                                            <img src="" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image3'];  ?>" alt=""> -->
                                            <img src="" alt="">
                                        </div>
                                    </div>
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>REPAIRING OF 03 NOS LOADING/UNLOADING ARMS AT DOLPHIN TANKER BERTH</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: CEYLON PETROLEUM CORPORATION</span></h6>
                                        <!-- <?php echo $record['subDescription1'];?> -->
                                        </li>
                                        <li>
                                        <h6><span>
                                            <!-- <?php echo $record['subTopic2'];  ?> -->
                                            Year: 2019-2021
                                        </span></h6>
                                        
                                        <!-- <?php echo $record['subDescription2'];?> -->
                                        </li>
                                        <li>
                                            <h6><span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Location:
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