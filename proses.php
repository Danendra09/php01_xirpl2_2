<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST['nama'];
    echo $nama;
    $alamat = $_POST['alamat'];
    echo "<br>";
    echo $alamat;
}
?>