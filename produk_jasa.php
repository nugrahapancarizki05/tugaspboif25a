<?php

//panggil file propertyconstan
require('./jasa.php');

use pbo\Marketplace\jasa;

// object
$produk = new jasa();

$produk -> setKode("PR001")
        -> setNama("laptop")
        -> setHarga(10000000)
        -> setStok(5);

// hasil
echo "produk: ". $produk->getNama();
echo "<br/>";

echo "harga: ". $produk->getHarga();
echo "<br/>";

echo "stok: ". $produk->getStok();
echo "<br/>";

echo "pajak: ". $produk->pajak()."%";
echo "<br/>";
echo "<br/>";
echo "total harga setelah pajak: Rp. ". $produk->total();

echo "<br/>";
echo "metode pembayaran: ". $produk->payment("qris");