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
    $sql = "SELECT * FROM tbl_header_image where pageCat='services' ";
    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

    while ($record = mysqli_fetch_assoc($resultset)) {
    ?>

<div class="intro-page" style="background-image: url('<?php echo $record['imagepath'];  ?>');">
        <?php } ?>
        <div data-aos="fade-up" class="container">
            <h1 style="color: orange; width: 50%;">OUR SERVICES</h1>
            <h5 class="text-dark font-weight-bold pt-3">We are 40 years old and what is depicted in these pages will amply illustrate that we have been very busy.</h5>
        </div>
        </div>


        <!-- <section class="four-elements">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="four-elements--image"><i class="fa fa-eye" aria-hidden="true"></i></div>
                         <a href="#GeneralInfrastructure"><h3>General Infrastructure</h3></a> 
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                    </div>
                    <div class="col-md-3">
                        <div class="four-elements--image"><i class="fa fa-heart" aria-hidden="true"></i></div>
                        <h3>Irrigation</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                    </div>
                    <div class="col-md-3">
                        <div class="four-elements--image"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></div>
                        <h3>PetroChemical</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                    </div>
                    <div class="col-md-3">
                        <div class="four-elements--image"><i class="fa fa-comments-o" aria-hidden="true"></i></div>
                        <h3>Power and Energy</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                    </div>
                    <div class="col-md-3">
                        <div class="four-elements--image"><i class="fa fa-comments-o" aria-hidden="true"></i></div>
                        <h3>Power and Energy</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                    </div>
                    

                    <div class="row align-center">
                        <div class="col-md-3">
                            <div class="four-elements--image"><i class="fa fa-comments-o" aria-hidden="true"></i></div>
                            <h3>Power and Energy</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                        </div>
                        <div class="col-md-3">
                            <div class="four-elements--image"><i class="fa fa-comments-o" aria-hidden="true"></i></div>
                            <h3>Power and Energy</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                        </div>
                        <div class="col-md-3">
                            <div class="four-elements--image"><i class="fa fa-comments-o" aria-hidden="true"></i></div>
                            <h3>Power and Energy</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                        </div>
                        <div class="col-md-3 ">
                            <div class="four-elements--image"><i class="fa fa-comments-o" aria-hidden="true"></i></div>
                            <h3>Power and Energy</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Our Services</h2>
                        <div class="our-services--element">
                            <h4>Web Design</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ip sum has been the industry's standard dummy text ever.</p>
                            <div class="our-services--element__image"><i class="fa fa-desktop" aria-hidden="true"></i></div>
                        </div>
                        <div class="our-services--element">
                            <h4>Print Design</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ip sum has been the industry's standard dummy text ever.</p>
                            <div class="our-services--element__image"><i class="fa fa-print" aria-hidden="true"></i></div>
                        </div>
                        <div class="our-services--element">
                            <h4>Photography</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ip sum has been the industry's standard dummy text ever.</p>
                            <div class="our-services--element__image"><i class="fa fa-camera" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="our-services--slider">
                <div>
                    <img src="assets/img/services.png" alt="" />
                </div>
                <div>
                    <img src="assets/img/services.png" alt="" />
                </div>
                <div>
                    <img src="assets/img/services.png" alt="" />
                </div>
            </div>
            <div class="our-services--dots"></div>
        </section> -->








        <!-- 1 -->
        <?php
        $sql = "SELECT * FROM tbl_service_menu where ID='1' ";
        $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

        while ($record = mysqli_fetch_assoc($resultset)) {
        ?>
            <section id="GeneralInfrastructure" class="GeneralInfrastructure ">
                <div class="container-fluid " style="padding-left:120px; padding-right:120px;">
                    <br><br>
                    <h2 class="font-weight-bold text-center pb-4"><?php echo $record['ServiceType'];  ?></h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="300">
                            <p class="text-justify pb-4"><?php echo $record['Description1'];  ?></p>
                            <p class="text-justify pb-4"><?php echo $record['Description2'];  ?></p>
                            <!-- <a href="#" class="button ">Our Portfolio</a> -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12" data-aos="fade-right">
                            <img src="<?php echo $record['imagePath'];  ?>" alt="" />
                        </div>
                    </div>
                </div>
            <?php } ?>



            <?php

            $sql = "SELECT * FROM tbl_service_details where ServiceTypeID='1' ";
            $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
            $count = mysqli_num_rows($resultset);

            if ($count == 0) {
                echo "<center><h4></h4></center>";
            } else {

                $k = 0;
                while ($record = mysqli_fetch_assoc($resultset)) {
                    if ($k == 0) {
                        // echo "<h1>No vacancies</h1>";
                    }
                    if ($k % 3 == 0) {
                        // echo "</div>";
                        echo "<div class='row pt-4 container'>";
                        // echo "<div class='row'>";

                    }
                    $k++;
            ?>
                    <div class="col-md-4 col-sm-4 col-xs-4" data-aos="fade-up" data-aos-delay="300">
                        <h5 class="text-center"><?php echo $record['SubService'];  ?></h5>


                        <form name="form1" action="services_projects.php" method="get">
                            <input type="hidden" name="Serv" value="<?php echo $record['ID']; ?>">
                            <input type="image" src="<?php echo $record['CoverImage'];  ?>" style="width: 350px;" alt="Submit">

                        </form>







                    </div>

            <?php }
                if ($k % 3 != 0) {

                    echo "</div>";
                }
            } ?>


            </div>
            <hr class="pb-3">
            </section>






            <!-- 2 -->
            <?php
            $sql = "SELECT * FROM tbl_service_menu where ID='2' ";
            $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

            while ($record = mysqli_fetch_assoc($resultset)) {
            ?>

                <section id="Irrigation" class="Irrigation bg-dark text-light pt-4">
                    <div class="container-fluid" style="padding-left:120px; padding-right:120px">
                        <h2 class="font-weight-bold text-center pb-4"><?php echo $record['ServiceType'];  ?></h2>
                        <div class="row">
                            <div class="col-md-6 col-sm-8 col-xs-8" data-aos="fade-right">
                                <img src="<?php echo $record['imagePath'];  ?>" alt="" />
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-4" data-aos="fade-up" data-aos-delay="300">
                                <p class="text-justify pb-4"><?php echo $record['Description1'];  ?></p>
                                <p class="text-justify pb-4"><?php echo $record['Description2'];  ?></p>
                                <!-- <a href="#" class="button ">Our Portfolio</a> -->
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php

                $sql = "SELECT * FROM tbl_service_details where ServiceTypeID='2' ";
                $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
                $count = mysqli_num_rows($resultset);

                if ($count == 0) {
                    echo "<center><h4></h4></center>";
                } else {

                    $k = 0;
                    while ($record = mysqli_fetch_assoc($resultset)) {
                        if ($k == 0) {
                            // echo "<h1>No vacancies</h1>";
                        }
                        if ($k % 3 == 0) {
                            // echo "</div>";
                            echo "<div class='row pt-4 container'>";
                            // echo "<div class='row'>";

                        }
                        $k++;
                ?>
                        <div class="col-md-4 col-sm-4 col-xs-4" data-aos="fade-up" data-aos-delay="300">
                            <h5 class="text-center"><?php echo $record['SubService'];  ?></h5>
                            <form name="form1" action="services_projects.php" method="get">
                                <input type="hidden" name="Serv" value="<?php echo $record['ID']; ?>">
                                <input type="image" src="<?php echo $record['CoverImage'];  ?>" style="width: 350px;" alt="Submit">

                            </form>





                            </a>
                        </div>

                <?php }
                    if ($k % 3 != 0) {

                        echo "</div>";
                    }
                } ?>


                </div>
                <hr class="pb-3">
                </section>



                <!-- 3 -->
                <?php
                $sql = "SELECT * FROM tbl_service_menu where ID='3' ";
                $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

                while ($record = mysqli_fetch_assoc($resultset)) {
                ?>

                    <section id="PetroChemical" class="GeneralInfrastructure ">
                        <div class="container-fluid" style="padding-left:120px; padding-right:120px">
                            <br><br>
                            <h2 class="font-weight-bold text-center pb-4"><?php echo $record['ServiceType'];  ?></h2>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="300">
                                    <p class="text-justify pb-4"><?php echo $record['Description1'];  ?></p>
                                    <p class="text-justify pb-4"><?php echo $record['Description2'];  ?></p>
                                    <!-- <a href="#" class="button ">Our Portfolio</a> -->
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12" data-aos="fade-right">
                                    <img src="<?php echo $record['imagePath'];  ?>" alt="" />
                                </div>
                            </div>
                        </div>
                    <?php } ?>


                    <?php

                    $sql = "SELECT * FROM tbl_service_details where ServiceTypeID='3' ";
                    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
                    $count = mysqli_num_rows($resultset);

                    if ($count == 0) {
                        echo "<center><h4></h4></center>";
                    } else {

                        $k = 0;
                        while ($record = mysqli_fetch_assoc($resultset)) {
                            if ($k == 0) {
                                // echo "<h1>No vacancies</h1>";
                            }
                            if ($k % 3 == 0) {
                                // echo "</div>";
                                echo "<div class='row pt-4 container'>";
                                // echo "<div class='row'>";

                            }
                            $k++;
                    ?>
                            <div class="col-md-4 col-sm-4 col-xs-4" data-aos="fade-up" data-aos-delay="300">
                                <h5 class="text-center"><?php echo $record['SubService'];  ?></h5>
                                <form name="form1" action="services_projects.php" method="get">
                                    <input type="hidden" name="Serv" value="<?php echo $record['ID']; ?>">
                                    <input type="image" src="<?php echo $record['CoverImage'];  ?>" style="width: 350px;" alt="Submit">

                                </form>
                            </div>

                    <?php }
                        if ($k % 3 != 0) {

                            echo "</div>";
                        }
                    } ?>


                    </div>
                    <hr class="pb-3">
                    </section>



                    <!-- 4-->
                    <?php
                    $sql = "SELECT * FROM tbl_service_menu where ID='4' ";
                    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

                    while ($record = mysqli_fetch_assoc($resultset)) {
                    ?>


                        <section id="PowerandEnergy" class="Irrigation bg-dark text-light pt-4">
                            <div class="container-fluid" style="padding-left:120px; padding-right:120px">
                                <h2 class="font-weight-bold text-center pb-4"><?php echo $record['ServiceType'];  ?></h2>
                                <div class="row">
                                    <div class="col-md-6 col-sm-8 col-xs-8" data-aos="fade-right">
                                        <img src="<?php echo $record['imagePath'];  ?>" alt="" />
                                    </div>
                                    <div class="col-md-6 col-sm-4 col-xs-4" data-aos="fade-up" data-aos-delay="300">
                                        <p class="text-justify pb-4"><?php echo $record['Description1'];  ?></p>
                                        <p class="text-justify pb-4"><?php echo $record['Description2'];  ?></p>
                                        <!-- <a href="#" class="button ">Our Portfolio</a> -->
                                    </div>
                                </div>
                            </div>
                        <?php } ?>


                        <?php

                        $sql = "SELECT * FROM tbl_service_details where ServiceTypeID='4' ";
                        $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
                        $count = mysqli_num_rows($resultset);

                        if ($count == 0) {
                            echo "<center><h4></h4></center>";
                        } else {

                            $k = 0;
                            while ($record = mysqli_fetch_assoc($resultset)) {
                                if ($k == 0) {
                                    // echo "<h1>No vacancies</h1>";
                                }
                                if ($k % 3 == 0) {
                                    // echo "</div>";
                                    echo "<div class='row pt-4 container'>";
                                    // echo "<div class='row'>";

                                }
                                $k++;
                        ?>
                                <div class="col-md-4 col-sm-4 col-xs-4" data-aos="fade-up" data-aos-delay="300">
                                    <h5 class="text-center"><?php echo $record['SubService'];  ?></h5>
                                    <form name="form1" action="services_projects.php" method="get">
                                        <input type="hidden" name="Serv" value="<?php echo $record['ID']; ?>">
                                        <input type="image" src="<?php echo $record['CoverImage'];  ?>" style="width: 350px;" alt="Submit">

                                    </form>
                                </div>

                        <?php }
                            if ($k % 3 != 0) {

                                echo "</div>";
                            }
                        } ?>


                        </div>
                        <hr class="pb-3">
                        </section>


                        <!-- 5 -->

                        <?php
                        $sql = "SELECT * FROM tbl_service_menu where ID='5' ";
                        $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

                        while ($record = mysqli_fetch_assoc($resultset)) {
                        ?>

                            <section id="LandWater" class="GeneralInfrastructure">
                                <div class="container-fluid" style="padding-left:120px; padding-right:120px">
                                    <br><br>
                                    <h2 class="font-weight-bold text-center pb-4"><?php echo $record['ServiceType'];  ?></h2>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="300">
                                            <p class="text-justify pb-4"><?php echo $record['Description1'];  ?></p>
                                            <p class="text-justify pb-4"><?php echo $record['Description2'];  ?></p>
                                            <!-- <a href="#" class="button ">Our Portfolio</a> -->
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12" data-aos="fade-right">
                                            <img src="<?php echo $record['imagePath'];  ?>" alt="" />
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>


                            <?php

                            $sql = "SELECT * FROM tbl_service_details where ServiceTypeID='5' ";
                            $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
                            $count = mysqli_num_rows($resultset);

                            if ($count == 0) {
                                echo "<center><h4></h4></center>";
                            } else {

                                $k = 0;
                                while ($record = mysqli_fetch_assoc($resultset)) {
                                    if ($k == 0) {
                                        // echo "<h1>No vacancies</h1>";
                                    }
                                    if ($k % 3 == 0) {
                                        // echo "</div>";
                                        echo "<div class='row pt-4 container'>";
                                        // echo "<div class='row'>";

                                    }
                                    $k++;
                            ?>
                                    <div class="col-md-4 col-sm-4 col-xs-4" data-aos="fade-up" data-aos-delay="300">
                                        <h5 class="text-center"><?php echo $record['SubService'];  ?></h5>
                                        <form name="form1" action="services_projects.php" method="get">
                                            <input type="hidden" name="Serv" value="<?php echo $record['ID']; ?>">
                                            <input type="image" src="<?php echo $record['CoverImage'];  ?>" style="width: 350px;" alt="Submit">

                                        </form>
                                    </div>

                            <?php }
                                if ($k % 3 != 0) {

                                    echo "</div>";
                                }
                            } ?>


                            </div>
                            <hr class="pb-3">
                            </section>
                            <!-- 6 -->
                            <?php
                            $sql = "SELECT * FROM tbl_service_menu where ID='6' ";
                            $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

                            while ($record = mysqli_fetch_assoc($resultset)) {
                            ?>

                                <section id="HeavyStructures" class="Irrigation bg-dark text-light pt-4">
                                    <div class="container-fluid" style="padding-left:120px; padding-right:120px">
                                        <h2 class="font-weight-bold text-center pb-4"><?php echo $record['ServiceType'];  ?></h2>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-8 col-xs-8" data-aos="fade-right">
                                                <img src="<?php echo $record['imagePath'];  ?>" alt="" />
                                            </div>
                                            <div class="col-md-6 col-sm-4 col-xs-4" data-aos="fade-up" data-aos-delay="300">
                                                <p class="text-justify pb-4"><?php echo $record['Description1'];  ?></p>
                                                <p class="text-justify pb-4"><?php echo $record['Description2'];  ?></p>
                                                <!-- <a href="#" class="button ">Our Portfolio</a> -->
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>


                                <?php

                                $sql = "SELECT * FROM tbl_service_details where ServiceTypeID='6' ";
                                $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
                                $count = mysqli_num_rows($resultset);

                                if ($count == 0) {
                                    echo "<center><h4></h4></center>";
                                } else {

                                    $k = 0;
                                    while ($record = mysqli_fetch_assoc($resultset)) {
                                        if ($k == 0) {
                                            // echo "<h1>No vacancies</h1>";
                                        }
                                        if ($k % 3 == 0) {
                                            // echo "</div>";
                                            echo "<div class='row pt-4 container'>";
                                            // echo "<div class='row'>";

                                        }
                                        $k++;
                                ?>
                                        <div class="col-md-4 col-sm-4 col-xs-4" data-aos="fade-up" data-aos-delay="300">
                                            <h5 class="text-center"><?php echo $record['SubService'];  ?></h5>
                                            <form name="form1" action="services_projects.php" method="get">
                                                <input type="hidden" name="Serv" value="<?php echo $record['ID']; ?>">
                                                <input type="image" src="<?php echo $record['CoverImage'];  ?>" style="width: 350px;" alt="Submit">

                                            </form>
                                        </div>

                                <?php }
                                    if ($k % 3 != 0) {

                                        echo "</div>";
                                    }
                                } ?>


                                </div>
                                <hr class="pb-3">
                                </section>



                                <!-- 7 -->
                                <?php
                                $sql = "SELECT * FROM tbl_service_menu where ID='7' ";
                                $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

                                while ($record = mysqli_fetch_assoc($resultset)) {
                                ?>

                                    <section id="SlopeStablization" class="GeneralInfrastructure ">
                                        <div class="container-fluid" style="padding-left:120px; padding-right:120px">
                                            <br><br>
                                            <h2 class="font-weight-bold text-center pb-4"><?php echo $record['ServiceType'];  ?></h2>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="300">
                                                    <p class="text-justify pb-4"><?php echo $record['Description1'];  ?></p>
                                                    <p class="text-justify pb-4"><?php echo $record['Description2'];  ?></p>
                                                    <!-- <a href="#" class="button ">Our Portfolio</a> -->
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12" data-aos="fade-right">
                                                    <img src="<?php echo $record['imagePath'];  ?>" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>


                                    <?php

                                    $sql = "SELECT * FROM tbl_service_details where ServiceTypeID='7' ";
                                    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
                                    $count = mysqli_num_rows($resultset);

                                    if ($count == 0) {
                                        echo "<center><h4></h4></center>";
                                    } else {

                                        $k = 0;
                                        while ($record = mysqli_fetch_assoc($resultset)) {
                                            if ($k == 0) {
                                                // echo "<h1>No vacancies</h1>";
                                            }
                                            if ($k % 3 == 0) {
                                                // echo "</div>";
                                                echo "<div class='row pt-4 container'>";
                                                // echo "<div class='row'>";

                                            }
                                            $k++;
                                    ?>
                                            <div class="col-md-4 col-sm-4 col-xs-4" data-aos="fade-up" data-aos-delay="300">
                                                <h5 class="text-center"><?php echo $record['SubService'];  ?></h5>
                                                <form name="form1" action="services_projects.php" method="get">
                                                    <input type="hidden" name="Serv" value="<?php echo $record['ID']; ?>">
                                                    <input type="image" src="<?php echo $record['CoverImage'];  ?>" style="width: 350px;" alt="Submit">

                                                </form>
                                            </div>

                                    <?php }
                                        if ($k % 3 != 0) {

                                            echo "</div>";
                                        }
                                    } ?>


                                    </div>
                                    <hr class="pb-3">
                                    </section>



                                    <!-- 8 -->
                                    <?php
                                    $sql = "SELECT * FROM tbl_service_menu where ID='8' ";
                                    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

                                    while ($record = mysqli_fetch_assoc($resultset)) {
                                    ?>

                                        <section id="ConcreteStructure" class="GeneralInfrastructure bg-dark text-light pt-4">
                                            <div class="container-fluid" style="padding-left:120px; padding-right:120px">
                                                <br><br>
                                                <h2 class="font-weight-bold text-center pb-4"><?php echo $record['ServiceType'];  ?></h2>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12 col-xs-12" data-aos="fade-right">
                                                        <img src="<?php echo $record['imagePath'];  ?>" alt="" />
                                                    </div>
                                                    <div class="col-md-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="300">
                                                        <p class="text-justify pb-4"><?php echo $record['Description1'];  ?></p>
                                                        <p class="text-justify pb-4"><?php echo $record['Description2'];  ?></p>
                                                        <!-- <a href="#" class="button ">Our Portfolio</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>


                                        <?php

                                        $sql = "SELECT * FROM tbl_service_details where ServiceTypeID='8' ";
                                        $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
                                        $count = mysqli_num_rows($resultset);

                                        if ($count == 0) {
                                            echo "<center><h4></h4></center>";
                                        } else {

                                            $k = 0;
                                            while ($record = mysqli_fetch_assoc($resultset)) {
                                                if ($k == 0) {
                                                    // echo "<h1>No vacancies</h1>";
                                                }
                                                if ($k % 3 == 0) {
                                                    // echo "</div>";
                                                    echo "<div class='row pt-4 container'>";
                                                    // echo "<div class='row'>";

                                                }
                                                $k++;
                                        ?>
                                                <div class="col-md-4 col-sm-4 col-xs-4" data-aos="fade-up" data-aos-delay="300">
                                                    <h5 class="text-center"><?php echo $record['SubService'];  ?></h5>
                                                    <form name="form1" action="services_projects.php" method="get">
                                                        <input type="hidden" name="Serv" value="<?php echo $record['ID']; ?>">
                                                        <input type="image" src="<?php echo $record['CoverImage'];  ?>" style="width: 350px;" alt="Submit">

                                                    </form>
                                                </div>

                                        <?php }
                                            if ($k % 3 != 0) {

                                                echo "</div>";
                                            }
                                        } ?>


                                        </div>
                                        <hr class="pb-3">
                                        </section>





                                        <!-- 9 -->
                                        <?php
                                        $sql = "SELECT * FROM tbl_service_menu where ID='9' ";
                                        $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

                                        while ($record = mysqli_fetch_assoc($resultset)) {
                                        ?>
                                            <section id="SpecializedEngineering" class="GeneralInfrastructure ">
                                                <div class="container-fluid" style="padding-left:120px; padding-right:120px">
                                                    <br><br>
                                                    <h2 class="font-weight-bold text-center pb-4"><?php echo $record['ServiceType'];  ?></h2>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="300">
                                                            <p class="text-justify pb-4"><?php echo $record['Description1'];  ?></p>
                                                            <p class="text-justify pb-4"><?php echo $record['Description2'];  ?></p>
                                                            <!-- <a href="#" class="button ">Our Portfolio</a> -->
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12" data-aos="fade-right">
                                                            <img src="<?php echo $record['imagePath'];  ?>" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>


                                            <?php

                                            $sql = "SELECT * FROM tbl_service_details where ServiceTypeID='9' ";
                                            $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
                                            $count = mysqli_num_rows($resultset);

                                            if ($count == 0) {
                                                echo "<center><h4></h4></center>";
                                            } else {

                                                $k = 0;
                                                while ($record = mysqli_fetch_assoc($resultset)) {
                                                    if ($k == 0) {
                                                        // echo "<h1>No vacancies</h1>";
                                                    }
                                                    if ($k % 3 == 0) {
                                                        // echo "</div>";
                                                        echo "<div class='row pt-4 container'>";
                                                        // echo "<div class='row'>";

                                                    }
                                                    $k++;
                                            ?>
                                                    <div class="col-md-4 col-sm-4 col-xs-4" data-aos="fade-up" data-aos-delay="300">
                                                        <h5 class="text-center"><?php echo $record['SubService'];  ?></h5>
                                                        <form name="form1" action="services_projects.php" method="get">
                                                            <input type="hidden" name="Serv" value="<?php echo $record['ID']; ?>">
                                                            <input type="image" src="<?php echo $record['CoverImage'];  ?>" style="width: 350px;" alt="Submit">

                                                        </form>
                                                    </div>

                                            <?php }
                                                if ($k % 3 != 0) {

                                                    echo "</div>";
                                                }
                                            } ?>


                                            </div>
                                            <hr class="pb-3">
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
                                            <script src="js/vendor/odometer.min.js"></script>
                                            <script src="js/main.js"></script>
                                            <script src="js/index1.js"></script>

                                            <!--Bootstrap Js-->
                                            <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
                                            <!--jQuery-->
                                            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
</body>

</html>