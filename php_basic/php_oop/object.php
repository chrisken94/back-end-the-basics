<?php

    // buat class laptop
    class laptop {
        
        // buat property/variabel utk class laptop
        var $pemilik;
        var $merk;
        var $ukuran_layar;

        // buat method utk class laptop
        function hidupkan_laptop() {
            return "Hidupkan Laptop";
        }
        function matikan_laptop() {
            return "Matikan Laptop";
        }
    }

    // buat objek dri class laptop (instansiasi)
    $laptop_anto = new laptop();

    // set property
    $laptop_anto->pemilik = "Anto";
    $laptop_anto->merk = "Asus";
    $laptop_anto->ukuran_layar = "15 inchi";

    // tampilan property
    echo $laptop_anto->pemilik;
    echo "<br>";
    echo $laptop_anto->merk;
    echo "<br>";
    echo $laptop_anto->ukuran_layar;
    echo "<br>";

    // tampilkan method
    echo $laptop_anto->hidupkan_laptop();
    echo "<br>";
    echo $laptop_anto->matikan_laptop();

?>