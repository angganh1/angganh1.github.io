<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/f4a3089adc.js" crossorigin="anonymous"></script>

<title>Pendaftaran Unsecure</title>

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


<h1><a href="index.php"><button class= "btn btn-danger"><i class="fa-sharp fa-solid fa-right-from-bracket"></i></button></a></h1>



<br>
<br>
<br>


<div align="center">
<div style="border:2;padding:1px;width:450px;height:330px;border-radius:30px;background-color:rgba(223, 0, 0, 0.534);">

            <form action="kirim.php" method="post">
            <h3 style="color: white;">Pendaftaran</h3>
            <h5 align="left" style="color: white;">Username :</h5>
            <div><input class="form-control form-control-md" required type="text" name="username" placeholder="Username"></div> 
            <h5 align="left" style="color: white;">Password :</h5>
            <div><input class="form-control form-control-md" required type="password" name="password" placeholder="Password"></div> 
            <h5 align="left" style="color: white;">Email :</h5>
            <div><input class="form-control form-control-md" required type="email" name="email" placeholder="Email"></div>
            <div style="text-align:center">
            <br>
		    <button type="submit" name="submit" value="Daftar" class="btn btn-danger">Daftar</button>
		    </div>
            </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>