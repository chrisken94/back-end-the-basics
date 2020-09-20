<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Karyawan</title>
</head>
<body>
    <h1>Tambah Data Karyawan</h1>
    <form action="#" method="post">
        Nama : <input type="text" name="nama"><br>
        Alamat : <input type="text" name="alamat"><br>
        Jabatan : <input type="text" name="jabatan"><br>
        <input type="submit" value="SUBMIT">
    </form>
</body>
</html>

<?php

    include_once("connection.php");
    if (!empty($_POST)) {
        $home = 'get_data.php';
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $jabatan = $_POST["jabatan"];

        $insert = "INSERT INTO karyawan (`nama`, `alamat`, `jabatan`) VALUES ('$nama', '$alamat', '$jabatan')";
        $result = $conn->query($insert);
        if ($result) {
            header ('Location: ' .$home);
        }
    }

?>