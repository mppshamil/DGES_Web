   
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
    $sql = "SELECT * FROM tbl_header_image where pageCat='services' ";
    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

    while ($record = mysqli_fetch_assoc($resultset)) {
    ?>

        <div class="intro-page" style="background-image: url('<?php echo $record['imagepath'];  ?>');">
        <?php } ?>
        <div class="container">
            <h1 style="color:white">PRODUCTS</h1>
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
                <!-- <a href="contact.php" class="button pt-4">Inquiry</a> -->
                <button type="button" class="button" data-toggle="modal" data-target="#exampleModalCenter">
                    Inquiry
                </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Inquire to Order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                <label for="formGroupExampleInput">Your Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                </div>
                                <div class="form-group">
                                <label for="formGroupExampleInput2">Contact</label>
                                <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="">
                                </div>
                                <div class="form-group">
                                <label for="formGroupExampleInput2">Email</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Message</label>
                                    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Enter the Message" required></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send</button>
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