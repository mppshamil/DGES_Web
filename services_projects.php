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


</head>

<body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">

    <script>
        AOS.init();
    </script>

    <?php

    $pid = $_GET['Serv'];


    $res = mysqli_query($conn, "select * from tbl_service_details where ID='$pid'");


    while ($row = mysqli_fetch_array($res)) {

    ?>


        <!-- navigation -->
        <div class="navigation-wrap bg-light start-header start-style" style="background-color: rgba(3, 3, 3, 0.712);">
            <?php
            include('components/navbar.php');
            ?>
        </div>

        <div class="pt-5"></div>
        <div class="pt-5"></div>
        <div class="wrapper pt-5">


            <?php

            $servName = "";

            if ($row['ServiceTypeID'] == "1") {
                $servName = "GENERAL INFRASTRUCTURE";
            } else if ($row['ServiceTypeID'] == "2") {
                $servName = "IRRIGATION";
            } else if ($row['ServiceTypeID'] == "3") {
                $servName = "PETROCHEMICAL";
            } else if ($row['ServiceTypeID'] == "4") {
                $servName = "POWER AND ENERGY";
            } else if ($row['ServiceTypeID'] == "5") {
                $servName = "LAND/ WATER BASED CARRIAGES";
            } else if ($row['ServiceTypeID'] == "6") {
                $servName = "HEAVY STRUCTURES";
            } else if ($row['ServiceTypeID'] == "7") {
                $servName = "SLOPE STABILIZATION";
            } else if ($row['ServiceTypeID'] == "8") {
                $servName = "CONCRETE STRUCTURE RESTORATION";
            } else if ($row['ServiceTypeID'] == "9") {
                $servName = "SPECIALISED ENGINEERING";
            }

            ?>
            <div>
                <h1 class="text-center"><?php echo $servName ?></h1>
            </div>
            <article>
                <div class="single-portfolio container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-portfolio--slider">
                                <div>
                                    <img src="<?php echo $row['CoverImage'] ?>" alt="">
                                </div>
                                <div>
                                    <img src="<?php echo $row['Image2'] ?>" alt="">
                                </div>
                                <div>
                                    <img src="<?php echo $row['Image3'] ?>" alt="">
                                </div>
                                <div>
                                    <img src="<?php echo $row['Image4'] ?>" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h2><?php echo $row['SubService'] ?></h2>
                            <p><?php echo $row['Description'] ?></p>

                        </div>
                    </div>
                </div>
            </article>
        </div>
    <?php } ?>
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

</body>

</html>