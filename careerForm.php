<?php
include('session.php');
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>DGES Careers</title>
      <!-- CSS -->
      <link href="css/careers.css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.careers.css" rel="stylesheet">
      <!-- FONT -->
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
        
   </head>
   <body style="background: url(assets/img/dges_img/back.jpg); background-size: cover;">
    
        <!-- CONTAINER -->
        <div class="container d-flex align-items-center min-vh-100">
            <div class="row g-0 justify-content-center">
            <!-- TITLE -->
            <div class="col-lg-4 offset-lg-1 mx-0 px-0">
                <div id="title-container">
                   <h2 class="pb-4" style="color: rgb(136, 136, 136); font-weight: bolder;">DGES CAREERS</h2>
                   <img class="brand-image pb-2" src="assets/img/dges_img/logoFooter.png">
                   <!-- <h3>Please Fill the Form</h3> -->
                   <h6 style="color: rgb(233, 214, 47);">Our dedication to perfection and uncompromising commitment is to deliver highest achievable quality and value for money in a timely and safe manner for engineering projects of any scale regardless of the complexity of the job or environment.</h6>
                </div>
             </div>
            <!-- FORMS -->
            <div class="col-lg-7 mx-0 px-0">
                <div class="progress">
                   <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 0%"></div>
                </div>
                <div id="qbox-container">
                    <form class="needs-validation" id="form-wrapper" method="post" name="form-wrapper" novalidate="">
                        <div id="steps-container">
                            <div class="step">
                                <h4>Have you Worked in a Company before?</h4>
                                <div class="form-check ps-0 q-box">
                                    <div class="q-box__question">
                                    <input class="form-check-input question__input" id="q_1_yes" name="q_1" type="radio" value="Yes">
                                    <label class="form-check-label question__label" for="q_1_yes">Yes</label>
                                    </div>
                                    <div class="q-box__question">
                                    <input  class="form-check-input question__input" id="q_1_no" name="q_1" type="radio" value="No"> 
                                    <label class="form-check-label question__label" for="q_1_no">No</label>
                                    </div>
                                </div>

                                <div class="pt-4"></div>

                                <h4>Apply For:</h4>
                                
                                <fieldset class="row mb-3 mt-3">
                                    <div class="col-sm-12">
                                        <div class="q-box__question">
                                            <input checked class="form-check-input form-check-input question__input" type="radio" name="gridRadios" id="gridRadios1" value="Civil" >
                                            <label class="form-check-label form-check-label question__label" for="gridRadios1">
                                            Civil Engineering
                                            </label>
                                        </div>
                                        <div class="q-box__question">
                                            <input class="form-check-input form-check-input question__input" type="radio" name="gridRadios" id="gridRadios2" value="Mechanical">
                                            <label class="form-check-label form-check-label question__label" for="gridRadios2">
                                            Mechanical Engineering
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>



                           </div>
                           
                           <div class="step">
                              <h4>Provide us with your personal information:</h4>
                             
                              <!-- <div class="mt-2">
                                 <label class="form-label">Age:</label>
                                 <input class="form-control col-6" id="address" name="address" type="text">
                              </div> -->
                              <div class="row">
                                <div class="col-6 mt-3">
                                    <label for="inputEmail4" class="form-label">Age</label>
                                    <input type="text" class="form-control" name="months" placeholder="Months" aria-label="Months">
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="inputPassword4" class="form-label" style="visibility: hidden;">Password</label>
                                    <input type="text" class="form-control" name="yers" placeholder="Years" aria-label="Years">
                                </div>
                              </div>
                              <fieldset class="row mb-3 mt-3">
                                <label class="col-form-label pt-0">Marital Status</label>
                                <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                    Married
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                    Unmarried
                                    </label>
                                </div>
                                </div>
                            </fieldset>
                              <div class="mt-2">
                                 <label class="form-label">Phone / Mobile Number 1:</label> 
                                 <input class="form-control" id="phone1" name="phone" type="text">
                              </div>
                              <div class="mt-2">
                                <label class="form-label">Phone / Mobile Number 2:</label> 
                                <input class="form-control" id="phone2" name="phone" type="text">
                             </div>
                             <div class="mt-2">
                                <label class="form-label">Residence Town:</label> 
                                <input class="form-control" id="residenceTown" name="residenceTown" type="text">
                             </div>
                             <fieldset class="row mb-3 mt-3">
                                <label class="col-form-label pt-0">Gender</label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                        Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        <label class="form-check-label" for="gridRadios2">
                                        Female
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                           </div>

                           
                           <div class="step">

                            <!-- <div class="row"> -->
                               
                                <!-- </div> -->
                                <div class="col-12 mt-3">
                                    <label for="inputName1" class="form-label">Highest Professional Qualification</label>
                                    <input type="text" class="form-control" name="qual" placeholder="Highest Professional Qualification" aria-label="Qualification">
                                </div>
                                <div class="col-12 mt-3">
                                    <label for="inputName1" class="form-label">Highest Academic Qualification</label>
                                    <input type="text" class="form-control" name="qual" placeholder="Highest Professional Qualification" aria-label="Qualification">
                                </div>
                                <div class="col-12 mt-3">
                                    <label for="inputName1" class="form-label">Present Occupation & Employer</label>
                                    <input type="text" class="form-control" name="presentOccu" placeholder="Present Occupation & Employer" aria-label="occupation">
                                </div>
                           </div>
                           <!-- second -->
                           <div class="step">
                            <div class="row">
                                <div><h2>Experience in field</h2></div>

                                <!-- 1 -->
                                    <label for="inputName1" class="form-label pt-4">Employement</label>
                                    <div class="col-6 mt-3" >
                                        <input type="text" class="form-control" name="employer" placeholder="Employer" aria-label="Employer">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="text" class="form-control" name="post" placeholder="Post/Design" aria-label="Post/Design">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="date" class="form-control" name="fromdate" placeholder="Date(From)" aria-label="From">
                                    </div>

                                    <div class="col-6 mt-3">
                                        <input type="date" class="form-control" name="todate" placeholder="Date" aria-label="to">
                                    </div>

                                    <!-- 2 -->
                                    <label for="inputName1" class="form-label pt-4">Employement</label>
                                    <div class="col-6 mt-3" >
                                        <input type="text" class="form-control" name="employer" placeholder="Employer" aria-label="Employer">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="text" class="form-control" name="post" placeholder="Post/Design" aria-label="Post/Design">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="date" class="form-control" name="fromdate" placeholder="Date(From)" aria-label="From">
                                    </div>

                                    <div class="col-6 mt-3">
                                        <input type="date" class="form-control" name="todate" placeholder="Date" aria-label="to">
                                    </div>

                                    <!-- 3 -->
                                    <label for="inputName1" class="form-label pt-4">Employement</label>
                                    <div class="col-6 mt-3" >
                                        <input type="text" class="form-control" name="employer" placeholder="Employer" aria-label="Employer">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="text" class="form-control" name="post" placeholder="Post/Design" aria-label="Post/Design">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="date" class="form-control" name="fromdate" placeholder="Date(From)" aria-label="From">
                                    </div>

                                    <div class="col-6 mt-3">
                                        <input type="date" class="form-control" name="todate" placeholder="Date" aria-label="to">
                                    </div>

                                    <!-- 4 -->
                                    <label for="inputName1" class="form-label pt-4">Employement</label>
                                    <div class="col-6 mt-3" >
                                        <input type="text" class="form-control" name="employer" placeholder="Employer" aria-label="Employer">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="text" class="form-control" name="post" placeholder="Post/Design" aria-label="Post/Design">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="date" class="form-control" name="fromdate" placeholder="Date(From)" aria-label="From">
                                    </div>

                                    <div class="col-6 mt-3">
                                        <input type="date" class="form-control" name="todate" placeholder="Date" aria-label="to">
                                    </div>

                                    <!-- 5 -->
                                    <label for="inputName1" class="form-label pt-4">Employement</label>
                                    <div class="col-6 mt-3" >
                                        <input type="text" class="form-control" name="employer" placeholder="Employer" aria-label="Employer">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="text" class="form-control" name="post" placeholder="Post/Design" aria-label="Post/Design">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="date" class="form-control" name="fromdate" placeholder="Date(From)" aria-label="From">
                                    </div>

                                    <div class="col-6 mt-3">
                                        <input type="date" class="form-control" name="todate" placeholder="Date" aria-label="to">
                                    </div>
                            </div>
                           </div>

                           <!--  -->
                           <div class="step">
                            <div><h2>Remuneration Package (Gross)</h2></div>

                                <!-- <label for="inputName1" class="form-label pt-3">Employement</label> -->
                                <div class="col-6 mt-3" >
                                    <label for="inputName1" class="form-label">Present</label>
                                    <input type="text" class="form-control" name="present" placeholder="Present" aria-label="Present">
                                </div>
                                <div class=" col-6 mt-3">
                                    <label for="inputName1" class="form-label">Expected</label>
                                    <input type="text" class="form-control" name="expected" placeholder="Expected" aria-label="Expected">
                                </div>
                                
                                <fieldset class="row mb-3 mt-3">
                                    <label class="col-form-label pt-0">Negotiable</label>
                                    <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                        Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        <label class="form-check-label" for="gridRadios2">
                                        No
                                        </label>
                                    </div>
                                    </div>
                                </fieldset>
                                <div class="col-12 mt-3">
                                    <label for="Remarks" class="form-label">Remarks</label>
                                    <input type="text" class="form-control" placeholder="Remarks" name="remarks" aria-label="Remarks">
                                </div>
                           </div>

                           <!--  -->
                           <div class="step">
                            <div class="pb-4"><h2>If you are qualified to recruit Expected date to join/ Notice Period</h2></div>

                                <!-- <label for="inputName1" class="form-label pt-3">Employement</label> -->
                                <div class="col" >
                                    <input type="text" class="form-control" name="answer" placeholder="Type here" aria-label="">
                                </div>
                                <!-- file uploader -->
                                <hr>
                                <div class="form-group mt-3">
                                    <label class="mr-2">Upload your CV:</label>
                                    <input type="file" name="file">
                                </div>
                                <hr>
                            
                                <!-- <hr>
                                <input type="submit" class="btn btn-warning">Save</button> -->
                                
                           </div>

                           <!--  -->
                           <div class="step">

                            <div class="row">
                                <div><h2>Non Related Referees in field</h2></div>

                                <!-- 1 -->
                                    <h3 for="inputName1" class="form-label pt-3">Referee 1</h3>
                                    <div class="col-6 mt-3" >
                                        <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name">
                                    </div>
                                    <div class=" col-6 mt-3">
                                        <input type="text" class="form-control" name="Occupation" placeholder="Occupation" aria-label="occupation">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="text" class="form-control" name="Contact1" placeholder="Contact Details" aria-label="Contact Details">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="email" class="form-control" name="Email" placeholder="Email Address" aria-label="Email Address">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="text" class="form-control" name="Contact2" placeholder="Contact Numbers" aria-label="Contact Numbers">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="text" class="form-control" name="PostalAdd" placeholder="Postal Address" aria-label="Postal Address">
                                    </div>
                                <!-- 2 -->
                                    <h3 for="inputName1" class="form-label pt-4">Referee 2</h3>
                                    <div class="col-6 mt-3" >
                                        <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name">
                                    </div>
                                    <div class=" col-6 mt-3">
                                        <input type="text" class="form-control" name="Occupation" placeholder="Occupation" aria-label="occupation">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="text" class="form-control" name="Contact1" placeholder="Contact Details" aria-label="Contact Details">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="email" class="form-control" name="Email" placeholder="Email Address" aria-label="Email Address">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="text" class="form-control" name="Contact2" placeholder="Contact Numbers" aria-label="Contact Numbers">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <input type="text" class="form-control" name="PostalAdd" placeholder="Postal Address" aria-label="Postal Address">
                                    </div>
                            </div>
                           </div>

                           <!--  -->
                           <div class="step">
                            <div class="pt-4 pb-4">
                                <h2>Special Notes</h2>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="notes" placeholder="Special Notes" aria-label="Notes">
                            </div>
                           </div>

                            <!--  -->
                            <div class="step">
                                <div class="mt-1">
                                    <div class="closing-text">
                                        <h4>That's about it! Have a great future!</h4>
                                        <p>We will assess your information and will let you know soon if you are selected.</p>
                                        <p>Click on the submit button to continue.</p>
                                    </div>
                                </div>
                            </div>
                           
                           <div id="success">
                              <div class="mt-5">
                                 <h4 class="text-success">Success! We'll get back to you ASAP!</h4>
                                 <p></p> 
                                 <a class="back-link text-dark" href="Logout.php" >Go back from Home Page ➜</a>
                              </div>
                           </div>
                        </div>
                        <div id="q-box__buttons">
                           <button id="prev-btn" type="button">Previous</button> 
                           <button id="next-btn" type="button">Next</button> 
                           <button id="submit-btn" onclick="" type="submit">Submit</button>
                        </div>
                     </form>
                </div>
             </div>
            </div>
        </div>

        <div id="preloader-wrapper">
            <div id="preloader"></div>
            <div class="preloader-section section-left"></div>
            <div class="preloader-section section-right"></div>
         </div>

         <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="js/careers.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.tabledit.js"></script>
        
   </body>
</html>