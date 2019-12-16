

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
$nomorkamar           = $_POST['nomorkamar'];
$luaskamar            = $_POST['luaskamar'];
$harga                = $_POST['harga'];
$status               = "Belum Terisi";
// query SQL untuk insert data
$query="INSERT INTO kamarinfo SET nomorkamar='$nomorkamar',luaskamar='$luaskamar',harga='$harga',status='$status' ";
$query1 = 'ALTER TABLE kamarinfo AUTO_INCREMENT=0';
mysqli_query($conn, $query1);
mysqli_query($conn, $query);

// mengalihkan ke halaman index.php
header("location:kamar.php");
?>
