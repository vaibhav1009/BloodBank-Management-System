<?php
if(isset($_POST['nlemailID']))
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

$nlemailID = $_POST['nlemailID'];
$sql ="use database bd" ;
$sql = " INSERT INTO bd.nlentries (nlemailID) VALUES ('$nlemailID') ";
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
        <title>LNM Blood Donation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content=">LNM Blood Donation">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="images/toplogo.png" />
        

        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="css/animate.css" rel="stylesheet" type="text/css" >
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="css/styles.css" />


    <body> 
        

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


        <!--  HOME BANNER BLOCK  -->

        <section class="section-banner">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="banner-content">
                            <h2>
                                Donate blood, Give a Smile to Someone.
                            </h2>					
                            <h3>You don’t have to have a medical degree to save a life, Just a fair degree of humanity.<br>
                                Give Blood. Save Life.
                            </h3>
                            <a href="donate_blood.php" class="btn btn-slider">GET APPOINTMENT</a>   
                            <!-- Add the Donate Now Blood Link Here  -->
                        </div>
                    </div> <!-- End OF Col-md-12  -->
                </div>
            </div>
        </section>


        <!--  SECTION COUNTER   -->
        <section class="section-counter"  data-stellar-background-ratio="0.3">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="counter-block-1 text-center">
                            <i class="fa fa-heartbeat icon"></i>
                            <span class="counter">3000</span>                            
                            <h4>Successful Smiles</h4>
                        </div>
                    </div> <!--  end .col-lg-3  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="counter-block-1 text-center">
                            <i class="fa fa-stethoscope icon"></i>
                            <span class="counter">5000</span>                            
                            <h4>Happy Donors</h4>
                        </div>
                    </div> <!--  end .col-lg-3  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="counter-block-1 text-center">
                            <i class="fa fa-users icon"></i>
                            <span class="counter">3500</span>                             
                            <h4>Happy Recipient</h4>
                        </div>
                    </div> <!--  end .col-lg-3  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="counter-block-1 text-center">
                            <i class="fa fa-building icon"></i>
                            <span class="counter">100</span>                            
                            <h4>Donation Center</h4>
                        </div>
                    </div> <!--  end .col-lg-3  -->
                </div> <!-- end row  -->
            </div> <!--  end .container  -->
        </section> <!--  end .section-counter -->


        <!--  SECTION - DONATION PROCESS -->
        <section class="section-content-block section-process">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading"><span>Donation</span> Process</h2>
                        <p class="section-subheading">The donation process from the time you arrive center until the time you leave.</p>
                    </div> <!-- end .col-sm-10  -->                    
                </div> <!--  end .row  -->
                <div class="row wow fadeInUp">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="process-layout">
                            <figure class="process-img">
                                <img src="../blood_donation/images/process_1.jpg" alt="process" />
                                <div class="step">
                                    <h3>1</h3>
                                </div>
                            </figure> <!-- end .process-img  -->
                            <article class="process-info">
                                <h2>Registration</h2>   
                                <p>You need to complete a very simple registration form. Which contains all required contact information to enter in the donation process.</p>
                            </article>
                        </div> <!--  end .process-layout -->
                    </div> <!--  end .col-lg-3 -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="process-layout">
                            <figure class="process-img">
                                <img src="../blood_donation/images/process_2.jpg" alt="process" />
                                <div class="step">
                                    <h3>2</h3>
                                </div>
                            </figure> <!-- end .cau<h5 class="step">1</h5>se-img  -->
                            <article class="process-info">                                   
                                <h2>Screening</h2>
                                <p>A drop of blood from your finger will take for simple test to ensure that your blood iron levels are proper enough for donation process.</p>
                            </article>
                        </div> <!--  end .process-layout -->
                    </div> <!--  end .col-lg-3 -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="process-layout">
                            <figure class="process-img">
                                <img src="../blood_donation/images/process_3.jpg" alt="process" />
                                <div class="step">
                                    <h3>3</h3>
                                </div>
                            </figure> <!-- end .process-img  -->
                            <article class="process-info">
                                <h2>Donation</h2>
                                <p>After ensuring and passed screening test successfully you will be directed to a donor bed for donation. It will take only 5-10 minutes.</p>
                            </article>
                        </div> <!--  end .process-layout -->
                    </div> <!--  end .col-lg-3 -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="process-layout">
                            <figure class="process-img">
                                <img src="../blood_donation/images/process_4.jpg" alt="process" />
                                <div class="step">
                                    <h3>4</h3>
                                </div>
                            </figure> <!-- end .process-img  -->
                            <article class="process-info">
                                <h2>Refreshment</h2>
                                <p>You can also stay in sitting room until you feel strong enough to leave our center. You will receive awesome drink from us in donation zone. </p>
                            </article>
                        </div> <!--  end .process-layout -->
                    </div> <!--  end .col-lg-3 -->
                </div> <!--  end .row --> 
            </div> <!--  end .container  -->
        </section> <!--  end .section-process --> 



        

       
        <!-- SECTION CTA  -->   
        <section class="cta-section-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <h2>We are helping people from 5 years</h2>
                        <p>
                            You can give blood at any of our blood donation venues.<br> We have total 100+ donor centers and you may visit any of nearby venue.                            
                        </p>
                        <a class="btn btn-cta-2" href="FindNBC.php">Check Blood Avibility</a>
                    </div> <!--  end .col-md-8  -->
                </div> <!--  end .row  -->
            </div>
        </section> 






        <!--  GALLERY CONTENT  -->
        <section class="section-content-block section-secondary-bg">
            <div class="container">
                <div class="row section-heading-wrapper">
                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Photo Gallery</h2>
                        <p class="section-subheading">Photos of Previos Blood Donation Camps</p>
                    </div> <!-- end .col-sm-10  -->                      
                </div> <!-- end .row  -->
            </div> <!--  end .container -->
            <div class="container-fluid wow fadeInUp">
                <div class="no-padding-gallery gallery-carousel">
                    <a class="gallery-light-box xs-margin" data-gall="myGallery" href="blood_donation/images/gallery_1.jpg">
                        <figure class="gallery-img">
                            <img src="images/gallery_1.jpg" alt="gallery image" />
                        </figure> <!-- end .cause-img  -->
                    </a> <!-- end .gallery-light-box  -->
                    <a class="gallery-light-box xs-margin"  data-gall="myGallery" href="blood_donation/images/gallery_2.jpg">
                        <figure class="gallery-img">
                            <img src="images/gallery_2.jpg" alt="gallery image" />
                        </figure> <!-- end .cause-img  -->
                    </a>
                    <a class="gallery-light-box xs-margin" data-gall="myGallery" href="blood_donation/images/gallery_3.jpg">
                        <figure class="gallery-img">
                            <img src="images/gallery_3.jpg" alt="gallery image" />
                        </figure> <!-- end .cause-img  -->
                    </a> <!-- end .gallery-light-box  -->
                    <a class="gallery-light-box xs-margin"  data-gall="myGallery" href="blood_donation/images/gallery_4.jpg">
                        <figure class="gallery-img">
                            <img src="images/gallery_4.jpg" alt="gallery image" />
                        </figure> <!-- end .cause-img  -->
                    </a>
                    <a class="gallery-light-box xs-margin" data-gall="myGallery" href="blood_donation/images/gallery_5.jpg">
                        <figure class="gallery-img">
                            <img src="images/gallery_5.jpg" alt="gallery image" />
                        </figure> <!-- end .cause-img  -->
                    </a> <!-- end .gallery-light-box  -->
                    <a class="gallery-light-box xs-margin"  data-gall="myGallery" href="blood_donation/images/gallery_6.jpg">
                        <figure class="gallery-img">
                            <img src="images/gallery_6.jpg" alt="gallery image" />
                        </figure> <!-- end .cause-img  -->
                    </a>
                    <a class="gallery-light-box xs-margin" data-gall="myGallery" href="blood_donation/images/gallery_7.jpg">
                        <figure class="gallery-img">
                            <img src="images/gallery_8.jpg" alt="gallery image" />
                        </figure> <!-- end .cause-img  -->
                    </a> <!-- end .gallery-light-box  -->
                    <a class="gallery-light-box xs-margin"  data-gall="myGallery" href="blood_donation/images/gallery_8.jpg">
                        <figure class="gallery-img">
                            <img src="images/gallery_7.jpg" alt="gallery image" />
                        </figure> <!-- end .cause-img  -->
                    </a>
                </div> <!-- end .row  -->
            </div><!-- end .container-fluid  -->
        </section> <!-- end .section-content-block  -->







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
                                            We are working acrross whole over nation, organizing blood donation campaign to grow awareness among the people to donate blood.
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
                                    
                                    
                                    
                                    <form action='index.php' method='POST'>
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
                                            <a href="index.html">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="about-us.html">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                About US
                                            </a>
                                        </li>
                                        <li>
                                            <a href="events.html">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Camps
                                            </a>
                                        </li>
                                        <li>
                                            <a href="gallery.html">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Gallery
                                            </a>
                                        </li>
                                        <li>
                                            <a href="donate_blood.html">
                                                <i class="fa fa-caret-right fa-footer"></i>
                                                Donner`s Section
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Need_blood.html">
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
></body>
</html>


