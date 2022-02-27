   
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

        <div class="intro-page-career" style="background-image: url('<?php echo $record['imagepath'];  ?>');">
        <?php } ?>
        <div class="container">
            <h1 style="color:orange">GARCO PRODUCTS</h1>
            <!-- <p>This is the Test Navigation Page</p> -->
        </div>
    </div>

    <!-- content -->
    <figure class="text-center pt-5">
        <blockquote class="blockquote">
            <h2 class="font-weight-bold">High Performance Sprayers Your Business Relies on Everyday</h2>
        </blockquote>
        <figcaption class="blockquote-footer">
        We offer high quality surface preparation equipment and sprayers for applications such as ships, steel and construction.
        </figcaption>
    </figure>





    <!-- products list start -->
    <!-- 1 -->
    <div class="container py-3 px-3 pb-4">
        <!-- <h2 class="font-weight-bold">GARCO Products</h2> -->
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/dges_img/product3.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Wet Abrasive Blast Equipment</h5>
                            <p class="text-muted mb-4">Compared with dry blasting, Graco's Vapor Abrasive blasting solutions
                            eliminate up to 92% of airborne dust, while also saving on cleanup and
                            disposal costs.
                            </p>
                        </div>
                        <br>
                        <button class="align-center btn btn-warning btn-block text-center">View More</button>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/dges_img/product3.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">High Performance Coatings Equipment</h5>
                            <p class="text-muted mb-4">Graco's high performance coatings equipment has the industry's broadest selection of protective coatings sprayers for any job
                            requirement
                            </p>
                        </div>
                        <br>
                        <button class="align-center btn btn-warning btn-block text-center">View More</button>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/dges_img/product3.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Foam and Polyurea Equipment</h5>
                            <p class="text-muted mb-4">Whether you are spraying foam or applying polyurea coatings, Graco
                            Reactor systems help you get the job done with superior results.
                            </p>
                        </div>
                        <br>
                        <button class="align-center btn btn-warning btn-block text-center">View More</button>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/dges_img/product3.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Mortar Equipment</h5>
                            <p class="text-muted mb-4">Graco helps you get the job done fast with piston pumps, rotor
                            stator pumps, mixing pumps and continuous mixers. Compared with
                            traditional rotor stator technology, the piston pump uses less power
                            while meeting performance standards
                            </p>
                        </div>
                        <br>
                        <button class="align-center btn btn-warning btn-block text-center">View More</button>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/dges_img/product3.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Vapor Abrasive Blast</h5>
                            <p class="text-muted mb-4">Dry blast equipment is widely used for surface treatment. However, due to increasingly more strict rules on environmental
                            protection in recent years, customers have started to seek alternative solutions to reduce dust during operations. Vapor
                            </p>
                        </div>
                        <br>
                        <button class="align-center btn btn-warning btn-block text-center">View More</button>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/dges_img/product3.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">High Pressure Airless Sprayers</h5>
                            <p class="text-muted mb-4">For contractors looking for the industry's broadest selection of protective coatings sprayers, Graco
                            offers unmatched high-pressure performance and cost-saving reliability.
                            These rugged sprayers and components are designed to handle some of toughest protective 
                            </p>
                        </div>
                        <br>
                        <button class="align-center btn btn-warning btn-block text-center">View More</button>
                    </div>
                </div>
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