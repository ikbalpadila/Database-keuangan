<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "keuangan");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
} else {
    echo "Koneksi berhasil!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keuangan</title>
</head>
<body>
    <!-- Konten website bisa ditambahkan di sini -->
</body>
</html>
