<?php
include_once("db_connect.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DGES</title>
    <link rel="icon" href="favicon.png" type="image/x-icon" />

    <link href="css/vendor/bootstrap.css" rel="stylesheet" />
    <link href="css/vendor/font-awesome.css" rel="stylesheet" />
    <link href="css/vendor/slick.css" rel="stylesheet" />
    <link href="css/vendor/slick-theme.css" rel="stylesheet" />
    <link href="css/vendor/odometer-theme-default.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="bower_components/aos/dist/aos.css">

    <link href="https://cdn.rawgit.com/michalsnik/aos/2.3.4/dist/aos.css" rel="stylesheet">
    <script src="bower_components/aos/dist/aos.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.3.4/dist/aos.js"></script>

</head>

<body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
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

            <h1 style="color:rgb(252, 194, 88)">KEMPPI WELDING MACHINES</h1>
            <!-- <p>This is the Test Navigation Page</p> -->
        </div>
        </div>
        <!-- content -->
        <div class="container-fluid mb-4" style="padding-top:50px;">
            <div class=" col-md-12 col-sm-12 col-xs-1 pb-4">
                <h2 class="font-weight-bold text-center pb-4 text-warning">NEW STANDARDS IN THE COMPACT MIG/MAG CLASS</h2>
                <h5 class="text-center">Designed for the modern welding workshop, Kempact RA expresses stylish and purposeful design through high build quality and functional user benefits, making weld tasks productive, accurate and efficient.
                </h5>
                <h5 class="text-center">Kempact RA is built on Kemppi’s latest power source platform, ensuring optimal welding performance and excellent power cost efficiency. Eleven model options include 180, 250 and 320 ampere power sources, including a choice of either Regular (R) or Adaptive (A) control panel interface, which serve the wide ranging needs of metal fabrication workshops. Delivery specification includes welding gun and earth return lead pack.</h5>
            </div class="col-md-12 col-sm-12 col-xs-12">
        </div>
                <!-- <div class="col-md-5 col-sm-12 col-xs-12">
                    <h3 class="font-weight-bold">BENEFITS</h3>
                    <ul class="pl-4">
                        <li>Modern, energy efficient power source</li>
                        <li>Excellent welding performance with mixed or C02 shielding gas</li>
                        <li>Precise, clean arc ignition</li>
                        <li>Maximum output at 35 % duty cycle</li>
                        <li>Maximum output at 35 % duty cycle</li>
                        <li>WireLine™ service indicator</li>
                        <li>GasMate™ chassis design featuring floor level cylinder loading</li>
                        <li>Brights™ cabinet lighting</li>
                        <li>HotSpot™ heat treatment function</li>
                        <li>2T/4T gun switch latching</li>
                        <li>Spot and cycle arc timer</li>
                        <li>Parts storage trays</li>
                        <li>Kemppi 3+ warranty</li>
                    </ul>
                </div> -->
            </div>
        </div>
        <!-- 1 -->
    <div style="background-color:rgb(212, 212, 212)">
        <div class="container py-3 px-3 pb-4">
            <h2 class="font-weight-bold">MMA Products</h2>
            <p class="pb-5">Compact, lightweight and capable. Our MMA welding equipment meets professional welding demands in every respect. Arc ignition and stability dynamic control ensure that every electrode burns effortlessly to produce quality welds. All models are power generator compatible and able to operate in a wide range of conditions from sub zero temperatures to desert heat.</p>
            <div class="row justify-content-center">

                <?php

                $sql = "SELECT * FROM tbl_kempiproducts where subCat='MMA'  ";
                $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
                $count = mysqli_num_rows($resultset);

                if ($count == 0) {
                    echo "<br><br><center><h4>There are no products.</h4></center><br>";
                } else {



                    $k = 0;
                    while ($record = mysqli_fetch_assoc($resultset)) {
                        if ($k == 0) {
                            // echo "<h1>No vacancies</h1>";
                        }
                        if ($k % 2 == 0) {
                        }
                        $k++;
                ?>




                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <div class="card h-120 mb-4 text-black">
                                <i class=""></i>
                                <img src="<?php echo $record['Image'];  ?>" class="card-img-top" alt="Apple Computer" />
                                <div class="card-body">
                                    <div class="text-center">
                                        <h5 class="card-title"><?php echo $record['Name'];  ?></h5>
                                        <p class="text-muted mb-4"><?php echo $record['Description'];  ?></p>
                                    </div>
                                    <br>
                                    <button class="align-center btn btn-warning btn-block text-center">View More</button>
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
        

        <!-- 2 -->
        <div class="container py-3 px-3 pb-4">
            <h2 class="font-weight-bold">TIG Products</h2>
            <p class="pb-5">Precise ignition and smooth, stable current flow are the baseline for every model in our TIG welding equipment range. Optional remote control units can be selected to suit either workshop or site conditions, allowing welders to concentrate on quality.</p>
            <div class="row justify-content-center">


                <?php

                $sql = "SELECT * FROM tbl_kempiproducts where subCat='TIG'  ";
                $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
                $count = mysqli_num_rows($resultset);

                if ($count == 0) {
                    echo "<br><br><br><br><center><h4>There are no TIG Products.</h4></center><br><br><br><br><br>";
                } else {



                    $k = 0;
                    while ($record = mysqli_fetch_assoc($resultset)) {
                        if ($k == 0) {
                            // echo "<h1>No vacancies</h1>";
                        }
                        if ($k % 2 == 0) {
                        }
                        $k++;
                ?>




                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card h-120 mb-4 text-black">
                            <i class=""></i>
                            <img src="<?php echo $record['Image'];  ?>" class="card-img-top" alt="Apple Computer" />
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="card-title"><?php echo $record['Name'];  ?></h5>
                                    <p class="text-muted mb-4"><?php echo $record['Description'];  ?></p>
                                </div>
                                <br>
                                <button class="align-center btn btn-warning btn-block text-center">View More</button>
                            </div>
                        </div>
                    </div>


                <?php }
                    if ($k % 2 != 0) {
                    }
                } ?>

            </div>
        </div>

        <!-- footer -->
        <?php
            include('components/footer.php');
        ?>

</body>
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

</html>