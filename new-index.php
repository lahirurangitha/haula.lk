<!DOCTYPE html>
<html>

<head>

    <title>Haula.lk</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">

    <!-- Favicon Zone -->
    <link rel="icon" href="img/favicon.png" />
    <!-- Style & bootstrap import -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/agency.css" rel="stylesheet">

    <!-- dhanushka -->
    <link href="css/dc.css" rel="stylesheet">

    <!-- End of inmport -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- End of Activation zone -->

</head>


<body id="page-top" class="index">

<!-- Navigation -->
<?php
    @include_once 'includes/nav/nav.php';
?>

<!-- main body -->
<div class="main-body">

    <div class="row">
        <!-- left side bar -->
        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">

        </div>

        <!-- right main side bar -->
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
            <!-- user tabs -->
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="tab" href="#home">Recommend</a></li>
                <li><a data-toggle="tab" href="#menu2">New Offers</a></li>
                <li><a data-toggle="tab" href="#menu1">Featured</a></li>
                <li><a data-toggle="tab" href="#menu2">Trending</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>HOME</h3>
                    <p>Some content.</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Some content in menu 1.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                </div>
            </div>
        </div>
    </div>

</div>



<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/agency.js"></script>
</body>
</html>