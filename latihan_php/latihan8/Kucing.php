<?php
  require_once "Hewan.php";
  
  class Kucing extends Hewan {
    public function bersuara() {
      echo "<br/> Suara Kucing Meooong";
    }
  }