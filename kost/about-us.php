<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tentang Kami - Kost</title>
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
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Tentang Kami</h2>
                    <p>Kami menyediakan layanan penyewaan kamar atau biasa disebut dengan kost sejak tahun 2005. Berlokasi di Jl. Kp. Klp. No.110, RT.02/RW.19, Rw. Panjang, Kec. Bojong Gede, Bogor, Jawa Barat 16920</p>
                    <p></p>
                </div>

                <!-- <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="images/kamarutama.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Kamar</h4>
                                <p class="card-text">Kami Memberikan segala kebutuhan anda untuk tinggal seperti kasur, lemari, cermin, kursi, meja, dll.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="images/kamarmandi1.jpg" sytle="width:10%";>
                            <div class="card-body info">
                                <h4 class="card-title">Kamar Mandi Dalam</h4>
                                <p class="card-text">Tidak perlu mengantri lagi untuk kekamar mandi, karena kamar mandi sudah ada didalam tiap - tiap kamar.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="images/ruangtamu1.jpeg">
                            <div class="card-body info">
                                <h4 class="card-title">Ruang Tamu</h4>
                                <p class="card-text">Kami menyediakan ruang tamu untuk anda menjamu tamu - tamu anda yang sedang berkunjung.</p>

                            </div>
                        </div>
                    </div>
                </div> -->


            </div>

            <div class="mapouter peta"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Jl.%20Kp.%20Klp.%20No.110%2C%20RT.02%2FRW.19%2C%20Rw.%20Panjang%2C%20Kec.%20Bojong%20Gede%2C%20Bogor%2C%20Jawa%20Barat%2016920&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.emojilib.com"></a></div><style>.mapouter{text-align:right;height:500px;width:600px;margin-left: auto;margin-right: auto;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
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
