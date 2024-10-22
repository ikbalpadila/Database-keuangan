<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pemrograman3.com</title>
</head>
<body>
    <h2>Pemrograman 3 2022</h2>
    <br/>
    <a href="input_user.php">+ TAMBAH USER</a>
    <br/>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Password</th>
            <th>level</th>
            <th>status</th>
            <th>OPSI</th>
        </tr>
        <?PHP
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from user");
        while ($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d ['nama']; ?></td>
                <td><?php echo $d ['password']; ?></td>
                <td><?php echo $d ['level']; ?></td>
                <td><?php echo $d ['status']; ?></td>
                <td>
                    <a href="edit_user.php?id=M?php echo $d['id']; ?>">EDIT</a>
                    <a href="edit_user.php?id=M?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>