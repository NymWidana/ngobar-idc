<?php

// TUGAS1
echo"TUGAS 1 <br><br>";

// Nama : I Nyoman Widana
// NIM : 2401010021


// pembuatan kelas kelas 
class persegiPanjang{
    public $panjang;
    public $lebar;
    function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    function cariLuas(){
       return $this->panjang * $this->lebar; 
    }
    function cariKeliling(){
        return 2*($this->panjang + $this->lebar);
    }
}
class persegi{
    public $sisi;
    function __construct($sisi){
        $this->sisi = $sisi;
    }
    function cariLuas(){
       return $this->sisi**2; 
    }
    function cariKeliling(){
        return $this->sisi * 4;
    }
}
class segitiga{
    public $alas;
    public $tinggi;
    function __construct($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    function cariLuas(){
       return 1/2 * $this->alas * $this->tinggi; 
    }
}
class lingkaran{
    public $jariJari;
    public $phi = 3.14;
    function __construct($jariJari){
        $this->jariJari = $jariJari;
    }
    function cariLuas(){
       return $this->phi * $this->jariJari**2; 
    }
    function cariKeliling(){
        return 2*$this->phi * $this->jariJari;
    }
}


// contoh penggunaan

// membuat objek baru dari kelas persegi panjang
$persegipanjang1 = new persegiPanjang(34, 22);
// memanggil fungsi pencari luas dan keliling dari objek yang sudah dibuat
echo "Luas dari persegi panjang dengan panjang {$persegipanjang1->panjang} dan lebar {$persegipanjang1->lebar} adalah : {$persegipanjang1->cariLuas()}<br>";
echo "Keliling dari persegi panjang dengan panjang {$persegipanjang1->panjang} dan lebar {$persegipanjang1->lebar} adalah : {$persegipanjang1->cariKeliling()}<br><br>";

// membuat objek baru dari kelas persegi
$persegi1 = new persegi(34);
// memanggil fungsi pencari luas dan keliling dari objek yang sudah dibuat
echo "Luas dari persegi dengan sisi {$persegi1->sisi} adalah : {$persegi1->cariLuas()}<br>";
echo "Keliling dari persegi dengan sisi {$persegi1->sisi} adalah : {$persegi1->cariKeliling()}<br><br>";

// membuat objek baru dari kelas segitiga
$segitiga1 = new segitiga(34,22);
// memanggil fungsi pencari luas dari objek yang sudah dibuat
echo "Luas dari segitiga dengan alas {$segitiga1->alas} dan tinggi {$segitiga1->tinggi} adalah : {$segitiga1->cariLuas()}<br><br>";


// membuat objek baru dari kelas lingkaran
$lingkaran1 = new lingkaran(21);
// memanggil fungsi pencari luas dan keliling dari objek yang sudah dibuat
echo "Luas dari lingkaran dengan jari-jari {$lingkaran1->jariJari} adalah : {$lingkaran1->cariLuas()}<br>";
echo "Keliling dari lingkaran dengan jari-jari {$lingkaran1->jariJari} adalah : {$lingkaran1->cariKeliling()}<br><br>";