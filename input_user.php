<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman 3</title>
</head>
<?php
// koneksi database
include 'koneksi.php'; // Pastikan nama file 'konekis.php' juga diperbaiki menjadi 'koneksi.php'

//menangkap data yang dikirim dari form
if (!empty($_POST['save'])) {

    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $status =  $_POST['status'];

    //menginput data ke database
    $a = mysqli_query($koneksi, "INSERT INTO user (id, nama, password, level, status) VALUES ('', '$nama', '$password', '$level', '$status')");

    if($a) {
        // Mengalihkan halaman kembali
        header("location: tampil_user.php");
    } else {
        echo mysqli_error($koneksi); 
    }
}

?>
<body>
    <h2>Pemrograman 3 2022</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/> 
    <br/>
    <h3>TAMBAH DATA USER</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td> 
            </tr>
            <tr>
                <td>Level</td>
                <td>
                    <select name="level" required>
                        <option value="">-----Pilih</option>
                        <option value="1">Admin</option>
                        <option value="2">Staf</option>
                        <option value="3">Spv</option>
                        <option value="4">Mgr</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select name="status" required>
                        <option value="">-----Pilih</option>
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
