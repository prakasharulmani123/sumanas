<?php include 'head.php'; ?>
<body class="innerpage">
    <?php
    include 'header.php';
    $name = $email = $phone = $subject = $message = "";
    $nameErr = $emailErr = $phoneErr = $subjectErr = $messageErr = "";
    $error = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $error = true;
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $error = true;
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["phone"])) {
            $error = true;
            $phoneErr = "Phone Number is required";
        } else {
            $phone = test_input($_POST["phone"]);
        }

        if (empty($_POST["subject"])) {
            $error = true;
            $subjectErr = "Subject is required";
        } else {
            $subject = test_input($_POST["subject"]);
        }

        if (empty($_POST["message"])) {
            $error = true;
            $messageErr = "Message is required";
        } else {
            $message = test_input($_POST["message"]);
        }

        if (!$error && isset($_POST['submit'])) {
//                if (isset($_POST['email'])) {
//                    $ToEmail = 'roobini@arkinfotec.com';
//                    $EmailSubject = 'Site contact form';
//                    $mailheader = "From: " . $email . "\r\n";
//                    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
//                    $MESSAGE_BODY = "Name: " . $_POST['name'] . "";
//                    $MESSAGE_BODY .= "Email: " . $email . "";
//                    $MESSAGE_BODY .= "Phone: " . $phone . "";
//                    $MESSAGE_BODY .= "Subject: " . $subject . "";
//                    $MESSAGE_BODY .= "Message: " . nl2br($message) . "";
//                    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader);
//                }
            echo $name;
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <div class="inner-page-heading ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>Stay Connected</h1>
                    <span>Get in touch with us to experience pure 'awesomesness'!</span> </div>
            </div>
        </div>
    </div>
    <div class=" ui-ux-cont">
        <div class="container-fluid">
            <div class="contact-us1">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2> Say Hi ! </h2>
                    <span> We would love to hear from you!</span> <br/>
                    <img src="images/contactus-line.jpg" alt=""></div>

                <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 contact-left"> <img src="images/contactus.png"  alt=""></div>

                <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6 contact-right">
                    <form method="post" name="myform" action="contactus.php">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <input name="name" value="<?php echo $name ?>" type="text" class="form-control" placeholder="Name">
                                    <?php echo $nameErr; ?>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <input name="email" value="<?php echo $email ?>" type="text" class="form-control" placeholder="Email">
                                    <?php echo $emailErr; ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <input name="phone" value="<?php echo $phone ?>" type="text" class="form-control" placeholder="Phone">
                                    <?php echo $phoneErr; ?>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <input name="subject" value="<?php echo $subject ?>" type="text" class="form-control" placeholder="Subject">
                                    <?php echo $subjectErr; ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <textarea name="message" value="<?php echo $message ?>" type="text" cols="" rows="" class="form-control msg-filed" placeholder="Message"></textarea>
                                    <?php echo $messageErr; ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                    <button class="btn submit-btn" type="submit" name="submit" value="submit"> Send Message <i class="fa fa-paper-plane" aria-hidden="true"></i> </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="contact-us2">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2> Get in Touch </h2>
                    <img src="images/contactus-line2.jpg" alt=""></div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 contact-details1">
                    <p> <img src="images/contact-icon1.png"  alt=""></p>
                    <p> <span> Address </span> </p>
                    <p> No:01, Gandhiji St, Rasi Towers, <br/>
                        Near Aparna Enclave, Velmurgan Nagar, <br/>
                        Bypass Road, Madurai – 625010. <br/>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 contact-details1">
                    <p> <img src="images/contact-icon2.png"  alt=""></p>
                    <p> <span> Phone </span> </p>
                    <p> 0452-4210515  / 9952870443 </p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 contact-details1">
                    <p> <img src="images/contact-icon3.png"  alt=""></p>
                    <p> <span> Email </span> </p>
                    <p><a href="mailto:info@sumanastech.com">info@sumanastech.com</a> </p>
                </div>
            </div>
            <div class="contact-us3">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2> Get Direction </h2>
                    <img src="images/contactus-line.jpg" alt=""></div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15720.960999771827!2d78.0912065!3d9.913938!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbb93edd0ba416d8e!2sArk+Infotec!5e0!3m2!1sen!2sin!4v1501328720961" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php include 'include/footer_inner.php' ?>
    <div class="drawermenu-overlay"></div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
    <script src="js/bootstrap.min.js"></script> 

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
