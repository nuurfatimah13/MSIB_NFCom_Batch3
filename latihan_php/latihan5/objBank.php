<?php
  require 'Bank.php';
  
  //ciptakan object
  $rai = new Bank('022', 'Raihan Fadhlurrahman', 3000000);
  $han3 = new Bank('037', 'Fatchan Muhammad Hakim', 4500000);
  $rain7 = new Bank('019', 'Rainandra Nur Hakim', 3000000);
  $andi3 = new Bank('012', 'Andika Faturrahman', 9500000);
  $ins37 = new Bank('030', 'Indra Nur Alifian', 3000000);
  
  //panggil fungsi
  $rai->menabung(700000);
  $han3->menabung(500000);
  
  $rain7->menarik(300000);
  $andi3->menarik(2000000);
  $han3->menarik(1500000);
  
  echo '<h3 align="center">'.Bank::BANK.'</h3><br />';
  $rai->mencetak();
  $han3->mencetak();
  $rain7->mencetak();
  $andi3->mencetak();
  $ins37->mencetak();
  echo 'Jumlah Nasabah : '.Bank::$jml.' orang';
  
?>