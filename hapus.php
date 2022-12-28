<?php 
require('koneksi.php');
$id = $_GET['id'];
 $q  = mysqli_query($conn, "SELECT * FROM post WHERE id = {$id}") or die(mysqli_error($conn));
$post = mysqli_fetch_array($q);
$file = $post['nama_gambar'];

if(file_exists('foto/' . $file)){ 
unlink('foto/' . $file);
}


$sql = "DELETE FROM post WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  header("Location:isi_konten.php?anggota_dihapus=1");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>