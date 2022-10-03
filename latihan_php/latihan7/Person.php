<?php
  class Person {
    //member1 : variable
    public $nama;
    public $gender;
    //member2 : constructor
    public function __construct($nama,$gender) {
      $this->nama = $nama;
      $this->gender = $gender;
    }
    //member3 : method / fungsi
    public function mencetak() {
      echo 'Nama: '.$this->nama;
      echo '<br/>Jenis Kelamin: '.$this->gender;
    }
  }