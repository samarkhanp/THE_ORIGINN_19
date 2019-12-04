<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>The_Originn</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <meta name="GENERATOR" content="Evrsoft First Page">
        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
              rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/venobox/venobox.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="css/style2.css" rel="stylesheet">

        <!-- =======================================================
          Theme Name: TheEvent
          Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
          Author: BootstrapMade.com
          License: https://bootstrapmade.com/license/
        ======================================================= -->
    </head>

    <body>

        <!--==========================
          Header
        ============================-->
        <header id="header" style="background-color: black;">
            <div class="container">

                <div id="logo" class="pull-left">
                    <!-- Uncomment below if you prefer to use a text logo -->
                    <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
                    <a href="#intro" class="scrollto"><img src="img/white_logo-removebg-preview (1).png" alt="" title=""></a>
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="#intro">Home</a></li>
                        <li><a href="index.html#about">About</a></li>
                        <li><a href="index.html#hotels">Pre-Events</a></li>
                        <li><a href="index.html#gallery">Gallery</a></li>
                        <li><a href="index.html#supporters">Collaborators</a></li>
                        <li><a href="index.html#contact">Contact Us</a></li>

                        <!--<li class="buy-tickets"><a href="index.html#buy-tickets">Buy Tickets</a></li>-->
                    </ul>
                </nav>

                <!-- #nav-menu-container -->

            </div>

        </header><!-- #header -->
        <br> <br>
        <br>
        <br>
        <br>


        <!--==========================
          Intro Section
        ============================-->

        <main id="main">

            <section id="contact" class="section-bg wow fadeInUp">

                <div class="container">

                    <div class="section-header">
                        <h2>Book Ticket</h2>
                    </div>
                    <div class="form">
                        <form method="POST" action="PaytmKit/pgRedirect.php">
                            
                            <input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001" hidden="">
                            <input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" hidden="">
                            <input id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" hidden="">
                            <!--<form method="post" action="PaytmKit/pgRedirect.php">-->
                            <div class="form-row">
                                <div class="form-group col-md-6">Booking Id 
                                    <input name="ORDER_ID" value="<?php echo uniqid() ?>" hidden="">
                                    <input name="id" value="<?php echo uniqid() ?>" disabled="">
                                </div>
                                <div class="form-group col-md-6">Amount
                                    <input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
                                           name="xxxx" autocomplete="off"
                                           value="100" disabled="">
                                </div>
                            </div>
                            <hr><br>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="NAME" class="form-control" placeholder="Your Full Name" />
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" name="EMAIL" placeholder="Your Email"  />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="number" name="PHNO" class="form-control" id="name" placeholder="Your Phone Number" />
                                </div>
                                <!--                                <div class="form-group col-md-6">
                                                                    <input type="text" class="form-control" name="email" id="email" placeholder="Your Email"
                                                                           data-rule="email" data-msg="Please enter a valid email" />
                                                                    <div class="validation"></div>
                                                                </div>-->
                            </div>
                            <br>
                            <div class="text-center"><input type="submit" value="Pay Now" ></div>
                        </form>
                    </div>
                </div>
            </section><!-- #contact -->

        </main>


        <!--==========================
          Footer
        ============================-->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 footer-info">
                            <img src="img/log.png" alt="TheEvenet">
                            <p>The India's biggest technical and knowledge summit initiated by the students to create awareness among the latest technologies in the software field.
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h4>Contact Us</h4>
                            <p>
                                Visakhapatnam <br>
                                Andhra Pradesh <br>

                                <strong>Phone:</strong> +91 9581086798 <br> +91 9951745110<br>

                                <strong>Email:</strong> theoriginn01@gmail.com<br>
                            </p>

                            <div class="social-links">
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong>The_Originn</strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
                    -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </footer><!-- #footer -->

        <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/superfish/hoverIntent.js"></script>
        <script src="lib/superfish/superfish.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/venobox/venobox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Contact Form JavaScript File -->
        <script src="contactform/contactform.js"></script>

        <!-- Template Main Javascript File -->
        <script src="js/main.js"></script>
    </body>

</html>