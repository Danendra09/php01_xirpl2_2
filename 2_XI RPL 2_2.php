<!DOCTYPE html>
<head>
    <title>Latihan PHP 2 Looping</title>
</head>
<body>
    <h1>Perulangan</h1>
    <?php
    date_default_timezone_set("asia/jakarta");
    echo date("d-m-Y "). date("h:i:sa");
    echo "<br>";
    for ($i=0; $i<=6; $i++) {
    for ($j=6-$i; $j>1;$j--) {
    echo '*';
    }
    echo "<br>";
    }
    ?>
</body>
</html>