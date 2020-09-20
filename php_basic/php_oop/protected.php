<?php

    // buat class laptop
    class laptop {

        // buat protected property
        public $pemilik = "Anto";
                                                    // $this === variabel utk memanggil function, variabel diatas (?)dll(?)
        protected function akses_pemilik() {
            return $this->pemilik;
        }
        protected function hidupkan_laptop() {
            return "Hidupkan Laptop";
        }
        public function paksa_hidup() {
            return $this->hidupkan_laptop();
        }
    }

    // buat objek dri class laptop (instansiasi)
    $laptop_anto = new laptop();

    // JALANKAN AKSES PEMILIK
    echo $laptop_anto->akses_pemilik();
    echo $laptop_anto->hidupkan_laptop();

    // JALANKAN METHOD PAKSA HIDUP
    echo $laptop_anto->paksa_hidup();

?>