<?php
include_once("db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta http-equiv="Expires" content="Mon, 26 Jul 1997 05:00:00 GMT">
    <meta http-equiv="Pragma" content="no-cache">
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
        .card {
            max-height: 200px;
        }

        .card-title {
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
    $sql = "SELECT * FROM tbl_header_image where pageCat='services' ";
    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

    while ($record = mysqli_fetch_assoc($resultset)) {
    ?>

        <div class="intro-page" style="background-image: url('<?php echo $record['imagepath'];  ?>');">
        <?php } ?>
        <div data-aos="fade-up" class="container">
            <h1 style="color: white; width: 50%;">DGES Careers</h1>
            <p class="text-light">We are 40 years old and what is depicted in these pages will amply illustrate that we have been very busy.</p>
        </div>
    </div>

    <div class="wrapper">
        <section class="our-history">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="assets/img/dges_img/dges.1.jpg" alt="" />
                    </div>
                    <div data-aos="fade-up" class="col-md-7">
                        <h2>Start your Career at DGES</h2>
                        <p class="text-justify">During this journey we have been tasked with some of the largest and most complex assignments in South Asian Heavy Engineering endeavours and technical sales, and we are proud to state that we have delivered our services and products beyond the expectations of our clients.
                            <br><br> Submit your details and attach your CV by clicking the below button.
                            Thank you for taking the time to complete our online employment application. Please fill out the application below as completely as possible.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <hr>

    <div class="bg-light">
    <h2 class="text-center font-weight-bold pt-4 pb-2">AVAILABLE VACANCIES</h2>
    <!-- career list -->

    <?php

    $sql = "SELECT VacancyName,VacDescription,ImagePath FROM tbl_vacancy_insert where status='Active' ";
    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
    $count = mysqli_num_rows($resultset);

    if ($count == 0) {
        echo "<center><h4>There are no vacancies available.</h4></center>";
    } else {
        $k = 0;
        while ($record = mysqli_fetch_assoc($resultset)) {
            if ($k == 0) {
                // echo "<h1>No vacancies</h1>";
            }
            if ($k % 1 == 0){
                // echo "</div>";
                echo "<br>";
                // echo "<div class='row'>";

            }
            $k++;
            ?>
            <div class="container py-3 px-3 pb-3" style="background-color: #FFC300;">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class=" mb-4 text-black">
                            <i class=""></i>
                            <img src="<?php echo $record['ImagePath']?>" class="card-img-top" alt="" style="width: 100%;" />
                            <div class="card-body">
                                <span>
                                    <h2 class="card-title text-center" style="color: white;"><?php echo $record['VacancyName'];  ?></h2>
                                </span>
                                <p class="text-muted" style="color: white;">
                                    <?php echo $record['VacDescription'];  ?>
                                </p>
                                <p></p>
                                <br>
                                <a data-aos="fade-in" href="login.php" target="_blank" class="button" style="background-color:  #626262 ;font-size: 18px;">APPLY HERE</a>
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
    </div>

    </div>


    </div>
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
    <script src="js/index1.js"></script>

    <!--Bootstrap Js-->
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <!--jQuery-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

</body>

</html>