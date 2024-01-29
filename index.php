<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpanjangan Pajak Kendaraan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Perpanjangan Pajak Kendaraan</h1>
    
    <ul>
        <li><a href="index.php?page=home">Beranda</a></li>
        <li><a href="index.php?page=perpanjangan">Perpanjangan Pajak</a></li>
    </ul>

    <?php
    // Mengecek apakah parameter "page" telah diberikan
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    // Menampilkan halaman sesuai dengan parameter "page"
    switch ($page) {
        case 'perpanjangan':
            include('perpanjangan.php');
            break;
        default:
            include('home.php');
            break;
        case 'keberhasilan':
            include('keberhasilan.php');
            break;
        case 'kegagalan':
            include('kegagalan.php');
            break;
        }
    ?>

</body>
</html>
