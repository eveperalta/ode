<?php 
    // For Validation Use vendor/validation.php File 
    include 'vendor/values.php';
 ?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="responsive, template, portfolio, html, css, javascript, belal, ab belal" />
    <meta name="author" content="AB Belal">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <title>Beauty Lab | Contact</title>

    <!--favicon icon-->
    <link rel="icon" href="images/fabicon.png">

    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700,900" rel="stylesheet">

    <!-- font awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- flaticon css -->
    <link rel="stylesheet" href="css/flaticon.css">

    <!--html boilarplate css-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/html-boilarplate.css">

    <!--bootstrap min css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

    <!--Menuzord css-->
    <link rel="stylesheet" href="css/menuzord.css">

    <!--nice select css-->
    <link rel="stylesheet" href="css/nice-select.css">

    <!--animate css-->
    <link rel="stylesheet" href="css/animate.min.css">

    <!--slick slider css-->
    <link rel="stylesheet" href="css/slick.slider.css">

    <!--owl carousel css-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!--venobox css-->
    <link rel="stylesheet" href="css/venobox.css">

    <!--Padding margin css-->
    <link rel="stylesheet" href="css/padding.margin.css">

    <!-- style css -->
    <link rel="stylesheet" href="style.css">

    <!--responsive css-->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- JQuery Form Validation CSS -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css" rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- ======================================= 
            ==Start Popup search section==  
        =======================================-->
    <div id="custom_modal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <img src="images/search_popup_logo.png" alt="search_popup_logo">
            <form action="" class="form-inline">
                <input type="text" name="search" placeholder="Search here...">
                <button><i class="fa fa-search"></i></button>
            </form>
            <div class="quick_search">
                <h6 class="color_ff pos_relative ptb_30">Quick search</h6>
                <ul>
                    <li><a href="#">parlour</a></li>
                    <li><a href="#">massage</a></li>
                    <li><a href="#">yoga</a></li>
                    <li><a href="#">spa</a></li>
                    <li><a href="#">beauty</a></li>
                    <li><a href="#">exparts</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ======================================= 
            ==End Popup search section==  
    =======================================-->

    <!-- ======================================= 
            ==Start quick book section==  
    =======================================-->
    <div class="quick_booking session_booking_wrapper">
        <p class="click_btn text-capitalize">Book a Reservation</p>
        <p class="title">Book A Session Now and take your place for best service</p>
        <form action="book.php" method="post" class="clearfix">
            <input type="text" class="form-control" id="client_name" placeholder="Your Name" required />
            <input type="text" class="form-control" id="phone_number" placeholder="Phone Number" />
            <input type="email" class="form-control" id="client_Email" placeholder="Email Address" required />

            <div class="input-group date form-control" id="datetimepicker2">
                <input type="text" readonly="readonly" class="form-control" placeholder="Date and Time" required />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>

            <select class="form-control wide mr_30" name="beauty-service" required>
                <option selected>Service</option>
                <option value="facial">Facials</option>
                <option value="nailCare">Nail Care</option>
                <option value="eyeCare">Eye Care</option>
                <option value="waxing">Waxing</option>
                <option value="makeup">Make-Up</option>
            </select>

            <select class="form-control wide" name="beauty-expart" required>
                <option selected>Beauty Expart</option>
                <option value="sokhina">Hero Alom</option>
                <option value="jorina">Apo Biswas</option>
                <option value="jerin">Jerin Shikdar</option>
                <option value="jerin">Subrina Tasnim</option>
            </select>
            <button type="submit">Make a Reservation</button>
        </form>
    </div>
    <!-- ======================================= 
            ==End quick book section==  
    =======================================-->

    <!-- ======================================= 
            ==Start Header section==  
        =======================================-->
    <section class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 clearfix">
                    <div class="opening_time pull-left"><i class="fa fa-clock-o color_d5"></i> <span class="color_dd">Opening Hour: Mon - Fri : 09:00 - 18:00</span> </div>
                    <div class="contact_mail pull-right"> <a href="#" class="color_dd"><i class="fa fa-envelope color_d5"></i>info@beautylab.com</a> <span>/</span> <a href="#" class="color_dd"><i class="fa fa-phone color_d5"></i>1800-111-333</a> </div>
                </div>
            </div>
        </div>
    </section>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="beauty">
                        <div id="menuzord" class="menuzord">
                            <a href="javascript:void(0)" class="menuzord-brand"><img id="logo" src="images/logo.png" alt="logo"></a>
                            <ul class="menuzord-menu menuzord-right">
                                <li class="active"><a href="#" title="Home">Home</a>
                                    <ul class="dropdown triangle">
                                        <li><a href="index.html">Home-1 </a></li>
                                        <li><a href="index_2.html">Home-2</a></li>
                                        <li><a href="index_3.html">Home-3</a></li>
                                        <li><a href="index_4.html">Home-4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" title="Service">Service</a>
                                    <ul class="dropdown triangle">
                                        <li><a href="service.html">Service page</a></li>
                                        <li><a href="service_details.html">Service Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="booking.html" title="Booking">Booking</a></li>
                                <li><a href="#" title="Pages">pages</a>
                                    <ul class="dropdown triangle">
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="gallery.html">gallery</a></li>
                                        <li><a href="product_details.html">product details</a></li>
                                        <li><a href="error.html">404 page</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" title="Shop">Shop</a>
                                    <div class="megamenu">
                                        <div class="megamenu-row">
                                            <div class="col3 clearfix">
                                                <ul>
                                                    <li>
                                                        <h6>Shop Full Width</h6>
                                                    </li>
                                                    <li><a href="shop_fullwidth.html">Shop Full Width (4 Column)</a></li>
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <h6>Shop With Sidebar</h6>
                                                    </li>
                                                    <li><a href="shop_left_sidebar.html">Shop (Left Sidebar)</a></li>
                                                    <li><a href="shop_right_sidebar.html">Shop (Right Sidebar)</a></li>
                                                </ul>
                                            </div>

                                            <div class="col3 clearfix">
                                                <ul>
                                                    <li>
                                                        <h6>Shop-Eyelash</h6>
                                                    </li>
                                                    <li><a href="#">Beetroot collection</a></li>
                                                    <li><a href="#">Lobster ravioli</a></li>
                                                    <li><a href="#">Pollo farcito</a></li>
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <h6>Shop-Nail care</h6>
                                                    </li>
                                                    <li><a href="#">organic egg</a></li>
                                                    <li><a href="#">Beetroot collection</a></li>
                                                </ul>
                                            </div>

                                            <div class="col6">
                                                <div class="megamenu_carousel owl-carousel">
                                                    <div class="single_carousel">
                                                        <img src="images/mega_carousel1.jpg" class="img img-responsive" alt="mega_carousel">
                                                    </div>
                                                    <div class="single_carousel">
                                                        <img src="images/mega_carousel2.png" class="img img-responsive" alt="mega_carousel">
                                                    </div>
                                                    <div class="single_carousel">
                                                        <img src="images/mega_carousel3.png" class="img img-responsive" alt="mega_carousel">
                                                    </div>
                                                    <div class="single_carousel">
                                                        <img src="images/mega_carousel4.png" class="img img-responsive" alt="mega_carousel">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/col-->
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#" title="Blog">Blog</a>
                                    <ul class="dropdown triangle">
                                        <li><a href="#">Blog pages</a>
                                            <ul class="dropdown dropdown-left">
                                                <li><a href="blog_fullwidth_1Col.html">Blog full width</a></li>
                                                <li><a href="blog_fullwidth_2Col.html">Blog full width Grid</a></li>
                                                <li><a href="blog_left_sidebar_1Col.html">Blog left sidebar (1 Column)</a></li>
                                                <li><a href="blog_left_sidebar_2Col.html">Blog left sidebar (2 Column)</a></li>
                                                <li><a href="blog_right_sidebar_1Col.html">Blog Right sidebar (1 Column)</a></li>
                                                <li><a href="blog_right_sidebar_2Col.html">Blog right sidebar (2 Column)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog_details.html">blog details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php" title="Contact">Contact</a></li>
                                <li>
                                    <button id="search_button" type="button" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-search"></i></button>
                                </li>
                            </ul>
                        </div>
                        <!--/#menuzord-->
                    </div>
                    <!--/startup menu-->
                </div>
                <!--/col-md-12-->
            </div>
        </div>
    </header>
    <!-- ======================================= 
            ==End Header section==  
    =======================================-->

    <!-- ======================================= 
        ==Start banner section== 
    =======================================-->
    <section class="banner_section contact_banner">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_content">
                        <h4 class="fw_500 color_ff">Contact Us </h4>
                        <p class="color_ff">Welcome to beauty lab, where you can relax and enjoy life.</p>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End banner section==  
    =======================================-->

    <!-- ======================================= 
        ==Start Contact-info section== 
    =======================================-->
    <section class="contact_info_section ptb_90">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_title text-center">
                        <h3 class="color_72 fw_500 pb_10">Our Location</h3>
                        <p class="pb_65">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore etc.</p>
                    </div>
                </div>
            </div>
            <!--/row-->

            <div class="row">
                <div class="col-md-5">
                    <div class="contact_number">
                        <h5 class="color_d5 pb_5 mb_30 pos_relative fw_500">Contact Info</h5>
                        <address>
                            <p class="address"><i class="fa fa-home"></i><span>Address:</span> 121 King St, Melbourne Vic 3000, Australia.</p>
                            <p class="phone"><i class="fa fa-phone"></i><span>Phone:</span> +66 1800-111-333</p>
                            <p class="email"><i class="fa fa-envelope"></i><span>Email:</span> <a href="#">info@beautylab.com</a></p>
                            <p class="web"><i class="fa fa-globe"></i><span>web:</span> <a href="#">www.Beautylab.com</a></p>
                        </address>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="google_map_wrapper">
                        <div id="map" class="mapContact1"></div>
                        <div id="map2" class="mapContact2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End Contact-info section==  
    =======================================-->

    <!-- ======================================= 
        ==Start get in touch section==  
    =======================================-->
    <section class="getin_section pt_70 pb_100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <div class="get_in">
                        <h5 class="color_d5 pb_5 mb_30 pos_relative fw_500">Get In Touch</h5>
                        <!-- new start -->
                        <form action="vendor/validation.php" method="POST" class="clearfix">
                            <div class="form_group">
                                <input type="text" name="name" value="<?php echo fetchV('nameValue');?>" placeholder="Your Name" <?php echo fetch( 'active'); ?> >
                                <span class="error"><?php echo fetch('nameError');?></span>
                            </div>

                            <div class="form_group">
                                <input type="email" name="email" value="<?php echo fetchV('emailValue'); ?>" placeholder="Your Email" data-validation="email">
                                <span class="error"><?php echo fetch('emailError');?></span>
                            </div>

                            <div class="form_group">
                                <input type="text" name="subject" value="<?php echo fetchV('subjectValue'); ?>" placeholder="Subject" data-validation="required">
                                <span class="error"><?php echo fetch('subjectError');?></span>
                            </div>

                            <div class="textarea_group">
                                <textarea name="message" rows="4" placeholder="Your Message" data-validation="required"><?php echo fetchV('messageValue'); ?></textarea>
                                <span class="error"><?php echo fetch('messageError');?></span>
                            </div>

                            <ul class="form_submit">
                                <li>
                                    <button type="submit" class="send_msg" name="submit">send message</button>
                                </li>
                                <li>
                                    <span class="success"><?php echo fetch('successMessage');?></span>
                                    <span class="error"><?php echo fetch('emailSeverError');?></span>
                                </li>
                            </ul>
                        </form>

                        <!-- new end -->
                    </div>
                </div>



                <div class="col-md-4 col-sm-6">
                    <div class="consultant_wrapper">
                        <h5 class="color_d5 pb_5 mb_30 pos_relative fw_500">Our Experts Consultant</h5>
                        <div class="single_consultant">
                            <img src="images/consultant1.jpg" alt="consultant">
                            <div class="content">
                                <a href="#" class="fw_500 roboto color_72">Nicky Cruse</a>
                                <p>Email: nicky@beautylab.com</p>
                                <p>Skype: beautylab.support</p>
                            </div>
                        </div>

                        <div class="single_consultant">
                            <img src="images/consultant2.jpg" alt="consultant">
                            <div class="content">
                                <a href="#" class="fw_500 roboto color_72">Micky Bruse</a>
                                <p>Email: nicky@beautylab.com</p>
                                <p>Skype: beautylab.support</p>
                            </div>
                        </div>
                        <!--/single consultant-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End get in touch section==  
    =======================================-->

    <!-- ======================================= 
        ==Start call to action section==  
    =======================================-->
    <section class="cta_section" data-enllax-ratio="0.15" data-enllax-direction="vertical">
        <div class="cta_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="cta_content">
                        <p>Book a session and get up to <span class="color_d5">25%</span> discount!</p>
                        <a href="#">Book A Session Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End call to action section== 
    =======================================-->

    <!-- ======================================= 
        ==Start footer widget section==  
    =======================================-->
    <section class="footer_widget_section ptb_90">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single_widget contact_widget">
                        <img alt="logo" src="images/widget-logo.png">
                        <p>The beauty lab is a luxury beauty &amp; spa solution. The beauty spa strives to deliver top class.</p>
                        <address>
                                <p class="address"><i class="fa fa-home"></i><span>Address:</span> 121 King St, Melbourne Vic 3000, Australia.</p>
                                <p class="phone"><i class="fa fa-phone"></i><span>Phone:</span> +66 1800-111-333</p>
                                <p class="email"><i class="fa fa-envelope"></i><span>Email:</span> <a href="#">info@beautylab.com</a></p>
                                <p class="web"><i class="fa fa-globe"></i><span>web:</span> <a href="#">www.Beautylab.com</a></p>
                        </address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single_widget recent_post_widget">
                        <h5>Recent Posts</h5>
                        <ul>
                            <li>
                                <p>The power of golden ratio typography cannot be understated. By choosing the..</p>
                                <span>June 23, 2016</span>
                                <a href="#">read more</a>
                            </li>
                            <li>
                                <p>The power of golden ratio typography cannot be understated. By choosing the..</p>
                                <span>June 23, 2016</span>
                                <a href="#">read more</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single_widget newsletter_widget">
                        <h5>Newsletter</h5>
                        <form action="newsletter.php" method="post" class="clearfix">
                            <input type="text" placeholder="Name" id="name" class="form-control">
                            <input type="email" placeholder="Email" id="email" class="form-control">
                            <button type="submit">Send</button>
                        </form>
                    </div>
                </div>
                <!--/col-->
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End footer widget section== 
    =======================================-->

    <!-- ======================================= 
        ==Start footer section==  
    =======================================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; 2017 All rights reserved. Developed <i class="fa fa-heart"></i> by <a target="_blank" href="https://themeforest.net/user/theme_builder">Theme Builder</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ======================================= 
        ==End footer section== 
    =======================================-->

    <!-- ======================================= 
        ==Start scroll top==  
    =======================================-->
    <div class="scroll_top not_visible"><i class="fa fa-angle-up"></i></div>
    <!-- =======================================
        ==End scroll top==  
    =======================================-->
    <!-- jQuary library -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>

    <!-- new start -->
    <!-- JQuery Form Validation -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <script>
        $.validate({
            lang: 'en'

        });

    </script>
    <!-- new end -->

    <!-- others jQuary plugins -->
    <script type="text/javascript" src="js/plugins.js"></script>

    <!--bootstrap min js-->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!--enlux parallux js-->
    <script type="text/javascript" src="js/smoothscroll.min.js"></script>

    <!--Menuzord js-->
    <script type="text/javascript" src="js/menuzord.js"></script>

    <!--nice select js-->
    <script type="text/javascript" src="js/jquery.nice-select.min.js"></script>

    <!--slick slider js-->
    <script type="text/javascript" src="js/slick.slider.js"></script>

    <!--owl carousel js-->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>

    <!--date time picker js-->
    <script type="text/javascript" src="js/moment.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>

    <!--mixitup min js-->
    <script type="text/javascript" src="js/mixitup.min.js"></script>

    <!--masonary js-->
    <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>

    <!--venobox js-->
    <script type="text/javascript" src="js/venobox.min.js"></script>

    <!--price filter js-->
    <script type="text/javascript" src="js/jshashtable-2.1_src.js"></script>

    <!--particle js-->
    <script type="text/javascript" src="js/particles.js"></script>
    <script type="text/javascript" src="js/particle.control.js"></script>

    <!--parallax-->
    <script type="text/javascript" src="js/parallax.min.js"></script>

    <!--vide js for background video-->
    <script type="text/javascript" src="js/jquery.vide.js"></script>

    <!--facts counter js-->
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="js/waypoints.min.js"></script>

    <!--google map js-->
    <script type="text/javascript" src="js/map.control.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMz2bvcqnldyxU6WUh2wuAEjJj11mSlg8&callback=myMap"></script>


    <!-- all jQuary activation code here and always it will be bottom of all script tag -->
    <script type="text/javascript" src="js/activation-jQuary.js"></script>
</body>

<!-- new start -->
<?php 
    session_unset();
    session_destroy(); 
?>
<!-- new end -->

</html>
