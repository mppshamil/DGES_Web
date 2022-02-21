<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
    <style>
        body {
            background: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        page {
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
        }

        page[size="A4"] {
            width: 21cm;
            height: 29.7cm;
        }

        page[size="A4"][layout="portrait"] {
            width: 29.7cm;
            height: 21cm;
        }

        @media print {

            body,
            page {
                margin: 0;
                box-shadow: 0;
            }
        }

        table, td, th {
            border:1px solid rgb(37, 36, 36);
            align-content: center;
        }
            
        /* table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            font-size: 14px;
            
        } */

        tr {
            height: 30px;
        }

        /* td,
        th {
            border: 0px solid black;
            text-align: left;
            padding: 2px;
        } */

        tr:nth-child(even) {
            background-color: white;
        }

        .box1 {
            background-color: white;
            width: 120px;
            border: 1px solid black;
            height: 140px;
        }

        .box {
            background-color: white;
            width: 300px;
            border: 1px solid black;
            height: 140px;
            margin-left: 5px;
        }

        .check {
            background-color: white;
            width: 20px;
            border: 1px solid black;
            height: 20px;

        }

        .checkTick {
            background-color: black;
            width: 20px;
            border: 1px solid black;
            height: 20px;

        }

        .signbox {
            background-color: white;
            width: 220px;
            border: 1px solid black;
            height: 50px;

        }

        @media print {
            .noPrint {
                display: none;

            }
        }

        @page {
            size: auto;
            margin: 0;
        }
    </style>

</head>
<body>
    <page class="mt-4" size="A4">
        <div id="content">
            <form method="post" class="form" style="max-width: none; width: 100%;">
                <div style="padding: 18px;">
                    <h2 class="text-center pb-4 pt-2 fw-bold" >BIO-DATA</h2>
                    <div class="row">
                        <div class="col-6">
                            <!-- <p style="font-size: 14px;font-weight:bold">Personal Details</h6> -->
                            <p style="font-size: 14px;font-weight:bold">Apply For the post of - </h6>
                            <p style="font-size: 14px;font-weight:bold">Division: Civil / <strike>Mechanical</strike> </h6>
                            <p>
                                <img src="assets/img/dges_img/logoFooter.png" style="width: 50%;" alt="">
                            </p>
                            
                        </div>
                        <div class="col-6">
                            <div class="box1" style="float: right; border: none;">
                                <img src="data:image/jpeg;base64,' . base64_encode($row1['PassportSizePhoto']) .  '" class="box1" >
                            </div>
                        </div>
                    </div>
                    <!-- table start -->

                    <table>
                        <tr>
                            <th style="">Name in Full</th>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <th>Age as at March 2021</th>
                            <th class="text-center">Months</th>
                            <td></td>
                            <th class="text-center">Years</th>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <th style="">Contact Mobile Number/s
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <th style="">Email Address</th>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <th style="">Residence Town</th>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <th style="">Highest Academic Qualification</th>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <th style="">Present Occupation & Employer</th>
                            <td colspan="5"></td>
                        </tr> 
                        <tr>
                            <th rowspan="7" style="">Experience in field</th>
                            <th class="text-center">Employer</th>
                            <th class="text-center">Post/ Designation</th>
                            <th class="text-center">From</th>
                            <th class="text-center" colspan="2">To</th>
                        </tr> 

                        <tr>
                            <th></th>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center" colspan=""></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center" colspan=""></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center" colspan=""></th>
                        </tr>
                        <tr>
                            <th></th>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center" colspan=""></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center" colspan=""></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center" colspan="2"></td>
                        </tr>

                        <tr>
                            <th rowspan="3" style="">Remuneration Package (Gross)</th>
                            <th class="text-center">Present</th>
                            <th class="text-center">Expected</th>
                            <th colspan="3" class="text-center">Negotiable</th>
                        </tr> 

                        <tr>
                            <th colspan="1" style=""></th>
                            <th class="text-center"></th>
                            <th class="text-center">Yes</th>
                            <th class="text-center" colspan="2">No</th>
                        </tr>
                        <tr>
                            <th class="text-center">Remarks</th>
                            <td colspan="4"></td>
                        </tr>
                        <tr>
                            <th>If you qualified to recruit Expected date to join/ Notice Period</th>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <th>Non Related Referees in field</th>
                            <th colspan="2" class="text-center">Referee 1</th>
                            <th colspan="3" class="text-center">Referee 2</th>
                        </tr>

                        <tr>
                            <th>Name</th>
                            <td colspan="2"></td>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <th>Occupation</th>
                            <td colspan="2"></td>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <th>Contact Details</th>
                            <td colspan="2"></td>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <th>Email Address</th>
                            <td colspan="2"></td>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <th>Contact Numbers</th>
                            <td colspan="2"></td>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <th>Postal Address</th>
                            <td colspan="2"></td>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <th rowspan="">Special Notes</th>
                            <td colspan="5"></td>                          
                        </tr>
                        <!-- invisible -->
                        <tr style="visibility: collapse;">
                            <td>Civildf</td>
                            <td>Civilsdsdsddsd Status</td>
                            <td>Civil Statusasas</td>
                            <td>Civil Statussdsd</td>
                            <td>Civil Statusfsfs</td>    
                        </tr>
                    </table>
                    <div class="row pt-2">
                        
                        <div class="col-md-6">
                            <p class="pt-3 fw-bold" style="float: left; font-size: 10px;">Dockyard General Engineering Services (Pvt)Ltd</p>
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/dges_img/logo.png" alt="" width="50%" style="float: right;">
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </page>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>