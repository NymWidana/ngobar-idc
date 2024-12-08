<?php
// encapsulasi
class mobil{
    private $warna;
    private $merk;
    private $tahun;

    public  function stwarna($warna){
    $this->warna = $warna;
    }
    public  function gtwarna(){
    return $this->warna;
    }
    public  function stmerk($merk){
    $this->merk = $merk;
    }
    public  function gtmerk(){
    return $this->merk;
    }
    public  function sttahun($tahun){
    $this->tahun = $tahun;
    }
    public  function gttahun(){
    return $this->tahun;
    }
}

$mobil1 = new mobil();
$mobil1->stwarna("silver");
$mobil1->stmerk("honda");
$mobil1->sttahun(1965);

echo $mobil1->gtwarna()."<br>";
echo $mobil1->gttahun()."<br>";
echo $mobil1->gtmerk()."<br>";