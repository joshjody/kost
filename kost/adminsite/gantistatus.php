

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
$id_kamar              = $_GET['id_kamar']

if ($status == 'Belum Dikonfirmasi') {
  $statusnya = 'Sudah Dikonfirmasi';
} else {
  $statusnya = 'Belum Dikonfirmasi';
}

// query SQL untuk insert data
$query="UPDATE Transaksi SET status='$statusnya'WHERE id=$id ";
mysqli_query($conn, $query);
$query1="UPDATE kamarinfo SET status='Terisi'WHERE id=$id_kamar ";
mysqli_query($conn, $query1);
// mengalihkan ke halaman index.php
header("location:bank.php");
?>
