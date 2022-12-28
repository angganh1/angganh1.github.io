<?php
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$login = mysqli_query($conn, "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'");

	if (mysqli_num_rows($login) == 0) {
?>
	<script> 
    alert("Maaf Username atau Sandi Anda Salah!"); 
	</script>
<?php
	} else {
		$_SESSION['isi_konten'] = 1;
		header("Location: isi_konten.php");
	}
}

if (isset($_GET['daftar_berhasil'])) {
	?>
	<script> 
     alert("Selamat Anda Berhasil Mendaftar . . . !"); 
	</script>
<?php
}
?>
<!DOCTYPE html>
<!-- yg bikin eror-->
<!-- 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity=" sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
-->
<link rel="stylesheet" href="css.css">

<title>Login</title>

<body>
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
	

	
	<h1><a href="index_secure.php"><button class= "btn btn-primary">Secure Login</button></a></h1>
	<br>
	<br>

	
    <div align="center">
        <div style="border:2;padding:1px;width:450px;height:350px;border-radius:30px;background-color:rgba(223, 0, 0, 0.534);">
		<img src="danger.png" width="30%" alt="">
		<br>
		
		
		<div class="ak">
		<form action="" method="post">
		
		
		<h5 align ="left"style="color: white;">Username:</h5>
		<input type="text" name="username" class="form-control form-control-md" type="text" placeholder="Username" aria-label=".form-control-lg example">	

		<h5 align = "left" style="color: white;">Password:</h5>
		<input type="password" name="password" class="form-control form-control-md" type="text" placeholder="Password" aria-label=".form-control-lg example">
		<br>
		
		<div style="text-align:center">
		<button type="submit" name="submit" value="Login" class="btn btn-danger">Login</button>
		</div>
		</form>
		</div>
		<br>
		<h5 style="color: white;">Jika belum punya akun, silahkan <a href='daftar.php' style="color: red;">Mendaftar</a></h5>
		</div>
	</div>
</body>
</html>
