<?php 
  class Pegawai{
    //member1 variabel
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    
    //variabel static dan konstanta di dalam class
    static $jml = 0;
    const PT = 'PT Nurul Fikri Cipta Inovasi';
    
    //member2 konstruktor
    public function __construct($nip, $nama, $jabatan, $agama, $status) {
      $this->nip = $nip; 
      $this->nama = $nama;
      $this->jabatan = $jabatan;
      $this->agama = $agama;
      $this->status = $status;
      self::$jml++;
    }
    
    //member3 method
    public function setGajiPokok($jabatan){
      $this->jabatan = $jabatan;
      //gaji pokok
      switch($jabatan){
        case 'Manager': $jipok = 15000000; break;
        case 'Asisten Manager': $jipok = 10000000; break;
        case 'Kepala Bagian': $jipok = 7000000; break;
        case 'Staff': $jipok = 4000000; break;
        default: $jipok;
      }
      return $jipok;
    }
    public function setTunjab(){
      //tunjangan jabatan
      $tunjab = 0.2 * $this->setGajiPokok($this->jabatan);
      return $tunjab;
    }
    public function setTunkel($status){
      $this->status = $status;
      //tunjangan keluarga
      $tunkel = ($status == 'Menikah') ? 0.1 * $this->setGajiPokok($this->jabatan) : 0;
      return $tunkel;
    }
    public function setGajiKotor(){
      //gaji kotor
      $jikot = $this->setGajiPokok($this->jabatan) + $this->setTunjab() + $this->setTunkel($this->status);
      return $jikot;
    } 
    public function setZakatProfesi($agama){
      $this->agama = $agama;
      //zakat profesi
      $kaprof = ($agama == 'Islam' && $this->setGajiKotor() >= 6000000) ? 0.025 * $this->setGajiPokok($this->jabatan) : 0;
      return $kaprof;
    }
    public function setGajiBersih(){
      //gaji bersih
      $jiber = $this->setGajiKotor() - $this->setZakatProfesi($this->agama);
      return $jiber;
    }
    
    public function mencetak(){
      echo 'NIP Pegawai : '.$this->nip;
      echo '<br />Nama Pegawai : '.$this->nama;
      echo '<br />Jabatan : '.$this->jabatan;
      echo '<br />Agama : '.$this->agama;
      echo '<br />Status : '.$this->status;
      echo '<br />Gaji Pokok : Rp. '.number_format($this->setGajiPokok($this->jabatan), 0, ',', '.');
      echo '<br />Tunjangan Jabatan : Rp. '.number_format($this->setTunjab(), 0, ',', '.');
      echo '<br />Tunjangan Keluarga : Rp. '.number_format($this->setTunkel($this->status), 0, ',', '.');
      echo '<br />Zakat Profesi : Rp. '.number_format($this->setZakatProfesi($this->agama), 0, ',', '.');
      echo '<br />Gaji Bersih : Rp. '.number_format($this->setGajiBersih(), 0, ',', '.');
      echo '<hr /><br />';
    }
  }
?>