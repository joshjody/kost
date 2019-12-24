<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Features - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="index.php">Kost</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                  <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="features.php">Fitur</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="pricing.php">List Kamar</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.php">Tentang Kami</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="contact-us.php">Kontak</a></li>
                  <?php
                  session_start();
                  if (isset($_SESSION['usernamepelanggan'])) {
                      echo'
                      <li class="nav-item" role="presentation"><a class="nav-link active" href="dashboard.php">Dashboard</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link active" href="logout.php">Logout</a></li>
                      ';
                  }
                  else {
                    echo'<li class="nav-item" role="presentation"><a class="nav-link active" href="login.php">Login</a></li>';
                  }


                  ?>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page">
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Fitur</h2>
                    <p>Rumah Kost Kami menawari beberapa fitur untuk anda. Beberapa diantaranya adalah:</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4>WIFI (Gratis)</h4>
                        <p>Nikmati wifi dengan kecepatan internet 50mbps, hanya untuk anda kami berikan secara gratis.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4>Listrik (Gratis)</h4>
                        <p>Tidak perlu ribet dengan bayar listrik, karena listrik dapat anda pakai secara gratis (maximal 1300 watt / kamar).</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4>AC 1/2 PK</h4>
                        <p>Tidak suka dengan hawa panas? Anda dapat menambahkan AC pada kamar yang anda tempati (Dikenakan biaya tambahan diluar harga kamar).</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4>AIR COOLER</h4>
                        <p>Kipas Angin yang sesejuk AC dan dapat dipindahkan posisinya sesuka hati anda (Dikenakan biaya tambahan diluar harga kamar).</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- <br>
        <br>
        <br>
        <br> -->
        <section class="clean-block about-us">
            <div class="container">
                <!-- <div class="block-heading">
                    <h2 class="text-info">Tentang Kami</h2>
                    <p>Kami menyediakan layanan penyewaan kamar atau biasa disebut dengan kost dengan berbagai keunggulan yang dapat anda nikmati seperti AC, Internet, dll .</p>
                </div> -->
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="images/kamarutama.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Kamar</h4>
                                <p class="card-text">Kami Memberikan segala kebutuhan anda untuk tinggal seperti kasur, lemari, cermin, kursi, meja, dll.</p>
                                <!-- <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="images/kamarmandi1.jpg" sytle="width:10%";>
                            <div class="card-body info">
                                <h4 class="card-title">Kamar Mandi Dalam</h4>
                                <p class="card-text">Tidak perlu mengantri lagi untuk kekamar mandi, karena kamar mandi sudah ada didalam tiap - tiap kamar.</p>
                                <!-- <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="images/ruangtamu1.jpeg">
                            <div class="card-body info">
                                <h4 class="card-title">Ruang Tamu</h4>
                                <p class="card-text">Kami menyediakan ruang tamu untuk anda menjamu tamu - tamu anda yang sedang berkunjung.</p>
                                <!-- <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright Text</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
