<?php
  require_once 'Kucing.php';
  require_once 'Anjing.php';
  require_once 'Kambing.php';
  
  $tom = new Kucing(); 
  $shaun = new Kambing();
  $bitzer = new Anjing();
  
  $suara_hewan = [$tom, $shaun, $bitzer];
  
  foreach($suara_hewan as $hewan){
    echo '<br/>'.$hewan->bersuara();
  }