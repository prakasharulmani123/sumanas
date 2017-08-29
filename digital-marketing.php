<?php
$title = "Digital Marketing Services India, SEO, Social Media Marketing";
include 'head.php';
?>
<body class="innerpage">
    <?php include 'header.php'; ?>
    <div class="inner-page-heading ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>Digital Marketing </h1>
                    <span>Taking your brand through the never-heard-before experience </span> </div>
            </div>
        </div>
    </div>
    <div class=" ui-ux-cont">
        <div class="container-fluid">
            <div class="row">
                <div class="ui-ux-points1 digital-points1">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> <img src="images/digital-marketing1.jpg"  alt="Search Engine Optimization ( SEO)"></div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <h2> 1. Search Engine Optimization ( SEO) </h2>
                        <p> Our SEO services are of the finest quality and are targeted towards improving your online visibility. With us your brand will steal the limelight no matter what! </p>
                        <p> <strong> Quick look at how you will get optimized! </strong> </p>
                        <ul>
                            <li> 1. Keyword optimization </li>
                            <li> 2. Website Traffic Analysis </li>
                            <li> 3. Search Engine Rankings </li>
                            <li> 4. Competitor Analysis </li>
                            <li> 5. Web site optimization </li>
                            <li> 6.Link building </li>
                            <li> 7. URL &  Image Optimization </li>
                            <li> 8.Content Optimization </li>
                        </ul>
                    </div>
                </div>
                <div class="ui-ux-points1 digital-points1">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right"> <img src="images/digital-marketing2.png"  alt="Social Media Marketing (SMM)"></div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <h2> 2. Social Media Marketing (SMM) </h2>
                        <p> When the world is hooked to the social media, it's the right time to strike the chord. Our social media marketing helps your business reach out to customers far and wide. </p>
                        <p> <strong> Our Check list includes: </strong> </p>
                        <ul>
                            <li> 1.Live Tweeting </li>
                            <li> 2.Social Seedling </li>
                            <li> 3.Video promotions</li>
                            <li> 4.Publishing/Sponsoring posts in social Media</li>
                        </ul>
                    </div>
                </div>
                <div class="ui-ux-points1 digital-points1">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> <img src="images/digital-marketing3.png"  alt="Content writing"></div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <h2> 3. Content writing </h2>
                        <p> No matter what comes and goes, content is always the king. Our exclusive content writing services are not only of the highest standards but also plagiarism-free!</p>
                        <p> <strong> What's in store! </strong> </p>
                        <ul>
                            <li> 1.Blog Posts </li>
                            <li>2.Product Descriptions </li>
                            <li> 3.Meta data</li>
                            <li>4.Website content </li>
                            <li>5.E-books</li>
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
