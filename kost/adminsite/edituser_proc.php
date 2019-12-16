

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
$Nama                 = $_POST['Nama'];
$JenisKelamin         = $_POST['JenisKelamin'];
$Alamat               = $_POST['Alamat'];
$nomorktp             = $_POST['nomorktp'];
$email                = $_POST['email'];
$notelf               = $_POST['notelf'];
$username             = $_POST['username'];
$password             = $_POST['password'];

// query SQL untuk insert data
$query=mysqli_query($conn, "UPDATE pelanggan SET nama='$Nama',jenkel='$JenisKelamin',alamat='$Alamat',noktp='$nomorktp',email='$email',notelf='$notelf',username='$username',password='$password' WHERE id='$id'");
// mysqli_query($conn, $query);


// mengalihkan ke halaman index.php
header("location:user.php");
// echo"
// $id
// $Nama
// $JenisKelamin
// $Alamat
// $nomorktp
// $email
// $notelf
// $username
// $password
// ";
?>
