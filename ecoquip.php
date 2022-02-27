   
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

    <script>AOS.init();
    </script>

    <!-- navigation -->
    <div class="navigation-wrap bg-light start-header start-style" style="background-color: rgba(3, 3, 3, 0.712);">

        <?php 
            include('components/navbar.php');
        ?>

    </div>
    <?php
    $sql = "SELECT * FROM tbl_header_Image where pageCat='services' ";
    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

    while ($record = mysqli_fetch_assoc($resultset)) {
    ?>

        <div class="intro-page-career" style="background-image: url('<?php echo $record['imagepath'];  ?>');">
        <?php } ?>
        <div class="container">
            <h1 style="">PRODUCTS</h1>
            <!-- <p>This is the Test Navigation Page</p> -->
        </div>
    </div>

    <!-- content -->
    <div class="wrapper pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div  class="col-md-6"  data-aos="fade-up">
                        <h2 class="font-weight-bold">ECOQUIP</h2>
                        <p class="text-justify">We, Dockyard General Engineering Services (Pvt) Ltd are the local agent for GRACO ECOQUIP in Sri Lanka and providing sales, technical support and after sales services for EcoQuip Vapour Abrasive Blasting Systems.
                            <br>
                            <p class="text-justify">Through countless hours of research, engineering and testing, Graco has made an abrasive blast system faster than dry blasting, easier to use, and more reliable in the field.
                                With increased blast pressures, a new ventless pot and simplified controls, Graco is confident that EcoQuip2 will change the way you think about vapor abrasive blasting. </p>
                        </p>
                    </div>
                    <div class="col-md-6 pt-4" data-aos="fade-right">
                        <img src="assets/img/products/ECOQUIP.jpg" alt="" />
                    </div>
                    
                </div>
            </div>
            <div class="text-center pt-3"  data-aos="fade-left">
                <a href="contact.php" class="button pt-4">Inquiry</a>
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