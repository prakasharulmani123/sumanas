<?php
$title = "Mobile App Development Services in India, Android, iOS, Windows";
include 'head.php';
?>
<body class="innerpage">
    <?php include 'header.php'; ?>
    <div class="inner-page-heading ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>Mobile Application Development </h1>
                    <span>'Becoming visible is now just a tap away!'</span> </div>
            </div>
        </div>
    </div>
    <div class=" ui-ux-cont">
        <div class="container-fluid">
            <div class="row">
                <div class="ui-ux-points1 mobile-app-points">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> <img src="images/mobile-app1.png"  alt="iOS App Development"></div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <h2>1. iOS App Development </h2>
                        <p> The potential leader, slaying the Smart Phone's world just like a virtuoso! With the inception of Apple devices, you definitely would have experienced the greatest transformation budge! Everything appears fast..The processing Speed, The display Rate and then to what not? </p>
                        <p> We devise the perfect apps, envisaging your requirement plate into a great finished product. With our in-depth expertise in the integrated development environment provided by the iOS, we create apps that stand out. Apps that are not just known for their progressive features, but also their user friendliness and the fact that end users can optimize their use. </p>
                        <p> <strong>Our Services Include: </strong> </p>
                        <ul>
                            <li>Media Support in context with Gaming and Entertainment applications</li>
                            <li>ICS and full browser support</li>
                            <li>Multi-functional mobile application development </li>
                            <li>Flawless Quality testing enabling bug-free operational apps</li>
                            <li>Qualitative application development </li>
                            <li>Dependable and various file formats</li>
                        </ul>
                    </div>
                </div>
                <div class="ui-ux-points1 mobile-app-points">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right"> <img src="images/mobile-app2.png"  alt="Android App Development"></div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <h2> 2. Android App Development </h2>
                        <p> Powering easy build of the apps, with the most vibrant programming language.The construction of the OS captivates many Users. Although iPhone is the leader, most of the world populace operate on the Android OS.
                            Ensuring flexibility and ease of operation makes working with Android much simpler. </p>
                        <p> With the million apps in the Play Store, would you need a firmer index?
                            At Ark Infotec, we utilize the huge potential of the Android OS to deliver apps that meet the highest standards of technical excellence. By doing so, we provide very rich apps to our clients and thus play a very important role in helping them achieve their emphasized growth targets. </p>
                        <p> <strong>Android Development with us:</strong> </p>
                        <ul>
                            <li> Android App GSM, EDGE, CDMA, Bluetooth, Wi-Fi, EV-DO and UMTS 
                                technologies to send/receive data across mobile networks. </li>
                            <li>Android Apps that include libraries for 2D and 3D graphics.</li>
                            <li>Android Apps Interprocess communication (IPC) message passing.</li>
                            <li>Choosing a perfect Android App database: SQLite for data storage.</li>
                            <li>Android App: P2P using Google Talk.</li>
                        </ul>
                    </div>
                </div>
                <div class="ui-ux-points1 mobile-app-points">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> <img src="images/mobile-app3.png"  alt="Windows App Development"></div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <h2> 3. Windows App Development </h2>
                        <p> Preeminent and innovative in establishing a User-friendly Operating system, next venture of Microsoft landed on making a creative genesis that could impact the Smart Phone world! "Windows taking over Symbian",turned a breakthrough, for the makers of the Windows Phone! </p>
                        <p> Ark infotec developers are well versed with Windows Mobile Operating system. We believe that it's only the Users satisfaction that drives the success of any solution irrespective of the platform on which it is founded. </p>
                        </p>
                        <p> <strong> Our Process includes : </strong> </p>
                        <ul>
                            <li>Windows App conceptualization and Design</li>
                            <li>Porting and migration</li>
                            <li>Windows App Testing & Analysis.</li>
                            <li>Windows App support, maintenance, and progressive upgrades.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'include/clients.php' ?>
        <?php include 'include/get_in_touch.php'; ?>
    </div>
    <?php include 'include/footer_inner.php' ?>
    <div class="drawermenu-overlay"></div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
    <script src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/npm.js"></script> 

<!--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>--> 
    <!-- 
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> --> 

    <script type="text/javascript" src="js/scrolloverflow.js"></script> 
    <script type="text/javascript" src="js/jquery.fullpage.js"></script> 
    <script type="text/javascript" src="js/examples.js"></script> 
    <!--<script type="text/javascript" src="js/isotope.pkgd.min.js"></script> 
    <script src="js/imagesloaded.pkgd.min.js"></script> --> 
    <script src="js/owl.carousel.min.js"></script> 
    <script type="text/javascript" src="js/jquery.es-drawermenu.js"></script> 
    <script src="js/metisMenu.js"></script> 
    <script type="text/javascript">


        $(document).ready(function () {

            $('#fullpage').fullpage({
                navigation: false,
                responsiveWidth: 1000
            });
            $(document).on('click', '.moveDown', function () {
                $.fn.fullpage.moveSectionDown();
            });



            $('#clients-carousel').owlCarousel({
                loop: true,
                margin: -1,
                responsiveClass: true,
                nav: false,
                navText: [
                    "<i class='fa fa-angle-left'> </i>",
                    "<i class='fa fa-angle-right'> </i>"],
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 3,
                    },
                    1000: {
                        items: 4,
                    }
                }
            })

            $('#team').owlCarousel({
                loop: true,
                margin: 15,
                responsiveClass: true,
                nav: false,
                navText: [
                    "<i class='fa fa-angle-left'> </i>",
                    "<i class='fa fa-angle-right'> </i>"],
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 2,
                    }
                }
            })


            $('#portfolio').owlCarousel({
                loop: true,
                margin: 15,
                responsiveClass: true,
                nav: false,
                navText: [
                    "<i class='fa fa-angle-left'> </i>",
                    "<i class='fa fa-angle-right'> </i>"],
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 2,
                    }
                }
            })



            $('.drawermenu').drawermenu({
                speed: 400,
                position: 'right'
            });


            $(function () {

                $('#auto-collapse-menu-demo').metisMenu();

            });



        });
    </script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script>
        (function ($) {
            $(window).on("load", function () {

                $("#content-1").mCustomScrollbar({
                    /* keyboard default options */
                    keyboard: {
                        enable: true,
                        scrollType: "stepless",
                        scrollAmount: "auto"
                    }
                });

            });
        })(jQuery);
    </script>
</body>
</html>
