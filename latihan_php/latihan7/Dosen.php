<?php
  //sertakan file induk class
  require_once 'Person.php';
  
  class Dosen extends Person {
    //member1 : variable
    public $nidn;
    public $gelar;
    //member2 : constructor
    public function __construct($nama, $gender, $nidn, $gelar) {
      parent::__construct($nama,$gender);
      $this->nidn = $nidn;
      $this->gelar = $gelar;
    }
    //member3 : method / fungsi
    public function mencetak() {
      parent::mencetak();
      echo '<br/>NIDN: '.$this->nidn;
      echo '<br/>Gelar: '.$this->gelar;
      echo '<hr/>';
    }
  }