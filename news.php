   
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

    <script>
        AOS.init();
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

        <div class="intro-page-career" style="background-image: url('<?php echo $record['imagepath'];  ?>');">
        <?php } ?>
        <div class="container">
            <h1 class="text-warning" style="">PRODUCTS</h1>
            <!-- <p>This is the Test Navigation Page</p> -->
        </div>
    </div>

    <!--  -->
    <div class="container-fluid pb-4 pt-4" style="padding-left: 80px; padding-right: 80px;">
        <h2 class="font-weight-bold">FEATURED NEWS</h2>
        <p class="pb-5">Compact, lightweight and capable. Our MMA welding equipment meets professional welding demands in every respect. Arc ignition and stability dynamic control ensure that every electrode burns effortlessly to produce quality welds. All models are power generator compatible and able to operate in a wide range of conditions from sub zero temperatures to desert heat.</p>
        <div class="row justify-content-center">
            
            <div class="col-md-8 col-lg-6 col-xl-4">
                <a href="">
                    <div class="card h-120 mb-4 text-black">
                        <img
                        src="assets/img/SIGMAProducts/protective/7.jpg"
                        class="card-img-top"
                        alt="Apple Computer"
                        />
                        <div class="card-body">
                            <div class="">
                                <a href=""><h3 class="text-center card-title font-weight-bold">News 1</h3></a>
                                <p class="text-muted mb-4">Our advanced coatings and systems for civil and commercial infrastructure deliver proven protection from corrosion, high-temperatures and fire to ensure durability and aesthetic performance that will protect your valuable assets.</p>
                            </div>
                            <p class="text-info" style="float: right;">Date: 2022-03-03</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4">
                <a href="">
                    <div class="card h-120 mb-4 text-black">
                        <img
                        src="assets/img/SIGMAProducts/protective/5.jpg"
                        class="card-img-top"
                        alt="Apple Computer"
                        />
                        <div class="card-body">
                            <div class="">
                                <a href=""><h3 class="text-center card-title font-weight-bold">News 2</h3></a>
                                <p class="text-muted mb-4">Our advanced coatings and systems for civil and commercial infrastructure deliver proven protection from corrosion, high-temperatures and fire to ensure durability and aesthetic performance that will protect your valuable assets.</p>
                            </div>
                            <p class="text-info" style="float: right;">Date: 2022-03-03</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-md-8 col-lg-6 col-xl-4">
                <a href="">
                    <div class="card h-120 mb-4 text-black">
                        <img
                        src="assets/img/SIGMAProducts/protective/3.jpg"
                        class="card-img-top"
                        alt="Apple Computer"
                        />
                        <div class="card-body">
                            <div class="">
                                <a href=""><h3 class="text-center card-title font-weight-bold">News 3</h3></a>
                                <p class="text-muted mb-4">Our advanced coatings and systems for civil and commercial infrastructure deliver proven protection from corrosion, high-temperatures and fire to ensure durability and aesthetic performance that will protect your valuable assets.</p>
                            </div>
                            <p class="text-info" style="float: right;">Date: 2022-03-03</p>
                        </div>
                    </div>
                </a>
            </div>

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
    <script  src="js/index1.js"></script>

    <!--Bootstrap Js-->
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <!--jQuery-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
</html>