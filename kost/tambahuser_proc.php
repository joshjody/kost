

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
$Nama           = $_POST['Nama'];
$JenisKelamin   = $_POST['JenisKelamin'];
$Alamat         = $_POST['Alamat'];
$nomorktp       = $_POST['nomorktp'];
$email          = $_POST['email'];
$notelf         = $_POST['notelf'];
$username       = $_POST['username'];
$password       = $_POST['password'];



// query SQL untuk insert data
$query="INSERT INTO `pelanggan`(`nama`, `jenkel`, `alamat`, `noktp`, `email`, `notelf`, `username`, `password`) VALUES ('$Nama','$JenisKelamin','$Alamat','$nomorktp','$email','$notelf','$username','$password') ";
// $query="INSERT INTO pelanggan SET nama='$Nama',jenkel='$JenisKelamin',alamat='$Alamat',noktp='$nomorktp',email=$email,notelf=$notelf,username=$username,password=$password ";
$query1 = 'ALTER TABLE pelanggan AUTO_INCREMENT=0';
mysqli_query($conn, $query1);
mysqli_query($conn, $query);

// mengalihkan ke halaman index.php
header("location:login.php");
?>
