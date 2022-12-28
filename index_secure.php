<?php
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {

	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	
	$login = mysqli_query($conn, "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'");

	if (mysqli_num_rows($login) == 0) {
?>
	<script> 
    alert("Username atau Sandi anda Salah!"); 
	</script>
<?php
	} else {
		$_SESSION['isi_konten'] = 1;
		header("Location: isi_konten_secure.php");
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
<html lang="en">
<link rel="stylesheet" href="css.css">

<title>Login</title>

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
	

	
	<h1><a href="index.php"><button class= "btn btn-danger">Unsecure Login</button></a></h1>
	<br>
	<br>

	
    <div align="center">
        <div style="border:2;padding:1px;width:450px;height:350px;border-radius:30px;background-color:rgba(0, 140, 255, 0.445);">
		<img src="shield.png" width="30%" alt="">
		<br>
	
		
	<div class="ak">


		<form action="" method="post">
		<h5 align ="left"style="color: white;">Username:</h5>
		<input type="text" name="username" class="form-control form-control-md" type="text" placeholder="Username" aria-label=".form-control-lg example">	

		<h5 align = "left" style="color: white;">Password:</h5>
		<input type="password" name="password" class="form-control form-control-md" type="text" placeholder="Password" aria-label=".form-control-lg example">
		<br>
		
		<div style="text-align:center">
		<button type="submit" name="submit" value="Login" class="btn btn-primary">Login</button>
		</div>
		</form>
		<br>

		<h5 style="color: white;">Jika belum punya akun, silahkan <a href='daftar_secure.php'>Mendaftar</a></h5>
		</div>
	</div>
	</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>