<form action="#" method="post">
    Nama : <input type="text" name="name"> <br>
    Umur : <input type="text" name="umur"> <br>
    <input type="submit" value="SUBMIT">
</form>

<?php

    if (!empty($_POST['name']) || !empty($_POST['umur'])) {
        $nama = $_POST['name'];
        $umur = $_POST['umur'];
        echo "Nama " .$nama. " Umur " .$umur. " Tahun";
    }

?>