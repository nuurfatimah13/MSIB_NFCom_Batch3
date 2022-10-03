<?php
  //sertakan file induk class
  require_once 'Person.php';
  
  class Mahasiswa extends Person {
    //member1 : variable
    public $semester;
    public $jurusan;
    //member2 : constructor
    public function __construct($nama, $gender, $semester, $jurusan) {
      parent::__construct($nama,$gender);
      $this->semester = $semester;
      $this->jurusan = $jurusan;
    }
    //member3 : method / fungsi
    public function mencetak() {
      parent::mencetak();
      echo '<br/>Semester: '.$this->semester;
      echo '<br/>Jurusan: '.$this->jurusan;
      echo '<hr/>';
    }
  }