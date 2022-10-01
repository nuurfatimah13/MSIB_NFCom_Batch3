<?php
  require 'Pegawai.php';
  
  //ciptakan object
  $rai = new Pegawai('1105022', 'Raihan Fadhlurrahman', 'Manager', 'Islam', 'Menikah');
  $han3 = new Pegawai('1105037', 'Fatchan Muhammad Hakim', 'Asisten Manager', 'Islam', 'Belum Menikah');
  $rain7 = new Pegawai('1105019', 'Rainandra Sanjaya', 'Kepala Bagian', 'Buddha', 'Menikah');
  $andi3 = new Pegawai('1105012', 'Al Faturrahman', 'Staff', 'Islam', 'Belum Menikah');
  $ins37 = new Pegawai('1105030', 'Indra Mahendra', 'Asisten Manager', 'Kristen Protestan', 'Belum Menikah');
  
  //panggil fungsi
  echo '<h3 align="center">'.Pegawai::PT.'</h3><br />';
  $rai->mencetak();
  $han3->mencetak();
  $rain7->mencetak();
  $andi3->mencetak();
  $ins37->mencetak();
  echo 'Jumlah Pegawai : '.Pegawai::$jml.' orang';
  
?>