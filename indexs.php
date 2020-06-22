<?php
require_once('settings.php');

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Prep survival </title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">


    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/animate.css/animate.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="venobox/venobox.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">


    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class=" supreme-container">
        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div class="hero-container">
                <div class="wow fadeIn">
                    <div class="hero-logo">
                        <img class="" src="/images/logo1.png" alt="Prep">
                    </div>

                    <h1>Welcome to Surviprepa</h1>

                    <section class="rw-wrapper">
                        <h2 class="rw-sentence">
                            <h2>We create all you need to succed
                                <span></span>
                                <div class="rw-words rw-words-1">
                                    <span>examins</span>
                                    <span>Series</span>
                                    <span>Concours</span>

                                </div>
                            </h2>
                            <div class="actions">
                                <a href="#about" class="btn-get-started">Get Strated</a>
                                <a href="#" class="btn-services">Our Services</a>
                            </div>
                </div>
            </div>
        </section>
        <!-- ======= Header ======= -->
        <header id="header">
            <div class="container">

                <div id="logo" class="pull-left">
                    <a href="#hero"><img src="/images/logo1.png" alt=""></a>

                    <!--<h1><a href="#hero">Header 1</a></h1>-->
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="#hero">Home</a></li>


                        <li class="menu-has-children"><a href="profile.php">Branches</a>
                            <ul>

                                <li class="menu-has-children"><a href="#">MP</a>
                                    <ul>
                                        <li><a href="#">Math</a></li>
                                        <li><a href="#">Physique</a></li>
                                        <li><a href="#">Mecanique genarale</a></li>
                                        <li><a href="#">STI</a></li>

                                    </ul>
                                </li>
                                <li class="menu-has-children"><a href="#">PC</a>
                                    <ul>
                                        <li><a href="#">Math</a></li>
                                        <li><a href="#">Physique</a></li>
                                        <li><a href="#">Mecanique genarale</a></li>
                                        <li><a href="#">STI</a></li>

                                    </ul>
                                </li>
                                <li class="menu-has-children"><a href="#">Techno</a>
                                    <ul>
                                        <li><a href="#">Math</a></li>
                                        <li><a href="#">Physique</a></li>
                                        <li><a href="#">Mecanique genarale</a></li>
                                        <li><a href="#">STI</a></li>

                                    </ul>
                                </li>

                            </ul>

                        </li>
                        <li><a href="#about">About Us</a></li>

                        <li><a href="#contact"><a>

                                    <i class="fa fa-user-o" data-toggle="modal" data-target="#elegantModalForm"></i>
                                </a>
                                <?php

                                if (isset($_SESSION["users"])) {
                                    echo "<a href=\"dec.php\">sign out</a>";
                                }
                                ?>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- #nav-menu-container -->
            </div>
        </header><!-- End Header -->
        <section id="about">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">About Us</h3>
                        <div class="section-title-divider"></div>
                        <p class="section-description">we are the only site that can give a full website with immense
                            resourses to make you able to succed in every aspects of your school life </p>
                    </div>
                </div>
            </div>
            <div class="container about-container wow fadeInUp">
                <div class="row">

                    <div class="col-lg-6 about-img">
                        <img src="/images/study.jpg" alt="">
                    </div>

                    <div class="col-md-6 about-content">
                        <h2 class="about-title">We provide great services and ideas</h2>
                        <p class="about-text">
                            you dont need from now on to go to libraries and print all kind of documents with your
                            precious
                            money that you can use for other things.
                        </p>

                        <p class="about-text">
                            we will provide you wiht a kind of service that its not avaible int whole country and for
                            free
                            it will be your only aid to make a difference and to be honest this platform is meant to
                            make
                            everyone equaly prepared from the prespective of person who has passed the prep and all its
                            hardship.
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->
        <!-- ======= Subscrbe Section ======= -->
        <section id="subscribe">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="subscribe-title">Sign up for our daily uploads</h3>
                        <p class="subscribe-text">Join our 1000+ subscribers and get access to the latest Exams,
                            and enjoy our free service!</p>
                    </div>
                    <div class="col-md-4 subscribe-btn-container">

                        <a class="subscribe-btn" href="mailto:boyofhonor01@gmail.com">contact Us</a>
                    </div>
                </div>
            </div>
        </section><!-- End Subscrbe Section -->





        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="/vendor/php-email-form/validate.js"></script>
        <script src="/vendor/wow/wow.min.js"></script>
        <script src="/vendor/jquery-sticky/jquery.sticky.js"></script>
        <script src="/vendor/superfish/superfish.min.js"></script>
        <script src="/vendor/hoverIntent/hoverIntent.js"></script>
        <script src="/vendor/venobox/venobox.min.js"></script>
        <script src="/vendor/morphext/morphext.min.js"></script>

        <!-- Template Main JS File -->
        <script src="/js/main.js"></script>

    </div>

    <!--Modal: Login / Register Form /elegantModalForm-->

    <div class="text-center">
        <a href="" class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm">
        </a>
    </div>
    <div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content form-elegant">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign
                            in</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->
                    <div class="md-form mb-5">
                        <form method="get" action="verif.php">
                            <input type="email" id="Form-email1" class="form-control validate" name="email">
                            <label data-error="wrong" data-success="right" for="Form-email1">Your email</label>
                    </div>
                    <div class="md-form pb-3">
                        <input type="password" id="Form-pass1" class="form-control validate" name="password">
                        <label data-error="wrong" data-success="right" for="Form-pass1">Your password</label>
                        <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1">
                                Password?</a></p>
                    </div>


                    <div class="text-center mb-3">
                        <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign
                            in</button>
                    </div>
                    <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign up
                        :</p>
                    <div class="text-center mb-3">
                        <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a" data-toggle="modal" data-target="#anotherodal" data-dismiss="modal">Sign up
                        </button>
                        <div class="row my-3 d-flex justify-content-center">
                            <!--GOOGLE-->
                            <a href="<?= 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/user.gender.read') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>"><button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fa fa-google"></i></button></a>
                            <!--Instagram +-->
                            <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fa fa-instagram"></i></button>
                        </div>
                    </div>
                    </form>

                </div>
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="#" class="blue-text ml-1">
                            Sign Up</a></p>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="anotherodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content form-elegant">
                <!--Header-->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign
                            up</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mx-4">
                    <!--Body-->
                    <div class="md-form mb-3">
                        <form method="get" action="signup.php">
                            <input name="name" type="text" id="Form-email1" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="Form-email1">Name</label>
                    </div>
                    <div class="md-form mb-3">
                        <input name="email" type="email" id="Form-email1" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="Form-email1">Your email</label>
                    </div>


                    <div class="md-form pb-3">
                        <input name="password" type="password" id="Form-pass1" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="Form-pass1">Your password</label>

                    </div>
                    <div class="md-form pb-3">
                        <input name="password1" type="password" id="Form-pass1" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="Form-pass1">Verify Your password</label>

                    </div>




                    <div class="text-center mb-3">
                        <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign up
                        </button>
                        <hr>
                        <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a "><i class="fa fa-google "></i></button>
                    </div>


                    </form>
                </div>

            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="my" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">wrong password </h4>
                </div>
                <div class="modal-body">
                    <p>please try again </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="n4" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">thank you for signing up</h4>
                </div>
                <div class="modal-body">
                    <p>try to sign in </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="n2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">Goodbye </h4>
                </div>
                <div class="modal-body">
                    <p>Come again </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="n3" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">different passwords</h4>
                </div>
                <div class="modal-body">
                    <p>try again </p>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <?php
    if (isset($_GET["err"])) {
        $x = $_GET["err"];
        if ($x == "2") {
            echo " <script> $('#my').modal('show')</script>";
        } else if ($x == "1") {
            echo "<script> $('#n2').modal('show')</script>";
        } else if ($x == "3") {
            echo " <script> $('#n3').modal('show')</script>";
        } else if ($x == "4") {
            echo " <script> $('#n4').modal('show')</script>";
        }
    } ?>



</body>
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    &copy; Copyright <strong>mini project</strong>. All Rights Reserved
                </div>
                <div class="credits">

                    Created in 2020
                </div>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->
<script src="wow/wow.min.js"></script>
<script>
    new WOW().init();
</script>


</html>