<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/f4a3089adc.js" crossorigin="anonymous"></script>

<head>
    <title>Tambah Anggota</title>
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
		.ak form{
			padding: 0 30px;
		}
    </style>


    <h1><a href="isi_konten_secure.php"><button class= "btn btn-primary"><i class="fa-sharp fa-solid fa-right-from-bracket"></i></button></a></h1>


<br>
<br>
<br>

    <div align="center">
        <div style="border:2;padding:1px;width:450px;height:450px;border-radius:30px;background-color:rgba(0, 140, 255, 0.445);">

        <form action="kirim_anggota_secure.php" method="post" enctype="multipart/form-data">
        <div class="ak">
            <h2 style="color : white;">Tambah Anggota</h2>
            <br>
            <h5 align ="left"style="color: white;">Nama Panggilan :</h5>
            <input class="form-control form-control-md" required type="text" name="judul" placeholder="Saya harus memanggil anda siapa ?"> 
            <h5 align ="left"style="color: white;">NIM :</h5>
            <input class="form-control form-control-md" required type="number" name="nim" placeholder="Masukkan NIM Anda">
            <h5 align ="left"style="color: white;">Tentang Anda :</h5>
            <textarea class="form-control" type="text" name="konten" placeholder="Ceritakan tentang diri anda . . . "></textarea>
            <h5 align ="left"style="color: white;">Upload Foto :</h5>
            <input type="file" class="form-control" name="foto">
            <br>
            <button class="btn btn-primary" type="submit" value="Tambahkan">Tambahkan</button>
        </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>