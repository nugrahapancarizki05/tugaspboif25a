<?php
class Produk {
    
    // property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constan
    const PAJAK = 0.11;
}

$produk = new produk();
$produk -> kode = "fadli";
$produk -> nama = "pc";
$produk -> harga = 10000000;
$produk -> stock = 5;

$pajak = produk::PAJAK * 100;
$jumlahpajak = $produk -> harga * produk::PAJAK;

$total = $produk -> harga + $jumlahpajak;

echo "produk: ". $produk->nama;
echo "harga: ". $produk->harga;
echo "stock: ". $produk->stock;
echo "pajak: ". $produk->pajak;
echo "<br/>";
echo "total harga setelah pajak: Rp. ". $total;


