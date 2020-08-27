<?php
class produk{
  public $namabarang = "laptop",
           $merk = "Heubener",
             $harga = 999999;
  function nyalakanlaptop(){
    return "laptopnyala";
  }

  function info(){
    echo"namabarang".$this->namabarang;
  }

}
$produk1 = new produk();
var_dump($produk1);
$produk2 = new produk();
$produk2->namabarang="jancok";
var_dump($produk2);
echo $produk1-> nyalakanlaptop();
$produk2->info();