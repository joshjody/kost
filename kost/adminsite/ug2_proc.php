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



 if (isset($_POST['submit'])){
 $fileName = $_FILES['gambar']['name'];
  // Simpan ke Database
  //$query = "UPDATE kamarinfo SET gambar1=$fileName WHERE id=$id";
  //$sql = "insert into simpan (gambar, keterangan) values ('$fileName', '".$_POST['keterangan']."')";
  //mysqli_query($conn, $query);
  // Simpan di Folder Gambar
  move_uploaded_file($_FILES['gambar']['tmp_name'], "../images/".$_FILES['gambar']['name']);
  $fileNames = 'images/'.$fileName;
  $query="UPDATE kamarinfo SET gambar2='$fileNames' WHERE id='$id' ";
  mysqli_query($conn, $query);
  // mengalihkan ke halaman index.php
  header("location:editkamar.php?id=$id");
 }
?>
