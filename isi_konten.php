<?php

session_start();
if (!$_SESSION['isi_konten']) {
	header("Location: index.php");
}

include 'koneksi.php';
$posts = mysqli_query($conn, "SELECT * FROM post");
if (isset($_GET['anggota_ditambahkan'])) {
	?>
	<script> 
     alert("Selamat Anda Berhasil Menambahkan Anggota Baru . . . !"); 
	</script>
<?php
}
if (isset($_GET['anggota_dihapus'])) {
	?>
	<script> 
     alert("Data Anggota Berhasil Dihapus . . . !"); 
	</script>
<?php
}
?>
<!DOCTYPE html>
<script src="https://kit.fontawesome.com/f4a3089adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css.css">

<head>
	<title>Blog</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>



<BODY>
    <style>
        body{
            background-color: black;
            background-repeat : no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: 100%;
        }
    </style>

<table align = center>
<tr>
	<td><h2 align="center"><a href='index.php'><button class= "btn btn-danger"><i class="fa-sharp fa-solid fa-right-from-bracket"></i></button></a></td>
	<td width = 1280><h1 style="text-align: center; color : white">Anggota Kelompok 2</h1></td>
	<td><a href='tambah_anggota.php'><button class= "btn btn-danger"><i class="fa-solid fa-user-plus"></i></button></a></h2></td>
</tr>	
</table>
<br>

	
	<div style='border:2;padding:30px;border-radius:10px;background-color:rgba(223, 0, 0, 0.534);'>
	<hr style= 'color : white;'>
	<font style="color: white;">
	
	
	<?php
	while($row = mysqli_fetch_array($posts)) {
		echo "<table>";
		echo "<tr><td width = 1380><a href='post.php?id={$row['id']}' style='text-decoration : none'><h2>{$row['judul']}</h2></a><td>";
		echo "<td><a href='hapus.php?id={$row['id']}'><button class= 'btn btn-danger'><i class='fa-solid fa-trash'></i></button></a></tr>";
		echo "</table>";
		echo "<small>NIM {$row['nim']}</small>";
		echo "<hr>";
	}
	?>
	

	</font>
	</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>