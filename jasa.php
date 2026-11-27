<?php

namespace pbo\Marketplace;

require_once('./PropertyConstan.php');

use pbo\Marketplace\Produk;

class jasa {

    use Produk;

    public function payment($tipe) {

        return match($tipe) {
            "virtual" => "virtual account",
            "qris" => "QRIS",
            default => "hanya bisa pakai va dan qris"
        };
    }
}