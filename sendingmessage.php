<?php
session_start();
require_once('settings.php');


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

    <div class="customc container-fluid supreme-container">

        <!-- ======= Header ======= -->
        <header id="header">
            <div class="container">

                <div id="logo" class="pull-left">
                    <a href="indexs.php"><img src="/images/logo1.png" alt=""></a>


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
                                    <?php

                                    if (isset($_SESSION["users"])) {
                                        echo "<a href=\"dec.php\">sign out</a>";
                                    }
                                    ?>
                                </a></a>
                        </li>
                    </ul>
                </nav>
                <!-- #nav-menu-container -->
            </div>
    </div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-3 left affix ">

                <div class="card">

                    <div class="card-content pt20 pb20 profile-header">
                        <?php if (isset($_SESSION["users"]))
                            echo "<img alt=\"\" class=\"img-fluid rounded-circle\" src=" . $_SESSION['pic'] . ">";
                        else echo '<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="img-fluid rounded-circle">'
                        ?>
                        <h4 class="card-title text-center mb20">
                            <p>Bonjour : <?php

                                            if (isset($_SESSION["users"])) {
                                                echo $_SESSION["users"];
                                            } else echo "Monsieur";
                                            echo ' <p>
                           

                        </p>'
                                            ?> </p>
                        </h4>


                        <hr>
                        <?php include 'sendmsg.php' ?>
                        <table class="table table-hover  ">
                            <tr class="">
                                <th>liste</th>
                            </tr>
                            <?php include 'listcontact.php' ?>
                            <hr>
                        </table>

                    </div>
                </div>



            </div>
            <div class="col-md-9  right">
                <div id="breadcrumb" class="section">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="breadcrumb-tree">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Branches</a></li>
                                    <li class="active"><a href="#">TC</a></li>

                                </ul>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </div>
                <!-- Group of default radios - option 1 -->




            </div>


        </div>




    </div>

    </div>


    </div>

    </div>

    </div>

    <!-- javascript code -->


    </div>
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
    <!--<script src="/js/main.js"></script> -->
    <div class="text-center">
        <a href="" class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm"></a>
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
</body>

</html>