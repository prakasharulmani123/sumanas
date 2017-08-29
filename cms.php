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
                    <h1>Content Management System  </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="cms-cont">
        <div class="container-fluid">
            <div class="row">





                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <div class="cms-1"> 


                        <div class="cms-icon">

                            <p> <img src="images/cms1.png" alt="WordPress"></p>

                            <p> WordPress </p>



                        </div>

                        <div class="cms-txt"> 
                            With themes and plugins, Wordpress is extremely search-engine friendly. With almost 27% of the top websites powered by Wordpress, this open source CMS makes customizations a cakewalk. The plugin-in architecture along with the template structure makes Wordpress extremely reliable for blog management. Moreover Wordpress is flexible since it supports creation of multiple categories for publishing posts and comes with an integrated link management system.

                        </div>


                    </div>




                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <div class="cms-1"> 


                        <div class="cms-icon">

                            <p> <img src="images/cms2.png" alt="Joomla"></p>

                            <p> Joomla </p>



                        </div>

                        <div class="cms-txt"> 
                            High end features and free commercial extensions makes it the user's best pick. Joomla is absolutely free, open source and also an independently usable framework. With the heart of this CMS built in PHP, it uses more of the OOPs techniques like page caching and support for multiple languages. It offers a great deal of commercial extensions making it one of the widely used content management systems.

                        </div>


                    </div>




                </div>


                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <div class="cms-1"> 


                        <div class="cms-icon">

                            <p> <img src="images/cms3.png" alt="Concrete5"></p>

                            <p> Concrete5 </p>



                        </div>

                        <div class="cms-txt"> 
                            User friendly and competent features like in-context editing. Concrete5 is an open source SMS which supports content publishing on the World Wide Web. It is also a powerful enough in the intranet as well. This CMS calls for minimal technical know-how since it supports version management for each and every page. Features like embedded editor, integrated server caching and search engine optimization gave this CMS a cutting-edge in conversion rates and user engagement.

                        </div>


                    </div>




                </div>







                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <div class="cms-1"> 


                        <div class="cms-icon">

                            <p> <img src="images/cms4.png" alt="October"></p>

                            <p> October </p>



                        </div>

                        <div class="cms-txt"> 
                            Self hosted CMS built with PHP and Laravel framework. It also extends support to MySQL and SQLite for an effective backend management. October CMS is popular for its simplicity since it makes design, editing and development of a website quite easier. October CMS is prominently used as themes which power simple and complicated web developments.  The concept of user permissions and plugins make this platform highly scalable and user-friendly.

                        </div>


                    </div>




                </div>



                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <div class="cms-1"> 


                        <div class="cms-icon">

                            <p> <img src="images/cms5.png" alt="Typo3"></p>

                            <p>Typo3 </p>



                        </div>

                        <div class="cms-txt"> 
                            Free and open source CMS running on multi-servers. Typo3 is written in PHP and distributed under the General Public License. This is CMS is flexible since it allows writing of new functions without having to draft any code. The software comes with multilingual support and is said to house almost 50 languages. A built-in system allows users to publish content in any one of the 50 languages of their choice. This makes Typo3 extremely user-friendly and scalable.

                        </div>


                    </div>




                </div>


                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <div class="cms-1"> 


                        <div class="cms-icon">

                            <p> <img src="images/cms6.png" alt="Drupal"></p>

                            <p> Drupal </p>



                        </div>

                        <div class="cms-txt"> 
                            open source CMS written on PHP that provides a robust backend framework for countless websites across the globe. Drupal is the backbone for about 2.3% of websites since it powers everything from a simple blog to a powerful government website. With features like account registration to page layout customization, Drupal favours developers to a major extent. Modules and themes make this platform convenient to use and easy to customize.

                        </div>


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
