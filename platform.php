<?php
$title = "Online Platforms We Use";
include 'head.php';
?>
<body class="innerpage">
    <?php include 'header.php'; ?>
    <div class="inner-page-heading ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>Platform  </h1>
                    <span>The platforms we work on are diverse and extensive in terms of scalability. </span> </div>
            </div>
        </div>
    </div>
    <div class=" platform-cont">
        <div class="container-fluid">
            <div class="row">


                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 

                    <div class="platform1"> 

                        <a href="cms.php"> </a>

                        <div class="platform1-heading"> CMS </div>

                        <div class="platform1-icon"> <img src="images/platform-icon1.png"  alt="CMS"></div>


                        <p> Our SEO services are of the finest quality and are targeted towards improving your online visibility. With us your brand will steal the limelight no matter what! </p>




                    </div>


                </div>


                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 

                    <div class="platform1 platform2"> 
                        <a href="crm.php"> </a>

                        <div class="platform1-heading"> CRM </div>

                        <div class="platform1-icon"> <img src="images/platform-icon2.png"  alt="CRM"></div>

                        <p> Effective customer relationship management solutions that brings in greater transparency </p>




                    </div>


                </div>


                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 

                    <div class="platform1 platform3"> 

                        <a href="e-commerce.php"> </a>
                        <div class="platform1-heading"> eCommerce </div>

                        <div class="platform1-icon"> <img src="images/platform-icon3.png"  alt="eCommerce"></div>

                        <p> Robust online platforms to build high-end web marketplaces</p>




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
