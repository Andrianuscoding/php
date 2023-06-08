<?php

include 'database.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];

if ($_POST['login'] == true) {
    $sql = "INSERT INTO todolist VALUES ('$nama','$nim')";
    $pesan = "Simpan";
}



if ($query) {
    header("Location:login.php?pesan=$pesan");
}
$conn->close();

?>
