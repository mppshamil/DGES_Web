

<style>
    .dropdown-menu li {
    position: relative;
    }
    .dropdown-menu .dropdown-submenu {
    display: none;
    position: absolute;
    left: 100%;
    top: -7px;
    }
    .dropdown-menu .dropdown-submenu-left {
    left: 100%;
    left: auto;
    float: left;
    }
    
    .dropdown-menu > li:hover > .dropdown-submenu {
    display: block;
    }

</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-md navbar-white">
                <a href="index.php" ><img class="navbar-brand" src="assets/img/dges_img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto py-4 py-md-0">
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                    
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="services.php" role="button" aria-haspopup="true" aria-expanded="false">SERVICES</a>
                            <ul class="dropdown-menu dropdown-submenu">

                                <li>
                                    <a class="dropdown-item" href="services.php#GeneralInfrastructure">General Infrastructure</a>
                                    
                                </li>

                                <li>
                                    <a class="dropdown-item" href="services.php#Irrigation">Irrigation</a>
                                    
                                </li>
                                <li>
                                    <a class="dropdown-item" href="services.php#PetroChemical">Petrochemical</a>
                                    
                                </li>
                                <li>
                                    <a class="dropdown-item" href="services.php#PowerandEnergy">Power and Energy</a>
                                    
                                </li>
                                <li>
                                    <a class="dropdown-item" href="services.php#LandWater">Land/ Water Based Carriages</a>
                                    
                                </li>
                                <li>
                                    <a class="dropdown-item" href="services.php#HeavyStructures">Heavy Structures</a>
                                    
                                </li>
                                <li>
                                    <a class="dropdown-item" href="services.php#SlopeStablization">Slope Stablization</a>
                                    
                                </li>
                                <li>
                                    <a class="dropdown-item" href="services.php#ConcreteStructure">Concrete Structure Restoration</a>
                                    
                                </li>
                                <li>
                                    <a class="dropdown-item" href="services.php#SpecializedEngineering">Specialized Engineering</a>
                                </li>           
                                <li>
                                    <a class="dropdown-item" href="services.php#SpecializedEngineering">Bridges Building/ Steel Fabrication</a>
                                    
                                </li>  
                            </ul>
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">PRODUCTS</a>
                            <ul class="dropdown-menu dropdown-submenu">

                                <li><a class="dropdown-item" href="productsMarinep.php">Marine Paints</a></li>
                                <li><a class="dropdown-item" href="#">Auto Paint</a></li>
                                <li><a class="dropdown-item" href="productsKemppi.php">KEMPPI Welding Machines</a></li>

                                <li>
                                    <a class="dropdown-item" href="#">
                                        Graco &raquo;
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li>
                                            <a class="dropdown-item" href="productsGarco.php">Graco Spray Equipments</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="ecoquip.php">Graco Ecoquip</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- <li><a class="dropdown-item" href="">Graco Spray Equipments</a></li> -->
                                <!-- <li><a class="dropdown-item" href="">Graco Ecoquip</a></li> -->

                                <!-- <a class="dropdown-item" href="#">Something else here</a>
                                <a class="dropdown-item" href="#">Another action</a> -->
                            </ul>
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">PROJECTS</a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <li>
                                    <a class="dropdown-item">Completed Projects &raquo;</a>
                                    <!-- <ul class="dropdown-submenu dropdown-submenu-left dropdown-menu">
                                        <li><a class="dropdown-item" href="">Submenu item 1</a></li>
                                        <li><a class="dropdown-item" href="">Submenu item 2</a></li>
                                        <li><a class="dropdown-item" href="">Submenu item 3</a></li>
                                        <li><a class="dropdown-item" href="">Submenu item 4</a></li>
                                    </ul> -->
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li>
                                            <a class="dropdown-item" href="comBridgesBuilding.php">Bridges Building /Steel Fabrication</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="comGeneralinfra.php">General Infrastructure</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="comIrrigation.php">Irrigation</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="comPetrochemical.php">Petrochemical</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="comPowerEnergy.php">Power and Energy</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="comLandWater.php">Land/ Water Based Carriages</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="comHeavyStruct.php">Heavy Structures</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="comSlopeStab.php">Slope Stablization</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="comConcreteStruct.php">Concrete Structure Restoration</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="comSpecializedEng.php">Specialized Engineering</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="ongoingProjects.php">Ongoing Projects &raquo;</a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li>
                                            <a class="dropdown-item" href="">Bridges Building /Steel Fabrication</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="onGeneralinfra.php">General Infrastructure</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="">Irrigation</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="">Petrochemical</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="">Power and Energy</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="">Land/ Water Based Carriages</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="">Heavy Structures</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="">Slope Stablization</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="">Concrete Structure Restoration</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="">Specialized Engineering</a>
                                        </li>
                                    </ul>
                                </li>                              
                                <!-- <a class="dropdown-item" href="#">Something else here</a>
                                <a class="dropdown-item" href="#">Another action</a> -->
                            </ul>
                        </li>

                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ABOUT US</a>
                            
                            <ul class="dropdown-menu dropdown-submenu">
                                <!-- <li>
                                    <a class="dropdown-item" href="#">
                                    Submenu &raquo;
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li>
                                            <a class="dropdown-item" href="#">Submenu item 2</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                                            <ul class="dropdown-menu dropdown-submenu">
                                            <li>
                                                <a class="dropdown-item" href="#">Multi level 1</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Multi level 2</a>
                                            </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                
                                <li>
                                    <a class="dropdown-item" href="aboutus.php#visionmission">Vision, Mission and Policies</a>
                                </li>
                                <li>
                                <a class="dropdown-item" href="aboutus.php#awards">Our History</a>
                                </li>
                                <li>
                                <a class="dropdown-item" href="aboutus.php#history">Awards & Certifications</a>
                                </li>
                                <li>
                                <a class="dropdown-item" href="aboutus.php#qualityPolicy">Quality Policies</a>
                                </li>
                                <li>
                                <a class="dropdown-item" href="aboutus.php#directors">Directors Profile</a>
                                </li>
                                <li>
                                <a class="dropdown-item" href="aboutus.php#intropageManagementT">Management Team</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link" href="careers.php">CAREERS</a>
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link" href="news.php">NEWS</a>
                        </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link" href="contact.php">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>


