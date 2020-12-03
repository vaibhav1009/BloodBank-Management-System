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
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>About Us - Blood Donation - Activism & Campaign HTML5 Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blood Donation - Activism & Campaign HTML5 Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="../blood_donation/images/favicon.png" />
      
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
                            About Us
                        </h3>
                        <p class="page-breadcrumb">
                            <a href="#">Home</a> / About Us
                        </p>
                    </div>
                </div> <!-- end .row  -->
            </div> <!-- end .container  -->
        </section> <!-- end .page-header  -->
        <!-- TEAM SECTION -->
        <section class="section-content-block section-our-team">
            <div class="container wow fadeInUp">
                <div class="row section-heading-wrapper">
                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Who are We ?</h2>
                        <p class="section-subheading">
                        	Donating blood is a selfless act that can help countless number of people. Every year there are number of cases where non availability of a certain blood type has led to circumstances which could have been avoided. Here at our blood donation chain we maintain all the records so that we have all the data and can help you by giving you information of the blood availability at the different locations just by filling up a form from. </p> <p class="section-subheading">


We are a group of students from The LNM Institute of Information Technology, Jaipur who have developed this platform to help people. We have partnered with many hospitals across nations and you can donate your blood only by just filling out a form. Recipients can find out the availability of the blood group from nearest blood bank they need also by filling out a form. We strive for a simple and effective method for an important task of donating blood.
                        </p>
                    </div> <!-- end .col-sm-10  -->    
                </div> <!-- end .row  --> 
            </div> <!-- end .container  -->
        </section> <!--  end .section-our-team -->



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




       
        <!-- CLIENT TESTIMONIAL SECTION  -->
        <section class="section-content-block section-client-testimonial">
            <div class="container"> 
                <div class="testimonial-container text-center">
                    <div class="col-md-10 col-md-offset-1 col-sm-12">
                        <div class="testimony-layout-1">
                            <h3 class="people-quote">Donor Opinion</h3>
                            <p class="testimony-text">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                I proudly donate blood on a regular basis because it gives others something they desperately need to survive. Just knowing I can make a difference in someone else’s life makes me feel great!                                 
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>
                            <h6>Fasu Mundra</h6>
                            <span>Note 7 Pro User</span>
                        </div> <!-- end .testimony-layout-1  -->
                    </div> <!--  end col-md-10  -->
                    <div class="col-md-10 col-md-offset-1 col-sm-12">
                        <div class="testimony-layout-1">
                            <h3 class="people-quote">Donor Opinion</h3>
                            <p class="testimony-text">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                I have been a donor since high school. Although I have not been a donor every year, I always want to give to the human race. I love to help others! Moreover it gives a real peace in my mind.                                   
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>
                            <h6>Kasu Mundra</h6>
                            <span>MEME UI User</span>
                        </div> <!-- end .testimony-layout-1  -->
                    </div> <!--  end col-md-10  -->
                    <div class="col-md-10 col-md-offset-1 col-sm-12">
                        <div class="testimony-layout-1">
                            <h3 class="people-quote">Recipient Opinion</h3>
                            <p class="testimony-text">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                I wish I could tell you my donor how grateful I am for your selfless act.You gave me new life. We may be coworkers or schoolmates or just two in the same community.I'm very grateful to you.                                   
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>
                            <h6>Vasu Mundra</h6>
                            <span>COA Group Leader</span>
                        </div> <!-- end .testimony-layout-1  -->
                    </div> <!--  end col-md-10  --> 
                </div>  <!--  end .row  -->   
            </div> <!-- end .container  -->
        </section> <!--  end .section-client-testimonial --> 



        <!-- HIGHLIGHT CTA  -->   
        <section class="cta-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2>We are helping people from 5 years</h2>
                        <p>
                            You can give blood at any of our blood donation venues.<br> We have total 100+ donor centers and you may visit any of nearby venue.                            
                        </p>
                    </div> <!--  end .col-md-8  -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <a class="btn btn-cta-1" href="FindNBC.php">Check Blood Avibility</a>
                    </div> <!--  end .col-md-4  -->
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
                                    
                                    
                                    
                                    <form action='about-us.php' method='POST'>
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