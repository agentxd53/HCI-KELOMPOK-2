<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Strawberry Highland Pujon</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
       <link rel="shortcut icon" href="images/webicon.ico" type="image/x-icon">
    <link rel="strawberry-icon" href="images/strawberry-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">



</head>

<body>
   <!-- Start Main Top -->
   <header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
                <a class="navbar-brand" href="index.php"><img src="images/logopujon.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="booking.php">Booking</a></li>
                    <li class="nav-item active"><a href="fitur.php" class="nav-link">Street Views</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <?php
                        if (isset($_SESSION["useruid"])) {
                            echo "<li class='dropdown'>
                                    <a href='#' class='nav-link dropdown-toggle arrow' data-toggle='dropdown'> Hello, " . $_SESSION["useruid"] . "!</a>
                                    <ul class='dropdown-menu'>
								        <li><a href='logout.php'>Log Out</a></li>
							        </ul>
                                </li>";
                        }
                        else{
                            echo "<li class='nav-item'><a class='nav-link' href='login.php'>login</a></li>";
                        }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->


<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Street View</h2>
                </div>
            </div>
        </div>
    </div>

<div class="col-lg-8 col-md-10 mx-auto">>     
    <iframe src="https://www.google.com/maps/embed?pb=!4v1622438875011!6m8!1m7!1sVohgDklGZLJIJJ_iqcJ14Q!2m2!1d-7.851888184792794!2d112.4890088799924!3f93.59594486248056!4f-15.10851990302018!5f0.7820865974627469" width="800" height="600" style="border:5;" allowfullscreen="" loading="lazy"></iframe>
</div>  
<br>


    

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p>Kelompok 2 Tugas HCI Bina Nusantara.</p>
    </div>
    <!-- End copyright  -->

    

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>