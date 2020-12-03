<?php
if(isset($_POST['pName']))
{
  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $con = mysqli_connect($servername, $username, $password);

  // Check connection
  if (!$con) {
    die("Connection failed: " .
    mysqli_connect_error());
  }

//echo "Connected successfully";


$pName = $_POST['pName'];
$pPatientName = $_POST['pPatientName'];
$pEmail = $_POST['pEmail'];
$pPhoneNO = $_POST['pPhoneNO'];
$bloodBank = $_POST['bloodBank'];
$pbloodGroup = $_POST['pbloodGroup'];
$pmessage = $_POST['pmessage'];

$sql = " INSERT INTO bd.receiver (pName, pPatientName, pEmail, pPhoneNO, bloodBank, pbloodGroup, pmessage) VALUES ('$pName', '$pPatientName', '$pEmail', '$pPhoneNO', '$bloodBank', '$pbloodGroup', '$pmessage') ";

if($con->query($sql) == true)
{
  echo "successful";
}
else{
  echo "ERROR: $sql <br> $con->error";
}

$con->close();
}
?> 



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Blood Donation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blood Donation - Activism & Campaign HTML5 Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="images/favicon.png" />
     
        
        <link rel="stylesheet" href="../blood_donation/css/bootstrap.min.css" />
        <link href="../blood_donation/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="../blood_donation/css/animate.css" rel="stylesheet" type="text/css" >
        <link href="../blood_donation/css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="../blood_donation/css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="../blood_donation/css/styles.css" />
    <body> 
        <div id="preloader">
            <span class="margin-bottom"><img src="../blood_donation/images/loader.gif" alt="" /></span>
        </div>
    


           <!-- HEADER - H1 -->
        <header class="main-header clearfix">
            <div class="top-bar clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <p>Welcome to LNM blood donations</p>
                        </div>
                        <div class="col-md-4col-sm-12">
                            <div class="top-bar-social">
                                <a href="https://www.facebook.com/lnmiit.ac.in/"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/lnmiit_jaipur?lang=en"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/lnmiit/"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCBndW-qun8prPOmq5kRFbjw"><i class="fa fa-youtube"></i></a>
                            </div>   
                        </div> 
                    </div>
                </div> <!--  End of Container -->
            </div> <!--  End of Top-Bar  -->


            <section class="header-wrapper navgiation-wrapper">
                <div class="navbar navbar-default">			
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo" href="index.php"><img alt="" src="images/logo.png"></a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="drop">
                                     <a href="index.php" title="Home">Home</a>
                                </li>
                                <li><a href="about-us.php" title="About Us">About Us</a></li>
                                <li>
                                    <a href="events.php">Camps</a>
                                </li>

                                <li><a href="gallery.php" title="Gallery">Gallery</a></li>

                                <li><a href="donate_blood.php" title="About Us">Donate Blood</a></li>

                                <li><a href="Need_blood.php">Need Blood</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </header> <!-- End of Main Header  -->



        <!--  PAGE HEADING -->
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3>
                            Need Blood
                        </h3>
                        <p class="page-breadcrumb">
                            <a href="#">Home</a> / Need Blood
                        </p>
                    </div>
                </div> <!-- end .row  -->
            </div> <!-- end .container  -->
        </section> <!-- end .page-header  -->



 <!--  APPOINTMENT SECTION -->
 <section class="section-appointment">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"> 
                <figure class="appointment-img">
                    <img src="images/Space_2.jpg" alt="appointment image">
                </figure>
            </div> <!--  end col-lg-6  -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 
                <div class="appointment-form-wrapper text-center clearfix">
                    <h3 class="join-heading">Find Blood Banks</h3>
                    <form action='Need_blood.php' method='POST' > 
                        <div class="form-group col-md-6">
                            <input id="pName" class="form-control" name="pName" placeholder="Name" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <input id="pPatientName" class="form-control" name="pPatientName" placeholder="Patient Name" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <input id="pEmail" class="form-control" name="pEmail" placeholder="Email" type="email">
                        </div>
                        <div class="form-group col-md-6">
                            <input id="pPhoneNO" class="form-control" name="pPhoneNO" placeholder="Phone" type="number">
                        </div>
                        <div class="form-group col-md-12">
                            <div class="select-style">                                    
                                <select class="form-control" name="bloodBank" id="bloodBank">
                                <option>M.K.Gandhi Blood Bank</option>
                                    <option>SVP Blood Bank</option>
                                    <option>Karma Blood Bank</option>
                                    <option>St.Teresa Blood Bank</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="select-style">                                    
                                <select class="form-control" name="pbloodGroup" id="pbloodGroup">
                                    <option>A+</option>
                                    <option>B+</option>
                                    <option>AB+</option>
                                    <option>O+</option>
                                    <option>A-</option>
                                    <option>B-</option>
                                    <option>AB-</option>
                                    <option>O-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea id="pmessage" class="form-control" rows="4" name="pmessage" placeholder="Your Message..."></textarea>
                        </div>                                                          
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <button id="btn_submit" class="btn-submit" type="submit">find blood bank</button>
                        </div>
                    </form>
                </div> <!-- end .appointment-form-wrapper  -->
            </div> <!--  end .col-lg-6 -->
        </div> <!--  end .row  -->
    </div> <!--  end .container -->
