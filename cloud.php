<?php
$title = "Sumanas Tech Career Opportunities";
include 'head.php';
?>
<body class="innerpage">
    <?php include 'header.php' ?>
    <div class="inner-page-heading ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>Open Source  </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="cms-cont">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="cms-1 crm">
                        <div class="cms-icon">
                            <p> <img src="images/could1.png" alt="Amazon Web Services"></p>
                            <p><strong>Amazon Web Services</strong></p>
                        </div>
                        <div class="cms-txt">
                            <p>On-demand cloud services with large scale computing  capabilities. AWS offers greater computing capacity and offers atabase storage.  This helps your business scale from all fronts. Amazon Web Services are unique  and reliable that contributes towards building sophisticated applications. Customers  can customize the services to fit their requirement with its ease-of-use  deployment services.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="cms-1 crm">
                        <div class="cms-icon">
                            <p> <img src="images/could2.png" alt="Google Cloud Platform"></p>
                            <p>Google Cloud Platform </p>
                        </div>
                        <div class="cms-txt">
                            <p>Modular cloud services with greater data storage and  analytics capacity. The cloud services of Google are powered by the same  infrastructure that it uses to fuel its other core products. It offers modular  services that make it possible to empower machine learning. The platform has  been updated to accommodate even more competent features in the long run.</p>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6  col-md-offset-3 col-lg-offset-3">
                    <div class="cms-1 crm">
                        <div class="cms-icon">
                            <p> <img src="images/could3.png" alt="Microsoft Azure"></p>
                            <p><strong>Microsoft Azure</strong></p>
                        </div>
                        <div class="cms-txt"> Cross platform, open source technology that fuels Javascript execution. Node.js is extremely fast and supports event driven programming. Its asynchronous functioning and single-thread based functioning make it highly scalable. Node.js reduces processing time extensively and ensures faster execution of applications. Being open source adding new features is extremely easy.</div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"></div>

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
