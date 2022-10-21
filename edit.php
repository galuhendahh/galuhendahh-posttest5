<?php
require "conect.php";

$id = $_GET["id"];
$read_sql = "SELECT * FROM coffe WHERE id = $id";
$result = mysqli_query($conn, $read_sql);

$menu = [];

while($row = mysqli_fetch_assoc($result))
{
    $menu[] = $row;
}

$menu = $menu[0];

if(isset($_POST["save"]))
{
    $image = htmlspecialchars($_FILES["foto"]["name"]);
    $tmp = htmlspecialchars($_FILES["foto"]["tmp_name"]);
    $nama = htmlspecialchars($_POST["nama"]);
    $harga = htmlspecialchars($_POST["Harga"]);
    

    move_uploaded_file($tmp, "menu/".$image);

    $sql = "UPDATE coffe SET gambar = '$image', nama = '$nama', harga = '$harga' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        echo "
        <script>
        alert('Menu di ubah');
        document.location.href = 'coffe.php'
        </script>";
    }

    else
    {
        echo "
        <script>
        alert('menu gagal di ubah');
        document.location.href = 'edit.php?id=$id'
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
            <button name="save" type="submit" class="btn"><i class="fa-solid fa-pencil"></i>Save</button>
            <br><br>
        </form>

    </div>

</body>
</html>