<?php
require "conect.php";

$id = $_GET["id"];

$sql = "DELETE FROM coffe WHERE id = $id";

$result = mysqli_query($conn, $sql);


if($result)
{
    echo
    "<script>
    alert('Menu Di Hapus');
    document.location.href = 'coffe.php'
    </script>";
}

else
{
    echo
    "<script>
    alert('Error : Menu Gagal Dihapus');
    document.location.href = 'coffe.php'
    </script>";
}
?>