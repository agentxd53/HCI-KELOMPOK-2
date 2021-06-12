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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                        <li class="nav-item"><a href="fitur.php" class="nav-link">Street Views</a></li>
                        <li class="nav-item active"><a class="nav-link" href="about.php">About</a></li>
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


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ABOUT</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
				<div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid" src="images/Screenshot (96).png" alt="foto about" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">Strawberry Highland Pujon</h2>
                    <p>Strawberry Highland Pujon merupakan agrowisata di provinsi Jawa Timur, tepatnya terletak di Jl.Pd.Asri , Jurangrejo, Pandesari, Pujon, Kabupaten Malang. Berdiri di lahan seluas 2000 meter persegi, agrowisata ini berkonsep wisata edukasi petik buah strawberry, pengunjung dapat belajar mengenai cara memetik buah strawberry yang siap panen dengan baik sehingga akan didapatkan kualitas buah strawberry yang bagus.</p>
                    <p>Selain itu strawberry highland pujon memiliki sekitar 20.000 pohon strawberry, dengan beberapa varietas strawberry yang tersedia, diantaranya jenis California, Holibert dan Cherly. Masing-masing varietas memiliki keunggulan, contoh nya strawberry Holibert yang memiliki rasa paling manis tetapi cenderung bertekstur agak keras. Jam operasinal strawberry highland pujon adalah pukul 08.00 – 17.00 WIB setiap hari.</p>
                </div>
            </div>
            

            <!-- Varietas -->
            <div class="row my-5"> 
                <div class="col-12">
                    <h2 class="noo-sh-title">Jenis Varietas Strawberry :</h2>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>California</h3>
                        <p>Jenis strawberry ini memiliki rasa yang sedikit masam, ada manisnya, dan mengandung banyak air.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Cherly</h3>
                        <p>Jenis yang satu ini mempunyai ukuran yang lebih besar dari varietas yang ada. Memiliki rasa yang manis dan teksturnya lumayan renyah saat kita mengunyahnya.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Holibert</h3>
                        <p>Jenis ini memiliki rasa yang manis, tetapi teksturnya dapat dikatakan lebih keras dari varietas lainnya.</p>
                    </div>
                </div>
            </div>            
    <!-- End About Page -->

    


   

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p>Kelompok 2 Tugas HCI Bina Nusantara.</p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

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
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>