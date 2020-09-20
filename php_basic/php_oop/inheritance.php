<?php

    // buat class induk: computer
    class komputer {

        public $merk;
        public $processor;
        public $memory;

        private function beli_komputer() {
            return "Beli komputer baru ";
        }

        protected function maksa_beli() {
            return $this->beli_komputer();
        }
    }

    // turunkan class ke laptop
    class laptop extends komputer {

        public function beli_laptop() {
            return $this->beli_komputer();
        }

        public function maksa_beli_laptop() {
            return $this->maksa_beli();
        }

        public function lihat_spec() {
            return "merk: $this->merk, processor: $this->processor, memory: $this->memory";
        }
    }

    // buat objek baru dri class komputer
    $komputer_baru = new komputer();
    // isi property objek
    $komputer_baru->merk = "VIVO";
    $komputer_baru->processor = "intel core i5";
    $komputer_baru->memory = "16 GB";

    // buat objek bru dri class laptop
    $laptop_baru = new laptop();
    // isi property objek
    $laptop_baru->merk = "Acer";
    $laptop_baru->processor = "intel core i5";
    $laptop_baru->memory = "2 GB";

    // PANGGIL METHOD OBJEK
    // echo $komputer_baru->maksa_beli();
    // echo "<br>";
    // echo $komputer_baru->lihat_spec();

    // PANGGIL METHOD OBJEK
    // echo $laptop_baru->beli_komputer();
    // echo $laptop_baru->beli_laptop();
    // echo $laptop_baru->maksa_beli();
    // echo $laptop_baru->maksa_beli_laptop();
    // echo "<br>";
    // echo $laptop_baru->lihat_spec();

?>