<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"/>
    <style>
      .card {
        margin: 2rem;
      }
      .card-header {
        background-color: #5cf4f8;
        font-size: 1.3rem;
        font-weight: bold;
      }
      table {
        border: 1px solid black;
        width: 100%;
      }
      tr, th, td {
        border: 1px solid black;
      }
      th {
        text-align: center;
      }
      .center {
        text-align: center;
      }
      /* responsive */
      @media screen and (max-width: 400px) {
        .card-header {
          background-color: #fdc758;
          font-size: 0.5rem;
          font-weight: bold;
          text-align: center;
        }
        .scroll {
          display: block;
          width: 100%;
          overflow: scroll;
        }
      }
      @media screen and (min-width: 401px) and (max-width: 768px) {
        .card-header {
          background-color: #f8562e;
          font-size: 0.5rem;
          text-align: center;
        }
      }
    </style>
  </head>
  <body>
    <?php
      //array scalar
      $m1 = ['nim' => 110220212, 'nama' => 'Rani Eka Sari', 'nilai' => 59];
      $m2 = ['nim' => 110220157, 'nama' => 'Rehan Putra', 'nilai' => 78];
      $m3 = ['nim' => 110220102, 'nama' => 'Kelvin Genandra', 'nilai' => 67];
      $m4 = ['nim' => 110220003, 'nama' => 'Bagas Saanjaya Putra', 'nilai' => 90];
      $m5 = ['nim' => 110220135, 'nama' => 'Ranti Kumala', 'nilai' => 88];
      $m6 = ['nim' => 110220234, 'nama' => 'Umar Hidayatullah', 'nilai' => 96];
      $m7 = ['nim' => 110220016, 'nama' => 'Rakha Syahputra', 'nilai' => 28];
      $m8 = ['nim' => 110220243, 'nama' => 'Syaikhu Abdurrahman', 'nilai' => 98];
      $m9 = ['nim' => 110220008, 'nama' => 'Ahmad Fauzi', 'nilai' => 85];
      $m10 = ['nim' =>  110220236, 'nama' => 'Fahma Putri', 'nilai' => 74];
      
      $arr_judul = ['No', 'NIM', 'Nama Mahasiswa', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
      //array associative
      $mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];
      //aggregate function in array
      $jumlah_mahasiswa = count($mahasiswa);
      $jml_nilai = array_column($mahasiswa, 'nilai');
      $total_nilai = array_sum($jml_nilai);
      $max_nilai = max($jml_nilai);
      $min_nilai = min($jml_nilai);
      $rata2 = $total_nilai / $jumlah_mahasiswa;
      
      //keterangan
      $keterangan = [
        'Jumlah Mahasiswa'=>$jumlah_mahasiswa, 
        'Nilai Tertinggi'=>$max_nilai, 
        'Nilai Terendah'=>$min_nilai, 
        'Rata-rata'=>$rata2
        ];
    ?>
    
    <div class="card">
      <div class="card-header">
        DAFTAR NILAI MAHASISWA
      </div>
      <div class="card-body">
        <p class="card-text">
          <table class="scroll" cellpadding="10" cellspacing="0">
            <thead>
              <tr bgcolor="cyan">
                <?php foreach ($arr_judul as $jdl) { ?>
                <th><?= $jdl ?></th>
                <?php } ?>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach ($mahasiswa as $m) { 
              //keterangan
              $ket = ($m['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';
              
              //grade
              if($m['nilai'] >= 80 && $m['nilai'] <= 100) $grade = 'A';
              else if($m['nilai'] >= 75 && $m['nilai'] < 80) $grade = 'B';
              else if($m['nilai'] >= 60 && $m['nilai'] < 75) $grade = 'C';
              else if($m['nilai'] >= 30 && $m['nilai'] < 60) $grade = 'D';
              else if($m['nilai'] >= 0 && $m['nilai'] < 30) $grade = 'E';
              else $grade = '';
              
              //predikat
              switch($grade){
                case 'A': $predikat = 'Memuaskan'; break;
                case 'B': $predikat = 'Baik'; break;
                case 'C': $predikat = 'Cukup'; break;
                case 'D': $predikat = 'Kurang Baik'; break;
                case 'E': $predikat = 'Buruk'; break;
                default: $predikat = '';
              }
              ?>
              
              <tr>
                <th><?= $no ?></th>
                <td class="center"><?= $m['nim'] ?></td>
                <td><?= $m['nama'] ?></td>
                <td class="center"><?= $m['nilai'] ?></td>
                <td><?= $ket ?></td>
                <td class="center"><?= $grade ?></td>
                <td><?= $predikat ?></td>
              </tr>
              <?php $no++; } ?>
            </tbody>
            <tfoot>
              <?php foreach ($keterangan as $keter => $hasil) { ?>
              <tr>
                <th colspan="6"><?= $keter ?></th>
                <th><?= $hasil ?></th>
              </tr>
              <?php } ?>
            </tfoot>
          </table>
        </p>
      </div>
    </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>