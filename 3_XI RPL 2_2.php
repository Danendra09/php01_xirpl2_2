<!DOCTYPE html>
<head>
<title> Latihan PHP 3 Array</title>
</head>
<body>
    <?php
    $data = [
    [
        "nama" => "Satria",
        "kelas" => "RPL 1",
    ],
    [
        "nama" => "Arsyi",
        "kelas" => "RPL 2",
    ],
    [
        "nama" => "Dhika",
        "kelas" => "RPL 3",
    ],
    [
        "nama" => "Evan",
        "kelas" => "RPL 4",
    ],
    [
        "nama" => "Fabian",
        "kelas" => "RPL 5",
    ],
    [
        "nama" => "Irfan",
        "kelas" => "RPL 6",
    ],
];
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    foreach($data as $siswa){
        echo "<p>Nama : " . "<b>" . $siswa["nama"] . 
        "</b>" . "Kelas : " . "<b>" . $siswa["kelas"] . 
        "</b>" . "</p>";
    }
    ?>
</body>
</html>