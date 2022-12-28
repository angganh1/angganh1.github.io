<?php 
require('koneksi.php');
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";

if ($conn->query($sql) === TRUE) {
  header("Location:index.php?daftar_berhasil=1");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
