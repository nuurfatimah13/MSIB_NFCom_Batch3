<?php 
  //sertakan file induk class
  require_once "Bentuk2D.php";
  
  class PersegiPanjang extends Bentuk2D {
    //member1 : variable
    public $panjang;
    public $lebar;
    
    //member2 : constructor
    public function __construct($panjang, $lebar) {
      $this->panjang = $panjang;
      $this->lebar = $lebar;
    }
    
    //member3 : method
    public function namaBidang() {
      echo "Persegi panjang";
    }
    public function luasBidang() {
      $luas = $this->panjang * $this->lebar;
      return $luas;
    }
    public function kelilingBidang() {
      $keliling = 2 * ($this->panjang + $this->lebar);
      return $keliling;
    }
    public function keterangan() {
      echo 'Panjang: '. $this->panjang;
      echo '<br /> Lebar: '. $this->lebar;
    }
  }