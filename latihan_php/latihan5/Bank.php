<?php 
  class Bank{
    //member1 variabel
    protected $norek;
    public $nama;
    private $saldo;
    
    //variabel static dan konstanta di dalam class
    static $jml = 0;
    const BANK = 'Bank Syariah Nurul Fikri';
    
    //member2 konstruktor
    public function __construct($no, $nasabah, $saldo) {
      $this->norek = $no; 
      $this->nama = $nasabah;
      $this->saldo = $saldo;
      self::$jml++;
    }
    
    //member3 method
    public function menabung($uang){
      //$this->saldo = $this->saldo + $uang;
      $this->saldo += $uang;
    }
    public function menarik($uang){
      //$this->saldo = $this->saldo - $uang;
      $this->saldo -= $uang;
    }
    public function mencetak(){
      echo '<b><u>'.self::BANK.'</u></b>';
      echo '<br />No. Rekening : '.$this->norek;
      echo '<br />Nama Nasabah : '.$this->nama;
      echo '<br />Saldo : Rp. '.number_format($this->saldo,0, ',', '.');
      echo '<hr /><br />';
    }
  }
?>