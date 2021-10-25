<?php
$value = 'Dane';
$value2 = 'Danendra Arden S';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600);

echo "<h1>Ini halaman pengesetan cookie</h1>";
echo"<h2>Klik <a href='cookie2.php'>disini</a> untuk 
pemeriksaan cookies<h/2>";
?>