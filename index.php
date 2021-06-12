<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Strawberry Highland Pujon</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">


     <link rel="shortcut icon" href="images/webicon.ico" type="image/x-icon">
    <link rel="strawberry-icon" href="images/strawberry-icon.png">


    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/responsive.css">

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
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="booking.php">Booking</a></li>
                    <li class="nav-item"><a href="fitur.php" class="nav-link">Street Views</a></li>
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

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Strawberry Highland</strong></h1>
                            <p class="m-b-40">Berwisata Asik Petik Strawbery! Di Strawberry Highland Pujon Malang <br> Banyak Varietas Strawberry.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Strawberry Highland</strong></h1>
                            <p class="m-b-40">Berwisata Asik Petik Strawbery! Di Strawberry Highland Pujon Malang<br> Banyak Varietas Strawberry.</p>
                            
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Strawberry Highland</strong></h1>
                            <p class="m-b-40">Berwisata Asik Petik Strawbery! Di Strawberry Highland Pujon Malang <br> Banyak Varietas Strawberry.</p>
                            
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/bca.png" alt="" />
                        <a class="why-text">BCA Payment</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/gopay.png" alt="" />
                        <a class="why-text">Gopay Payment</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/Indomaret.png" alt="" />
                        <a class="why-text">Indomaret Payment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->
	
    
	<div class="main-top">
        <div class="container text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            
                            <ul class="offer-box">
                    
                                <li>
                                     Lokasi Seluas 2000 Meter Persegi
                                </li>
                                <li>
                                     Harga tiket masuk hanya Rp 15 ribu
                                </li>
                                <li>
                                     FREE WELCOME DRINK
                                </li>
                                <li>
                                     Rp 8 ribu per ons
                                </li>
                                <li>
                                     Tarif pertama 50 ribu/kg bagi wisatawan
                                </li>
                                <li>
                                     Tarif kedua 40 ribu/kg bagi wisatawan
                                </li>
                            
                            </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Order Strawberry</h1>
                        <p>Aktivitas melihat hingga memetik secara langsung stroberi akan membuat diri kamu senang dan damai. <br> Rasa senang timbul, bukan hanya karena sensasi secara langsung memetik stroberi.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="new1">
            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/categories_img_01.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="https://app.sandbox.midtrans.com/payment-links/1620604601528">Buy</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Strawberry California</h4>
                            <h5> Rp 50.000 /kg</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/categories_img_02.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="https://app.sandbox.midtrans.com/payment-links/1620604765916">Buy</a>
                            </div>
                            
                        </div>
                        <div class="why-text">
                            <h4>Strawberry Cherly</h4>
                            <h5> Rp 50.000 /kg</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/categories_img_03.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="https://app.sandbox.midtrans.com/payment-links/1620604813392">Buy</a>
                            </div>
                            
                        </div>
                        <div class="why-text">
                            <h4>Strawberry Holibert</h4>
                            <h5> Rp 50.000 /kg</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Fasilitas</h1>
                        <p>Beberapa Fasilitas yang dapat digunakan juga banyak teman-teman!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Kebun Strawberry</h3>
                                <p>Aktivitas melihat hingga memetik secara langsung stroberi akan membuat diri kamu senang dan damai. </p>
                                    <p>Rasa senang timbul, bukan hanya karena sensasi secara langsung memetik stroberi.</p>
                            </div>
                            <ul class="option-blog">
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-01.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Tempat Parkir</h3>
                                <p>Tepat disebelah Strawberry Highland Pujon terdapat tempat yang cukup besar. Tempat parkir yang cukup besar dan luas dengan suasana yang cukup ramai. Dengan pelayanan dalam tempat parkir cukup ramah. </p>
                            </div>
                            <ul class="option-blog">
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-02.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Spot Foto</h3>
                                <p>Dan ada hal yang pastinya sangat penting bagi kita semua, yakni tidak melewatkan untuk membawa kamera, karena ada banyak spot spot foto tersedia di kawasan wisata tersebut yang bisa di gunakan untuk spot foto setiap umur</p>
                            </div>
                            <ul class="option-blog">
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->

    <div class="row">
        <div class="col-lg-12">
            <div class="title-all text-center">
                <h1>Location</h1>
            </div>
        </div>
    </div>
    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1920&amp;height=400&amp;hl=en&amp;q=strawberry highland pujon&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.embedmymap.com/">Embed My Map</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>


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