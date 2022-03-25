
<?php
include_once("db_connect.php");
$msg="";

if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$subject=$_POST['subject'];
$message=$_POST['message'];
	
$html="<table><h2>Dear Company,</h2><tr><td><h3>Name: <h3></td><td>$name</td></tr><tr><td><h3>Email: <h3></td><td>$email</td></tr><tr><td><h3>Phone No: <h3> </td><td>$number</td></tr><tr><td><h3>Message: <h3></td><td>$message</td></tr><h2>Thank You & Best Regards.</h2></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="racheltaylor0002@gmail.com";
	$mail->Password="dtslife$1000";
	$mail->SetFrom("racheltaylor0002@gmail.com");
	$mail->addAddress("racheltaylor0002@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="$subject";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
 	$mail->send();
	

}


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
      
            <div class="container">
                <h1 style="color:white">CONTACT US</h1>
            </div>
        </div>

        <div class="wrapper">
            <section class="keep-touch pt-5">
                <div class="text-center">
                    <h2>Keep in touch with us!</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <span class="dot-dash dark">.</span>
                    <div class="row container pb-2">
                        <div class="col-md-5">
                            <div class="keep-touch--white text-center">
                                <li class="fa fa-location-arrow"></li>
                                <h4 style="color: black;">Our Address</h4>
                                <p>223, Jayantha Mallimarachchi Mawatha<br>Colombo 14</p>
                                <li class="fa fa-phone"></li>
                                <h4 style="color: black;">Call Us</h4>
                                <p>(+94) 112 527 980<br>(+94) 112 527 980</p>
                                <li class="fa fa-envelope"></li>
                                <h4 style="color: black;">Email Us</h4>
                                <p><a href="mailto:contactus@email.com">info@dges.lk</a></p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="keep-touch--white">
                                <form action="" id="contact" method="post">
                                    <input type="text" placeholder="Name" id="name" name="name">
                                    <input type="text" placeholder="Email"id="email" name="email">
                                    <input type="text" placeholder="Phone Number"id="number" name="number">
                                    <input type="text" placeholder="Subject"id="subject" name="subject">
                                    <textarea name="message" id="message" rows="5" placeholder="Message"></textarea>
                                    <input type="submit" name ="submit" class="submit" class="button small" value="Contact Us">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row pt-5 pb-4" style="background-color: rgb(255, 255, 255);">
            <div class="col-md-6">
                <h2 class="font-weight-bold text-center pb-3">Engineering Services Inquiries </h2>
                <ul class="text-center">
                    <li><p class="fa fa-phone">   Phone: (+94) 112 527 980</p></li>
                    <li><p class="fa fa-fax">   Fax: (+94) 112 522 846</p></li>
                    <li><p class="fa fa-envelope">  Email : info@dges.lk</p> </li>
                </ul>  
                <ul class="pt-5 text-center">
                    <h4 class="text-center" >General Manager –Mr T.G Weerasinghe</h4>
                    <li><p class="fa fa-phone">   Phone: 0777357992</p></li>
                    <li><p class="fa fa-envelope">  Email : tgweera@dges.lk</p> </li>
                </ul>
                <ul class="pt-3 text-center">
                    <h4 class="text-center" >Engineer Manager (Mechanical)- Mr Gihan Bandara</h4>
                    <li><p class="fa fa-phone">   Phone: 0773871551</p></li>
                    <li><p class="fa fa-envelope">  Email : Gihanb@dges.lk</p> </li>
                </ul>
                <ul class="pt-3 text-center">
                    <h4 class="text-center" >Engineer Manager (Civil)- Mr Kolitha Lakpriya</h4>
                    <li><p class="fa fa-phone">   Phone: 0766541341</p></li>
                    <li><p class="fa fa-envelope">  Email : Kolitha@dges.lk</p> </li>
                </ul>
            </div>
            
            <div class="col-md-6">
                <h2 class="font-weight-bold text-center pb-3">
                    Technical Sales Inquiries</h2>
                <ul class="text-center" >
                    <li><p class="fa fa-phone">   Phone: (+94) 112 527 980</p></li>
                    <li><p class="fa fa-fax">   Fax: (+94) 112 522 846</p></li>
                    <li><p class="fa fa-envelope">   Email : info@dges.lk</p> </li>
                </ul>  
                <ul class="pt-5 text-center">
                    <h4 class="text-center" >Technical Sale Manager– Mr Wasantha Fernando</h4>
                    <li><p class="fa fa-phone">   Phone: 0770585293</p></li>
                    <li><p class="fa fa-envelope">  Email : wasantha@dges.lk</p> </li>
                </ul>  
            </div>
        </div>

        <section class="" style="padding-left: 0px; padding-right: 0px;">
            <div class="mapouter"><div class=""><iframe width="100%" height="360" id="gmap_canvas" src="https://maps.google.com/maps?q=dockyard%20general%20engineering%20service&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><style>.mapouter{position:relative;text-align:right;height:360px;width:100%;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:100%;}</style></div></div>
        </section>

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