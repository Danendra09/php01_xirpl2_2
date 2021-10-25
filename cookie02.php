<?php
if(isset($_COOKIE['username'])) {
    echo "<h1>Cookie 'username' ada. Isinya : ".$_COOKIE
    ['username']."</h1>";
} else {
    echo "<h1> Cookkie 'username' TIDAK ada.</h1>";
}
if(isset($_COOKIE['namalengkap'])) {
    echo "<h1>Cookie 'namalengkap' ada. Isinya : ".$_COOKIE
    ['namalengkap']."</h1>";
} else {
    echo "<h1> Cookkie 'namalengkap' TIDAK ada.</h1>";
}

echo "<h2>Klik <a href='cookie01.php'>disini</a> untuk 
penciptaan cookies</h2>";
?>