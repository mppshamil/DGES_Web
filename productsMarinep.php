   
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

<div class="intro-page" style="background-image: url('<?php echo $record['imagepath'];  ?>');">
        <?php } ?>
        <div class="container">
            <h1 class="text-warning" style="">PRODUCTS</h1>
            <!-- <p>This is the Test Navigation Page</p> -->
        </div>
    </div>

    <!-- content -->
    <div class="wrapper pt-5 pb-2 container-fluid" style="background: rgb(234, 241, 240);">
            <div class="">
                <div class="row">
                    <div  class="col-md-9"  data-aos="fade-up">
                        <h1 class="font-weight-bold text-center">SIGMA</h1>
                        <p class="text-justify">We, Dockyard General Engineering Services have been the local agent / distributor for PPG SIGMA Protective & Marine Coatings since 1997.   With the partnership of PPG / SIGMA, we have set new heights in corrosion control and asset protection in Sri Lanka where Industry people were identified has lack of knowledge on the subject. We have taken a leading role on corrosion control conducting free training programs for all concerned including engineers, consultants, architects, quantity surveys, contractors, painters, fabricators and so on since 2000. We have been able to upgrade and March from the available Market Knowledge and upgrade with the Local requirements and International norms and this has benefitted Levels such as Consultants, Engineering professionals, specially Contractors etc to propose the solutions after evaluating the Right environment category ranging from and also to establish the Required durability Range and turn around to finally save High Cost of Corrosion in Many projects.
                        </p>
                    </div>
                    <div class="col-md-3 pt-4" data-aos="fade-right">
                        <img src="assets/img/products/sigma.jpg" alt=""/>
                    </div>
                </div>
            </div>
            <div class="text-center pt-3"  data-aos="fade-left">
                <!-- <a href="contact.php" class="button pt-4">Inquiry</a> -->
                 <!-- Button trigger modal -->
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

    <!--  -->
    <div class="container pb-4 pt-4">
        <h2 class="font-weight-bold">Protective Coating Solutions</h2>
        <P>PPG delivers protective coating solutions for a wide range of industries. Whether our customers need proven protection from corrosion, high temperatures and fire or want to ensure durability and aesthetic performance that will protect valuable assets, we have the advanced coating systems that can meet the specific needs of any environment.</P>
        <p class="pb-5">Compact, lightweight and capable. Our MMA welding equipment meets professional welding demands in every respect. Arc ignition and stability dynamic control ensure that every electrode burns effortlessly to produce quality welds. All models are power generator compatible and able to operate in a wide range of conditions from sub zero temperatures to desert heat.</p>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/SIGMAProducts/protective/1.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Infrastructure</h5>
                            <p class="text-muted mb-4">Our advanced coatings and systems for civil and commercial infrastructure deliver proven protection from corrosion, high-temperatures and fire to ensure durability and aesthetic performance that will protect your valuable assets.</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/SIGMAProducts/protective/2.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Rail</h5>
                            <p class="text-muted mb-4">We provide specialized coatings for the rail industry and assets including hopper car linings, tank linings and rail car exterior coatings with specific areas of coating protection including durable corrosion resistance.</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/SIGMAProducts/protective/3.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Mining</h5>
                            <p class="text-muted mb-4">Our durable advanced coating systems are designed to protect and extend the operational life of mining facilities and equipment and are produced to meet the environmental conditions found in surface mining, underground mining, dredging and in-situ mining.</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/SIGMAProducts/protective/4.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Oil, Gas & Chemical</h5>
                            <p class="text-muted mb-4">World-class protective coatings with an unrivalled track record of meeting the challenging needs and harsh conditions of the oil, gas and chemical processing industries.  Supplying comprehensive fire protection solutions and durable finishes.</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/SIGMAProducts/protective/5.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Power</h5>
                            <p class="text-muted mb-4">We are an established and trusted coating supplier for all aspects of the power industry with world- class coatings solutions suitable for major power sections around the world including power generation, fossil, nuclear, hydroelectric and wind.</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

            <!--  -->
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/SIGMAProducts/protective/6.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Water & Wastewater</h5>
                            <p class="text-muted mb-4">Protect water and waste assets with coatings that provide a resilient barrier, supporting long-term asset protection and decreasing maintenance cost for areas such as treatment facilities, water storage tanks, potable water, storm sewers and wastewater transmission pipelines.</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/SIGMAProducts/protective/7.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Fire Protection</h5>
                            <p class="text-muted mb-4">PPG is an industry leader in both Hydrocarbon Passive Fire Protection (PFP) and Cellulosic Passive Fire Protection. Our PPG PITT-CHAR® system has been trusted for decades to protect safety critical structures and equipment in hazardous environments, particularly in the oil and gas industries.</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/SIGMAProducts/protective/8.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">High-Temperature Resistance</h5>
                            <p class="text-muted mb-4">Protect assets and minimize downtime by utilizing quality products, designed to withstand extreme high temperatures while also offering protection against corrosion in industries such as petrochemical, power, manufacturing and military.</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/SIGMAProducts/protective/9.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Tank Lining</h5>
                            <p class="text-muted mb-4">Benefit from our expertise in specialised coating solutions for tank linings that deliver high performance standards in service, facilitates quality of application and offers productivity and longevity.</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/SIGMAProducts/protective/10.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Flooring</h5>
                            <p class="text-muted mb-4">PPG FLOORING coating systems combine PPG's coating expertise and exceptional service. Our epoxy floor systems are engineered to work together from self leveling epoxy floor coatings to urethane cement resurfacing products. These high performance floor systems are made for commercial and industrial epoxy flooring.</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- MARINE COATING SOLUTIONS -->
    <div class="container py-3 px-3 pb- 4">
        <h2 class="font-weight-bold">Marine Coating Solutions</h2>
        <p class="pb-5">Trust the world leader in marine coatings to provide products and services that protect customers' assets in some of the world's most demanding sea conditions and environments. We provide advice, support and coatings for new build and inland marine vessels, dry dock assets, sea stock and offshore facilities.</p>
        
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                        src="assets/img/SIGMAProducts/Marine/1.jpg"
                        class="card-img-top"
                        alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">New Build</h5>
                            <p class="text-muted mb-4">We are one of the largest suppliers of coating solutions to new-build shipyards with advanced coating systems that provide maximum corrosion protection in harsh environmental conditions.</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                        src="assets/img/SIGMAProducts/Marine/2.jpg"
                        class="card-img-top"
                        alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Dry Docking</h5>
                            <p class="text-muted mb-4">Protect valuable assets and reduce ongoing maintenance costs of vessels with our proven marine coatings which deliver consistent performance and long-lasting protection in all challenging operational conditions.</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/SIGMAProducts/Marine/3.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Inland Marine</h5>
                            <p class="text-muted mb-4">Our product range, engineered to specifically meet the challenges of the inland marine market segment, has made us the industry leader when it comes to protecting the long service lifetime of vessels that operate in inland waterways.</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/SIGMAProducts/Marine/4.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Sea Stock</h5>
                            <p class="text-muted mb-4">Ensure a more productive, longer lifetime for your vessel with coatings that are easy to apply and still perform well in harsh conditions, allowing for cost effective maintenance at sea.</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/SIGMAProducts/Marine/5.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Cargo Hold</h5>
                            <p class="text-muted mb-4">We provide optimal coating solutions in complex situations with our coating systems designed to protect and extend the service life of a ship, particularly the dry cargo hold area which can be exposed to various chemically aggressive environments.</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/SIGMAProducts/Marine/6.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Cargo Tank</h5>
                            <p class="text-muted mb-4">Our range of products offer exceptional resistance to a wide range of chemicals and meet industry demand for a practical solution to the transportation and storage of a wide range of new aggressive fuel mixtures.</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/SIGMAProducts/Marine/7.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Antifouling & Fouling Release</h5>
                            <p class="text-muted mb-4">Choose the right antifouling or fouling-release product engineered to protect ships at new-build and/or dry dock application with a coatings range that supports fuel-saving programs, idle-day tolerance as well as reduction of the environmental footprint.</p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card h-120 mb-4 text-black">
                    <i class=""></i>
                    <img
                    src="assets/img/SIGMAProducts/Marine/8.jpg"
                    class="card-img-top"
                    alt="Apple Computer"
                    />
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Water Ballast Tank</h5>
                            <p class="text-muted mb-4">We have the expertise and proven track record in developing specially formulated heavy-duty epoxy coatings that successfully deliver high performance standards in service, facilitates quality of application and offers productivity to the shipyard.</p>
                        </div>
                        <br>
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