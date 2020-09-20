<?php

    // buat class laptop
    class laptop {

        // buat protected property
        public $pemilik = "Anto";

        public function akses_pemilik() {
            return $this->pemilik;
        }
        public function hidupkan_laptop() {
            return "Hidupkan Laptop";
        }    
    }

    // buat objek dri class laptop (instansiasi)
    $laptop_anto = new laptop();

    // JALANKAN AKSE METHOD AKSES PEMILIK
    echo $laptop_anto->akses_pemilik();
    echo $laptop_anto->hidupkan_laptop();

?>