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
                    <h1>Together at Sumanas! </h1>
                    <span>We're an Interactive, tightly knit and connected bunch of creative minds!</span> </div>
            </div>
        </div>
    </div>
    <div class=" ui-ux-cont">
        <div class="container-fluid">
            <div class="row">
                <!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="mobile-app career">
                    <h2> The workplace </h2>
                    <p> Together we work smart; Code, design and write great content.We brainstorm round-the-clock; we craft technology with passion and deliver the best in town..... And well, this is US!</p>
                    <p> You get to work with the best tech heads in business, and we alsoopen up great opportunities to help you explore your inner potential. </p>
                  </div>
                </div>-->
                <div class="jobs-list-cont">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 job-list-txt">
                        <h3> What are we looking for? </h3>
                        <p> If you are an Individual with passion for technologies and building something new, then Sumanas is just the right place for you!</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 job1 floating buttons">
                        <div class="job1-cont"> <span class="job-count"> 1 </span> <a href="" class="" data-toggle="modal" data-target="#myModal">UI/UX DESIGNERS</a> </div>
                        <div class="job1-outter"> <img src="images/flame.png" alt="UI/UX DESIGNERS"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 job1 job2 floating2">
                        <div class="job1-cont"> <span class="job-count"> 1 </span> <a href="" data-toggle="modal" data-target="#myModal2">PHP DEVELOPER</a> </div>
                        <div class="job1-outter"> <img src="images/flame.png" alt="PHP DEVELOPER"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 job1 job3 floating">
                        <div class="job1-cont"> <span class="job-count"> 1 </span> <a href="" data-toggle="modal" data-target="#myModal3"> HR GENERALIST </a> </div>
                        <div class="job1-outter"> <img src="images/flame.png" alt="HR GENERALIST"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> <img src="images/join.png" alt="Join us at Sumanas"></div>
                </div>
            </div>
        </div>
        <div class="lets lets1">
            <div class="container-fluid">
                <h4> LETS GET STARTED </h4>
                <p> <span> We help your business grow. We mean it. </span> </p>
                <p> <a href="contact-sumanas.php" class="btn request-quotebtn"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Get In Touch </a> </p>
            </div>
        </div>
    </div>
    <?php include 'include/footer_inner.php' ?>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"> UI/UX DESIGNERS</h4>
                </div>
                <div class="modal-body">
                    <h3> We are on the lookout for…. </h3>
                    <p> <strong> Whom: </strong> UI/UX Designers </p>
                    <p><strong> Must Have:</strong> 2-5 years experience </p>
                    <p> <strong>Must Know:</strong> Photoshop, Coreldraw, Illustrator </p>
                    <p> <strong>Must Be:</strong> Extremely creative in designing. Should be up-to-date with the latest designing trends. Open to adapting to new designing tools and requirements.</p>
                    <h3> Apply Now </h3>
                    <form method="post" name="myform" enctype="multipart/form-data" id="contact_form1" autocomplete="off"> 
                        <div class="row">
                            <input type="hidden" class="form-control" name="position" value="UI/UX Designer">
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <input name="name" type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <input name="phone" type="text" class="form-control" placeholder="Phone">
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <input name="source_to_find" type="text" class="form-control" placeholder="How Did You Hear About Us">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <textarea name="cover_letter" cols="" rows="" class="form-control cover-letter" placeholder="Cover Letter"></textarea>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <input name="file" type="file" class="form-control file">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn submit-btn" type="submit" value="submit1" name="submit1"><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit</button>
                            <div id="msgSubmit" class="h4 text-center hide">Form Submitted Successfully!</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"> PHP DEVELOPER</h4>
                </div>
                <div class="modal-body">
                    <h3> We are on the lookout for…. </h3>
                    <p> <strong> Whom: </strong> PHP DEVELOPERS</p>
                    <p><strong> Must Have:</strong> 3-5 years experience </p>
                    <p> <strong>Must Know:</strong>PHP Frameworks like Laravel, YII2, Angular JS and associated technologies</p>
                    <p> <strong>Must Be:</strong> Proficient in highest coding standards, Code optimization & logical thinking. Should quick adapt to newer technologies.</p>
                    <h3> Apply Now </h3>
                    <form method="post" name="myform" enctype="multipart/form-data" id="contact_form2" autocomplete="off">
                        <div class="row">
                            <input type="hidden" class="form-control" name="position" value="PHP Developer">
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <input name="name" type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <input name="phone" type="text" class="form-control" placeholder="Phone">
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <input name="source_to_find" type="text" class="form-control" placeholder="How Did You Hear About Us">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <textarea name="cover_letter" cols="" rows="" class="form-control cover-letter" placeholder="Cover Letter"></textarea>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <input name="file" type="file" class="form-control file">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn submit-btn" type="submit" value="submit2" name="submit2"><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit</button>
                            <div id="msgSubmit" class="h4 text-center hide">Form Submitted Successfully!</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"> HR GENERALIST</h4>
            </div>
            <div class="modal-body">
                <h3> We are on the lookout for…. </h3>
                <p> <strong> Whom: </strong> HR Generalist </p>
                <p><strong> Must Have:</strong> 1-3 years experience </p>
                <p> <strong>Must Know:</strong>People and employee handling techniques. Excellent oral and written communication</p>
                <p> <strong>Must Be:</strong> Proficient in employee payroll management, client co-ordination, project management and  people handling.</p>
                <h3> Apply Now </h3>
                <form method="post" name="myform" enctype="multipart/form-data" id="contact_form3" autocomplete="off">
                    <div class="row">
                        <input type="hidden" class="form-control" name="position" value="HR Generalist">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <input name="name" type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <input name="email" type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <input name="phone" type="text" class="form-control" placeholder="Phone">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <input name="source_to_find" type="text" class="form-control" placeholder="How Did You Hear About Us">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <textarea name="cover_letter" cols="" rows="" class="form-control cover-letter" placeholder="Cover Letter"></textarea>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <input name="file" type="file" class="form-control file">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn submit-btn" type="submit" value="submit3" name="submit3"><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit</button>
                        <div id="msgSubmit" class="h4 text-center hide">Form Submitted Successfully!</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


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
<script src="js/bootstrapValidator.min.js"></script> 
<script type="text/javascript">
    $(document).ready(function () {
        $('#contact_form1').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        },
                        emailAddress: {
                            message: ' '
                        }
                    }
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        },
                    }
                },
                source_to_find: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        }
                    }
                },
                cover_letter: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        }
                    }
                },
                file: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        }
                    }
                },
            }
        }).on('submit1', function (e) {
            if (e.isDefaultPrevented()) {
                console.log('error');
            } else {
                e.preventDefault();
                submitForm();
            }
        });
        
        $('#contact_form2').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        },
                        emailAddress: {
                            message: ' '
                        }
                    }
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        },
                    }
                },
                source_to_find: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        }
                    }
                },
                cover_letter: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        }
                    }
                },
                file: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        }
                    }
                },
            }
        }).on('submit2', function (e) {
            if (e.isDefaultPrevented()) {
                console.log('error');
            } else {
                e.preventDefault();
                submitForm();
            }
        });
        
        $('#contact_form3').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        },
                        emailAddress: {
                            message: ' '
                        }
                    }
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        },
                    }
                },
                source_to_find: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        }
                    }
                },
                cover_letter: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        }
                    }
                },
                file: {
                    validators: {
                        notEmpty: {
                            message: ' '
                        }
                    }
                },
            }
        }).on('submit3', function (e) {
            if (e.isDefaultPrevented()) {
                console.log('error');
            } else {
                e.preventDefault();
                submitForm();
            }
        });

    });

    function submitForm() {
        // Initiate Variables With Form Content
        var datastring1 = $("#contact_form1").serialize();
        var datastring2 = $("#contact_form2").serialize();
        var datastring3 = $("#contact_form3").serialize();

        $.ajax({
            type: "POST",
            url: "submit-form.php",
            data: datastring1,
            dataType: "json",
            success: function (text) {
                if (text == "success") {
                    formSuccess();
                }
            }
        });
        
        $.ajax({
            type: "POST",
            url: "submit-form.php",
            data: datastring2,
            dataType: "json",
            success: function (text) {
                if (text == "success") {
                    formSuccess();
                }
            }
        });
        
        $.ajax({
            type: "POST",
            url: "submit-form.php",
            data: datastring3,
            dataType: "json",
            success: function (text) {
                if (text == "success") {
                    formSuccess();
                }
            }
        });
    }

    function formSuccess() {
        $("#msgSubmit").removeClass("hide");
        setTimeout(function () {
            $('#msgSubmit').addClass('hide');
        }, 1000);
    }

</script>
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

