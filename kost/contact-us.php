<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact Us - Brand</title>
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
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <!-- <h2 class="text-info">Contact Us</h2> -->
                    <h2 class="text-info"><p>Punya Pertanyaan? <br>Hubungi Kontak Dibawah Ini.</p></h2>
                </div>
                <form>
                    <div class="form-group fa fa-whatsapp"><label><b>Whatsapp</b></label>
                      <br>
                      <img src="images/wa.png" style="width:10%;">
                      <a href="https://wa.me/6285399675803">085399675803</a>
                    </div>

                    <!-- <div class="form-group"><label>Subjek</label></div> -->
                    <div class="form-group"><label><b>Email</b></label>
                    <br>
                    <img src="images/email.png" style="width:10%;">
                    <a href="mailto:info@rumahkost.com">info@rumahkost.com</a>
                    </div>
                    <!-- <div class="form-group"><label>Pesan</label></div> -->
                    <!-- <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send</button></div> -->
                </form>
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

        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
