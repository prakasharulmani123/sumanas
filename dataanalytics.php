<?php include 'head.php'; ?>
<body class="innerpage">
    <?php include 'header.php'; ?>
    <div class="inner-page-heading ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>Data Analytics</h1>
                    <span>The power of user behaviour now in your hands </span> </div>
            </div>
        </div>
    </div>
    <div class=" ui-ux-cont">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="data-analytics">
                        <p> It's all about 'DATA'. Your company's progress is always associated with the effective utilization of data. </p>
                        <p> A phase-shift approach is required for handling voluminous data, and that's when Data transforms into Intelligence; Making your data turn into meaningful insights! </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 data-analytics-heading">
                    <h2> Understanding DATA Insights from Sumanas </h2>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="data-analytics-cont">
                        <div class="data-analytics-icon"> <img src="images/data-analytics1.png"  alt="Next-Gen Analytics"></div>
                        <h4> 1.Next-Gen Analytics </h4>
                        <p> A little extra is always loved! With Next Gen Analytics in pace, we transform voluminous data into Big data visualization. </p>
                        <p> Deploying Next-Gen Analytics keeps you closer to the consumers, strengthens  decision-making, improved value chain insights and helps in perfect data analysis. </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="data-analytics-cont">
                        <div class="data-analytics-icon"> <img src="images/data-analytics2.png"  alt="Data Visualization"></div>
                        <h4> 2.Data Visualization </h4>
                        <p> Presenting Data Visually' in a pictorial or graphical format. With Data visualization technique, new patterns and difficult concepts could be significantly understood.</p>
                        <p> A wise investment you make to your Big data Future. </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="data-analytics-cont">
                        <div class="data-analytics-icon"> <img src="images/data-analytics3.png"  alt="Business Intelligence"></div>
                        <h4> 3.Business Intelligence </h4>
                        <p> Business Intelligence enables you to know more about the Business and the Market. Incorporating Business Intelligence techniques would improve the agility and efficiency of the organization. </p>
                        <p> At Sumanas we believe delivering right information to correct people at perfect time is the best strategy for adapting Business Intelligence. </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="data-analytics-cont">
                        <div class="data-analytics-icon"> <img src="images/data-analytics4.png"  alt="Big Data"></div>
                        <h4>4.Big Data </h4>
                        <p>Big data is the new buzz in town. So let's get to know what is 'Big data?' </p>
                        <p> Channelizing Structured and Unstructured data and transforming it into meaningful data and we do it the right way!</p>
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
