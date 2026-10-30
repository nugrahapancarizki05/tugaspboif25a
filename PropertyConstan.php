<?php

namespace pbo\Marketplace;

class Produk {
    
    // property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constan
    const PAJAK = 0.11;

    public function __construct($kode, $nama, $harga, $stok) {
        $this -> kode = $kode;
        $this -> nama = $nama;
        $this -> harga = $harga;
        $this -> stok = $stok;
    }

    public function pajak() {
        return self::PAJAK * 100;
    }

    public function total() {
        return $this -> harga + ($this -> harga * self::PAJAK);
    }
}



?>

