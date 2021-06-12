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
                        <li class="nav-item active"><a class="nav-link" href="booking.php">Booking</a></li>
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

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Booking</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Booking Tiket</h3>
                            <p>Silahkan isi form di bawah :</p>
                        </div>
                        <form class="needs-validation" action="databooking.php" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name </label>
                                    <input type="text" class="form-control" id="firstName"  name="firstname" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name </label>
                                    <input type="text" class="form-control" id="lastName" name="lastname" required>
                                </div>
                            </div>
                    
                            <div class="mb-3">
                                <label for="email">Email Address </label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="address">No. Handphone </label>
                                <input type="text" class="form-control" id="address" name="phone" required>
                            </div>
                          
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="address">Tanggal Kunjungan </label>
                                    <input type="date" class="form-control" id="date" placeholder="dd/mm/yyyy" name="tanggal" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="address">Jumlah Pengunjung </label>
                                    <input class="form-control" value="1" min="1" max="20" type="number" name="total" required>
                                </div>
                            </div>

                            <div class="title"> <span>Jenis Kelamin:</span> </div>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit"  type="radio" class="custom-control-input" name="gender" value="L" required>
                                    <label class="custom-control-label" for="credit">Laki - Laki</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debit"  type="radio" class="custom-control-input" name="gender" value="P" required>
                                    <label class="custom-control-label" for="debit">Perempuan</label>
                                </div>
                            </div>
                            <div class="submit-button text-center">
                                <input class="btn hvr-hover" name="submit" id="submit" type="submit" value="Submit">
                            </div>
                        </form>   
                    </div>
                </div>
				<div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>Informasi</h2>
                        <ul>
                            <li>
                                <p>Jadwal Buka : Setiap hari pukul 08.00 sampai 17.00 WIB</p>
                            </li>
                            <li>
                                <p>Harga tiket : Rp 15.000/orang (free welcome drink)</p>
                            </li>
                            <li>
                                <p>Contact : 0856-4676-7231</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

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