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
                            <p> <img src="images/opensource1.png" alt="PHP"></p>
                            <p><strong>PHP</strong></p>
                        </div>
                        <div class="cms-txt"> Popular server-side scripting language that comes free and open sourced. PHP is free to download and is highly efficient. This interpreted language is faster at the same simple with respect to the coding aspect. PHP is platform independent and runs across platform offering greater scalability. A key feature of the language isits portability that allows it function on divergent operating systems.</div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="cms-1 crm">
                        <div class="cms-icon">
                            <p> <img src="images/opensource2.png" alt="Ruby on Rails"></p>
                            <p>Ruby on Rails </p>
                        </div>
                        <div class="cms-txt"> Model-view controller with default builds for database and web pages. The MVC structure allows data to be distinguished from its display or presentation. Ruby-on-rails has its own Database Library which simplifies the process of data handling to a major extent. Coding is simplified with its general access to a host of libraries. Session Management and its extensive Ajax functions make this platform more robust. This framework supports the generation of search-engine friendly URLs.</div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="cms-1 crm">
                        <div class="cms-icon">
                            <p> <img src="images/opensource3.png" alt="Node.js"></p>
                            <p>Node.js </p>
                        </div>
                        <div class="cms-txt"> Cross platform, open source technology that fuels Javascript execution. Node.js is extremely fast and supports event driven programming. Its asynchronous functioning and single-thread based functioning make it highly scalable. Node.js reduces processing time extensively and ensures faster execution of applications. Being open source adding new features is extremely easy.</div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="cms-1 crm">
                        <div class="cms-icon">
                            <p> <img src="images/opensource4.png" alt="PYTHON"></p>
                            <p>PYTHON </p>
                        </div>
                        <div class="cms-txt"> High end, general purpose programming language with greater code readability. The pseudo-code behaviour of the language is one of its competent features.Its simple and easy to learn. Being a high level language its absolutely portable and extensible. A set of standard libraries in Python and its document generation features make it highly flexible. Moreover Python excels when it comes to performance and reuse of existing structure.</div>
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