</section>  <!--  end .appointment-section  -->








 <!-- SECTION CTA  -->   
 <section class="cta-section-2">
    <div class="container">
        <div class="row">

           

            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <a class="btn btn-cta-2" href="FindNBC.php">Check Blood Avibility</a>
            </div> <!--  end .col-md-8  -->
        </div> <!--  end .row  -->
    </div>
</section> 



<!-- START FOOTER  -->
<footer>            
            <section class="footer-widget-area footer-widget-area-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="about-footer">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <img src="blood_donation/images/logo-footer.png" alt="" />
                                    </div> <!--  end col-lg-3-->
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <p>
                                            We are Jaipur`s leading and trustful blood donation center.
                                            We are helping by organizing blood donation campaign to grow awareness among the people to donate blood.
                                        </p>
                                    </div> <!--  end .col-lg-9  -->
                                </div> <!--  end .row -->
                            </div> <!--  end .about-footesr  -->
                        </div> <!--  end .col-md-12  -->
                    </div> <!--  end .row  -->
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-widget">
                                <div class="sidebar-widget-wrapper">
                                    <div class="footer-widget-header clearfix">
                                        <h3>Subscribe Us</h3>  





                                    </div>
                                    <p>Signup for regular newsletter to stay up to date with our latest news and Donation Camps.</p>
                                    
                                    
                                    
                                    <form action='Need_blood.php' method='POST'>
                                    <div class="footer-subscription">
                                        <p>
                                            <input id="nlemailID" class="form-control" required="" placeholder="Enter Your Email" name="nlemailID" type="email">
                                        </p>
                                        <p>
                                            <input class="btn btn-default" value="Subscribe Now" type="submit">
                                        </p>
                                    </div>
                                    </form>



                                </div>




                            </div>
                        </div> <!--  end .col-md-4 col-sm-12 -->   						                      
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-widget">
                                <div class="sidebar-widget-wrapper">
                                    <div class="footer-widget-header clearfix">
                                        <h3>Contact Us</h3>
                                    </div>  <!--  end .footer-widget-header --> 
                                    <div class="textwidget">                                       
                                        <i class="fa fa-envelope-o fa-contact"></i> <p><a href="#">help@lnmblooddonation.in</a><br/><a href="#">nirog@lnmblooddonation.in</a></p>
                                        <i class="fa fa-location-arrow fa-contact"><a href="https://www.google.com/maps/dir/23.192815,72.6032892/lnmiit/@25.0448675,71.8980388,7z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x396dba21e8a1d1c9:0x5ab565cce4d44c2b!2m2!1d75.9234891!2d26.9362886"></i> <p>LNMIIT, Jaipur<br/>Rajasthan, India</p></a>
                                        <i class="fa fa-phone fa-contact"></i> <p>Office:&nbsp; 0141 518 9211<br/>Cell:&nbsp; +91 7425030370</p>                              
                                    </div>
                                </div> <!-- end .footer-widget-wrapper  -->
                            </div> <!--  end .footer-widget  -->
                        </div> <!--  end .col-md-4 col-sm-12 -->   
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="footer-widget clearfix">
                                <div class="sidebar-widget-wrapper">
                                    <div class="footer-widget-header clearfix">
                                        <h3>Important Links</h3>
                                    </div>  <!--  end .footer-widget-header --> 
                                    <ul class="footer-useful-links">
                                        <li>
                                            <a href="index.php">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="about-us.php">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                About US
                                            </a>
                                        </li>
                                        <li>
                                            <a href="events.php">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Camps
                                            </a>
                                        </li>
                                        <li>
                                            <a href="gallery.php">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Gallery
                                            </a>
                                        </li>
                                        <li>
                                            <a href="donate_blood.php">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Donner`s Section
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Need_blood.php">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Patient`s Section
                                            </a>
                                        </li>
                                        <li>
                                            <a href="admin/login.php">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Admin Login
                                            </a>
                                        </li>                                       
                                    </ul>
                                </div> <!--  end .footer-widget  -->        
                            </div> <!--  end .footer-widget  -->            
                        </div> <!--  end .col-md-4 col-sm-12 -->    
                    </div> <!-- end row  -->
                </div> <!-- end .container  -->
            </section> <!--  end .footer-widget-area  -->


            <!--FOOTER CONTENT  -->
            <section class="footer-contents">
                <div class="container">
                    <div class="row clearfix">
                            <p class="copyright-text" align = "center"> Copyright © 2020, Made with ❤️ by Vaibhav <br>
                                 All Rights Reserved @LNM Blood Donations </p> 
                    </div> <!-- end .row  -->                                    
                </div> <!--  end .container  -->
            </section> <!--  end .footer-content  -->
        </footer>
        <!-- END FOOTER  -->


     


        <!-- Back To Top Button  -->
        <a id="backTop">Back To Top</a>
        <script src="../blood_donation/js/jquery.min.js"></script>
        <script src="../blood_donation/js/bootstrap.min.js"></script>
        <script src="../blood_donation/js/wow.min.js"></script>
        <script src="../blood_donation/js/jquery.backtop.min.js "></script>
        <script src="../blood_donation/js/waypoints.min.js"></script>
        <script src="../blood_donation/js/waypoints-sticky.min.js"></script>
        <script src="../blood_donation/js/owl.carousel.min.js"></script>
        <script src="../blood_donation/js/jquery.stellar.min.js"></script>
        <script src="../blood_donation/js/jquery.counterup.min.js"></script>
        <script src="../blood_donation/js/venobox.min.js"></script>
        <script src="../blood_donation/js/custom-scripts.js"></script>
    </body>
</html>