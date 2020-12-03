

<!DOCTYPE html>
<html lang="en">
    <head>
    <style>
    table {
border-collapse: collapse;
width: 80%;
color: #800000;
font-family: monospace;
font-size: 25px;
text-align: center;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
th{text-align:center;}
th {
background-color: #FF0000;
color: white;
text-align: center;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
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
        <link href="../blood_donation/css/tab.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="../blood_donation/css/styles.css" />
    </head>
        
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
                            Check Blood Avibility
                        </h3>
                        <p class="page-breadcrumb">
                            <a href="#">Home</a> / Blood Avibility
                        </p>
                    </div>
                </div> <!-- end .row  -->
            </div> <!-- end .container  -->
        </section> <!-- end .page-header  -->



 <!--  APPOINTMENT SECTION -->
 <section class="section-appointment">
    <div class="container wow fadeInUp">
    </div> <!--  end .container -->
</section>  <!--  end .appointment-section  -->




<section class="section-appointment">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs"> 
                <figure class="appointment-img">
                    <img src="images/Space_2.jpg" alt="appointment image">
                </figure>
            </div> <!--  end col-lg-6  -->
        </div> <!--  end .row  -->
    </div> <!--  end .container -->
</section>  <!--  end .appointment-section  -->

<br>
<br>
<h1 align="center" style="color:red;">Available blood list </h1>
<br>
<br>
<table class="center">
<tr>

<th class="text-center">Blood Bank</th>
<th class="text-center">Avilable Blood Group</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "bd");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT BloodGroup, BGBloodbank FROM blood ORDER BY BloodGroup ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo  "</td><td>" . $row["BloodGroup"] . "</td><td>"
. $row["BGBloodbank"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<br>
<br>
<br>



<br>
<h1 align="center" style="color:blue;">Blood Bank List</h1>
<br>
<br>


<table class="center">
<tr>

<th class="text-center">Blood Bank</th>
<th class="text-center">Blood Bank Adress</th>
<th class="text-center">City</th>
<th class="text-center">Pincode</th>
<th class="text-center">Blood Bank Head</th>
<th class="text-center">Contact No.</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "bd");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT bbName, bblocation, bbcity, bbpincode, bbheadName, bbContactNo FROM bloodbank";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo  "</td><td>" . $row["bbName"] . "</td><td>" . $row["bblocation"] . "</td><td>"
 . $row["bbcity"] . "</td><td>" . $row["bbpincode"] . "</td><td>" . $row["bbheadName"] . "</td><td>"
. $row["bbContactNo"]. "</td></tr>"     ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<br>
<br>






     
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
                                    <div class="footer-subscription">
                                        <p>
                                            <input id="mc4wp_email" class="form-control" required="" placeholder="Enter Your Email" name="EMAIL" type="email">
                                        </p>
                                        <p>
                                            <input class="btn btn-default" value="Subscribe Now" type="submit">
                                        </p>
                                    </div>
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



        <!-- Back To Top Button  -->
        <a id="backTop">Back To Top</a>
        <script src="../blood_donation/js/jquery.min.js"></script>
        <script src="../blood_donation/js/tab.js"></script>
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