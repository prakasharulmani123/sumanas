<?php
$title = "About Sumanas Technologies";
include 'head.php';
?>
<body class="innerpage">
    <?php include 'header.php'; ?>
    <div class="inner-page-heading ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>e-Commerce </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="cms-cont">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="cms-1 ecommerce1">
                        <div class="cms-icon">
                            <p> <img src="images/ecommerce1.png" alt="Magento"></p>
                            <p><strong>Magento</strong></p>
                        </div>
                        <div class="cms-txt"> Open source ecommerce platform supporting higher conversion rates. Magento comes with better user engagement and effective navigation. It houses a plethora of business tools which lead to a better user experience. With 2 distinct platforms of Magento Commerce and Open Source which allow addition of new plugins and implementation of core files with ease. </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="cms-1 ecommerce1">
                        <div class="cms-icon">
                            <p> <img src="images/ecommerce2.png" alt="OpenCart"></p>
                            <p> OpenCart </p>
                        </div>
                        <div class="cms-txt">
                            <p>PHP, Mysql based ecommerce platform with  multilingual support. OpenCart is an online store management software that is  built on a few other HTML components. Moreover it offers support for multiple  currencies and is distributed freely under the General Public License.This  software has undergone multiple revamp sessions and with each launch a  commendable feature has been added to OpenCart. This eCommerce platform has  gained popularity over the years for its ease of use.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="cms-1 ecommerce1">
                        <div class="cms-icon">
                            <p> <img src="images/ecommerce3.png" alt="Shopify"></p>
                            <p><strong>Shopify</strong></p>
                        </div>
                        <div class="cms-txt"> Open source ecommerce platform supporting higher conversion rates. Magento comes with better user engagement and effective navigation. It houses a plethora of business tools which lead to a better user experience. With 2 distinct platforms of Magento Commerce and Open Source which allow addition of new plugins and implementation of core files with ease. </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="cms-1 ecommerce1">
                        <div class="cms-icon">
                            <p> <img src="images/ecommerce4.png" alt="WooCommerce"></p>
                            <p>  WooCommerce </p>
                        </div>
                        <div class="cms-txt"> Greater support for marketing campaigns, collaboration and customer support. SugarCRM generates Sugar which is a web application to power the customer relationship management system. It supports sales force automation and reporting facilities which makes it a popular platform for handling public relations. SugarCRM comes in 4 editions and flexible deployment options make this platform durable and flexible to use.</div>
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
