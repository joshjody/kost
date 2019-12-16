<?php
    session_start();
    if (empty($_SESSION['usernameadmin'])) {
        header("location:login.php"); // jika belum login, maka dikembalikan ke file form_login.php
    }
    else {
    }
?>
<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Brand</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="dash.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="user.php"><i class="fas fa-window-maximize"></i><span>User</span></a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="kamar.php"><i class="fas fa-window-maximize"></i><span>Kamar</span></a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="bank.php"><i class="fas fa-list fa-sm fa-fw"></i><span>Bank</span></a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="transaksi.php"><i class="fas fa-book"></i><span>Transaksi</span></a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php"><i class="fas fa fa-user"></i><span>Logout</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <div class="input-group-append"></div>
                            </div>
                        </form>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header py-3">

                        </div>
                        <div class="card-body">
                            <!--<div class="row">-->
                            <!--    <div class="col-md-6 text-nowrap">-->
                            <!--        <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>-->
                            <!--    </div>-->
                            <!--    <div class="col-md-6">-->
                            <!--        <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                              <form method="post" action="editkamar_proc.php?id=$id">
                                <table>
                                    <?php
                                    define('DB_HOST','localhost');
                                    define('DB_USER','root');
                                    define('DB_PASS','');
                                    define('DB_NAME','kost');

                                    // Create connection
                                    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

                                    // Check connection
                                    if (mysqli_connect_errno()) {
                                        die('Unable to connect to database' . mysqli_connect_error());
                                    }
                                    $id           = $_GET['id'];

                                    $stmt = $conn->prepare("SELECT * FROM `kamarinfo` WHERE id=$id");
                                    $stmt->execute();
                                    $stmt->bind_result($id, $nomorkamar, $luaskamar, $harga, $status);
                                    while($stmt->fetch()){


                                      echo "

                                      <tr><td>Nomor Kamar</td><td><input type='text' name='nomorkamar' value=".$nomorkamar."></td></tr>
                                      <tr><td>Luas Kamar</td><td><input type='text' name='luaskamar' value=".$luaskamar."></td></tr>
                                      <tr><td>harga</td><td><input type='number' name='harga' value=".$harga."></td></tr>
                                      <tr hidden><td><input type='hidden' name='id' value=".$id."></td></tr>
                                      <tr><td colspan='2'><button type='submit' >SIMPAN</button></td></tr>

                                    ";
                                    }



                                    ?>
                                </table>
                            </form>
                            </div>
                            <!--<div class="row">-->
                            <!--    <div class="col-md-6 align-self-center">-->
                            <!--        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>-->
                            <!--    </div>-->
                            <!--    <div class="col-md-6">-->
                            <!--        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">-->
                            <!--            <ul class="pagination">-->
                            <!--                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>-->
                            <!--                <li class="page-item active"><a class="page-link" href="#">1</a></li>-->
                            <!--                <li class="page-item"><a class="page-link" href="#">2</a></li>-->
                            <!--                <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                            <!--                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>-->
                            <!--            </ul>-->
                            <!--        </nav>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
