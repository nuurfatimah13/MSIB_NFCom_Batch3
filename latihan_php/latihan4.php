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
      .right {
        text-align: right;
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
      $b1 = ['kode'=>'a1', 'buah'=>'Apel', 'harga'=>25000, 'jml' => 5];
      $b2 = ['kode'=>'a2', 'buah'=>'Anggur', 'harga'=>45000, 'jml' => 4];
      $b3 = ['kode'=>'b1', 'buah'=>'Belimbing', 'harga'=>15000, 'jml' => 10];
      $b4 = ['kode'=>'b2', 'buah'=>'Bangkuang', 'harga'=>10000, 'jml' => 8];
      $b5 = ['kode'=>'c1', 'buah'=>'Cerry', 'harga'=>35000, 'jml' => 12];
      $b6 = ['kode'=>'c2', 'buah'=>'Lecy', 'harga'=>50000, 'jml' => 15];
      
      $arr_judul = ['No', 'Kode', 'Nama Buah', 'Harga/Kg', 'Jumlah Beli', 'Harga Kotor', 'Diskon', 'Harga '];
      //array associative
      $buah2an = [$b1, $b2, $b3, $b4, $b5, $b6];
      //aggregate function in array
      $jumlah_transaksi = count($buah2an);
      $jml_kg = array_column($buah2an, 'jml');
      $total_kg = array_sum($jml_kg);
      $max_kg = max($jml_kg);
      $min_kg = min($jml_kg);
      $rata2 = $total_kg / $jumlah_transaksi;
      
      //keterangan
      $keterangan = [
        'Jumlah Transaksi'=>$jumlah_transaksi, 
        'Total Kg'=>$total_kg, 
        'Jml Kg Tertinggi'=>$max_kg, 
        'Jml Kg Terendah'=>$min_kg, 
        'Rata-rata'=>$rata2
        ];
    ?>
    
    <div class="card">
      <div class="card-header">
        DAFTAR HARGA BUAH
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
              foreach ($buah2an as $buah) { 
              //cari harga kotor
              $bruto = $buah['harga'] * $buah['jml'];
              //diskon
              $diskon = ($buah['buah'] == 'Anggur' && $buah['jml'] >= 10) ? 0.2 : 0.1;
              $hrg_diskon = $diskon * $bruto;
              //harga bayar
              $netto = $bruto - $hrg_diskon;
              ?>
              <tr>
                <td><?= $no ?></td>
                <td><?= $buah['kode'] ?></td>
                <td><?= $buah['buah'] ?></td>
                <td class="right"><?= 'Rp. '. number_format($buah['harga'], 2, ',', '.'); ?></td>
                <td><?= $buah['jml'] ?></td>
                <td class="right"><?= 'Rp. '. number_format($bruto, 2, ',', '.'); ?></td>
                <td class="right"><?= 'Rp. '. number_format($hrg_diskon, 2, ',', '.'); ?></td>
                <td class="right"><?= 'Rp. '. number_format($netto, 2, ',', '.'); ?></td>
              </tr>
              <?php $no++; } ?>
            </tbody>
            <tfoot>
              <?php foreach ($keterangan as $ket => $hasil) { ?>
              <tr>
                <th colspan="7"><?= $ket ?></th>
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