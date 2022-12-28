<?php

include 'koneksi.php';

$id = $_GET['id'];
$q  = mysqli_query($conn, "SELECT * FROM post WHERE id = {$id}") or die(mysqli_error($conn));
$post = mysqli_fetch_array($q);

?>




<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/f4a3089adc.js" crossorigin="anonymous"></script>



<head>
	<title>Keamanan Sistem</title>
</head>

<h1><a href="isi_konten.php"><button class= "btn btn-danger"><i class="fa-sharp fa-solid fa-right-from-bracket"></i></button></a></h1>

<BODY>
    <style>
        body{
            background-color: black;
            background-repeat : no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: 100%;
        }
		.ak form{
			padding: 0 30px;
		}
    </style>


<br>
<br>


	<div align="center">
        <div style="border:2;padding:1px;width:650px;border-radius:30px;background-color:rgba(223, 0, 0, 0.534);">
	<font color=white>
	
	<h2><?php echo $post['judul'] ?></h2>
	<small>NIM <?php echo $post['nim'] ?></small><br>
	
	<?php echo $post['konten'] ?>
	<h2>Ini adalah foto saya</h2>
	<img src="foto/<?=$post['nama_gambar']?>" class="img-thumbnail" width=200>
	</font>
	<h5></h5>
	</div>
	</div>

</body>
</html>