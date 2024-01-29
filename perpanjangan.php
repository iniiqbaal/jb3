<?php
session_start(); // Mulai sesi

// Mengecek apakah data dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $namaPemilik = $_POST["nama_pemilik"];
    $nomorKendaraan = $_POST["nomor_kendaraan"];

    // Validasi sederhana
    if (empty($namaPemilik) || empty($nomorKendaraan)) {
        echo "<p class='error'>Silakan lengkapi semua informasi.</p>";
    } else {
        // Validasi tambahan: jika nomor kendaraan tidak numeric atau kurang dari 2
        if (!is_numeric($nomorKendaraan) || $nomorKendaraan < 2) {
            // Set kegagalan ke sesi
            $_SESSION['result'] = 'kegagalan';
        } else {
            // Set keberhasilan ke sesi
            $_SESSION['result'] = 'keberhasilan';
        }

        // Tambahkan redirect ke halaman hasil sesuai sesi
        header("Location: " . $_SESSION['result'] . ".php");
        exit();
    }
}
?>



<h2>Masukkan data anda:</h2>

<form action="index.php?page=perpanjangan" method="post">
    <label for="nama_pemilik">Nama Pemilik:</label>
    <input type="text" name="nama_pemilik" required><br>

    <label for="nomor_kendaraan">Nomor Kendaraan:</label>
    <input type="text" name="nomor_kendaraan" required><br>

    <input type="submit" value="Perpanjang Pajak">
</form>
