<?php session_start();
echo "Nama anda adalah ".$_SESSION['nama'];
echo "<br/><a href='session01.php'>Kembali kehalaman pertama</a>";
?>