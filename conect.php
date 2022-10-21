<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "menu";

    $conn = mysqli_connect($server, $user, $password, $db);

    if(!$conn)
    {
        die("gagal terhubung ke database".mysqli_connect_error());
    }
?>