<?php 
  //sertakan file induk class
  require_once "Bentuk2D.php";
  
  class Segitiga extends Bentuk2D {
    //member1 : variable
    public $alas;
    public $tinggi;
    
    //member2 : constructor
    public function __construct($alas, $tinggi) {
      $this->alas = $alas;
      $this->tinggi = $tinggi;
    }
    
    //member3 : method
    public function sisiMiring() {
      $sisiMiring = sqrt(pow($this->alas,2) + pow($this->tinggi,2));
      return $sisiMiring;
    }
    public function namaBidang() {
      echo "Segitiga siku-siku";
    }
    public function luasBidang() {
      $luas = 0.5 * $this->alas * $this->tinggi;
      return $luas;
    }
    public function kelilingBidang() {
      $keliling = $this->alas + $this->tinggi + $this->sisiMiring();
      return $keliling;
    }
    public function keterangan() {
      echo 'Alas: '. $this->alas;
      echo '<br /> Tinggi: '. $this->tinggi;
      echo '<br /> Sisi miring: '. $this->sisiMiring();
    }
  }