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
                
                <!-- 10 -->
                <div class="row">
                    <div class="col">
                        <div class="single-portfolio">
                            <div class="row container pt-3" style="align-items: center;">
                                <div class="col-md-12">
                                    <h2 class="text-center">Kirkoswald Mini Hydro Power Project</h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/10/AMANAWALA  CANAL - 06.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/10/Bogo power pipe support.JPG" alt="">
                                        </div>
                                        
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/10/Mini Hydropower penstock and pipe support.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/10/Mini Hydropower Wier.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/10/Wier Bogopower.JPG" alt="">
                                        </div>
                                    </div>
                                
                                    <!-- <h2> <?php echo $record['ProjectName'];?> </h2>
                                    <p> <?php echo $record['ProjectDescription'];?></p> -->
                                    <h5><span>Mini Hydropower project completed in 2011.</span></h5>
                                    <ul>
                                        <li>
                                        <!-- <h5><span><?php echo $record['subTopic1'];  ?></span></h5>
                                        <?php echo $record['subDescription1'];?> -->
                                        <br>
                                        <h6><span>Client: Bogo Power Private Limited</span></h6>
                                        <!-- <?php echo $record['subDescription1'];?> -->
                                        </li>
                                        <li>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Year: 2010 - 2011
                                            </span>
                                        </h6>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Location: Bogawantalawa
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
                <!-- 17 -->
                <div class="row">
                    <div class="col">
                        <div class="single-portfolio">
                            <div class="row container pt-3" style="align-items: center;">
                                <div class="col-md-12">
                                    <h2 class="text-center">Remedial work of Polgolla Dam</h2>
                                    <div class="single-portfolio--slider">
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/17/DSC05953.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/17/DSC02033.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/17/DSC00223.JPG" alt="">
                                        </div>
                                        <div>
                                            <!-- <img src="  <?php echo $record['Image1'];  ?>" alt=""> -->
                                            <img src="assets/img/Project Photos - completed/17/DSC_0006.JPG" alt="">
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
                                                Year: 2013 - 2015
                                            </span>
                                        </h6>
                                        <h6>
                                            <span>
                                                <!-- <?php echo $record['subTopic2'];  ?> -->
                                                Location: Polgolla Dam
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