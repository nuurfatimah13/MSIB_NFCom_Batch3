<?php
  require_once "Hewan.php";
  
  class Anjing extends Hewan {
    public function bersuara() {
      echo "<br/> Suara Anjing Guk..Guk..Guk";
    }
  }