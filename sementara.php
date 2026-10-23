
<?php
class Produk {

    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Constant
    const PAJAK = 0.11;

    // Constructor
    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;

        echo "Objek produk berhasil dibuat.";
        echo "<br/>";
    }

    // Destructor
    public function __destruct() {
        echo "<br/>";
        echo "Objek produk telah selesai digunakan.";
    }

    // Method pajak
    public function pajak() {
        return self::PAJAK * 100;
    }

    // Method total harga setelah pajak
    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

// Membuat objek menggunakan constructor
$produk = new Produk("PR001", "Laptop", 10000000, 5);

// Menampilkan data produk
echo "Kode: " . $produk->kode;
echo "<br/>";
echo "Produk: " . $produk->nama;
echo "<br/>";
echo "Harga: Rp. " . $produk->harga;
echo "<br/>";
echo "Stok: " . $produk->stok;
echo "<br/>";
echo "Pajak: " . $produk->pajak() . "%";
echo "<br/>";
echo "Total harga setelah pajak: Rp. " . $produk->total();

?>
