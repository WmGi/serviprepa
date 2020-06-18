<?php
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

    <div class=" container-fluid supreme-container">

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
                            <p>bonjour : <?php

                                            if (isset($_SESSION["users"])) {
                                                echo $_SESSION["users"];
                                            } else echo "monsieur";
                                            ?> </p>
                        </h4>
                        <p>
                            Hello, I am from London

                        </p>

                        <hr>

                        <a href="#" class="btn btn-primary btn-rounded">Follow</a>
                        <hr>

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
                                    <li class="active"><a href="#">MP</a></li>

                                </ul>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </div>
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingOne1">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                <h5 class="mb-0">
                                    Math <i class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                            <div class="card-body">
                                fichier pdf

                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingThree3">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour4" aria-expanded="false" aria-controls="collapseThree3">
                                <h5 class="mb-0">
                                    Pysique <i class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4" data-parent="#accordionEx">
                            <div class="card-body">



                            </div>
                        </div>

                    </div>


                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingThree3">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                <h5 class="mb-0">
                                    STI <i class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
                            <div class="card-body">


                                <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true"></div>
                                <!-- Accordion card -->
                                <div class="card">

                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="headingTwo4">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                                            <h5 class="mb-0">
                                                Exams <i class="fa fa-angle-down rotate-icon"></i>
                                            </h5>
                                        </a>

                                    </div>

                                    <!-- Card body -->
                                    <div id="collapseTwo4" class="collapse" role="tabpanel" aria-labelledby="headingTwo4" data-parent="#accordionEx1">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad
                                            squid. 3

                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion card -->
                                <!-- Accordion card -->
                                <div class="card">

                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="headingTwo4">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                                            <h5 class="mb-0">
                                                Series <i class="fa fa-angle-down rotate-icon"></i>
                                            </h5>
                                        </a>

                                    </div>

                                    <!-- Card body -->
                                    <div id="collapseTwo5" class="collapse" role="tabpanel" aria-labelledby="headingTwo5" data-parent="#accordionEx1">
                                        <div class="card-body">
                                            <div class="panel panel-primary">
                                                <div class="panel-heading"></div>
                                                <div class="panel-body">
                                                    <table class="table table-hover  ">
                                                        <tr class="">
                                                            <th>#</th>
                                                            <th>name of file</th>
                                                            <th>Date </th>
                                                            <th></th>
                                                            <th></th>

                                                            <th>download link</th>
                                                            <th></th>
                                                        </tr>
                                                        <?php
                                                        if (isset($_SESSION["users"])) {
                                                            $cnx = mysqli_connect("localhost", "root", "root", "surviprepa");
                                                            $req = mysqli_query($cnx, "select * from seriemp"); //crud read array $d["id] rows $d[0] object $d->id
                                                            /*while ($don=mysqli_fetch_array($req)) {
                                                                    echo "<p> {$don["id"]} {$don["titre"]} {$don["prix"]} {$don["qte"]}</p>";
                                                                             }*/
                                                            echo " <tr>
                                                        <td> <i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i></td>";


                                                            while ($don = mysqli_fetch_array($req)) {

                                                                echo "<td> {$don["nom"]} </td>";
                                                                echo "<td> {$don["date"]} </td>";
                                                                echo "<td></td>";

                                                                echo "<td>  </td>";
                                                                echo "<td> <a href='{$don["download"]}' download=\"\" ><button class=\"btn  supbtn\">download</button></a></td>";
                                                                echo "</tr>";
                                                            }
                                                        } else {
                                                            echo " <tr>
                                                            <td> <i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i></td>";
                                                            echo "<td>vous devez connecte  </td>";
                                                            echo "</tr>";
                                                        }

                                                        ?>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion card -->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Accordion card -->

            </div>
            <!-- Accordion wrapper -->


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

</body>

</html>