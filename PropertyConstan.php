<?php
class Produk {
    
    // property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constan
    const PAJAK = 0.11;

    public function pajak() {
        return self::PAJAK * 100;
    }

    public function total() {
        return $this -> harga + ($this -> harga * self::PAJAK);
    }
}

$produk = new produk();
$produk -> kode = "fadli";
$produk -> nama = "laptop";
$produk -> harga = 10000000;
$produk -> stock = 5;

echo "produk: ". $produk->nama;
echo "<br/>";
echo "harga: ". $produk->harga;
echo "<br/>";
echo "stock: ". $produk->stock;
echo "<br/>";
echo "pajak: ". $produk->pajak()."%";
echo "<br/>";
echo "<br/>";
echo "total harga setelah pajak: Rp. ". $produk->total();

?>

