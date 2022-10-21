<?php
require "conect.php";
$result = mysqli_query($conn, "SELECT * FROM coffe");

$menu = [];

while($row = mysqli_fetch_assoc($result))
{
    $menu[] = $row;
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

    <div class="coffe-menu">
        
        <h2 class="header">CoffeTwins menu : </h2>
        
        <div class="list">
            <?php $i = 1; foreach($menu as $mnu): ?>
            <div class="coffe-list">

                <p class="logo">CoffeTwins</p>
                <img src="menu/<?php echo $mnu["gambar"]; ?>" class="image">
                <p><i><?php echo $mnu["nama"]; ?></i></p>
                <p><?php echo "Rp. ".$mnu["harga"]; ?></p>

                <a href="edit.php?id=<?php echo $mnu["id"]; ?>"><i class="fa-regular fa-pen-to-square"></i>Edit</a>
                <a href="hapus.php?id=<?php echo $mnu["id"]; ?>"><i class="fa-solid fa-trash"></i>Hapus</a>

            </div>
            <?php $i++; endforeach; ?>
        </div>

    </div>


    
    
</body>
</html>