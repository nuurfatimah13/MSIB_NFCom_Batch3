<?php 
  //sertakan file induk class
  require_once "Bentuk2D.php";
  
  class Lingkaran extends Bentuk2D {
    //member1 : variable
    public $jari2;
    
    //member2 : constructor
    public function __construct($jari2) {
      $this->jari2 = $jari2;
    }
    
    //member3 : method
    public function namaBidang() {
      echo "Lingkaran";
    }
    public function luasBidang() {
      $luas = 3.14 * $this->jari2 * $this->jari2;
      return $luas;
    }
    public function kelilingBidang() {
      $keliling = 2 * 3.14 * $this->jari2;
      return $keliling;
    }
    public function keterangan() {
      echo 'Jari-jari: '. $this->jari2;
    }
  }