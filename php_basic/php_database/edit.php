<?php

    // id dri URL
    $id = $_GET["id"];
    // echo $id;
    include_once("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Karyawan</title>
</head>
<body>
    <h1>Edit Data Karyawan</h1>
    <form action="#" method="post">

    <?php
        $get = "SELECT id, nama, alamat, jabatan FROM karyawan WHERE id=" .$id;
        $get_data = $conn->query($get);
        while ($row = $get_data->fetch_assoc()) {
    ?>  <!-- supaya brwarna yg dibwah -->
            <input type="hidden" name="id" value="<?= $row["id"]; ?>"><br>
            Nama : <input type="text" name="nama" value="<?= $row["nama"]; ?>"><br>
            Alamat : <input type="text" name="alamat" value="<?= $row["alamat"]; ?>"><br>
            Jabatan : <input type="text" name="jabatan" value="<?= $row["jabatan"]; ?>"><br>
            <input type="submit" value="SUBMIT">
    <?php // supaya brwarna yg diatas
        }  
    ?>

    </form>
</body>
</html>

<?php

    if (!empty($_POST)) {
        $home = 'get_data.php';
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $jabatan = $_POST["jabatan"];
        $update = "UPDATE karyawan SET `nama`='$nama', `alamat`='$alamat', `jabatan`='$jabatan' WHERE id =" .$_POST["id"];
        $result = $conn->query($update);

        if ($result) {
            header ('Location: ' .$home);
        }
        else {
            echo $conn->error;
        }
    }

?>