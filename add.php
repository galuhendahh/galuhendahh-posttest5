<?php

require "conect.php";

if(isset($_POST["tambah"]))
{
    $image = $_FILES["foto"]["name"];
    $tmp = $_FILES["foto"]["tmp_name"];

    $nama = $_POST["nama"];
    $harga = $_POST["Harga"];

    move_uploaded_file($tmp, "menu/".$image);

    $sql = "INSERT INTO coffe(id, gambar, nama, harga) VALUES('', '$image', '$nama', '$harga');";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        echo 
        "<script>
        alert('Menu Berhasil Di Tambah')
        </script>";
    }

    else
    {
        echo 
        "<script>
        alert('Menu GAGAL Di Tambah')
        </script>";
    }
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>CoffeTwins</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/bf9497bfb3.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("headnav.php"); ?>
    <?php include("sidenav.php"); ?>

    <div class="input-box">

        <form action="" method="post" enctype="multipart/form-data">

            <label for="">Foto</label>
            <input type="file" name="foto">
            <br>
            <div class="input">
                <p>Nama Kopi</p>
                <input type="text" name="nama" placeholder="ex:Cappuchino...">
                <br>
                <p>Harga</p>
                <input type="text" name="Harga" placeholder="masukan Harga...">
            </div>
            <br>
            <button name="tambah" type="submit" class="btn"><i class="fa-solid fa-plus"></i>Tambah</button>
            <br><br>
        </form>

    </div>

</body>
</html>