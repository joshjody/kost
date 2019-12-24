<?
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




// if (isset($_POST['upload']))
// $img = $_FILES['gambar']['name'];
// $target = 'images/' . $img;
// move_uploaded_file($_FILES['gambar']['tmp_name'],$target);


$nama_file = $_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];
// Set path folder tempat menyimpan gambarnya
$path = "images/".$nama_file;
$data = $path.$nama_file;
move_uploaded_file($tmp_file, $path); // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :
      // Proses simpan ke Database
      // $query = "UPDATE kamarinfo SET gambar1='$data' WHERE id='$id'";
      // $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
      //
      // if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      //   // Jika Sukses, Lakukan :
      //   header("location: editkamar.php?id=$id"); // Redirectke halaman index.php
      // }else{
      //   // Jika Gagal, Lakukan :
      //   echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      //   echo "<br><a href='editkamar.php?id=$id'>Kembali Ke Form</a>";
      // }
echo'bergasi';




?>
