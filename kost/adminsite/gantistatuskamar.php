

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
$id                   = $_GET['id'];
$status               = $_GET['status'];

if ($status == 'Belum Terisi') {
  $statusnya = 'Sudah Terisi';
} else {
  $statusnya = 'Belum Terisi';
}

// query SQL untuk insert data

$query="UPDATE kamarinfo SET status='$statusnya' WHERE id=$id ";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:kamar.php");
?>
