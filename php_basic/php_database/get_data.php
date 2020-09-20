<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DATABASE</title>
</head>
<body>
    <h1>PHP BASIC DATABASE</h1>
    <a href="add.php">Tambah Data</a>
    <br><br>
    
    <?php

        // echo "Hasil vardump <br>";
        // var_dump($result);
        // echo "<br>";

        include_once("connection.php");
        $sql = "SELECT id, nama, alamat, jabatan FROM karyawan";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // CARA PERTAMA
                // echo "ID : " .$row["id"]. " ";
                // echo "NAMA : " .$row["nama"]. " ";
                // echo "ALAMAT : " .$row["alamat"]. " ";
                // echo "JABATAN : " .$row["jabatan"]. " ";
                // echo "<br>";

                // CARA KEDUA
                echo "id: " .$row["id"]
                ." Nama: " .$row["nama"]. " "
                .$row["alamat"]. " "
                .$row["jabatan"]

    ?>          <!-- supaya brwrna yg code dibawah -->

                <a href='edit.php?id="<?= $row["id"]; ?>"'>EDIT</a>
                | 
                <a href='delete.php?id="<?= $row["id"]; ?>"'>DELETE</a>
                <br>

                <!-- klo nda pke "?>" deng "< ? php" di tngah2 -->
                <!--
                ." <a href='edit.php?id=".$row["id"]."'>EDIT</a>"
                ." | "
                ." <a href='delete.php?id=".$row["id"]."'>DELETE</a>"
                ."<br>";
                -->

    <?php
            }
        }
    ?>
    
</body>
</html>